<!-- === BEGIN HEADER === -->
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="tr">
    <!--<![endif]-->
    <head>
        <!-- Title -->
        <title><?=$sayfa?> <?=$veri[0]->adi?></title>
        <!-- Meta -->
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="description" content="">
		<meta name="keywords" content="">
        <meta name="author" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
        <!-- Favicon -->
        <link href="favicon.ico" rel="shortcut icon">
        <!-- Bootstrap Core CSS -->
        <link rel="stylesheet" href="<?=base_url()?>assets/css/bootstrap.css" rel="stylesheet">
        <!-- Template CSS -->
        <link rel="stylesheet" href="<?=base_url()?>assets/css/animate.css" rel="stylesheet">
        <link rel="stylesheet" href="<?=base_url()?>assets/css/font-awesome.css" rel="stylesheet">
        <link rel="stylesheet" href="<?=base_url()?>assets/css/nexus.css" rel="stylesheet">
        <link rel="stylesheet" href="<?=base_url()?>assets/css/responsive.css" rel="stylesheet">
        <link rel="stylesheet" href="<?=base_url()?>assets/css/custom.css" rel="stylesheet">
        <!-- Google Fonts-->
        <link href="http://fonts.googleapis.com/css?family=Roboto+Condensed:400,300" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div id="body-bg">
            <!-- Phone/Email -->
            <div id="pre-header" class="container background-grey bottom-border">
                <div class="container no-padding">
                    <div class="row hidden-xs">
                        <div class="col-sm-6 padding-vert-6">
						
							   
                           
						   
						   <?php
			if ($this->session->userdata("uye_session")){
			?>
			<li class="dropdown">
			<a href="#" data-toggle="dropdown"><i class="fa fa-unlock-alt" aria-hidden="true"></i>
				<?=$this->session->uye_session["adsoy"]?><b class="caret"></b></a>
				<div class="dropdown-menu">
					<a href="<?=base_url()?>uye/hesabim"><span style="color:#2FDAB8">Hesap Bilgileri</span></a><br>
					<a class=""  href="<?=base_url()?>uye/sepetim"><span  class ="fa-shopping-cart" style="color:#2FDAB8"></span>
					<span class="badge badge-warning"> <?=$sepet[0]->say?></span></a><br>
					
					<a href="<?=base_url()?>uye/siparislerim"><span style="color:#2FDAB8">Siparişlerim</span></a><br>
					<a href="<?=base_url()?>uye/cikis"><span style="color:#2FDAB8">Çıkış</span></a><br>
				</div>
			</li>
			<?php }
			else {
			?>
				<li>  
				<a href="<?=base_url()?>home/login_ol" ><i class="fa-lock" aria-hidden="true"></i>GİRİŞ YAP</a>
				<?php }
				?>
					  </li>
								
                        </div>
                        <div class="col-sm-6 text-right padding-vert-6">
                            <strong>Email:</strong>&nbsp;arslanzeliha00@gmail.com
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Phone/Email -->
            <!-- Header -->
            <div id="header">
                <div class="container">
                    <div class="row">
                        <!-- Logo -->
                        <div class="logo">
                            <a href="<?=base_url()?>" title="">
                                <img src="<?=base_url()?>assets/img/logo.png" alt="Logo" />
                            </a>
                        </div>
                        <!-- End Logo -->
                    </div>
                </div>
            </div>
            <!-- End Header -->     