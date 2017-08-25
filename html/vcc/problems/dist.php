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
	<h2>Distinct&nbsp;</h2>
	<div id="questiontag">

		<div id="question">Given T Sequences of Numbers Print the T Sequences with non repeating Numbers. &nbsp;<br><br></div>
		<div id="constraints">
			<h4>Constraints:</h4>
			
			<ul>
				<li> 0 &lt; T &lt; 10</li><li>0 &lt; SEQUENCE_LENGTH &lt;= 10000</li><li>0 &lt; NUMBERS_IN_SEQUENCE &lt;= 2^8</li>
			</ul>
		</div>
		<div id="questiontag"><br></div><div id="questiontag"><div id="sampleInput" style="font-size: 14.4444446563721px; line-height: 22.2222232818604px;"><h4>Input Format:</h4><div id="input"><ul style="list-style-type: none;"><li>The First Line of Input contains an Integer T then Number of test cases</li><li>Following Lines Contains T Test cases of this format</li><li><span class="Apple-tab-span" style="white-space:pre">	</span>The First Lines Contains&nbsp;an Integer N indicating the length of the sequence</li><li><span class="Apple-tab-span" style="white-space:pre">	</span>&nbsp;The Following Line contains N Integers representing the sequence.&nbsp;&nbsp;</li><li><br></li></ul></div></div></div>
		<div id="sampleInput">
			<h4 style="font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; color: rgb(51, 51, 51);">Output Format:</h4><h4><div id="input" style="line-height: 22.2222232818604px; font-size: 14.4444446563721px;"><ul style="list-style-type: none;"><li><span style="font-size: 14.4444446563721px; line-height: 22.2222232818604px; color: inherit; font-family: inherit;">For Each Test Case Print all the Distinct Elements of the sequence in the order they appear EACH FOLLOWED BY A SPACE&nbsp;</span></li><li><span style="font-size: 14.4444446563721px; line-height: 22.2222232818604px; color: inherit; font-family: inherit;"><span class="Apple-tab-span" style="white-space:pre">														</span>Terminate the Test Case by Printing A NEW LINE&nbsp;</span><br></li></ul></div></h4><h4>Sample Input:</h4>
			<div id="input">
			<ul style="list-style-type: none;">
				<li>2</li><li>5</li><li>1 1 1 2 2</li><li>9</li><li>3 3 3 4 5 4 1 1 1</li>
			</ul>
			</div>
		</div>
		<br>
		<div id="sampleOutput">
			<h4>Sample Output:</h4>
			<div id="output">
			<ul style="list-style-type: none;">
				<li>1 2</li><li>3 4 5 1</li><li><br></li>
			</ul>
			</div>
		</div>
	</div>
		<a href="/vcc/submit.php?qcode=dist">
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
