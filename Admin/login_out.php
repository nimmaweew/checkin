<?php 
include('../connect.php');
session_start();
$id = $_SESSION['id'];
$result = mysqli_query($con,"update login set logon = '0' where id = '$id' ");
if($result){
	session_unset();
	session_destroy();
	header('location:login.php');
}else{
	echo 'Error'.mysqli_error($result);
}


?>