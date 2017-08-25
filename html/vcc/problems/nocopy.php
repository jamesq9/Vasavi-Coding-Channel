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
		<h2>No Copying</h2>
	<div id="questiontag">

		<div id="question">
		Rahul is a nursery kid from a town called Byte Land, He's Teacher, Bob gets angry when some one copies during exams.<br>Today Bob is conducting a surprise Slip Test and Rahul snapped into the harsh reality he's made to face.&nbsp;</div><div id="question">Bob Gave A total of &nbsp;T Questions and Rahul needs to copy them.&nbsp;<br>
		<br>
		Why Don't you help him ??
		</div>
		<br>
		<div id="constraints">
			<h4>Constraints:</h4>
			
			<ul>
				<li> 0 &lt; T &lt; 1000</li>
			</ul>
		</div>
		<div id="questiontag"><div id="sampleInput"><h4><br></h4><h4>Input:</h4><div id="input"><ul style="list-style-type: none;"><li>The First Line of Input Contains T ,<span style="line-height: 1.42857143;">Followed by T Answers to copy</span></li><li></li></ul></div></div></div><div id="questiontag"><div id="sampleOutput"><h4>Output:</h4><div id="output"><ul style="list-style-type: none;"><li>Print each Answer Separated by a new Line.</li></ul></div></div></div><a href="http://localhost/vcc/submit.php?qcode=sub" style="background-color: rgb(255, 255, 255);"></a>
		<div id="sampleInput">
			<h4>Sample Input:</h4>
			<div id="input">
			<ul style="list-style-type: none;">
				<li>4</li>
				<li>32</li>
				<li>45</li>
				<li>94</li>
				<li>33</li>
			</ul>
			</div>
		</div>
		<br>
		<div id="sampleOutput">
			<h4>Output:</h4>
			<div id="output">
			<ul style="list-style-type: none;">
				<li>32</li>
				<li>45</li>
				<li>94</li>
				<li>33</li>
			</ul><div><br></div>

			</div>
		</div>
	</div>
		<a href="../submit.php?qcode=nocopy">
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
