<html>

	<head>
	<script>
	var hasError=false;
			function get(id){
				return document.getElementById(id);
			}
			
		function validate(){
				
				refresh();
				if(get("name").value == ""){
					hasError = true;
					get("err_name").innerHTML = "*Name Required (javaScript)";
				}
				else if(get("name").value.length <= 2){
					hasError = true;
					get("err_name").innerHTML = "*Name must be > 2 characters";
				}
				
				if(get("uname").value == ""){
					hasError = true;
					get("err_uname").innerHTML = "*Username Required (javaScript)";
				}
				
				if(get("email").value == ""){
					hasError = true;
					get("err_email").innerHTML = "*Email Required (javaScript)";
				}
				
				if(get("pass").value == ""){
					hasError = true;
					get("err_pass").innerHTML = "*Password Required (javaScript)";
				}
					return !hasError;
			}
		function refresh(){
				hasError=false;
				get("err_name").innerHTML="";
				get("err_uname").innerHTML = "";
				get("err_email").innerHTML = "";
				get("err_pass").innerHTML = "";
			}
	
				
	
		</script>
	</head>
	<body>
	