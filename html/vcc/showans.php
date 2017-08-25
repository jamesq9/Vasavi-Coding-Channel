<?php 

include("redirect.php");

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
        <li ><a href="questions.php">HOME</a></li>
        <li class="active"><a href="mysub.php">My Submissions</a></li>
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
		<div id="mycont">
		<div id="editor"></div>
		
		
		<script type="text/javascript" src="ace/ace.js"></script>
		<script>
			var editor = ace.edit("editor");
	    	editor.session.setMode("ace/mode/c_cpp");
            editor.setOptions({
            	fontSize:"11pt"
            });            
		</script>

		
		<button class="btn btn-primary" onclick="goBack()">Back</button>
		<script>
		function goBack() {
    		window.history.back()
		}
</script>
	</div>
</div>
</body>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bjm.js"></script>
<script type="text/javascript">


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

	
	var x = getUrlVars();
	var sid = x['sid'];
	if(sid != undefined) 
	$.ajax({
		url: 'getans.php',
		type: 'get',
		data: {
			sid:sid 
		},
		success: function(result) {
			if(result.length<20) {
				 alert("You are not authorized to see this page");
			}
			/*//console.log(result);

			result = result.replace('>','>\n');
			do{
			temp=result;
			result = result.replace('\t','\n');
			}while(temp.localeCompare(result)!=0)
			//
			//$("#code").html($.parseJSON(result));
			*/


			editor.setValue(result);
			editor.gotoLine(1);
			//editor.Remove(1);
			editor.setReadOnly(true);
			

			//$("#code").html(result);
		},
		error: function(result) {

		}
	});

</script>

</html>

