
<!DOCTYPE html> 
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<title>Single page template</title> 
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.css" />
	<script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.js"></script>
	<style>
		/*
		 * Card component
		 */

		.profile-img-card {
			width: 156px !important;
			height: 156px !important;
			margin: 0 auto 10px !important;
			margin-top: 20px !important;
			display: block !important;
			-moz-border-radius: 50% !important;
			-webkit-border-radius: 50% !important;
			border-radius: 50% !important;
		}
	</style>
</head> 

<body> 

<div data-role="page">

	<div data-role="header">
		<a href="" data-rel="back">< Tilbake</a>
		<h1>T U R T I L B U D<br>(nær deg)</h1>
	</div><!-- /header -->

	<div data-role="content">	
                <center>
		<img id="profile-img" class="profile-img-card" src="avatar_2x.png"/>
                </center>
	</div><!-- /content -->
	
	<div data-role="footer" data-position="fixed">
		<h1>Til: Bekkestua<br>Pris: 400,-</h1>
	</div><!-- /footer -->
	
</div><!-- /page -->

</body>
</html>
