
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

<h2> Stairs Up Above<br></h2>
	<div id="questiontag">

		<div id="question"><span style="font-size: 14px; line-height: 1.42857143;">Rahul found himself standing in front of the stairs which contains n&nbsp; steps<br>Rahul at any given time can go one step UP or two steps UP.<br>So it got him wondering how many ways can he goto the Nth Step if he <br>starts at the bottom?<br></span></div><br><div id="question">
		Why Don't you help him ??
		</div>
		<br>
		<div id="constraints">
			<h4>Constraints:</h4>
			
			<ul>
				<li> 0 &lt; T &lt;= 20</li><li>0 &lt;= N &lt;= 50</li>
			</ul>
		</div>
		<div id="questiontag"><br></div><h4 style="font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; color: rgb(51, 51, 51);">Input Description:</h4><div id="input" style="font-size: 14.4444446563721px; line-height: 22.2222232818604px;"><ul style="list-style-type: none;"><li>The Input Given to you will be of this Format.</li><li><span class="Apple-tab-span" style="white-space:pre">	</span>The First Line of Input Contains the number T.The number of Test Cases<br></li><li><span class="Apple-tab-span" style="white-space:pre">	</span>The Next T Lines following Will Contain a Number N denoting the Number of steps<br></li></ul><div><h4 style="font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; color: rgb(51, 51, 51);">Output Description:</h4><div id="input" style="font-size: 14.4444446563721px; line-height: 22.2222232818604px;"><ul style="list-style-type: none;"><li>You Are Expected to Print the Output Strictly as Follows.</li><li><span class="Apple-tab-span" style="white-space:pre">	</span>For Every Number N Print the number of ways he can reach the top Followed by a new Line&nbsp;</li><li><span class="Apple-tab-span" style="white-space:pre">								</span>(NO SPACE BETWEEN THE SUM AND NEW LINE)</li><li><span class="Apple-tab-span" style="white-space:pre">		</span>(Do NOT PRINT ANYTHING OTHER THAN ANSWER AS WILL LEAD TO Wrong Answer)</li></ul></div></div></div>
		<div id="sampleInput" style="width: 400px;">
			<h4>Sample Input:</h4>
<pre>4<br>2<br>5<br>6<br>7
</pre>	
		</div>
		<br>
		<div id="sampleOutput" style="width: 400px;">
		<h4>Sample Output:</h4>
<pre>2<br>8<br>13<br>21<br>&nbsp;</pre>
	</div>



		<a href="../submit.php?qcode=nsteps">
			<button value="submit" class="btn btn-primary" id="submitcode">Submit</button>
		</a>



</div>
</body>
<script src="../js/jquery.js" ></script>
<script src="../js/work.js" ></script>
<script>
	//document.body.contentEditable='true'; 
	//document.designMode='on'; 
</script>
</html>
