<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="shortcut icon" href="pic/logo/ti.png" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
	<style>
		body{
		  background-image: url("pic/bg/01.jpg");
		  background-repeat: repeat;
		  background-attachment: fixed;
		  background-size: 500px 500px;
		  background-blend-mode : difference;
		}
	</style>
<title>Checkin</title>
</head>

<body>
	<section id="sec_1" >
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-1 col-xl-3"></div>
			<div class="col-sm-10 col-xl-6" align="center" style="background-color: rgb( 255 , 255, 255); opacity: 0.95 ">
				<br>
				<h5 class="text-secondary">ข่าวประชาสัมพันธ์</h5>
				<br>
				<figure class="figure">
				  <img src="pic/conten/01.jpg" class="figure-img img-fluid rounded" alt="...">
				  <figcaption class="figure-caption">การยึดอำนาจจากรัฐบาลพลเรือนครั้งแรกในรอบ 59 ปี ของกองทัพเมียนมา สร้างความฉงนให้ผู้คนจำนวนมากว่า ทำไมบรรดานายพลในกองทัพซึ่งยังทรงอิทธิพลทั้งทางการเมืองและเศรษฐกิจ จึงออกมาดึงอำนาจคืนจากนักการเมืองพลเรือนอีกครั้ง</figcaption>
				</figure>
				<br>
				<hr class="text-secondary">
				<h5 class="text-secondary">คำยินยอม และ ข้อตกลง</h5>
				<br>
				<textarea class="form-control" rows="10" readonly style="text-align: center">ยินดีต้อนรับเข้าสู่ระบบรายงานตัวของบริษัทให้ทุกท่านรายงานตัวในเวลา 09.00 น. - 11.00 น. และ 13.00 น. - 15.00 น. ของทุกวันเพื่อลดการแพร่กระจายเชื้อโรค จากการเดินทางออกนอกบ้านบริษัทจะมีการบันทึกข้อมูลตำแหน่งปัจจุบันของท่าน และยืนยันที่พำนักโดยข้อมูลนี้จะถูกเก็บเป็นความลับ และจะไม่นำไปใช้เพื่อประโยชน์อื่นใดตาม พรบ.คุ้มครองข้อมูลส่วนบุคคล 2562 ข้าพเจ้ายินดีที่จะปฏิบัติตามคำประกาศของบริษัทคำประกาศของรัฐบาล หรือคำประกาศของหน่วยงานราชการอย่างเคร่งครัด บริษัทขอให้ช่วยแจ้งเบาะแสผู้ที่ละเมิดต่อคำประกาศของบริษัทคำประกาศของรัฐบาล หรือคำประกาศของหน่วยงานราชการโดยบริษัทจะพิจารณาโทษทางวินัยตามข้อบังคับของบริษัทอย่างเหมาะสมต่อผู้ละเมิดและจะปกปิดข้อมูลผู้แจ้งเบาะแสเป็นความลับอย่างที่สุดหากยืนยันตัวเองไม่ได้กรุณาติดต่อกลับมาที่แอดมินกลุ่มทางโทรศัพท์
				</textarea>
				<br>
				
			</div>
			<div class="col-sm-1 col-xl-3"></div>
		</div>
		<div class="row">
			<div class="col-sm-1  col-xl-3"></div>
			<div class="col-sm-2  col-xl-1" style="background-color: rgb( 255 , 255, 255); opacity: 0.95 "></div>
			<div class="col-sm-6  col-xl-4" align="center" style="background-color: rgb( 255 , 255, 255); opacity: 0.95 ">
				<div class="alert alert-warning" id="alert">
					<h4 class="alert-heading">
						แจ้งเตือน
					</h4>
					<hr>
					<p class="mb-0" id="label_alert"></p>
				</div>
				<input type="checkbox" class="form-control" id="chk" name="chk" onClick="func_chk()"> 
				<input type="hidden" id="chk_val" value="0">
				<label for="chk">ยอมรับ</label>
				<br>
				
				<input type="button" class="form-control btn btn-outline-secondary" value="ดำเนินการต่อ" onClick="func_next()">
				<br>
				<br>
			</div>
			<div class="col-sm-2  col-xl-1" style="background-color: rgb( 255 , 255, 255); opacity: 0.95 "></div>
			<div class="col-sm-1  col-xl-3"></div>
		</div>
	</div>
	</section>
	<!---END SECTION 1--->
	
	<section id="sec_2">
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-1 col-xl-3"></div>
				<div class="col-sm-7 col-xl-4" style="background-color: rgb( 255 , 255, 255); opacity: 0.95 "></div> 
				<div class="col-sm-3 col-xl-2" style="background-color: rgb( 255 , 255, 255); opacity: 0.95 "></div> 
				<div class="col-sm-1 col-xl-3"></div> 
			</div>
			<div class="row">
				<div class="col-sm-1 col-xl-3"></div>
				<div class="col-sm-7 col-xl-4" style="background-color: rgb( 255 , 255, 255); opacity: 0.95 ">
					<br><br>
					<input type="text" id="tel" class="form-control" maxlength="11" placeholder="Telephone No.">
					
				</div> 
				<div class="col-sm-3 col-xl-2" style="background-color: rgb( 255 , 255, 255); opacity: 0.95 ">
					<br><br>
					<input type="button" class="btn btn-outline-secondary form-control" value="ถัดไป" onClick="func_next_2()">
				</div> 
				<div class="col-sm-1 col-xl-3"></div> 
			</div>
			<div class="row">
				<div class="col-sm-1 col-xl-3"></div>
				<div class="col-sm-10 col-xl-6" style="background-color: rgb( 255 , 255, 255); opacity: 0.95 ">
					<br>
					<div class="alert alert-warning" id="sec2_alert">
						<h4 class="alert-heading">แจ้งเตือน</h4>
						<p class="mb-0" id="sec2_label_alert"></p>
					</div>
				</div>
				<div class="col-sm-1 col-xl-3"></div>
			</div>
			<div class="row">
				<div class="col-sm-1 col-xl-3"></div>
				<div class="col-sm-10 col-xl-6" align="center" style="background-color: rgb( 255 , 255, 255); opacity: 0.95 ">
					
					<br>
					<h5 class="text-secondary">News Release</h5>
					<hr>
					<figure class="figure">
					  <img src="pic/conten/02.jpg" class="figure-img img-fluid rounded" alt="...">
					  <figcaption class="figure-caption">ชาวรัสเซียหลายแสนคนทั่วประเทศออกมาประท้วงต่อต้านการควบคุมตัวนายอเล็กเซ นาวาลนี ผู้นำฝ่ายค้าน ทำให้ผู้ประท้วงหลายสิบคนถูกจับกุมตัว บางคนถูกตำรวจทุบตี แต่การประท้วงก็ยังดำเนินต่อไป โดยวันอาทิตย์นี้ผู้คนจะออกมารวมตัวกันอีกครั้ง การประท้วงเหล่านี้มีสาระสำคัญอย่างไร และทำไมถึงสร้างความกังวลให้กับรัฐบาลรัสเซีย</figcaption>
					</figure>
					<br>
					<figure class="figure">
					  <img src="pic/conten/03.jpg" class="figure-img img-fluid rounded" alt="...">
					  <figcaption class="figure-caption">แม้นักวิทยาศาสตร์จะทราบมาก่อนหน้านี้แล้วว่า มหาสมุทรแอตแลนติกซึ่งกั้นกลางระหว่างทวีปอเมริกากับแผ่นดินยุโรปและแอฟริกานั้น กำลังขยายตัวใหญ่ขึ้นปีละกว่า 4 เซนติเมตร จนเบียดให้มหาสมุทรแปซิฟิกค่อย ๆ แคบลงไปด้วย แต่พวกเขาก็ยังไม่รู้ว่าปรากฏการณ์นี้มาจากสาเหตุใดกันแน่</figcaption>
					</figure>
				</div>
				<div class="col-sm-1 col-xl-3"></div>
			</div>
		</div>
	</section>
	<!---END SECTION 2--->
	<script>
		$(document).ready(function(){
			$('#alert').hide();
			$('#sec_2').hide();
			$('#sec2_alert').hide();
		})
		function func_chk(){
			if(document.getElementById('chk').checked == true){
				$('#chk_val').val(1);
			}
			else{
				$('#chk_val').val(0);
			}
		}
		function func_next(){
			var chk_val = $('#chk_val').val();
			if(chk_val == '1'){
				$('#sec_1').hide(500);
				setTimeout(function(){
					$('#sec_2').show(500)
				},500)
			}else{
				var text = 'กรุณายอมรับข้อตกลง';
				$('#label_alert').text(text);
				$('#alert').show(500);
				setTimeout(function(){
					$('#alert').hide(500);
				},3000)
			}
		}
		function func_next_2(){
			var tel = $('#tel').val();
			var Ntel = tel.length;
			if(Ntel < 10){
				var text = 'เบอร์มือถือไม่ถูกต้อง';
				$('#sec2_label_alert').text(text);
				$('#sec2_alert').show(500);
				setTimeout(function(){
					$('#sec2_alert').hide(500);
				},3000)
			}else{
				var type = 'sec2_chk_tel';
				$.ajax({
					url : 'index_ajax.php',
					method : 'post',
					data : {type:type,
						   tel:tel},
					success:function(result){
						var data = JSON.parse(result);
						var status = data.statusCode;
						if(status == 0){
							//ok
						}else if(status == 1){
							var text= 'ไม่พบข้อมูลมือถือในระบบ';
							$('#sec2_label_alert').text(text);
							$('#sec2_alert').show(500);
							setTimeout(function(){
								$('#sec2_alert').hide(500);
							},3000)
						}else if(status == 2){
							//emp status out
						}else if(status == 3){
							//out of time
						}else if(status == 4){
							// duplicate
						}
					}
				})
			}
		}
	</script>
</body>
</html>