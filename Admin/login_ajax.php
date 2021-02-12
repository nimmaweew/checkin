<?php 
include('../connect.php');

if(isset($_POST['type'])){
	$type = $_POST['type'];
	
	if($type == 'login'){
		$user = $_POST['user'];
		$pass = $_POST['pass'];
		
		$result = mysqli_query($con,"select status,id from login where user = '$user' and pass = '$pass'");
		$num = mysqli_num_rows($result);
		if($num > 0){
			$row = mysqli_fetch_assoc($result);
			$id = $row['id'];
			//$checklogon = mysqli_query($con,"select id from login where id = '$id' and logon = '1'");
			//$no_logon = mysqli_num_rows($checklogon);
			//if($no_logon > 0){
				//echo json_encode(array("statusCode"=>2));
			//}else{
				//$update = mysqli_query($con,"update login set logon = '1' where id = '$id'");
				//if($result == TRUE){
					session_start();
					$_SESSION['status'] =  $row['status'];
					$_SESSION['id'] = $row['id'];
					echo json_encode(array("statusCode"=>0));
				//}else{
				//	echo json_encode(array("statusCode"=>3));
				//}
			//}
			
		}else{
			echo json_encode(array("statusCode"=>1));
		}
	}
}
?>