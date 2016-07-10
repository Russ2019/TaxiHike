
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/jquery.mobile.squareui.css" />
  <script src="js/jquery.min.js"></script>
  <script src="js/jqm.min.js"></script>
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
        <div data-role="collapsible" data-collapsed-icon="flat-time" data-expanded-icon="flat-cross" data-collapsed="false">
          <h3>Section 1</h3>
          <p>I'm the collapsible content for section 1</p>
        </div>
        <div data-role="collapsible" data-collapsed-icon="flat-calendar" data-expanded-icon="flat-cross">
          <h3>Section 2</h3>
          <p>I'm the collapsible content for section 2</p>
        </div>
        <div data-role="collapsible" data-collapsed-icon="flat-settings" data-expanded-icon="flat-cross">
          <h3>Section 3</h3>
          <p>I'm the collapsible content for section 3</p>
        </div>
      </div>

      <script
      src="http://maps.googleapis.com/maps/api/js">
      </script>
      
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


      <div data-role="fieldcontain">
        <input type="range" name="slider" value="50" min="0" max="100" data-highlight="true" />
      </div>
    </div>
  </div>


  <div id="highlight"> </div>
</body>
</html>
