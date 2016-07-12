		function taxihike() { 
			var url = 'http://www.itorget.no/tc/wp-content/tc/server/';
			//var url = local_var('appid');
			//local_storage_set('url', url);
			var url_th = local_var('url') + 'page5.php';
			
			//alert('taxi hike'); 
			alert(url_th); 
			
			}

//-------------------------------- Local storage ---------------------------------------			
		function local_var(key) {
			return local_storage_get(key);
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
 
