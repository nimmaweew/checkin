<?php 
include('../connect.php');

if(isset($_POST['type'])){
	$type = $_POST['type'];
	
	if($type == 'sel_com'){
		$site = array();
		$com_id = $_POST['com_id'];
		$result = mysqli_query($con,"select * from site where com_id = '$com_id' ");
		while($row = mysqli_fetch_assoc($result)){
			$site[] = $row;
		}
		echo json_encode($site);
	}
	else if($type =='sel_site'){
		$dept = array();
		$site_id = $_POST['site_id'];
		$result = mysqli_query($con,"select * from dept where site_id = '$site_id' ");
		while($row = mysqli_fetch_assoc($result)){
			$dept[] = $row;
		}
		echo json_encode($dept);
	}
	else if($type == 'new_emp'){
		$wk = $_POST['wk'];
		$com = $_POST['com'];
		$site = $_POST['site'];
		$dept = $_POST['dept'];
		$id = $_POST['id'];
		$type_emp = $_POST['type_emp'];
		$name = $_POST['name'];
		$surname = $_POST['surname'];
		$status_tel = $_POST['status_tel'];
		$phone_no = $_POST['tel'];
		$controler = $_POST['controler'];
		$status = '1';// 0 out 1 in
		$result = mysqli_query($con,"select * from emp where id = '$id'");
		$n_res = mysqli_num_rows($result);
		if($n_res > 0){
			//dupplicate
			echo json_encode(array("statusCode"=>1));
		}else{
			$sql = "insert into emp (id,type,name,surname,phone_no,com_id,site_id,dept_id,wk_id,status,sta_tel,controler) values ('$id','$type_emp','$name','$surname','$phone_no','$com','$site','$dept','$wk','$status','$status_tel','$controler')";
			if($res = mysqli_query($con,$sql)){
				echo json_encode(array("statusCode"=>0));
			}else{
				echo json_encode(array("statusCode"=>2));
			}
		}
	}
	else if($type == 'emp_edit_get_id'){
		$id = $_POST['id'];
		$result = mysqli_query($con,"select * from emp where id = '$id'");
		$n_res = mysqli_num_rows($result);
		$data = array();
		if($n_res > 0){
			$row = mysqli_fetch_assoc($result);
			$data[] = $row;
			echo json_encode($data,JSON_UNESCAPED_UNICODE);
		}else{
			//not found
			echo json_encode(array("statusCode"=>1));
		}
	}
	else if($type == 'update_emp'){
		$old_id = $_POST['old_id'];
		$new_id = $_POST['new_id'];
		$type = $_POST['type_emp'];
		$name = $_POST['name'];
		$surname = $_POST['surname'];
		$tel = $_POST['tel'];
		$control = $_POST['control'];
		$sta_tel = $_POST['sta_tel'];
		$emp_sta = $_POST['emp_sta'];
		$wk = $_POST['wk'];
		$com = $_POST['com'];
		$site = $_POST['site'];
		$dept = $_POST['dept'];
		$sql = "update emp set id = '$new_id' , type = '$type', name = '$name', surname = '$surname', phone_no = '$tel', com_id = '$com' , site_id = '$site', dept_id = '$dept', wk_id = '$wk', status = '$emp_sta', sta_tel = '$sta_tel' , controler = '$control' where id = '$old_id' ";
		if($res = mysqli_query($con,$sql)){
			//success
			echo json_encode(array("statusCode"=>0));
		}else{
			//false
			echo json_encode(array("statusCode"=>1));
			echo mysqli_error($res);
		}
	}
	
}
?>