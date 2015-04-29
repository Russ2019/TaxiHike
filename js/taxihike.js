		//local_storage_clear('appid');
		var appid = localStorage.getItem('appid');
		var pgid = localStorage.getItem('pgid');
		
		// - ajax_init() or ajax_call() ?
		if(appid === null){			
			$(document).ready(function(){
				init_form_show();
				$("button").click(function(){
					//local_storage_show();
					//ajax_call('appid', 'srvc', pgid, 'uid', 'po', 'rp');
					ajax_init();				
				});
			});
		} else {
			$(document).on("pageinit",function(){
				ajax_call('appid', 'srvc', pgid, 'uid', 'po', 'rp');
			});
		}
		
		
		function ajax_call(appid, srvc, pgid, uid, po, rp) {
			$.ajax({
				  url: 'http://itorget.no/tc/wp-content/themes/tc/server/server_tc.php',
				  type: 'post',
				  data : {appid : appid, srvc: srvc, pgid : pgid, uid : uid, po : po, rp : rp},
				  dataType: 'json',
				  success: function(html) {
						handleData(html);
						},
				  error: function(result){
						alert('error');
						}
				});			
			}
			
		function ajax_init() {
			var kode = $('#kode').val();
			$.ajax({
				  url: 'http://itorget.no/tc/wp-content/themes/tc/server/server_tc.php',
				  type: 'post',
				  data : {appid : kode, srvc: 'init'},
				  dataType: 'json',
				  success: function(data) {
						initData(data);
						},
				  error: function(result){
						alert('error');
						}
				});			
			}
			
		function handleData(data) {
			//$("#content").append(html).trigger('create');
			//$("#content").html(html).trigger('create');
			$("#content").html(data).trigger('create');
			}
			
		function initData(data) {			
			//save to local storage...then show local_storage_show...

			//virker
			//var str = JSON.stringify(data);
			//alert(str);
			
			//virker
			//var objs = JSON.parse(str);
			
			if (data !== '') {
				$("#content").html('').trigger('create');
				var objs = data;
				
				$.each(objs, function(idx, obj){ 
					$.each(obj, function(key, value){
						local_storage_set(key, value);
					});
				});
				//local_storage_show();
				document.location.reload(true);
			}
			else {
				alert('Feil kode');
				$('#kode').val('');
			}
			
			}

		function local_storage_set(key, value) {	
			if(typeof(Storage) !== "undefined") {
				localStorage.setItem(key, value);
				// alternativt: localStorage.lastname = "Smith";
			} else {
				return 'error';
				// Sorry! No Web Storage support..
			}
		}
		
		function local_storage_get(key) {	
			if(typeof(Storage) !== "undefined") {
				return localStorage.getItem(key);
				//alternativt: var lastname = localStorage.lastname;
			} else {
				return 'error';
				// Sorry! No Web Storage support..
			}
		}
		
		function local_storage_clear(key) {	
			localStorage.removeItem(key);
			}
		
		
		function local_storage_show() {	
			if(typeof(Storage) !== "undefined") {
				var appid = local_storage_get('appid'); 
				var pgid  = local_storage_get('pgid');
				var uid   = local_storage_get('uid'); 
				var srvc  = local_storage_get('srvc');
				
				$("#content").html('').trigger('create');
				$("#content").append('appid : '+appid+'<br>').trigger('create');
				$("#content").append('pgid : '+pgid+'<br>').trigger('create');
				$("#content").append('uid : '+uid+'<br>').trigger('create');
				$("#content").append('srvc : '+srvc+'<br>').trigger('create');
			}
		}
		
		function init_form_show() {	
			$("#content").html('').trigger('create');
			$("#content").append('Kode:<br>').trigger('create');
			$("#content").append('<input type="text" placeholder="Kode" name="kode" id="kode" value="" data-mini="true" /><br>').trigger('create');
			$("#content").append('<button id="btn_kode" type="submit" data-theme="b" data-mini="true">OK</button>').trigger('create');
			$("#footer_h3").html('Aktiveringskode').trigger('create');
		}
		
		function local_storage_show_init() {	
			if(typeof(Storage) !== "undefined") {			
				//var fnavn = local_storage_get('fnavn'); 
				//var enavn = local_storage_get('enavn');
				
				$("#content").html('').trigger('create');
				//$("#content").append('fnavn : '+fnavn+'<br>').trigger('create');
				//$("#content").append('enavn : '+enavn+'<br>').trigger('create');
			}
		}	
	
