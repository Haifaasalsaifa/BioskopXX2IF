<!-- Karina Aulia Dini 1301164342 -->
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/karin/bootstrap.min.css">
	<style type="text/css">
		#navb {
			background-color:white;
			height: auto;
			width: 100%;
		}

		#nav_logo {
			background-color: white;
		}

		body {
			background-image: url("<?php echo base_url(); ?>assets/haifa/Bioskop.png");
			background-size: 100%;
			background-blend-mode: darken;
			font-family: papyrus;
		}
 
		#bod {
			margin: 120px 20px 30px 20px;
			width: 30%;
		}

		@media (max-width: 991px) {
			/* Ini biar dia deteksi ukuran layarnya, kalo ukuran layar dibawah 991px dia bakal pake yang ini */
			#bod {
				margin: 200px 20px 30px 20px !important;
			}
		}

		#signup {
			width: auto;
			padding: 25px;
			border: solid;
			border-width: 2px;
			/*border-color: #abe64d;*/
			border-radius: 20px;
			background-image: url("<?php echo base_url(); ?>assets/haifa/Bioskop.png");
  			margin-top: 100px;
  		}
		
		#kunjungi{
			background-color: #abe64d;
			padding: 50px;
		}
		 #kiri_1301160170 {
 			  background-image: url("<?php echo base_url(); ?>assets/haifa/Bioskop.png" style="opacity : 0.01");	
 			  background-size: 100%;
 			  margin-top: 240px;
 			  margin-left: 267px;
 			
 		}
		#nav_list{
			margin-top: 18px;
			display: inline;
			background-color: white;
		}
		#nav_list ul li{
			display: inline;
			list-style: none;
			padding: 10px;
			color: black;
		}
		#nav_list ul li a{
			text-decoration: none;
			color: black;
		}
		#nav_list ul li a:hover{
			text-decoration: none;
			color: orange;
		}
		#su{
			padding-bottom: 30px;
		}
		#nav_button{
			background-color: white;
			padding-top: 20px;
			width: 70px;
		}

		#nav_button button{
			background-color: #abe64d;
			border-color: #abe64d;
		}
		#test {
			margin-left: 80px;
		}
		#footer{
			background-color: #dedfdb;
			text-align: center;
			padding: 20px;
		}
		.dropdown-menu {
			padding: 10px;
		}


	</style>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/karin/bootstrap.min.js"></script>
	<title></title>
