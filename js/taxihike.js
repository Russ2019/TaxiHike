/*****
//-------------------------------- Local storage ---------------------------------------			
		function local_var(key) 
		function local_storage_set(key, value) 	
		function local_storage_get(key) 	
		function local_storage_clear(key) 	
		function local_storage_show()	
		function local_storage_show_init()			
//------------------------------------ Helpers ---------------------------------------			
		function containsStr(haystack, needle) 
		function is_external(href) 
		function href_redirect(href) 
		function inject_css(href) {
		function inject_js(src) {
//-------------------------------- Handle response -----------------------------------			
		function changeBtn(id, href, txt, icon) {
		function changeTitles(header, footer) {
		function handleData(data) {
		function initData(data) {					
//------------------------------------ Ajax -----------------------------------			
		function ajax_init() {
		function ajax_call(appid, srvc, pgid, uid, po, rp) {
//-----------------------------------------------------------------------------			
*****/
		function taxihike() { alert('taxi hike'); }
					
//-------------------------------- Local storage ---------------------------------------			
		function local_var(key) {
			return local_storage_get(key);
			}
			
		function reset_app() {
			local_storage_clear('appid');
			window.location.href = "index.html";
			}
			
		function init_app() {
			ajax_init();
			}		

		function local_storage_set(key, value) {	
			if(typeof(Storage) !== "undefined") {
				localStorage.setItem(key, value);
				// alternativt: localStorage.lastname = "Smith";
			} else {
				return 'error local_storage_set';
				// Sorry! No Web Storage support..
			}
		}
		
		function local_storage_get(key) {	
			if(typeof(Storage) !== "undefined") {
				return localStorage.getItem(key);
				//alternativt: var lastname = localStorage.lastname;
			} else {
				return 'error local storage get';
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
			
		function local_storage_show_init() {	
			if(typeof(Storage) !== "undefined") {			
				$("#content").html('').trigger('create');
				}
			}	
//----------------------------------- Nav buttons ------------------------------------			
		var navIcon; //global
		var navHref; //global
		
		function addNavBtn(navId, btnId, btnHref, btnTxt, btnIcon) {
			if (btnTxt) {
				navIcon = btnIcon;
				navHref = btnHref;
				//alert(btnTxt);
				navbarHandler.addNewNavBarElement(navId, btnId, btnTxt);
				}
			}
			
		var navbarHandler = {
			addNewNavBarElement:function(navBarID, newElementID, newElementText) {
				var navbar = $("#" + navBarID);
				
				var li = $("<li></li>");        
				var a  = $("<a></a>");
				a.attr("id", newElementID).text(newElementText);
				a.attr("href", navHref);
				if (navIcon) {
					a.attr("data-icon", navIcon);
					}
				a.attr("data-ajax", "false");
				li.append(a);

				navbar = navbarHandler.clearNavBarStyle(navbar);

				navbar.navbar("destroy");
				li.appendTo($("#" + navBarID + " ul"));
				navbar.navbar();
			},
			clearNavBarStyle:function(navbar){
				navbar.find("*").andSelf().each(function(){
					$(this).removeClass(function(i, cn){
						var matches = cn.match (/ui-[\w\-]+/g) || [];
						return (matches.join (' '));
					});
					if ($(this).attr("class") == "") {
						$(this).removeAttr("class");
					}
				});
				return navbar;   
			}
		}	
			
//------------------------------------ Helpers ---------------------------------------			
		function loadPage(pageid) {
			ajax_call(appid, 'srvc', pageid, 'uid', 'po', 'rp');
			}
			
		function boldLabel(str) {
			return '<b>' +str+ '</b>';
			}
			
		function textFormat(a) {
			return String(a);
			}
			
		function colrText(colr, txt) {
			return '<span style="color: '+colr+'">'+txt+'</span>';
			}
			
		function addGridRow(col, str) {
			/*
			<div class="ui-grid-a">
				<div class="ui-block-a">text inside a</div>
				<div class="ui-block-b">text inside b</div>
			</div><!-- /grid-a -->
			*/			
			return('<div class="ui-block-'+col+'">'+str+'</div>');
			}		
			
		function containsStr(haystack, needle) {
			return (haystack).indexOf(needle) !== -1;
			}

			
		function is_external(href) {
			var ext = containsStr(href, "http://") || containsStr(href, "https://");
			return(ext);
			}
			
		function href_redirect(href) {
			//alert('inside redirect');
			var ext = is_external(href);
			
			if (ext) { 
				//alert('external link: '+href); 
				window.location.href = href;
				} 
			else { 
				//alert('href_redirect'+ href);
				ajax_call(
					//appid, 
					local_var('appid'),
					'srvc', 
					href, 
					'uid', 
					'po', 
					'rp'
					);	
				}            
			}	
			
		function inject_css(href) {
			var x = document.createElement("link");
			x.setAttribute("rel", "stylesheet");
			x.setAttribute("type", "text/css");
			x.setAttribute("href", href);
			document.head.appendChild(x);
			}
			
		function inject_js(src) {
			var script = document.createElement("script");
			script.type = "text/javascript";
			script.src = src;
			document.body.appendChild(script);
			}			
			
//-------------------------------- Handle response -----------------------------------			
		function changeBtn(id, href, txt, icon) {
			//LES DENNE!!!
			// http://stackoverflow.com/questions/9491879/how-to-refresh-a-button-in-a-header-with-jquerymobile		
			// $(id).buttonMarkup({ icon: "star", text: "thomas" });

			//change href	
			if (href !== '')
				{ $(id).attr("href", href);	}
				
			//change icon
			if (icon !== '')
				{ $(id).buttonMarkup({ icon: icon}); }

			//change txt	
			if (txt !== '')
				{ $(id).find('.ui-btn-text').text(txt);	$(id).show(); }
			else	
				{ $(id).hide(); }
			}	
			
		function changeTitles(header, footer) {
			//$("#header_h3").html(header); 
			//$("#footer_h3").html(footer); 
			$("#header_h1").html(header); 
			
			if (footer) { $("#footer_h1").html(footer); }
			else { $("#footer_h1").hide(); } 
			}

		function handleData(data) {
			
			content = data.content;
			$("#content").html(content).trigger('create');
									
			changeBtn("#ul", data.ul_lnk, data.ul_txt, data.ul_icon);
			changeBtn("#ur", data.ur_lnk, data.ur_txt, data.ur_icon);
			changeBtn("#ll", data.ll_lnk, data.ll_txt, data.ll_icon);
			changeBtn("#lr", data.lr_lnk, data.lr_txt, data.lr_icon);
			changeTitles(data.header_txt, data.footer_txt);

			$("#navbar ul").html('').trigger('create');
			//addNavBtn(navId, btnId, btnHref, btnTxt, btnIcon) {
			//addNavBtn('navbar', 'l1', '201', 'txt', 'minus');
			
			//alert('ajax');
			//alert(data.nav1_txt);
			//alert(data.nav2_txt);

			addNavBtn('navbar', 'l1', data.nav1_lnk, data.nav1_txt, data.nav1_icon);
			addNavBtn('navbar', 'l2', data.nav2_lnk, data.nav2_txt, data.nav2_icon);
			addNavBtn('navbar', 'l3', data.nav3_lnk, data.nav3_txt, data.nav3_icon);
			addNavBtn('navbar', 'l4', data.nav4_lnk, data.nav4_txt, data.nav4_icon);
			addNavBtn('navbar', 'l5', data.nav5_lnk, data.nav5_txt, data.nav5_icon);
			
			footer = data.footer;
			footer_txt = data.footer_txt;
			if (footer) {
			//if (false) {
				if (!footer_txt) {
					//sjekk om footer_txt er i bruk -> ikke blank ut
					$("#footer").html('').trigger('create'); 
					}
				$("#footer").append(footer).trigger('create');			
				$("#navbar").navbar();	//for at navbar skal bli jquery
				}

			
			
			//add event handler on ul -> li
			$('ul').on('click','li', function(e){
				e.preventDefault();
				var href = $(this).find("a").attr("href");
				href_redirect(href);				
				});
				
			// css inject
			var href = data.inject_css;
			if (href) { 
				//alert('css injection');
				inject_css(href);
				}
				
			// js inject
			var href = data.inject_js;
			if (href) { 
				//alert('css injection');
				inject_js(href);
				}
			
	
			 							
			}
						
		function initData(data) {			
			//save to local storage...then show local_storage_show...
			if (data !== '') {
				$("#content").html('').trigger('create');
				var objs = data;
				
				$.each(objs, function(idx, obj){ 
					$.each(obj, function(key, value){
						local_storage_set(key, value);
					});
				});
				document.location.reload(true);				
				}
			else {
				alert('Feil kode');
				$('#kode').val('');
				}			
			}
			
//------------------------------------ Ajax -----------------------------------			
		function ajax_call(appid, srvc, pgid, uid, po, rp) {
			//alert('inside ajax');
			$.ajax({
				  url: 'http://itorget.no/tc/wp-content/themes/th/server/server_tc.php',
				  type: 'post',
				  data : {appid : appid, srvc: srvc, pgid : pgid, uid : uid, po : po, rp : rp},
				  dataType: 'json',
				  success: function(html) {
						//alert('ajax success');
						handleData(html);
						},
				  error: function(result){
						//alert('error ajax_call');
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
						alert('error ajax_init');
						}
				});			
			}
			
	
