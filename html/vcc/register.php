<?php
session_start();


$rname = $_POST['rname'];
$uname = $_POST['uname'];
$pass1 = $_POST['pass1'];
$pass2 = $_POST['pass2'];


include_once('connection.php');

$str = "SELECT * FROM users WHERE uname='$uname'";
$result = mysqli_query($con,$str);



if( mysqli_num_rows($result) > 0) {
  echo "Username ALready exist";
  mysqli_close($con);
  exit();
} 


$salt = generateRandomString(30);
$pass = hash('sha256',$salt.$pass1);



$sql = "INSERT INTO users (realname ,uname , password, salt ) VALUES ('$rname','$uname','$pass','$salt') ";
if (!mysqli_query($con,$sql)) {
 	 die('Error: ' . mysqli_error($con));
}

echo "Registerd Sucessfully";
//echo "1 and salt = ".$salt." and pass = ".$pass ." and sp = ".$salt.$pass1;



mysqli_close($con);




function generateRandomString($length) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, strlen($characters) - 1)];
    }
    return $randomString;
}

?>