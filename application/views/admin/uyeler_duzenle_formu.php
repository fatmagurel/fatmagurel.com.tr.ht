<?php

$this->load->view('admin\_header');
		$this->load->view('admin\_sidebar');
?>
 <div id="page-wrapper" class="gray-bg dashbard-1">
       <div class="content-main">
 
 	<!--banner-->	
		     <div class="banner">
		    	<h2>
				<a href="index.html">Home</a>
				<i class="fa fa-angle-right"></i>
				<span>Üye Düzenleme Menüsü</span>
				</h2>
		    </div>
		<!--//banner-->
 	 <!--faq-->
 	<div class="blank">
			  <div class="grid-form1">
<h3 id="forms-horizontal">Üye Bilgilerini Giriniz</h3>
<form class="form-horizontal" method="post" action="<?=base_url()?>admin/uyeler/guncelle/<?=$veri[0]->Id?>">

  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label hor-form">Adı Soyadı</label>
    <div class="col-sm-10">
      <input type="text" name='adsoy' value="<?=$veri[0]->adsoy?>"  class="form-control" id="inputEmail3" placeholder="Adı Soyadı">
    </div>
  </div>
  
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label hor-form">Email</label>
    <div class="col-sm-10">
      <input type="email" name='email' value="<?=$veri[0]->email?>" class="form-control" id="inputEmail3" placeholder="Email">
    </div>
  </div>
  
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label hor-form">Şifre</label>
    <div class="col-sm-10">
      <input type="password" name='sifre'  value="<?=$veri[0]->sifre?>" class="form-control" id="inputPassword3" placeholder="Şifre">
    </div>
  </div>
  
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label hor-form">Telefon</label>
    <div class="col-sm-10">
      <input type="text" name='tel' value="<?=$veri[0]->tel?>" class="form-control" id="inputEmail3" placeholder="Telefon">
    </div>
  </div>
  
   <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label hor-form">Şehir</label>
	
    <div class="col-sm-10">
      <select class="form-control" name='sehir'>
    <option><?=$veri[0]->sehir?></option>
    <option>Adana</option>
    <option>Adiyaman</option>
    <option>Afyonkarahisar</option>
    <option>Ağri</option>
	<option>Aksaray</option>
    <option>Amasya</option>
    <option>Ankara</option>
    <option>Antalya</option>
	<option>Ardahan</option>
    <option>Artvin</option>
    <option>Aydin</option>
    <option>Balikesir</option>
	<option>Bartin</option>
	<option>Batman</option>
	<option>Bayburt</option>
    <option>Bilecik</option>
    <option>Bingol</option>
    <option>Bitlis</option>
    <option>Bolu</option>
    <option>Burdur</option>
    <option>Bursa</option>
    <option>Canakkale</option>
    <option>Cankiri</option>
    <option>Corum</option>
    <option>Denizli</option>
    <option>Diyarbakir</option>
	<option>Duzce</option>
    <option>Edirne</option>
    <option>Elazig</option>
    <option>Erzincan</option>
    <option>Erzurum</option>
    <option>Eskisehir</option>
    <option>Gaziantep</option>
    <option>Giresun</option>
    <option>Gumushane</option>
    <option>Hakkari</option>
    <option>Hatay</option>
	<option>Iğdir</option>
    <option>Isparta</option>
    <option>Istanbul</option>
    <option>Izmir</option>
	<option>Kahramanmaras</option>
	<option>Karabuk</option>
	<option>Karaman</option>
	<option>Kars</option>
    <option>Kastamonu</option>
    <option>Kayseri</option>
	<option>Kirikkale</option>
    <option>Kirklareli</option>
    <option>Kirsehir</option>
	<option>Kilis</option>
    <option>Kocaeli</option>
    <option>Konya</option>
    <option>Kutahya</option>
    <option>Malatya</option>
    <option>Manisa</option>
    <option>Mardin</option>
	<option>Mersin</option>
    <option>Mugla</option>
    <option>Mus</option>
    <option>Nevsehir</option>
    <option>Nigde</option>
    <option>Ordu</option>
	<option>Osmaniye</option>
    <option>Rize</option>
    <option>Sakarya</option>
    <option>Samsun</option>
    <option>Siirt</option>
    <option>Sinop</option>
    <option>Sivas</option>
	<option>Sanliurfa</option>
	<option>Sirnak</option>
    <option>Tekirdağ</option>
    <option>Tokat</option>
    <option>Trabzon</option>
    <option>Tunceli</option>
    <option>Usak</option>
    <option>Van</option>
	<option>Yalova</option>
    <option>Yozgat</option>
    <option>Zonguldak</option>
            </select>
	  </div>
  </div>
   
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label hor-form">Yetki</label>
	
    <div class="col-sm-10">
      <select class="form-control" name='yetki'>
    <option><?=$veri[0]->yetki?></option>
	<option>uye</option>
	<option>admin</option>
	<option>satici</option>
            </select>
	  </div>
  </div>
  
    <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label hor-form">Durum</label>
	
    <div class="col-sm-10">
      <select class="form-control" name='durum'>
    <option><?=$veri[0]->durum?></option>
    <option>Pasif</option>
    <option>Aktif</option>
            </select>
	  </div>
  </div>
   
   
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default"> GÜNCELLE </button>
    </div>
  </div>
  
</form>
</div>
			
	       </div>
		   
	</div>
</div>
	<?php
	$this->load->view('admin\_footer');
	?>