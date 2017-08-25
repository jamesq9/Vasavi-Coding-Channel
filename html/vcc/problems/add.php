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
	<h2>Addition</h2>
	<div id="questiontag">

		<div id="question">Given T Sequences each Consisting Some N Numbers Print the Sum of all the Numbers in a Sequence</div>
		<br>
		<div id="constraints">
			<h4>Constraints:</h4>
			
			<ul>
				<li> 0 &lt; &nbsp;T &lt; 10</li><li>0 &lt; N &lt; 1000</li><li>0 &lt; Range of Numbers in Sequence &nbsp;&lt;= 100000000</li>
			</ul>
		</div>
		<div id="questiontag"><h4 style="font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; color: rgb(51, 51, 51);"><br></h4><h4 style="font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; color: rgb(51, 51, 51);">Input Format:</h4><div id="input" style="font-size: 14.4444446563721px; line-height: 22.2222232818604px;"><ul style="list-style-type: none;"><li>First Line Of Input Contains T the number of test cases, The Following Lines Describe Each of the T Test Cases</li><li><span class="Apple-tab-span" style="white-space:pre">	</span>Each Test Case starts with N the length of the Sequence followed by N Number's separated by a one/more spaces.</li><li><br></li></ul></div></div><h4 style="font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; color: rgb(51, 51, 51);">Output Format:</h4><div id="input" style="font-size: 14.4444446563721px; line-height: 22.2222232818604px;"><ul style="list-style-type: none;"><li><span style="font-size: 14.4444446563721px; line-height: 22.2222232818604px;">For Each&nbsp;</span>Test Case&nbsp;<span style="font-size: 14.4444446563721px; line-height: 22.2222232818604px;">Print</span>&nbsp;The Sum of All N Numbers Followed by a New Line.</li></ul></div>
		<div id="sampleInput">
			<h4>Input:</h4>
			<div id="input">
			<ul style="list-style-type: none;">
				<li>2</li>
				<li>3 2 43 4</li><li>7 1 1 1 1 1 1 2</li>
			</ul>
			</div>
		</div>
		<br>
		<div id="sampleOutput">
			<h4>Output:</h4>
			<div id="output">
			<ul style="list-style-type: none;">
				<li>49</li><li>8</li><li><br></li>
			</ul>
			</div>
		</div>
	</div>
		<a href="/vcc/submit.php?qcode=add">
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
