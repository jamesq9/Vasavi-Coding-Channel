<?php
session_start();

$uname = $_POST['uname'];
$pass = $_POST['password'];


include_once('connection.php');

$stmt = $con->prepare("SELECT password,salt,realname FROM users WHERE uname = ?");
$stmt->bind_param('s', $uname);

$stmt->execute();

$stmt->bind_result($hash,$salt,$realname);

$stmt->fetch();

    if( strcmp(hash('sha256',$salt.$pass),$hash) == 0 ) {
    	$_SESSION['user']=$uname;
    	$_SESSION['name']=$realname;
    	echo "1";
    	
    } else {
    	echo "0" ;
    }

$stmt -> close();

$con -> close();

?>