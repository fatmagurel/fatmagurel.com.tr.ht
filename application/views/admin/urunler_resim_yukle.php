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
				<span>Ürün Resim Ekleme Menüsü</span>
				</h2>
		    </div>
		<!--//banner-->
 	 <!--faq-->
 	<div class="blank">
			  <div class="grid-form1">
   <h3 id="forms-horizontal">Eklenecek Resmi Seçiniz...</h3><br>
    *Yüklenecek resim dosyası türleri (gif|jpg|png) max boyutlar: 1024x1024, boyut:1000Kb
     <?php  if ($this->session->flashdata("mesaj")){ ?>
	 <div class="alert alert-danger" role="alert">
        <strong>Hata!!</strong><br>
		<?=$this->session->flashdata("mesaj")?>
       </div>
	 <?php } ?>
	   
    <form class="form-horizontal" method="post" enctype="multipart/form-data" 
     action="<?=base_url()?>admin/urunler/resim_kaydet/<?=$id?>">

  <div class="form-group">
     <div class="col-sm-10">
      <input type="file" name="resim" class="form-control" id="inputEmail3" placeholder="Yükleme için gözat">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-info pull-right">RESİM YÜKLE</button>
    </div>
  </div>
 
  
 

   <img src="<?=base_url()?>uploads/<?=$veri[0]->resim?>" height="100"> 
 </div>		
 </div>
		   
	  </div>
</div>
 </form>

	<?php
	$this->load->view('admin\_footer');
	?>