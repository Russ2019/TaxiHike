
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

<style>
		/*
		 * Card component
		 */

		#profile-img {
			width: 156px !important;
			height: 156px !important;
			margin: 0 auto 10px !important;
			margin-top: 20px !important;
			display: block !important;
			-moz-border-radius: 50% !important;
			-webkit-border-radius: 50% !important;
			border-radius: 50% !important;
		}
                h1 { font-size: 24px; }
	</style>

<div data-role="page">

        <link rel="stylesheet" href="page6.css" />

	<div data-role="header">
		<a href="" data-rel="back">< Tilbake</a>
		<h1 style="font-size:16px;">T U R T I L B U D</h1>(nær deg)
	</div><!-- /header -->

	<div data-role="content">	
                <center>
		<img id="profile-img" style="" class="profile-img-card" src="avatar_2x.png"/>
                </center>
	</div><!-- /content -->
	
	<div data-role="footer" data-position="fixed">
		<h1 style="font-size: 24px;">Til: Bekkestua<br>Pris: 400,-</h1>
	</div><!-- /footer -->
	
</div><!-- /page -->

</body>
</html>
