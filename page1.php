<!DOCTYPE html>
<html>
<title>&nbsp;</title>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.css" />
	<script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.js"></script>
	<script type="text/javascript" charset="utf-8" src="cordova.js"></script>
	
    	<script type="text/javascript" src="js/taxihike.js"></script>
	<style>
		.mesgBox { 
			border-radius: 8px;
			border: 1px solid black;
			padding: 20px; 
			}
	</style>
	<script>
		$(document).bind("mobileinit", function(){
		  //To override default settings, bind to mobileinit.
		  $.mobile.defaultPageTransition = "none";
		});	
	</script>
	<script>
		$( document ).on( "pageinit", "#page3", function( event ) {
		  //alert( "page3 init" );
		  showLocalParams();
		});	
	</script>
	
	</script>
	<script>
	function showLocalParams() {
		var appid = local_var('appid');
		var pgid = local_var('pgid');
		var uid = local_var('uid');
		var srvc = local_var('srvc');
		//var navn = local_var('navn');
		var navn = 'Taxi';
		//var mobnr = local_var('mobnr');
		var mobnr = '93470093';
		//var taxisentral = local_var('taxisentral');
		var taxisentral = 'Asker & Bærum Taxi';
		//var loyvenr = local_var('loyvenr');
		var loyvenr = 'C-93';
		//var status = local_var('status');
		var status = 'Aktiv';
		
        $("#localparams").empty();
        
        //$("#localparams").append(addGridRow("a", boldLabel(colrText("red", "col a"))));          
        //$("#localparams").append(addGridRow("b", "col b"));

        $("#localparams").append(addGridRow("a", boldLabel("appid")));          
        $("#localparams").append(addGridRow("b", appid));
		
        $("#localparams").append(addGridRow("a", boldLabel("pgid")));          
        $("#localparams").append(addGridRow("b", pgid));

        $("#localparams").append(addGridRow("a", boldLabel("srvc")));          
        $("#localparams").append(addGridRow("b", srvc));

        $("#localparams").append(addGridRow("a", boldLabel("uid")));          
        $("#localparams").append(addGridRow("b", uid));

        $("#localparams").append(addGridRow("a", boldLabel("Taxisentral")));          
        $("#localparams").append(addGridRow("b", taxisentral));

        $("#localparams").append(addGridRow("a", boldLabel("Løyvenr")));          
        $("#localparams").append(addGridRow("b", loyvenr));

        $("#localparams").append(addGridRow("a", boldLabel("Navn")));          
        $("#localparams").append(addGridRow("b", navn));

        $("#localparams").append(addGridRow("a", boldLabel("Mobnr")));          
        $("#localparams").append(addGridRow("b", mobnr));

        $("#localparams").append(addGridRow("a", boldLabel("Status")));          
        $("#localparams").append(addGridRow("b", status));
    }	
	</script>
	
</head>
	
<body>

<!---------------------------------- Main Page --------------------------------------->
<div data-role="page" id="main">
    <div data-role="header" data-position="fixed">
        <h1 id="appTitle">TaxiHike 1.0.3</h1>
    </div>
    <div data-role="content">   
		<ul data-role="listview" data-inset="true" data-filter="true">
			<li><a href="#page2" >Reset</a></li>
			<li><a href="#page3" >Parametere</a></li>
		</ul>
    </div>
</div>

<!---------------------------------- Notification ------------------------------------>
<div data-role="page" id="page2">
    <div data-role="header">
	<a data-rel="back" data-icon="arrow-l">Tilbake</a>
        <h1>Reset App</h1>
    </div>
	<div data-role="content">
		<div id="addContactProperties"></div>
		<div data-role="fieldcontain" class="ui-hide-label">
			<form>
			</form>
		</div>              
		<button onclick="reset_app();">Reset</button>
	</div>
</div>

<div data-role="page" id="page3">
    <div data-role="header">
		<a data-rel="back" data-icon="arrow-l">Tilbake</a>
        <h1>Parametere</h1>
    </div>
	<div data-role="content">		
        <div id="localparams" class="mesgBox ui-grid-a">
			<!-- dynamic content here -->content...
		</div>		
	</div>
</div>
	
</body>	
</html>
