		document.getElementById("form").onsubmit = function(e){
			Var field Value = document.getElementByED("username").value;
			if(fieldValue == null || fieldValue == ""){
				e.preventDefault();
				alert("Please enter your username");
			}
		var formExample = document.getElementById("loginForm");
		formExample.submit();