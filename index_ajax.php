<?php 
include('connect.php');
if(isset($_POST['type'])){
	
	$type = $_POST['type'];
	
	if($type == 'sec2_chk_tel'){
		$tel = $_POST['tel'];
		$result = mysqli_query($con,"select id from emp where phone_no = '$tel'");
		$numrow = mysqli_num_rows($result);
		if($numrow == 0){
			echo json_encode(array("statusCode"=>1));
		}else{
			
		}
	}
	
}
?>