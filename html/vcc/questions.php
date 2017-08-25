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
        <li class="active"><a href="questions.php">HOME</a></li>
        <li><a href="mysub.php">My Submissions</a></li>
        <li><a href="rank.php">Ranks</a></li>
        <li><a href="gs.php">Getting Started</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
          <li><a href="#"> Welcome <?php echo  $_SESSION['name']; ?></a></li>
        <li><a href="logout.php">Logout</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<!-- Nav Bar End-->

	<div class="container">
		<div id="mycont">
			<div class="panel panel-info">
					<div class="panel-heading">
					    <h4>Questions</h4>
					 </div>
					<div class="panel-body" style="padding:0px;">
						<!-- <ul class="list-group" style="border-radius: 0px;">
              <li class="list-group-item"><a href="problems/sub.php">Substraction</a></li>
              <li class="list-group-item"><a href="NOthn">Nthng</a></li>
              <li class="list-group-item"><a href="Nothn">Nthng</a></li>
            </ul> -->
            <table class="table tho">
              <tr> 
                  <th>Question Name</th>
                  <th>Question Code</th>
                  <th>Attempts</th>
                  <th>Success rate</th> 
              </tr>
              <?php 
              $uname = $_SESSION['user'];
              include_once('connection.php');

              $stmt0 = $con->prepare("select qcode,qname,ac,wa from questions order by qno ");
              $stmt0->execute();

              $stmt0->bind_result($qcode,$qname,$ac,$wa);
              while($stmt0->fetch()) {
                $tot = $ac+$wa;
                echo "<tr class=\"clickrow\" href=\"problems/$qcode.php\">";
                echo "<td>$qname</td>";
                echo "<td>$qcode</td>";
                echo "<td>$tot</td>";
                if($ac + $wa == 0 || $ac == 0) {
                  echo "<td>0%</td>";
                } else {
                  $val = ($ac / ($ac+$wa))*100;
                  echo "<td>".number_format($val,2)."%</td>";
                }
                echo "</tr>";
              }
              //echo "</p>";
              $stmt0 -> close();

              ?>

            </table>
	
					</div>

					<div class="panel-footer" style="margin-top: -20px">All The Best :)</div>
			</div>
	<h1> To View Answer for Double String <a href="ans/dstring.cpp">Click Here</a></h1>

		</div>
	</div>
</body>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bjm.js"></script>
<script>
  $(document).ready(function() {
      $(".clickrow").click(function() {
            window.document.location = $(this).attr("href");
      });
});
</script>
</html>
