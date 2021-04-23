
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Minimal an Admin Panel Category Flat Bootstrap Responsive Website Template | Signin :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Minimal Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="<?=base_url()?>assets/admin/css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="<?=base_url()?>assets/admin/css/style.css" rel='stylesheet' type='text/css' />
<link href="<?=base_url()?>assets/admin/css/font-awesome.css" rel="stylesheet"> 
<script src="<?=base_url()?>assets/admin/js/jquery.min.js"> </script>
<script src="<?=base_url()?>assets/admin/js/bootstrap.min.js"> </script>
</head>
<body>
	<div class="login">
	     <h1><a href="index.html">AdminPanel </a></h1>
		<div class="login-bottom"> 
		<?php if ($this->session->flashdata("mesaj"))
		  { ?>
	      <div class="alert alert-danger" role="alert">
	         <strong>Hata!</strong> <p><?=$this->session->flashdata("mesaj")?></p>
          </div>
		  <?php } ?>
		
			<h2>Giris</h2>
			<form action ="<?=base_url()?>admin/login/login_ol" method="post">
			<div class="col-md-6">
				<div class="login-mail">
					<input type="text" name="email" required placeholder="Email" >
					<i class="fa fa-envelope"></i>
				</div>
				<div class="login-mail">
					<input type="password" name="sifre" required placeholder="Password" >
					<i class="fa fa-lock"></i>
				</div>
				   <a class="news-letter " href="#">
						 <label class="checkbox1"><input type="checkbox" name="checkbox" ><i> </i>Beni Hatırla</label>
					   </a>

			
			</div>
			<div class="col-md-6 login-do">
				<label class="hvr-shutter-in-horizontal login-sub">
					<input type="submit" value="login">
					</label>
					<p>Giriş yapmadan önce kayıt ol! </p>
				<a href="<?=base_url()?>admin/login" class="hvr-shutter-in-horizontal">Kayıt Ol</a>
			</div>
			
			<div class="clearfix"> </div>
			</form>
		</div>
	</div>
		<!---->
<div class="copy-right">
            <p> &copy; 2016 Minimal. All Rights Reserved | Design by <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>	    </div>  
<!---->
<!--scrolling js-->
	<script src="<?=base_url()?>assets/admin/js/jquery.nicescroll.js"></script>
	<script src="<?=base_url()?>assets/admin/js/scripts.js"></script>
	<!--//scrolling js-->
</body>
</html>

