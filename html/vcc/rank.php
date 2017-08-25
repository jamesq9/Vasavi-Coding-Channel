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
        <li ><a href="mysub.php">My Submissions</a></li>
        <li class="active"><a href="rank.php">Ranks</a></li>
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
			<h1 align="center">Ranks</h1>				
			<?php
			$uname = $_SESSION['user'];
			include_once('connection.php');

			
			$stmt = $con->prepare("select realname,users.uname,score from users join scoreboard on users.uname=scoreboard.uname order by score desc");
			
			$stmt->execute();
			$i=1;

			$stmt->bind_result($name,$id,$score);
			echo "<table class=\"table table-bordered\">";
			echo "<tr> <th>Rank</th> <th>Name</th> <th>ID</th> <th>score</th> </tr>";
			while($stmt->fetch()) {
			echo "<tr> <td>$i</td> <td>$name</td> <td>$id</td> <td>".($score/100)."</td> </tr>";
			$i++;
			
			}
			echo "</table>";
			$stmt -> close();

			$con -> close();



			 ?>
		</div>
	</div>
</body>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bjm.js"></script>
</html>
