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
				<span>Ürün Düzenleme Menüsü</span>
				</h2>
		    </div>
		<!--//banner-->
 	 <!--faq-->
 	    <div class="blank">
			  <div class="grid-form1">
                  <h3 id="forms-horizontal">Ürün Bilgilerini Giriniz</h3>
                      <form class="form-horizontal" method="post" action="<?=base_url()?>admin/urunler/guncelle/ <?=$veri[0]->Id?>">
                      
                        <div class="form-group">
                          <label for="inputEmail3" class="col-sm-2 control-label hor-form">Adı</label>
                          <div class="col-sm-10">
                            <input type="text" name='adi' value="<?=$veri[0]->adi?>"  class="form-control" id="inputEmail3" placeholder="Adı Soyadı">
                          </div>
                        </div>
                        
                         <div class="form-group">
                          <label for="inputEmail3" class="col-sm-2 control-label hor-form"> Aciklama </label>
                      	
                          <div class="col-sm-10">
                      	<script src="<?=base_url()?>/ckeditor/ckeditor.js"> </script>
                          <textarea class="form-control" id="aciklama" name="aciklama" rows =10 cols=90> <?=$veri[0]->aciklama?> </textarea>
                      	<script>
                      	CKEDITOR.replace('aciklama');
                      	</script>
                      	<span class="help-block"> Açıklamanızı düzeltiniz...</span>
                      	</div>
                      	</div>
                      	 
                      	  <div class="form-group">
                          <label for="inputEmail3" class="col-sm-2 control-label hor-form">Alış Fiyatı</label>
                          <div class="col-sm-10">
                            <input type="text" name='afiyat' value="<?=$veri[0]->afiyat?>"  class="form-control" id="inputEmail3" placeholder="Alış Fiyatı">
                          </div>
                        </div>
                        
                         <div class="form-group">
                          <label for="inputEmail3" class="col-sm-2 control-label hor-form">Satış Fiyatı</label>
                          <div class="col-sm-10">
                            <input type="text" name='sfiyat' value="<?=$veri[0]->sfiyat?>"  class="form-control" id="inputEmail3" placeholder="Satış Fiyatı">
                          </div>
                        </div>
                        
                         <div class="form-group">
                          <label for="inputEmail3" class="col-sm-2 control-label hor-form">Kodu</label>
                          <div class="col-sm-10">
                            <input type="text" name='kodu' value="<?=$veri[0]->kodu?>"  class="form-control" id="inputEmail3" placeholder="Kodu">
                          </div>
                        </div>
                      	 
                      	 <div class="form-group">
                          <label for="inputEmail3" class="col-sm-2 control-label hor-form">Stok</label>
                          <div class="col-sm-10">
                            <input type="text" name='stok' value="<?=$veri[0]->stok?>"  class="form-control" id="inputEmail3" placeholder="Stok">
                          </div>
                        </div>
                        
                         <div class="form-group">
                          <label for="inputEmail3" class="col-sm-2 control-label hor-form">Tarih</label>
                          <div class="col-sm-10">
                            <input type="text" name='tarih' value="<?=$veri[0]->tarih?>"  class="form-control" id="inputEmail3" placeholder="Tarih">
                          </div>
                        </div>
                        
                        
                        
                        
                         <div class="form-group">
                          <label for="inputEmail3" class="col-sm-2 control-label hor-form">Kategorisi</label>
                      	
                          <div class="col-sm-10">
                            <select class="form-control" name="kategori">
                          <option value="<?=$veri[0]->kategori?>" "<?=$veri[0]->katadi?>"> </option>
                          
                      	 <?php foreach ($veriler as $rs) { ?>
                      	    <option value="<?=$rs->Id?>">  <?=$rs->adi?> </option>
                          
                      	 <?php } ?>  
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
                            <button type="submit" class="btn btn-default">GÜNCELLE</button>
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
	