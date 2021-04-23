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
				<span>Ürün Resim Galeri Ekleme Menüsü</span>
				</h2>
		    </div>
		<!--//banner-->
 	 <!--faq-->
 	<div class="blank">
			  <div class="grid-form1">
   <h3 id="forms-horizontal">Eklenecek Resmi Seçiniz...</h3><br>
    *Yüklenecek resim dosyası türleri (gif|jpg|png) max boyutlar: 1024x1024, boyut:1000Kb
     <?php  if ($this->session->flashdata("mesaj")){ ?>
	 <div class="alert alert-info" role="alert">
       <?=$this->session->flashdata("mesaj")?>
       </div>
	 <?php } ?>
	   
    <form class="form-horizontal" method="post" enctype="multipart/form-data" action="<?=base_url()?>admin/urunler/galeri_kaydet/<?=$id?>">

  <div class="form-group">
     <div class="col-sm-10">
      <input type="file" name="resim" class="form-control" id="inputEmail3" onchange="this.form.submit()" placeholder="Yükleme için gözat">
   </div>

  </div>
 
   		
    <?php foreach ($veriler as $rs) {?>
	<img src="<?=base_url()?>uploads/<?=$rs->resim?>" height="100"> 
	<a href="<?=base_url()?>admin/urunler/galeri_sil/<?=$id?>/<?=$rs->Id?>" onclick="return confirm('Silmek istediğinizden emin misiniz?')">Sil</a>
	<?php } ?>  
	 </div>	
	  </div>
    </div>
</div>
 </form>
	<?php
	$this->load->view('admin\_footer');
	?>
	
	