		//*********************************************************    
		// Notification Capabilities
		//*********************************************************
		function updateNotificationStatus(status) {
			$("#notificationStatus").empty();
			$("#notificationStatus").append(status).trigger("create");
		}

		function getNotificationReady() {
			updateNotificationStatus("");   
		}
		
		function alertCB() {
			updateNotificationStatus("Alert is picked");
		}
		
		function confirmCB(button) {
			var btnText;
			
			switch (button) {
				case 1:
					btnText = "Green";
					break;
				case 2:
					btnText = "Red";
					break;
			}

			updateNotificationStatus("Confirm: You selected the \"" + btnText +  "\" button");
			$("#colorBox").css({"background-color": btnText})
			$("#notificationConfirm").popup({positionTo: "window"});
			$("#notificationConfirm").popup("open");        
		}
		
		function alertNotification() {
			navigator.notification.alert(
				  'Alert Notification'
				, alertCB
				, 'Title | Alert'
				, 'Done'
			);
		}
		function confirmNotification() {
			navigator.notification.confirm(
				  'Which color do you like most?'
				, confirmCB
				, 'Title | Confirm'
				, 'Green,Red'
			);  
		}
		function beepNotification() {
			navigator.notification.beep(3); 
			updateNotificationStatus("Beep is picked");
		}
		function vibrateNotification() {
			navigator.notification.vibrate(2000);
			updateNotificationStatus("Vibrate is picked");
		}
