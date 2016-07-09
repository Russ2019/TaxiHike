
<!DOCTYPE html> 
<html> 
    <head> 
		<title>Page Title</title> 
        <meta name="viewport" content="width=device-width, initial-scale=1"/>  
        <link rel="stylesheet" href="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.css" />
        <script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
        <script src="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.js"></script>
		<style>

			/* Red button theme for JQuery Mobile
			 * - Use data-theme="r" for red versions of the default JQuery Mobile Buttons.
			 ******************************************************************************************/

			.ui-btn-up-r {
				border: 1px solid #721414;
				background: #AB2525;
				font-weight: bold;
				color: #fff;
				text-shadow: 0 -1px 1px #000;
				background-image: -moz-linear-gradient(top, #C54E4E, #AB2525);
				background-image: -webkit-gradient(linear,left top,left bottom,
					color-stop(0, #C54E4E),
					color-stop(1, #AB2525));
				-ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorStr='#C54E4E', EndColorStr='#AB2525')";
			}
			.ui-btn-up-r a.ui-link-inherit {
				color: #fff;
			}
			.ui-btn-hover-r {
				border: 1px solid #6E0000;
				background: #B64B4B;
				font-weight: bold;
				color: #fff;
				text-shadow: 0 -1px 1px #000;
				background-image: -moz-linear-gradient(top, 
					#D47272, 
					#B64B4B);
				background-image: -webkit-gradient(linear,left top,left bottom,
					color-stop(0, #D47272),
					color-stop(1, #B64B4B));
				-ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorStr='#D47272', EndColorStr='#B64B4B')";
			}
			.ui-btn-hover-r a.ui-link-inherit {
				color: #fff;
			}
			.ui-btn-down-r {
				border: 1px solid #772222;
				background: #C54E4E;
				font-weight: bold;
				color: #fff;
				text-shadow: 0 -1px 1px #000;
				background-image: -moz-linear-gradient(top, #9E3939, #C54E4E);
				background-image: -webkit-gradient(linear,left top,left bottom,
					color-stop(0, #9E3939),
					color-stop(1, #C54E4E));
				-ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorStr='#9E3939', EndColorStr='#C54E4E')";
			}
			.ui-btn-down-r a.ui-link-inherit {
				color: #fff;
			}
			.ui-btn-up-r,
			.ui-btn-hover-r,
			.ui-btn-down-r {
				font-family: Helvetica, Arial, sans-serif;
				text-decoration: none;
			}

		/*
		 * Card component
		 */

		.profile-img-card {
			width: 156px;
			height: 156px;
			margin: 0 auto 10px;
			margin-top: 20px;
			display: block;
			-moz-border-radius: 50%;
			-webkit-border-radius: 50%;
			border-radius: 50%;
		}
		
		
		.ui-page { background:#9cc3c9; }
		.ui-page { background:#87b7be; }
		.ui-header { background:#009900; margin-bottom: 50px; }
		.ui-footer { background:#009900; margin-bottom: 0px; }
		input[type=button] { height:100px !important; }

	</style>
    </head>
	
    <body> 
        <div data-role="page" id="page1"> 
            <div data-role="header">
                <h1 style="font-size:22px;">T u r t i l b u d <br> (nær deg)</h1>
            </div><!-- /header -->
             
            <div data-role="content" > 
				<img id="profile-img" class="profile-img-card" src="avatar_2x.png"/>
			</div><!-- /content -->          
      
            <div data-role="footer" data-position="fixed" data-fullscreen="true">
                <h1 style="font-size:22px;">Til: Bekkestua <br>Pris: 400,-</h1>
				<div class="ui-grid-a">
					<div class="ui-block-a"><input id="sendButton" type="submit" value="JA" data-corners="false" data-theme="b" style="font-size:28px;"></div>
					<div class="ui-block-b"><input id="sendButton" type="submit" value="NEI" data-corners="false" data-theme="r" style="font-size:22px;"></div>
				</div>
            </div><!-- /footer -->
        </div><!-- /page -->				
    </body>
</html>
