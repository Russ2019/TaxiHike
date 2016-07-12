		function taxihike() { alert('taxi hike'); }

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
 
