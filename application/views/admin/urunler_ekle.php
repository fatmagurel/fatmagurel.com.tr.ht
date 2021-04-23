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
				<span>Ürün Ekleme</span>
				</h2>
		    </div>
		<!--//banner-->
 	 <!--faq-->
 	<div class="blank">
			  <div class="grid-form1">
<h3 id="forms-horizontal">Ürün Bilgilerini Giriniz</h3>
<form class="form-horizontal" method="post" action="<?=base_url()?>admin/urunler/ekle_kaydet">

  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label hor-form">Adı</label>
    <div class="col-sm-10">
      <input type="text" name='adi' class="form-control" id="inputEmail3" placeholder="Adı">
    </div>
  </div>
  
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label hor-form">Kategori</label>
    <div class="col-sm-10">
      <input type="text" name='kategori' class="form-control" id="inputEmail3" placeholder="Kategori">
    </div>
  </div>
  
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label hor-form">Alış Fiyatı</label>
    <div class="col-sm-10">
      <input type="text" name='afiyat' class="form-control" id="inputPassword3" placeholder="Alış Fiyatı">
    </div>
  </div>
  
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label hor-form">Satış Fiyatı</label>
    <div class="col-sm-10">
      <input type="text" name='sfiyat' class="form-control" id="inputEmail3" placeholder="Satış Fiyatı">
    </div>
  </div>
 
    <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label hor-form">Durum</label>
    <div class="col-sm-10">
      <select class="form-control" name='durum'>
    <option>Durum seçiniz...</option>
    <option>Aktif</option>
    <option>Pasif</option>
            </select>
	  </div>
  </div>
   
   
          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <button type="submit" class="btn btn-default">KAYDET</button>
	          <button type="submit" class="btn btn-default">VAZGEÇ</button>
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