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
	<h2>Reverse</h2>
	<div id="questiontag">

		<div id="question"><span class="Apple-tab-span" style="white-space:pre">	</span>GIven an number reverse the number based on the condition</div>
		<div id="constraints">
			<h4>Constraints:</h4><ul><li>0 &lt; T &lt;= 5</li><li>condition={0,1}</li><li>0 &lt;= n &lt;=1000</li></ul></div><div id="sampleInput"><h4>Input:</h4><div id="input"><ul style="list-style-type: none;"><li>The First Line Of Input Contains T test cases.</li><li>Each test case consists of a number and condition.</li><li>If the condition is '0' print the number as it is or if</li><li>the condition is '1' print the reversed number.</li><li></li></ul></div></div>
		<div id="sampleInput">
			<div id="sampleInput"><h4>Output:</h4><div id="input"><ul style="list-style-type: none;"><li>Print The result based on the condition</li></ul></div></div><h4>Input:</h4>
			<div id="input">
			<ul style="list-style-type: none;">
				<li>2</li><li>999 0</li><li>123 1</li></ul></div></div>
		<div id="sampleOutput">
			<h4>Output:</h4>
			<div id="output">
			<ul style="list-style-type: none;">
				<li>999</li><li>321</li>
			</ul><div><h4 style="font-family: &#39;Helvetica Neue&#39;, Helvetica, Arial, sans-serif; color: rgb(51, 51, 51);">Explanation:</h4></div><div>&nbsp;<span class="Apple-tab-span" style="white-space:pre">	</span>Here There are 2 queries.First Query (999 40) says print the same</div><div><span class="Apple-tab-span" style="line-height: 1.42857143; white-space: pre;">	</span><span style="line-height: 1.42857143;">Second Query (123,1) says reverse the number</span></div><div><span style="line-height: 1.42857143;"><span class="Apple-tab-span" style="white-space:pre">	</span></span></div>
			</div>
		</div>
	</div>
		<a href="../submit.php?qcode=reverse">
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
