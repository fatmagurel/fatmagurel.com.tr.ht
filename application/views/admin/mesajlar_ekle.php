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
				<span>Mesaj Ekleme</span>
				</h2>
		    </div>
		<!--//banner-->
 	 <!--faq-->
 	<div class="blank">
			  <div class="grid-form1">
<h3 id="forms-horizontal">Mesaj Bilgilerini Giriniz</h3>
<form class="form-horizontal" method="post" action="<?=base_url()?>admin/Mesajlar/ekle_kaydet">

  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label hor-form">Adı Soyadı</label>
    <div class="col-sm-10">
      <input type="text" name='adsoy' class="form-control" id="inputEmail3" placeholder="Adı Soyadı">
    </div>
  </div>
  
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label hor-form">Email</label>
    <div class="col-sm-10">
      <input type="email" name='email' class="form-control" id="inputEmail3" placeholder="Email">
    </div>
  </div>
  
   <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label hor-form">Telefon</label>
    <div class="col-sm-10">
      <input type="text" name='tel' class="form-control" id="inputEmail3" placeholder="Tel">
    </div>
  </div>
  
     <div class="form-group">
	 <label for="inputName " class="col-sm-2 control-label hor-form">Mesajınız</label>
	 <div class="col-sm-5">
	    <textarea name="mesaj" rows="6" class="form-control"></textarea>
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