
<?php
session_start();
if(!isset($_GET['sid'])) {
	header( 'Location: mysub.php' ) ;
} else {
	$sid = $_GET['sid'];
	$uname = $_SESSION['user'];
	include_once('connection.php');
			$stmt0 = $con->prepare("SELECT code FROM submissions WHERE uname = ? && sid = ?");	
			$stmt0->bind_param('ss', $uname,$sid);

			$stmt0->execute();
			$stmt0->bind_result($code);
			

			//echo "<p class=\"bg-success solved\"> ";
			if($stmt0->fetch()) {
				//$urlencode = $code;
				echo $code;
				//echo json_encode($code);

				//$json = json_encode($code);
				//echo $json;
			/*	echo "<pre>". json_encode($code)."</pre>";
			*/	//echo"<script>\$(\"#code\").html(\"$code\");</script>";
			//echo "<script>editor.setValue(\"$json\"); editor.setReadOnly(true);  </script>";	
			
			}
				
			$stmt0->close();
			mysqli_close($con);
}
?>
