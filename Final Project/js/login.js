var hasError=false;
			function get(id){
				return document.getElementById(id);
			}
			
		function validate(){
				
				refresh();
				
				if(get("uname").value == ""){
					hasError = true;
					get("err_uname").innerHTML = "*Username Required (javaScript)";
				}
				
				
				if(get("pass").value == ""){
					hasError = true;
					get("err_pass").innerHTML = "*Password Required (javaScript)";
				}
					return !hasError;
			}
		function refresh(){
				hasError=false;
				get("err_uname").innerHTML = "";
				get("err_pass").innerHTML = "";
			}
	