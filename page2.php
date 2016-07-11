<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        
	<link rel="stylesheet" type="text/css" href="http://ququplay.github.io/jquery-mobile-square-ui-theme/css/jquery.mobile.squareui.css" />
	<script src="http://ququplay.github.io/jquery-mobile-square-ui-theme/js/jquery.min.js"></script>
	<script src="http://ququplay.github.io/jquery-mobile-square-ui-theme/js/jqm.min.js"></script>
	<script type="text/javascript" charset="utf-8" src="cordova.js"></script> 
	<script>
		$(document).ready(function(){
			$('#my-collapsible').collapsible( "collapse" );
			$('#my-collapsible').bind('expand', function () {
				alert('Expanded');
			}).bind('collapse', function () {
				alert('Collapsed');
			});
		});
	</script>
	
</head>

<body>
  <div data-role="page">
    <div data-role="header">
      <a data-iconpos="notext" data-role="button" data-icon="home" title="Home">Home</a>
      <h1>A</h1>
      <a data-iconpos="notext" data-role="button" data-icon="flat-menu"></a>
    </div>

    <div data-role="content" role="main">
      <div data-role="collapsible-set" data-theme="b" data-content-theme="b">
        <div id="my-collapsible" data-role="collapsible" data-collapsed-icon="flat-time" data-expanded-icon="flat-cross" data-collapsed="false">
          <h3>Section 1</h3>
          <p>I'm the collapsible content for section 1</p>
        </div>
      </div>

      <div id="googleMap" style="width:100%;height:380px;"></div>

      <div data-role="fieldcontain">
        <input type="range" name="slider" value="50" min="0" max="100" data-highlight="true" />
      </div>
    </div>
  </div>
  
  <div id="highlight"> </div>

  <script src="https://maps.googleapis.com/maps/api/js?sensor=false&v=3&libraries=geometry"></script>
  <script>
  function initialize() {
    var mapProp = {
      center:new google.maps.LatLng(51.508742,-0.120850),
      zoom:5,
      mapTypeId:google.maps.MapTypeId.ROADMAP
    };
    var map=new google.maps.Map(document.getElementById("googleMap"), mapProp);
  }
  google.maps.event.addDomListener(window, 'load', initialize);
  </script>
  
  
</body>
</html>
