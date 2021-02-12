<?php 
include('../connect.php');
if(isset($_POST['type'])){
	$type = $_POST['type'];
	if($type == 'find_text'){
		$text = $_POST['text'];
		$res = mysqli_query($con,"select * from emp where id = '$text'");
		$n_res = mysqli_num_rows($res);
		if($n_res > 0){
			while($row = mysqli_fetch_assoc($res)){
				$id = $row['id'];
				$name = $row['name'];
				$surname = $row['surname'];
				$tel = $row['phone_no'];
?>
		<tr>
			<td><?php echo $id ?></td>
			<td><?php echo $name ?></td>
			<td><?php echo $surname ?></td>
			<td><?php echo $tel ?></td>
			<td><a href="#" class="btn btn-outline-warning form-control" data-id="<?php echo $id ?>" data-role="emp_edit">แก้ไข</a></td>
		</tr>
<?php
			}
		}
	}
}
?>