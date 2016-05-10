    //*********************************************************    
    // Event Capabilities
    //*********************************************************
    function updateEventStatus(status) {
        $("#eventStatus").empty();
        $("#eventStatus").append(status).trigger("create");
    }

    function batteryStatusEvt(e) {
        alert(e.type + " event created." + "\nBattery Level: " + e.level + "\nCharger plugin? " + e.isPlugged);
    }
    
    function menuEvt(e) {
        alert(e.type + " event created.");
    }

    function toggleBatteryStatusEvent() {
        if ( $("#flip-batteryStatus option:selected").val() == "on" ) {
            updateEventStatus("Enable battery status event");
            window.addEventListener("batterystatus", batteryStatusEvt, false);          
        } else {
            updateEventStatus("Disable battery status event");
            window.removeEventListener("batterystatus", batteryStatusEvt, false);
        }
    }

    function toggleMenuEvent() {
        if ( $("#flip-menu option:selected").val() == "on" ) {
            updateEventStatus("Enable menu button event");
            document.addEventListener("menubutton", menuEvt, false);
        } else {
            updateEventStatus("Disable menu button event");
            document.removeEventListener("menubutton", menuEvt, false);
        }
    }
