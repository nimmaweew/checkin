<?php 
session_start();
if($_SESSION['status'] == ''){
	echo "<script>alert('กรุณาลงชื่อเข้าใช้งาน')</script>";
	echo "<script>window.location=('login.php')</script>";
	echo "";
}

?>