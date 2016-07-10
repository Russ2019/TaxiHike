<!DOCTYPE html>
<html>
<title>&nbsp;</title>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.css" />	
	<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>	
	<script src="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?sensor=true"></script>
	<script type="text/javascript" charset="utf-8" src="cordova.js"></script>
	<link rel="stylesheet" type="text/css" href="marker_pulsate.css">
		
	<style>
		#content {
		padding: 0;
		position : absolute !important;
		top : 40px !important;  
		right : 0; 
		bottom : 0px !important;  
		left : 0 !important;     
		}		
	</style>

	
    <script>
		var sampling = 0;
		var markers = [];
		var map, lastmarker;
		var mypos = null;
		var myadr = '';
		var image = new google.maps.MarkerImage(
				'bluedot.png',
				null, // size
				null, // origin
				new google.maps.Point( 8, 8 ), // anchor (move to center of marker)
				new google.maps.Size( 17, 17 ) // scaled size (required for Retina display icon)
				);
    
	
		// Create location
		function pt2location(lat, lng) {
			var loc = new google.maps.LatLng(lat, lng);
			return(loc);
			}
			
		// place marker
		function createmarker(location) {
			var marker = new google.maps.Marker({
				position: location,
				map: map,
				});
			}	

				
		function creategreenmarker(location) {
			mypos = new google.maps.Marker({
				position: location,
				icon: image,
				title: 'I might be here',				
				//icon: 'http://maps.google.com/mapfiles/ms/icons/green-dot.png', 
				map: map,
				});
			}	
			
		function createOrRelocate(location) {
			if (mypos == null) {
				creategreenmarker(location)
				}
			else {
				mypos.setPosition(location);
				}
			}	

		//--------------------------------------------------------------
		
		function initialize() {
			var mapOptions = {
				zoom: 12,
				center: new google.maps.LatLng(59.5, 10.5),
				mapTypeId: google.maps.MapTypeId.ROADMAP
				};
			map = new google.maps.Map(document.getElementById('map_canvas'), mapOptions);    
			} // initialize

		google.maps.event.addDomListener(window, 'load', initialize);
      
	</script>

	<script>
		var geocoder = new google.maps.Geocoder();

		function geocodePosition(pos) {
			geocoder.geocode({
				latLng: pos
			}, function(responses) {
				if (responses && responses.length > 0) {
					updateMarkerAddress(responses[0].formatted_address);
				} else {
					updateMarkerAddress('Cannot determine address at this location.');
				}
			});
		}
		
		function updateMarkerAddress(str) {
			//document.getElementById('address').innerHTML = str;
			myadr = str;
			$('#result').text(str);
		}
	</script>
	
	<script>
		$(document).ready(function(){
			$("#siste").click(function(){
				alert('siste');
				$( "#myPanel-r" ).panel( "close" );
			});
			$("#alle").click(function(){
				alert('alle');
				$( "#myPanel-r" ).panel( "close" );
			});
			$("#linje").click(function(){
				alert('linje');
				$( "#myPanel-r" ).panel( "close" );
			});
			$("#start").click(function(){
				if (!watchID) { startWatching(); }
				//alert('start');
				$('#result').text('tracking started!');
			});
			$("#stop").click(function(){
				if (watchID) { stopWatching(); }
				//alert('stop');
				$('#result').text('tracking stopped!');
			});
		});
	</script>

	<script>
		var watchID = null;		
		startWatching();
		
		
		// onSuccess Callback
		function onSuccess(position) {
			var element = document.getElementById('geolocation');
			var loc = pt2location(position.coords.latitude, position.coords.longitude);
			
			
			// mypos			
			//creategreenmarker(loc);
			createOrRelocate(loc);
			map.panTo(loc);
			
			// adr on footer
			geocodePosition(loc);

			
			if (sampling > 1) { 
				sampling = 0; 
				
				// logg	
				createmarker(loc);

				// adr on #page2
				element.innerHTML = '(Lat, Lng): ' + position.coords.latitude + ', ' + position.coords.longitude + '<br />' +
									'<strong>' + myadr + '</strong> <br />' +
									'<hr />' + element.innerHTML;																				
				}					
		}

		// onError Callback receives a PositionError object
		function onError(error) {
			alert('code: '    + error.code    + '\n' +
				  'message: ' + error.message + '\n');
		}
		
		function startWatching() {
			watchID = navigator.geolocation.watchPosition(onSuccess, onError, { timeout: 30000 });
		}
		
		function stopWatching() {
			navigator.geolocation.clearWatch(watchID);
		}
				
	</script>

	<script>
		function onInterval() {
			
			//alert('Interval - Every 10 secs '+sampling);
			sampling = sampling+1;
		};
		
		$(document).ready(function(){
			window.setInterval(function() {
				onInterval();
			},5000);	
		});
	</script>
	
	
</head>
	
<body>
	<div data-role="page" id="page1">
		<div data-role="panel" id="myPanel-r" data-display="overlay" data-position="right" data-theme="c">
			<ul data-role="listview" data-theme="d" data-icon="false">
				<li id="hdr" data-icon="delete" data-theme="b"><a href="#" data-rel="close">Tracking</a></li>
				<li id="siste" data-icon="check" class="ui-icon-alt" ><a href="#">Siste posisjon</a></li>
				<li id="alle" data-icon="" class="ui-icon-alt"><a href="#" >Alle posisjoner</a></li>
				<li id="linje" data-icon="home" class="ui-icon-alt"><a href="#" >Linje</a></li>
				<li id="tabell" data-icon="" class="ui-icon-alt"><a href="#page2" >Tabell</a></li>
				<li id="start" data-icon="" ><a href="" >Start tracking</a></li>
				<li id="stop" data-icon="" ><a href="" >Stopp tracking</a></li>
			</ul>
		</div><!-- /panel -->
				
			
		<div data-theme="a" data-role="header">
			<a data-rel="back" data-ajax="false" data-icon="arrow-l">Tilbake</a>
			<h3>Page Header</h3>
			<a href="#myPanel-r" class="jqm-navmenu-link" data-icon="bars" data-iconpos="notext">Navigation</a>
		</div>
		
		<div data-role="content" id="content">
			<div id="map_canvas" style="height:100%"></div>
		</div>
		
		<div data-theme="a" data-role="footer" data-position="fixed">
			<div id="result">Tracking..</div>
		</div>
	</div>

	
	<div data-role="page" id="page2">
		<div data-theme="a" data-role="header">
			<a data-rel="back" data-ajax="false" data-icon="arrow-l">Tilbake</a>
			<h3>Page Header</h3>
		</div>
		
		<div data-role="content" id="content2">
			<div id="geolocation"></div>
		</div>
		
		<div data-theme="a" data-role="footer" data-position="fixed">
			<h3>Page Footer</h3>
		</div>
	</div>	
	
</body>

</html>
