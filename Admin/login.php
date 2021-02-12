<?php 
include('../connect.php');


?>
<html>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="shortcut icon" href="../pic/ti.png" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
	<style>
		body {
			background-image: url(../pic/bg/02.jpg); 
			background-repeat: repeat;
			background-size: 350px 350px;
		}
	</style>
<title>Checkin Admin</title>
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-1 col-xl-3"></div>
			<div class="col-sm-10 col-xl-6"></div>
			<div class="col-sm-1 col-xl-3"></div>
		</div>
		<!-- Modal -->
		<div class="modal fade" id="modal_login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="false">
		  <div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
			  <div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Login</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				  <span aria-hidden="true">&times;</span>
				</button>
			  </div>
			  <div class="modal-body">
				<div class="row">
					<div class="col-12">
						<h5 class="text-secondary">Username</h5>
						<input type="text" class="form-control" id="user">
						<hr>
						<h5 class="text-secondary">Password</h5>
						<input type="password" class="form-control" id="pass">
						<br><hr>
						<div class="alert alert-danger" id="alert">
							<label class="alert-danger" id="label_alert"></label>
						</div>
					</div>  
				</div>
			  </div>
			  <div class="modal-footer">
				<button type="button" class="btn btn-primary" onClick="login()">Login</button>
			  </div>
			</div>
		  </div>
		</div>
	</div>
	<script>
		$(document).ready(function(){
			$('#modal_login').modal('toggle');
			$('#alert').hide();
		})
		
		function login(){
			var user = $('#user').val();
			var pass = $('#pass').val();
			var type = 'login';
			if(user == ''){
				var text = 'กรุณาป้อน Username';
				$('#label_alert').text(text);
							$('#alert').show(500);
							setTimeout(function(){
								$('#alert').hide(500);
							},3000)
			}else if(pass == ''){
				var text = 'กรุณาป้อน Password';
				$('#label_alert').text(text);
							$('#alert').show(500);
							setTimeout(function(){
								$('#alert').hide(500);
							},3000)
			}else{
				$.ajax({
					url : 'login_ajax.php',
					method : 'post',
					data : {type:type,
						   user:user,
						   pass:pass},
					success:function(result){
						var data = JSON.parse(result);
						var status = data.statusCode;
						if(status == 0){
							window.location = 'index.php';
						}else if(status == 1){
							var text = 'ชื่อผู้ใช้หรือรหัสผ่านไม่ถูกต้อง';
							$('#label_alert').text(text);
							$('#alert').show(500);
							setTimeout(function(){
								$('#alert').hide(500);
							},3000)
						}else if(status == 2){
							var text = 'มีผู้ใช้งานอยู่ในระบบ';
							$('#label_alert').text(text);
							$('#alert').show(500);
							setTimeout(function(){
								$('#alert').hide(500);
							},3000)
						}else if(status == 3){
							var text = 'ชื่อผู้ใช้หรือรหัสผ่านไม่ถูกต้อง';
							$('#label_alert').text(text);
							$('#alert').show(500);
							setTimeout(function(){
								$('#alert').hide(500);
							},3000)
						}
					}
				})
			}
		}
		$("#user").keypress(function(event){
			if(event.keyCode == 13){
				$('#pass').focus();
			}
		});
		$("#pass").keypress(function(event){
			if(event.keyCode == 13){
				login();
			}
		});
		
	</script>
</body>
</html>