<?php
include("/redirect.php");
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>VCC</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/bm.css">
	<link rel="stylesheet" href="css/btm.css">
	<link rel="icon" href="favicon.gif">
</head>
<body>


<!-- Navigation Bar start-->
	
<nav class="navbar navbar-default navbar-static-top" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="vcc.php">VCC</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="questions.php">HOME</a></li>
        <li><a href="mysub.php">My Submissions</a></li>
        <li><a href="rank.php">Ranks</a></li>
        <li><a href="gs.php">Getting Started</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
      	<li><a href="#"> Welcome <?php echo $_SESSION['name']; ?></a></li>
        <li><a href="logout.php">Logout</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<!-- Nav Bar End-->


<div class="container">
	<form id="myform">
	<div id="answers">
		<h3>Code:</h3>
		<div class="radio">
		<label><input type="radio" id="lang" name="lang" value="C" checked="checked">C</label><br>
		<label><input type="radio" id="lang" name="lang" value="CPP">CPP</label>
		</div>
		<div id="editor"></div>
		
		
		<script type="text/javascript" src="ace/ace.js"></script>
		<script>
			var editor = ace.edit("editor");
	    	editor.session.setMode("ace/mode/c_cpp");
            editor.setOptions({
            	fontSize:"11pt"
            });            
		</script>
		<!-- <textarea name="code" id="code" cols="80" rows="18" style="resize: none;"></textarea><br> -->
		
		<p id="j" class="bg-danger " ></p>
		<input type="button" value="submit" id="submit" class="btn btn-success">
	</div>
	</form>
</div>
</body>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bjm.js"></script>

<script>
	

function getUrlVars()
{
    var vars = [], hash;
    var hashes = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');
    for(var i = 0; i < hashes.length; i++)
    {
        hash = hashes[i].split('=');
        vars.push(hash[0]);
        vars[hash[0]] = hash[1];
    }
    return vars;
}

$(document).ready(function() {
	$("#submit").on('click',function() {

		var x = getUrlVars();
		var qcode = x['qcode'];
		var lang = $('input[name=lang]:checked','#myform').val();
		var code = editor.getSession().getValue();
		console.log("from js"+code);
/*		for(var i=0;i<50;i++)
*/

		if(code.length < 30 ) {
			$("#j").html("Please Enter code");
			return;
		}

		$("#j").html("Submitting, Please wait.....");

		$.ajax({
			url:"enqueue.php",
			data:{
				qcode:qcode,
				lang:lang,
				code:code
			},
			type:"post",
			success: function(result) {
				if(result.indexOf("Please") == 0 ) {
					$("#j").html(result);
				} else {
					window.location="mysub.php"
				}
			},
			error: function() {

				}
			});	
	}); 
	
});

</script>

</html>