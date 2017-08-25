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
						
			<?php
			$uname = $_SESSION['user'];
			include_once('connection.php');


			if(isset($_GET['page'])) {
				$page = $_GET['page'];
				if($page>5) {
					header( 'Location: mysub.php' ) ;	
				}
			} else {
				$page = 0;
			}

			echo "<h1 align=\"center\" >Submissions </h1>";
			
			echo "<h2>Status</h2>";

			$stmt0 = $con->prepare("select questions.qcode,T.uname from questions left outer join (select * from solved where uname=?) as T on questions.qcode = T.qcode ;");
			$stmt0->bind_param('s', $uname);

			$stmt0->execute();
			$stmt0->bind_result($qcode,$bool);
			//echo "<p class=\"bg-success solved\"> ";
			while($stmt0->fetch()) {
				if($bool != NULL)
					echo "<a href=\"problems/$qcode.php \"><button class=\"btn btn-success solved\">$qcode</button></a>    ";
				else 
					echo "<a href=\"problems/$qcode.php \"><button class=\"btn btn-danger solved\">$qcode</button></a>    ";
			}
			//echo "</p>";
			$stmt0 -> close();
			

			echo "<h2>History</h2>";
			echo "<table   class=\"table table-bordered\" align=\"center\">";
			echo "<tr> <th> Question</th><th>Status</th>  <th>Langugae</th> <th>Time(ms)</th> </tr>";
			




			if($page==0) {
			$stmt = $con->prepare("SELECT qcode,lang FROM queue WHERE uname = ? limit 1");
			$stmt->bind_param('s', $uname);

			$stmt->execute();
			$stmt->bind_result($qcode,$lang);
			if($stmt->fetch()) {
				echo "<tr > <td> $qcode</td><td><a href=\"mysub.php\" class=\"myatag\">Waiting to be Processed</a></td>  <td>$lang</td> <td>NA</td> </tr>";
				echo "<script>setTimeout(function(){ window.location.reload(1); }, 5000);</script>";
			}
			$stmt -> close();
			}

			$row=$page*7;
			$stmt2 = $con->prepare("SELECT sid,qcode,status,lang,exectime FROM submissions WHERE uname = ? order by dt desc limit $row,8");
			$stmt2->bind_param('s', $uname);

			$stmt2->execute();
			$stmt2->bind_result($sid,$qcode,$status,$lang,$tottime);

			$i=0;
			while( $i <7 && $stmt2->fetch()  ) {
				switch($status) {
				case "AC":
				echo "<tr class=\"clickrow\"  href=\"showans.php?sid=$sid\" bgcolor=\"#5cb85c\"> <td> $qcode</td><td>$status</td>  <td>$lang</td>  <td>$tottime</td>  </tr>"; break;
				case "TLE":
				echo "<tr class=\"clickrow\"  href=\"showans.php?sid=$sid\" bgcolor=\"#f0ad4e\"> <td> $qcode</td><td>$status</td>  <td>$lang</td>  <td>$tottime</td>  </tr>"; break;
				case "WA":
				echo "<tr class=\"clickrow\"  href=\"showans.php?sid=$sid\" bgcolor=\"#FF8362\"> <td> $qcode</td><td>$status</td>  <td>$lang</td>  <td>$tottime</td>  </tr>"; break;
				case "CE":
				echo "<tr class=\"clickrow\"  href=\"showans.php?sid=$sid\" bgcolor=\"#d3d3d3\"> <td> $qcode</td><td>$status</td>  <td>$lang</td>  <td>$tottime</td>  </tr></a>"; break;
				default:
				echo "<tr class=\"clickrow\"  href=\"showans.php?sid=$sid\" bgcolor=\"#4FD5D6\"> <td> $qcode</td><td>$status</td>  <td>$lang</td>  <td>$tottime</td>  </tr>";
				}
				$i++;	
			}
			if($i == 0 && $page!=0) {
				$stmt2 -> close();
				$con -> close();
				header( 'Location: mysub.php' ) ;
			}

			echo "</table>";
			
			echo "<div align=\"center\">";
			if($page!=0) {
				$back = $page-1;
				echo "<a href=\"mysub.php?page=$back\"><button class=\"btn btn-primary\" style=\"margin-right:10px;\">Back</button></a>";
			} 

			if($stmt2->fetch() && $page!=5) {
				$front = $page+1;
				echo "<a href=\"mysub.php?page=$front\"><button class=\"btn btn-primary\">Next</button></a>";	
			}
			$row1 = $page * 7+1;
			$row2 = $row1 + $i -1;
			echo "<br> <b>Showing( $row1 - $row2 )</b>";
			echo "</div> ";

			$stmt2 -> close();
			$con -> close();

			 ?>
		</div>
	</div>
</body>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bjm.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
      $(".clickrow").click(function() {
            window.document.location = $(this).attr("href");
      });


	});
</script>
</html>
