
<!DOCTYPE html> 
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<title>Single page template</title> 
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.css" />
	<script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.js"></script>
</head> 

<body> 

<div data-role="page">

	<div data-role="header">
		<a href="" data-rel="back">< Tilbake</a>
		<h1>Page header</h1>
	</div><!-- /header -->

	<div data-role="content">	
		<script src="http://maps.googleapis.com/maps/api/js"> </script>
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
		<div id="googleMap" style="width:500px;height:380px;"></div>
	</div><!-- /content -->
	
	<div data-role="footer">
		<h4>Page footer</h4>
	</div><!-- /footer -->
	
</div><!-- /page -->

</body>
</html>
