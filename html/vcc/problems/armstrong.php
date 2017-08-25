<?php 
include("../redirect.php");
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="../css/style.css">
	<link rel="stylesheet" href="../css/bm.css">
	<link rel="stylesheet" href="../css/btm.css">
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
      <a class="navbar-brand" href="../vcc.php">VCC</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="../questions.php">HOME</a></li>
        <li><a href="../mysub.php">My Submissions</a></li>
        <li><a href="../rank.php">Ranks</a></li>
        <li><a href="../gs.php">Getting Started</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
	 <li><a href="#"> Welcome <?php echo $_SESSION['name']; ?></a></li>
        <li><a href="../logout.php">Logout</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<!-- Nav Bar End-->




<div class="container">
	<h2> Armstrong<span class="Apple-tab-span" style="font-size: 14px; line-height: 1.42857143; white-space: pre;">	</span></h2><div id="questiontag"><div id="question"><span class="Apple-tab-span" style="white-space:pre">	</span>&nbsp;You are given a set of numbers you need to identify the numbers and print them.</div>
		<div id="constraints">
			<h4>Constraints:</h4>
			
			<ul>
				<li> 0 &lt; T &lt; 1000</li><li>0 &lt; n&nbsp;&lt; 99999</li></ul></div><div id="sampleInput"><h4>Input:</h4><div id="input"><ul style="list-style-type: none;"><li>The First Line Of Input Contains T,Each Test case consists of a single number n</li><li></li></ul></div></div>
		<div id="sampleInput">
			<div id="sampleInput"><h4>Output:</h4><div id="input"><ul style="list-style-type: none;"><li>Print All Armstrong Numbers</li></ul></div></div><h4>Input:</h4>
			<div id="input">
			<ul style="list-style-type: none;">
				<li>2</li><li>111</li><li>153<span style="color: rgb(0, 0, 0); font-family: &#39;Helvetica Neue&#39;, Helvetica, Arial, san-serif; font-size: 13px; line-height: 16.25px;">&nbsp;</span></li><li><span style="color: rgb(0, 0, 0); font-family: &#39;Helvetica Neue&#39;, Helvetica, Arial, san-serif; font-size: 13px; line-height: 16.25px;">&nbsp;</span><br></li></ul></div></div>
		<div id="sampleOutput">
			<h4>Output:</h4>
			<div id="output">
			<ul style="list-style-type: none;">
				<li><span style="line-height: 1.42857143;">153</span><br></li><li><span style="color: rgb(0, 0, 0); font-family: &#39;Helvetica Neue&#39;, Helvetica, Arial, san-serif; font-size: 13px; line-height: 16.25px;">&nbsp;</span></li></ul>
			</div>
		</div>
	</div>
		<a href="../submit.php?qcode=armstrong">
			<button value="submit" class="btn btn-primary" id="submitcode">Submit</button>
		</a>

</div>

</body>
<script src="../js/jquery.js" ></script>
<script src="../js/work.js" ></script>
<script>
//	document.body.contentEditable='true'; 
//	document.designMode='on'; 
</script>
</html>
