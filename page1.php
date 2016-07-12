
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
		<div data-role="fieldcontain" class="ui-hide-label">
			<form>
				<label for="kode">Aktiveringskode</label>
				<input type="text" name="kode" id="kode" value="" placeholder="Kode"/>
			</form>
		</div>              
		<button onclick="init_app();">Aktiver</button>
	</div><!-- /content -->
	
	<div data-role="footer">
		<h4>Page footer</h4>
	</div><!-- /footer -->
	
</div><!-- /page -->

</body>
</html>
