$(document).ready(function() {

	$("#btlogin").on('click',function(e) {
		var username = $("#unl").val();
		var password = $("#upl").val();
		$.ajax({
			url: "login.php",
			data: "uname=" +username+ "&password=" + password,
			type: "post",

			success: function(result) {

				if(result.localeCompare("1") == 0 ) {
					 window.location="vcc.php"
				} else {
					$("#j").html("incorrect Password");	
				}
			},

			error: function(){

			}
		});
	});

	$("#btreg").on('click',function(e) {
		var realname = $("#una").val();
		var username = $("#unr").val();
		var password1 = $("#upr1").val();
		var password2 = $("#upr2").val();
		
		if( realname == '' || username == '' || password1 == '' || password2 == '') {
			$("#k").html('Fields Cannot be Empty');
			return;
		}

		var expr = /1602[0-9]{8}/;
		if( !expr.test(username) || username.length != 12  ) {
			$("#k").html("Invalid ID");
			return;		
		}

		if( password1.localeCompare(password2) != 0 ) {
			$("#k").html("Incorrect Password");
			return;
		} 

		

		$.ajax({
			url:"register.php",
			data: "rname=" +realname+ "&uname=" +username+ "&pass1=" +password1+ "&pass2=" +password2,
			type: "post",
			success: function(result) {
				$("#k").html(result);
				
			},

			error: function(){

			}
		});
	});


	$("#shw_login").on('click',function(e) {
		$("#register").hide();
		$("#login").show();
	});

	$("#shw_register").on('click',function(e) {
		$("#login").hide();
		$("#register").show();
	});

});