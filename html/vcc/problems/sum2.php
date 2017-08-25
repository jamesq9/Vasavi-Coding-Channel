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
<h2>Sum</h2>
	<div id="questiontag">

		<div id="question"><span class="Apple-tab-span" style="white-space:pre">	</span>GIven an array of size n you need to print the solution based on the query</div>
		<div id="constraints">
			<h4>Constraints:</h4>
			
			<ul>
				<li> 0 &lt; n &lt;= 5</li><li>0 &lt; T &lt;= 5</li><li>0 &lt;= A[ i ] &lt;=10</li><li>0 &lt;= query&lt;= 2</li><li>0-based indexing</li>
			</ul>
		</div>
		<div id="questiontag"><span class="Apple-tab-span" style="white-space:pre">	</span>query 0 indicates sum till index</div><div id="questiontag"><span class="Apple-tab-span" style="white-space:pre">	</span>query 1 indicates product till index</div><div id="questiontag"><span class="Apple-tab-span" style="white-space:pre">	</span>query 2 value at that index</div><div id="sampleInput"><h4>Input:</h4><div id="input"><ul style="list-style-type: none;"><li>The First Line Of Input Contains n i.e size of array and</li><li>'T' no. of queries.second line contains elements of the</li><li>&nbsp;array.From third line T queries will be given.Each query&nbsp;</li><li>consists of query number and value</li><li></li></ul></div></div>
		<div id="sampleInput">
			<div id="sampleInput"><h4>Output:</h4><div id="input"><ul style="list-style-type: none;"><li>Print The result based on the query</li></ul></div></div><h4>Input:</h4>
			<div id="input">
			<ul style="list-style-type: none;">
				<li>5 3</li><li>1 2 3 4 5&nbsp;</li><li>0 4</li><li>1 4</li><li>2 3</li></ul></div></div>
		<div id="sampleOutput">
			<h4>Output:</h4>
			<div id="output">
			<ul style="list-style-type: none;">
				<li>15</li><li>120</li><li>4</li>
			</ul><div><h4 style="font-family: &#39;Helvetica Neue&#39;, Helvetica, Arial, sans-serif; color: rgb(51, 51, 51);">Explanation:</h4></div><div>&nbsp;<span class="Apple-tab-span" style="white-space:pre">	</span>Here There are 3 queries.First Query (0 4) says sum to index 4</div><div><span class="Apple-tab-span" style="line-height: 1.42857143; white-space: pre;">	</span><span style="line-height: 1.42857143;">Second Query (1,4) says product till index 4</span></div><div><span style="line-height: 1.42857143;"><span class="Apple-tab-span" style="white-space:pre">	</span>Third query says value at index 3</span></div>
			</div>
		</div>
	</div>
		<a href="../submit.php?qcode=sum">
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
