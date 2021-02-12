<!doctype html>
<?php 
include('login_check.php');
include('../connect.php');
?>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="shortcut icon" href="../pic/ti.png" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
<style>

.sidenav {
  height: 100%;
  width: 200px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  padding-top: 20px;
}

/* Page content */
.main {
  margin-left: 200px; /* Same as the width of the sidenav */
}

	.bod{
		padding-left: 210px;
		padding-top: 20px;
	}
	
	
	
	.box{
		display: none;
		z-index: 10;
		top: 20px;
		position: absolute;
		right : 20px;
		width: 300px;
		height: auto;
		border-radius: 5px;

	}
	
	#frm_edit_emp{
		display: none;
		padding-left: 210px;
		padding-top: 20px;
	}
	#frm_add_emp{
		display: none;
	}

	#frm_add_location_emp{
		padding-left: 210px;
		padding-top: 20px;
	}
</style>
<title>Checkin Admin</title>
</head>

<body>
	<div class="box alert-danger" style="border-left: 10px solid red" aria-live="assertive" aria-atomic="true" id="alert_false">
				<strong>แจ้งเตือน</strong><p class="mb-0" id="label_false"></p>
		</div>
		<div class="box alert-success" id="alert_success" aria-live="assertive" aria-atomic="true" style="border-left: 10px solid green">
			<strong>แจ้งเตือน</strong><p class="mb-0" id="label_success"></p>
		</div>
	
	
	<div class="sidenav" align="center">
					<h3 class="text-white">Admin</h3>
					<hr class="text-white">
					<a href="#" class="btn text-secondary" data-role="emp">ข้อมูลพนักงาน</a>
					<a href="#" class="btn text-secondary" data-role = "logout">Log Out</a>
		</div>
	<div class="container-fluid bod" id="frm_add_emp">
		<div class="row">
			<div class="col-12" align="right">
				<a href="#" class="btn" data-role="add_emp_close"><img src="../pic/cancel.png"></a>
			</div>
		</div>
		<div class="row">
			<div class="col-12" align="center">
				<h3 class="text-info">เพิ่มข้อมูลพนักงาน</h3>
				<br>
			</div>
		</div>
		<div class="row">
			<div class="col-3">
				<h5 class="text-secondary">สถานที่ทำงาน</h5>
			</div>
			<div class="col-3">
				<h5 class="text-secondary">บริษัท</h5>
			</div>
			<div class="col-3">
				<h5 class="text-secondary">หน่วยงาน</h5>
			</div>
			<div class="col-3">
				<h5 class="text-secondary">แผนก</h5>
			</div>
		</div>
		<div class="row">
			<div class="col-3">
				<select id="sel_wk" class="form-control">
					<option id="sel_wk0" value="0">------</option>
					<?php 
						$result = mysqli_query($con,"select * from work");
						while($row = mysqli_fetch_assoc($result)){
							$id = $row['id'];
							$name = $row['name'];
					?>
					<option id="sel_wk<?php echo $id ?>" value="<?php echo $id ?>"><?php echo $name ?></option>
					<?php
						}
					?>
				</select>
			</div>
			<div class="col-3">
				<select id="sel_com" class="form-control" onChange="func_sel_com()">
					<option id="sel_com0" value="0">-----</option>
					<?php 
						$result = mysqli_query($con,"select * from tb_com");
						while($row = mysqli_fetch_assoc($result)){
							$id = $row['id'];
							$name = $row['name'];
					?>
					<option id="sel_com<?php echo $id ?>" value="<?php echo $id ?>"><?php echo $name ?></option>
					<?php
						}
					?>
				</select>
			</div>
			<div class="col-3">
				<select id="sel_site" class="form-control" onChange="func_sel_site()">
					<option id="sel_site" value="0">-----</option>
				</select>
			</div>
			<div class="col-3">
				<select id="sel_dept" class="form-control">
					<option id="sel_dept" value="0">-----</option>
				</select>
			</div>
		</div>
		<br>
		<hr>
		<div class="row">
			<div class="col-3">
				<h5 class="text-secondary">รหัสพนักงาน</h5>
			</div>
			<div class="col-3">
				<h5 class="text-secondary">คำนำหน้า</h5>
			</div>
			<div class="col-3">
				<h5 class="text-secondary">ชื่อ</h5>
			</div>
			<div class="col-3">
				<h5 class="text-secondary">นามสกุล</h5>
			</div>
		</div>
		<div class="row">
			<div class="col-3">
				<input type="text" class="form-control" id="id">
			</div>
			<div class="col-3">
				<input type="text" class="form-control" id="type">
			</div>
			<div class="col-3">
				<input type="text" class="form-control" id="name">
			</div>
			<div class="col-3">
				<input type="text" class="form-control" id="surname">
			</div>
		</div>
		<br>
		<hr>
		<div class="row">
			<div class="col-3">
				<h5 class="text-secondary">เบอร์โทร</h5>
			</div>
			<div class="col-3">
				<h5 class="text-secondary">Controler ID</h5>
			</div>
			<div class="col-3">
				<h5 class="text-secondary">ใช้งานโทร</h5>
			</div>
		</div>
		<div class="row">
			<div class="col-3">
				<input type="text" class="form-control" id="tel">
			</div>
			<div class="col-3">
				<input type="text" class="form-control" id="controler">
			</div>
			<div class="col-3">
				<select id="sel_tel" class="form-control">
					<option id="sel_tel0" value="0">NO</option>
					<option value="1">YES</option>
				</select>
			</div>
		</div>
		<br>
		<div class="row">
			<div class="col-3"></div>
			<div class="col-3"></div>
			<div class="col-3"></div>
			<div class="col-3" align="right">
				<input type="button" class="btn btn-sm btn-outline-success form-control" onClick="func_save_emp()" value="บันทึก">
			</div>
		</div>
	</div>
	<!-- frm_edit emp -->
	<div class="container-fluid" id="frm_edit_emp">
		<div class="row">
			<div class="col-12" align="right">
				<a href="#" class="btn" data-role="edit_emp_close"><img src="../pic/cancel.png"></a>
			</div>
		</div>
			<div class="row">
				<div class="col-12" align="center">
					<h3 class="text-primary">แก้ไขข้อมูลพนักงาน</h3>
				</div>
			</div>
		<br>
		<div class="row">
			<div class="col-3"></div>
			<div class="col-3"></div>
			<div class="col-3" align="right">
				<h5 class="text-secondary">ค้นหาข้อมูล</h5>
			</div>
			<div class="col-3" align="right">
				<input type="text" class="form-control" id="sert">
			</div>
		</div>
		<br>
		<div class="row">
			<div class="col-12">
				<table class="table table-hover table-dark">
					<thead>
						<th>รหัสพนักงาน</th>
						<th>ชื่อ</th>
						<th>นามสกุล</th>
						<th>เบอร์โทร</th>
						<th></th>
					</thead>
					<tbody id="body_edit_emp">
					</tbody>
				</table>
			</div>
		</div>
	</div>
	
	<!-- frm_add_location_emp -->
	<div class="container-fluid" id="frm_add_location_emp">
		<div class="row">
			<div class="col-12" align="right">
				<a href="#" class="btn" data-role="add_location_emp_close"><img src="../pic/cancel.png"></a>
			</div>
		</div>
		<div class="row">
			<div class="col-12" align="center">
				<h3 class="text-primary">เพิ่มที่อยู่</h3>
			</div>
		</div>
		<br>
		<!-- row1 -->
		<div class="row">
			<div class="col-3">
				<label class="text-secondary">รหัสพนักงาน</label>
			</div>
			<div class="col-3">
				<label class="text-secondary">ชื่อเรียก</label>
			</div>
			<div class="col-3">
				<label class="text-secondary">ชื่อสถานที่</label>
			</div>
			<div class="col-3">ตำบล</div>
		</div>
		<div class="row">
			<div class="col-3">
				<input type="text" class="form-control" id="addloc_id">
			</div>
			<div class="col-3">
				<input type="text" class="form-control" id="addloc_name">
			</div>
			<div class="col-3">
				<input type="text" class="form-control" id="addloc_detail">
			</div>
			<div class="col-3">
				<input type="text" class="form-control" id="addloc_tombol">
			</div>
		</div>
		<br><hr>
		<!-- row2 -->
		<div class="row">
			<div class="col-3">
				<label class="text-secondary">อำเภอ</label>
			</div>
			<div class="col-3">
				<label class="text-secondary">จังหวัด</label>
			</div>
			<div class="col-3">
				<label class="text-secondary">ละติจูด</label>
			</div>
			<div class="col-3">
				<label class="text-secondary">ลองติจูด</label>
			</div>
		</div>
		<div class="row">
			<div class="col-3">
				<input type="text" class="form-control" id="addloc_amphor">
			</div>
			<div class="col-3">
				<input type="text" class="form-control" id="addloc_province">
			</div>
			<div class="col-3">
				<input type="text" class="form-control" id="addloc_lati">
			</div>
			<div class="col-3">
				<input type="text" class="form-control" id="addloc_lon">
			</div>
		</div>
		<br><hr>
		<div class="row">
			<div class="col-12" align="right">
				<input type="button" class="btn btn-success" onClick="save_location()" value="บันทึก"> 
			</div>
		</div>
	</div>
	<!-- Modal -->
		<div class="modal fade" id="modal_emp" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog" role="document">
			<div class="modal-content">
			  <div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">ข้อมูลพนักงาน</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				  <span aria-hidden="true">&times;</span>
				</button>
			  </div>
			  <div class="modal-body">
				<input type="button" class="btn btn-outline-info form-control" data-role="add_emp" value="เพิ่มข้อมูล">
				<br>
			    <hr>
				<input type="button" class="btn btn-outline-info form-control" data-role="update_emp" value="แก้ไขข้อมูล">
				<br>
				<hr>
				<input type="button" class="btn btn-outline-info form-control" data-role="add_location_emp" value="เพิ่มที่อยู่">
				<br>
				<hr>
			  </div>
			  <div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			  </div>
			</div>
		  </div>
		</div>
	
	<div class="modal fade bd-example-modal-xl" id="modal_emp_edit" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
  		<div class="modal-dialog modal-xl">
			<div class="modal-content">
			  <div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">ข้อมูลพนักงาน</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				  <span aria-hidden="true">&times;</span>
				</button>
			  </div>
			  <div class="modal-body">
				 <!-- row1 -->
				<div class="row">
					<div class="col-3">
						<label class="text-secondary">สถานที่ทำงาน</label>
					</div>
					<div class="col-3">
						<label class="text-secondary">บริษัท</label>
					</div>
					<div class="col-3">
						<label class="text-secondary">หน่วยงาน</label>
					</div>
					<div class="col-3">
						<label class="text-secondary">แผนก</label>
					</div> 
				</div>
				 <div class="row">
					<div class="col-3">
						<select class="form-control" id="me_sel_wk">
							<option value="0">-----</option>
							<?php 
								$res_wk = mysqli_query($con,"select * from work");
								while($row_wk = mysqli_fetch_assoc($res_wk)){
									$id = $row_wk['id'];
									$name = $row_wk['name'];
							?>
							<option id="me_sel_wk<?php echo $id ?>" value="<?php echo $id ?>"><?php echo $name ?></option>
							<?php
								}
							?>
						</select>
					 </div>
					<div class="col-3">
					 	<select class="form-control" id="me_sel_com">
							<option value="0">-----</option>
							<?php 
								$res_com = mysqli_query($con,"select * from tb_com");
								while($row_com = mysqli_fetch_assoc($res_com)){
									$id = $row_com['id'];
									$name = $row_com['name'];
							?>
							<option id="me_sel_com<?php echo $id ?>" value="<?php echo $id ?>"><?php echo $name ?></option>
							<?php
								}
							
							?>
						</select>
					 </div>
					<div class="col-3">
					 	<select class="form-control" id="me_sel_site">
							<option value="0">-----</option>
						</select>
					 </div>
					<div class="col-3">
					 	<select class="form-control" id="me_sel_dept">
							<option value="0">-----</option>
						</select>
					 </div> 
				</div>
				  <br>
				  <hr>
				  <!-- row2 -->
				<div class="row">
					<div class="col-3">
						<label class="text-secondary">รหัสพนักงาน</label>
					</div>
					<div class="col-3">
						<label class="text-secondary">คำนำหน้า</label>
					</div>
					<div class="col-3">
						<label class="text-secondary">ชื่อ</label>
					</div>
					<div class="col-3">
						<label class="text-secondary">นามสกุล</label>
					</div> 
				</div>
				 <div class="row">
					<div class="col-3">
					 	<input type="text" class="form-control" id="me_id">
						<input type="hidden" id="me_hd_id">
					 </div>
					<div class="col-3">
					 	<input type="text" class="form-control" id="me_type">
					 </div>
					<div class="col-3">
					 	<input type="text" class="form-control" id="me_name">
					 </div>
					<div class="col-3">
					 	<input type="text" class="form-control" id="me_surname">
					 </div> 
				</div>
				  <br><hr>
				   <!-- row3 -->
				<div class="row">
					<div class="col-3">
						<label class="text-secondary">เบอร์โทร</label>
					</div>
					<div class="col-3">
						<label class="text-secondary">Controler ID</label>
					</div>
					<div class="col-3">
						<label class="text-secondary">ใช้งานโทร</label>
					</div>
					<div class="col-3">
						<label class="text-secondary">สถานะพนักงาน</label>
					</div> 
				</div>
				 <div class="row">
					<div class="col-3">
					 	<input type="text" class="form-control" id="me_tel">
					 </div>
					<div class="col-3">
					 	<input type="text" class="form-control" id="me_control">
					 </div>
					<div class="col-3">
					 	<select class="form-control" id="me_sel_statel">
							<option id="me_sel_statel0" value="0">NO</option>
							<option id="me_sel_statel1" value="1">YES</option>
						</select>
					 </div>
					<div class="col-3">
					 	<select class="form-control" id="me_sel_staemp">
							<option id="me_sel_staemp1" value="1">ON</option>
							<option id="me_sel_staemp0" value="0">OFF</option>
						</select>
					 </div> 
				</div>
			  </div>
			  <div class="modal-footer">
				   <button type="button" class="btn btn-success" onClick="emp_edit_save()">Save</button>
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				 
			  </div>
			</div>
		  </div>
		</div>
	<script>
		function close_all(){
			$('#frm_add_emp').hide(500);
			$('#frm_edit_emp').hide(500);
			$('#frm_add_location_emp').hide(500);
		}
		function show_alert_fasle(){
			$('#alert_false').show(500);
			setTimeout(function(){
				$('#alert_false').hide(500);
			},3000)
		}
		
		function show_alert_success(){
			$('#alert_success').show(500);
			setTimeout(function(){
				$('#alert_success').hide(500);
			},3000)
		}
		$(document).ready(function(){

		})
		
		$(document).on('click','.btn',function(){
			var data = $(this).data('role');
			if(data == 'logout'){
				window.location = 'login_out.php';
			}
			else if(data == 'emp'){
				$('#modal_emp').modal('toggle');
			}else if(data == 'add_emp'){
				close_all();
				$('#modal_emp').modal('toggle');
				$('#frm_add_emp').show(500);
			}else if(data == 'update_emp'){
				close_all();
				$('#modal_emp').modal('toggle');
				$('#frm_edit_emp').show(500);
			}else if(data == 'add_location_emp'){
				close_all();
				$('#modal_emp').modal('toggle');
				$('#frm_add_location_emp').show(500);
			}
		})
		
		function func_sel_com(){
			var com_id = $('#sel_com').val();
			if(com_id != 0){
				var type = 'sel_com';
				$.ajax({
					url : 'index_ajax.php',
					method : 'post',
					data : {type:type,
						   com_id:com_id},
					success:function(result){
						var data = JSON.parse(result);
						var n = data.length;
						var i = 0;
						var site = $('#sel_site');
						site.html('<option id="sel_site0" value="0">-----</option>');
						while(i < n){
							var site_id = data[i].id;
							var site_name = data[i].name;
							site.append(
								$(`<option id="sel_site${site_id}"></option>`).val(site_id).html(site_name)
							)
							i++;
						}
					}
				})
			}
		}
		
		function func_sel_site(){
			var site_id = $('#sel_site').val();
			if(site_id != 0){
				var type = 'sel_site';
				$.ajax({
					url : "index_ajax.php",
					method : "post",
					data : {type:type,
						   site_id:site_id},
					success:function(result){
						var data = JSON.parse(result);
						var n = data.length;
						var i = 0;
						var dept = $('#sel_dept');
						dept.html('<option id="sel_dept0" value="0">-----</option>');
						while(i < n){
							var dept_id = data[i].id;
							var dept_name = data[i].name;
							dept.append(
								$(`<option id="sel_dept${dept_id}"></option>`).val(dept_id).html(dept_name)
							)
							i++;
						}
					}
				})
			}
		}
		
		function func_save_emp(){
			var wk = $('#sel_wk').val();
			var com = $('#sel_com').val();
			var site = $('#sel_site').val();
			var dept = $('#sel_dept').val();
			var id = $('#id').val();
			var type_emp = $('#type').val();
			var name = $('#name').val();
			var surname = $('#surname').val();
			var status_tel = $('#sel_tel').val();
			var tel = $('#tel').val();
			var controler = $('#controler').val();
			if(wk == 0){
				var txt = 'กรุณาเลือกสถานที่ทำงาน';
				$('#label_false').text(txt);
				show_alert_false();
			}else if(com == 0){
				var txt = 'กรุณาเลือกบริษัท';
				$('#label_false').text(txt);
				show_alert_false();
			}else if(site == 0){
				var txt = 'กรุณาเลือกหน่วยงาน';
				$('#label_false').text(txt);
				show_alert_false();
			}else if(dept == 0){
				var txt = 'กรุณาเลือกแผนก';
				$('#label_false').text(txt);
				show_alert_false();
			}else if(id == ''){
				var txt = 'กรุณาใส่รหัสพนักงาน';
				$('#label_false').text(txt);
				show_alert_false();
			}else if(type_emp == ''){
				var txt = 'กรุณาใส่คำนำหน้า';
				$('#label_false').text(txt);
				show_alert_false();
			}else if(name == ''){
				var txt = 'กรุณาใส่ชื่อ';
				$('#label_false').text(txt);
				show_alert_false();
			}else if(surname == ''){
				var txt = 'กรุณาใส่นามสกุล';
				$('#label_false').text(txt);
				show_alert_false();
			}else if(tel == ''){
				var txt = 'กรุณาใส่เบอร์โทร';
				$('#label_false').text(txt);
				show_alert_false();
			}else if(controler == ''){
				var txt = 'กรุณาใส่ Id Controler';
				$('#label_false').text(txt);
				show_alert_false();
			}else{
				var type = 'new_emp';
				$.ajax({
					url : 'index_ajax.php',
					method : "post",
					data : {type:type,
						   id:id,
						   type_emp:type_emp,
						   name:name,
						   surname:surname,
						   wk:wk,
						   com:com,
						   site:site,
						   dept:dept,
						   status_tel:status_tel,
						   tel:tel,
						   controler:controler},
					success:function(result){
						var data = JSON.parse(result);
						var status = data.statusCode;
						if(status == 0){
							var txt = 'บันทึกข้อมูลสำเร็จ';
							$('#label_success').text(txt);
							$('#alert_success').show(500);
							setTimeout(function(){
								$('#alert_success').hide(500);
								document.getElementById('sel_wk0').selected = 'true';
								document.getElementById('sel_site0').selected = 'true';
								document.getElementById('sel_dept0').selected = 'true';
								document.getElementById('sel_com0').selected = 'true';
								document.getElementById('sel_tel0').selected = 'true';
								$('#id').val('');
								$('#type').val('');
								$('#name').val('');
								$('#surname').val('');
								$('#tel').val('');
								$('#controler').val('');
							},3000)
							
						}else if(status == 1){
							var txt = 'รหัสพนักงานซ้ำ';
							$('#label_false').text(txt);
							show_alert_false();
						}else if(status == 2){
							var txt = 'บันมึกข้อมูลผิดพลาดกรุณาแจ้งผู้ดูแลระบบ';
							$('#label_false').text(txt);
							show_alert_false();
						}
					}
				})
			}
		}
		
		$('#sert').keypress(function(event){
			if(event.keyCode === 13){
				var txt = $('#sert').val();
				var type = 'find_text';
				$.ajax({
					url : 'table_edit_emp.php',
					method : 'post',
					data : {type:type,
						   text:txt},
					success:function(result){
						$('#body_edit_emp').html(result);
						$('#sert').val('');
					}
					
				})
			}
		})
		
		$(document).on('click','.btn',function(){
			var data = $(this).data('role');
			if(data == 'emp_edit'){
				var id = $(this).data('id');
				var type = 'emp_edit_get_id';
				$.ajax({
					url : 'index_ajax.php',
					method : 'post',
					data : {type:type,
						   id:id},
					success:function(result){
						var data = JSON.parse(result);
						var n_data = data.length;
						if(n_data > 0){
							var wk_id = data[0].wk_id;
							var com_id = data[0].com_id;
							var site_id = data[0].site_id;
							var dept_id = data[0].dept_id;
							var id = data[0].id;
							var type_emp = data[0].type;
							var name = data[0].name;
							var surname = data[0].surname;
							var tel = data[0].phone_no;
							var control = data[0].controler;
							var sta_tel = data[0].sta_tel;
							var status = data[0].status;
							
							document.getElementById('me_sel_wk'+wk_id).selected = 'true';
							document.getElementById('me_sel_com'+com_id).selected = 'true';
							$.ajax({
								url : 'index_ajax.php',
								method : 'post',
								data : {type:'sel_com',
									   com_id:com_id},
								success:function(result){
									var data = JSON.parse(result);
									var n = data.length;
									var i = 0;
									var site = $('#me_sel_site');
									while(i < n){
										var id = data[i].id;
										var site_name = data[i].name;
										site.append(
											$(`<option id="me_sel_site${id}"></option>`).val(id).html(site_name)
										)
										i++;
									}
									document.getElementById('me_sel_site'+site_id).selected = 'true';
								}
							})
							$.ajax({
								url : 'index_ajax.php',
								method : 'post',
								data : {type:'sel_site',
									   site_id:site_id},
								success:function(result){
									var data = JSON.parse(result);
									var n = data.length;
									var i = 0;
									var dept = $('#me_sel_dept');
									while(i < n){
										var id = data[i].id;
										var dept_name = data[i].name;
										var id_site = data[i].site_id;
										dept.append(
											$(`<option id="me_sel_dept${id+id_site}"></option>`).val(id).html(dept_name)
										)
										i++;
									}
									document.getElementById('me_sel_dept'+dept_id+site_id).selected = 'true';
								}
							})
							$('#me_id').val(id);
							$('#me_hd_id').val(id);
							$('#me_type').val(type_emp);
							$('#me_name').val(name);
							$('#me_surname').val(surname);
							$('#me_tel').val(tel);
							$('#me_control').val(control);
							document.getElementById('me_sel_statel'+sta_tel).selected = 'true';
							document.getElementById('me_sel_staemp'+status).selected = 'true';
						}
					}
				})
				$('#modal_emp_edit').modal('toggle');
			}
			else if(data == 'add_emp_close'){
				$('#frm_add_emp').hide(500);
			}
			else if(data == 'edit_emp_close'){
				$('#frm_edit_emp').hide(500);
			}
			else if(data == 'add_location_emp_close'){
				$('#frm_add_location_emp').hide(500);
			}
			
			
		})
		
		function emp_edit_save(){
			var old_id = $('#me_hd_id').val();
			var new_id = $('#me_id').val();
			var emp_type = $('#me_type').val();
			var emp_name = $('#me_name').val();
			var emp_surname = $('#me_surname').val();
			var emp_tel = $('#me_tel').val();
			var control_id = $('#me_control').val();
			var wk = $('#me_sel_wk').val();
			var com = $('#me_sel_com').val();
			var site = $('#me_sel_site').val();
			var dept = $('#me_sel_dept').val();
			var sta_tel = $('#me_sel_statel').val();
			var emp_sta = $('#me_sel_staemp').val();
			$.ajax({
				url : 'index_ajax.php',
				method : 'post',
				data : {type:'update_emp',
					   old_id:old_id,
					   new_id:new_id,
					   type_emp:emp_type,
					   name:emp_name,
					   surname:emp_surname,
					   tel:emp_tel,
					   control:control_id,
					   sta_tel:sta_tel,
					   emp_sta:emp_sta,
					   wk:wk,
					   com:com,
					   site:site,
					   dept:dept},
				success:function(result){
					var data = JSON.parse(result);
					var status = data.statusCode;
					if(status == 0){
						// ok
						$('#modal_emp_edit').modal('toggle');
						var text = 'อัพเดทข้อมูลพนักงานสำเร็จ';
						$('#label_success').text(text);
						show_alert_success();
					}else if(status == 1){
						//false
						$('#modal_emp_edit').modal('toggle');
						var text = 'อัพเดทข้อมูลพนักงานไม่สำเร็จกรุณาแจ้งผู้ดูแลระบบ';
						$('#label_false').text(text);
						show_alert_false();
					}
				}
			})
		}
	</script>
</body>
</html>