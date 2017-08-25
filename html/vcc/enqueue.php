<?php 



session_start();

//echo mb_internal_encoding();
//mb_internal_encoding("UTF-8");

$uname = $_SESSION['user'];
$code = $_POST['code'];
$lang = $_POST['lang'];
$qcode = $_POST['qcode'];


include_once('connection.php');


$str = "SELECT * FROM queue WHERE uname='$uname'";
$result = mysqli_query($con,$str);



if( mysqli_num_rows($result) > 0) {
  echo "Please wait till your previous request is Processed";
  mysqli_close($con);
  exit();
} 



/*
if (!mysqli_query($con,$str)) {
	echo "internal Error PLease Try again.";
 	 die('Error: ' . mysqli_error($con));
}*/

//echo "Successfully Submitted, Please wait for the result.";
//mysqli_close($con);


$sql = "INSERT INTO queue (qcode, uname, dt, code, lang) VALUES (?, ?, NOW(), ?, ?)";


$stmt = $con->prepare($sql);
$stmt->bind_param('ssss', $qcode,$uname,$code,$lang);

$stmt->execute();
if($stmt->affected_rows == 1) {
echo "Successfully Submitted please wait for the result..";
} else {
echo "Failed.";
}
$stmt->close();

mysqli_close($con);


 ?>