</head>
<body>
	<!-- <nav class="navbar fixed-top bg-black" id="navb">
		<div class="container">
			<div class="row">
				<div class="col-6 col-lg-2" id="nav_logo">
					<img src="<?php echo base_url(); ?>assets/karin/logo.png" style="width: 100%;">
				</div>
				<div class="col-6 col-lg-7" id="nav_list"> 
					<ul>
						
					</ul>
				</div>
				<div class="col-6 col-lg-3" id="nav_button">
					<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					    Sign In
					</button>
					<div class="dropdown-menu">
					  <?php
					  		echo form_open('login/cek_login');
					  ?>
					    <div class="form-group">
					      <label for="exampleDropdownFormEmail1">Email address</label>
					      <input type="email" name="email" id="email" class="form-control" id="exampleDropdownFormEmail1" placeholder="email@example.com">
					    </div>
					    <div class="form-group">
					      <label for="exampleDropdownFormPassword1">Password</label>
					      <input type="password" name="password" id="password" class="form-control" id="exampleDropdownFormPassword1" placeholder="Password">
					    </div>
					    <div class="form-check">
					      <input type="checkbox" class="form-check-input" id="dropdownCheck">
					      <label class="form-check-label" for="dropdownCheck">
					        Remember me
					      </label>
					    </div>
					    <button type="submit" class="btn btn-primary">Sign in</button>
					  <?php echo form_close();?>
					  <div class="dropdown-divider"></div>
					  <a class="dropdown-item" href="#">New around here? Sign up</a>
					</div>
				</div>
			</div>
		</div>
	</nav> -->
	<div>
		<div>
			<div class="container">
				    <div class="row">
						<div class="col-md-6 col-sm-12 col-xs-12 rounded" id="kiri_1301160170" >
								<!-- Insert Logo Here -->
								<div class="text-center">
 										 <p style="margin-top: 2%; color: #ffffff"><b>Selamat Datang,</b></p>
								</div>
									<!-- Insert Your Form Here -->
								<?php
					  				echo form_open('login/cek_login');
					  			?>
								<form style="margin-left: 6%;margin-right: 6%;">
									<div class="form-group">
          							 	<input type="text-center" class="form-control" placeholder="Username" style="border:0; border-bottom: 2px solid #D32F2F;">
         					   		 </div>
									<div class="form-group">
           								<input type="Password" class="form-control" placeholder="Password" style="border:0; border-bottom: 2px solid #D32F2F;">
         					   		</div>
									<button type="submit" class="btn btn-primary btn-block btn-danger" style="color: #DC143C; margin-bottom: 4%;"><b style="color: #ffffff;">Masuk</b></button>
								</form>
								<?php echo form_close();?>
								<footer  style="margin-top: 4%; margin-bottom: 5%; margin-left: 6%;font-size: 12px;">
									<!-- Insert Your Copyright Here -->
									<a href="https://google.com" style="color: #D32F2F;"><b>Belum memiliki akun?</a>
								</footer>
						</div>
						<!-- <div class="col-md-6 col-sm-12 col-xs-12 rounded" id="kanan_1301160170"> -->
								<!-- Insert Your Description and Photo Here
								<img src="haifa.JPG" class="rounded-circle" style="width:35%; height: 35%; margin-top: 50px;margin-left: 188px; margin-bottom: 2%;">
								<p  style="text-align: center; margin-left: 10px;margin-top: 2%; font-size: 20px;">Hallo, nama Saya<b> Haifa Salsabila</b>! Saya adalah mahasiswa<b style="color: #0D47A1;"> S1 Teknik Informatika di Telkom University kelas IF-40-07.</b> Saat ini saya sedang belajar pemrograman web. Pemrograman Web menyenangkan loh! </p> -->
						<!-- </div> -->
				    </div>
			</div>		
		</div>		
	</div>			

	<!-- KUNJUNGI -->
	<!-- <div class="container-fluid" id="kunjungi">
		<center>	
		<h3 style="color: #ffffff; margin-bottom: 30px;"> KUNJUNGI </h3>
		<div class="row">
			<div class="col-lg-4">
			</div>
			<div class="col-lg-4">
				<a href="https://www.facebook.com/">
					<img src="<?php echo base_url(); ?>assets/monica/gambar/logo/p_facebook.png" id="logo_fb" style="width: 50px;">
				</a>
				<a href="https://www.instagram.com/">
					<img src="<?php echo base_url(); ?>assets/monica/gambar/logo/p_instagram.png" id="logo_ig" style="width: 50px;">
				</a>
				<a href="https://www.youtube.com/">
					<img src="<?php echo base_url(); ?>assets/monica/gambar/logo/p_youtube.png" id="logo_yt" style="width: 50px;">
				</a>
				<a href="https://www.twitter.com/">
					<img src="<?php echo base_url(); ?>assets/monica/gambar/logo/p_twitter.png" id="logo_tw" style="width: 50px;">
				</a>
			</div>
			<div class="col-lg-4">
			</div>
		</div>
	</center>
	</div> -->
	
	<!-- <div class="container-fluid" id="footer">
		<div class="row" id="footer">
			<div class="col-lg-4">
				<h6> Ketentuan Layanan </h6>
				<h6> Kebijakan Privasi</h6>
			</div>
			<div class="col-lg-4">
				<img src="<?php echo base_url(); ?>assets/monica/gambar/logo/logo.png" style="width: 30%;">
			</div>
			<div class="col-lg-4">
				<h6> @2018 CEMAL-CEMIL INDONESIA </h6>
			</div>
		</div>
	</div> -->
</body>
</html>