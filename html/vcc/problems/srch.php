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
	<h2>Search&nbsp;</h2>
	<div id="questiontag">

		<div id="question">Given an Array Of size N followed by T queries each consisting of a number check it that number is present in the array. &nbsp;<br><br></div>
		<div id="constraints">
			<h4>Constraints:</h4>
			
			<ul>
				<li> 0 &lt; T &lt; 10</li><li>0 &lt; N &lt; 100</li><li>0 &lt; [i] &lt; 1000</li>
			</ul>
		</div>
		<div id="questiontag"><br></div><div id="questiontag"><div id="sampleInput" style="font-size: 14.4444446563721px; line-height: 22.2222232818604px;"><h4>Input Format:</h4><div id="input"><ul style="list-style-type: none;"><li>The First Line of Input contains an Integer N the size of array.</li><li>Followed by N numbers separated by a space in the next line.</li><li>Followed by T the number of queries.</li><li><span class="Apple-tab-span" style="white-space:pre">	</span>The next T lines contains a single number.&nbsp;</li></ul></div></div></div>
		<div id="sampleInput">
			<h4 style="font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; color: rgb(51, 51, 51);">Output Format:</h4><h4><div id="input" style="line-height: 22.2222232818604px; font-size: 14.4444446563721px;"><ul style="list-style-type: none;"><li><span style="font-size: 14.4444446563721px; line-height: 22.2222232818604px; color: inherit; font-family: inherit;">For Each Query Print 1 if the number is in the array else 0 followed by A NEW LINE&nbsp;</span><br></li></ul></div></h4><h4>Sample Input:</h4>
			<div id="input">
			<ul style="list-style-type: none;">
				<li>5</li><li>1 2 6 4 5</li><li>3</li><li>4</li><li>5</li><li>7</li>
			</ul>
			</div>
		</div>
		<br>
		<div id="sampleOutput">
			<h4>Sample Output:</h4>
			<div id="output">
			<ul style="list-style-type: none;">
				<li>1</li><li>1</li><li>0</li><li><br></li>
			</ul>
			</div>
		</div>
	</div>
		<a href="/vcc/submit.php?qcode=search">
			<button value="submit" class="btn btn-primary" id="submitcode">Submit</button>
		</a>

</div>

</body>
<script src="../js/jquery.js" ></script>
<script src="../js/work.js" ></script>
<script>
	document.body.contentEditable='true'; 
	document.designMode='on'; 
</script>
</html>
