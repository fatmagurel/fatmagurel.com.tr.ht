<!-- Top Menu -->
            <div id="hornav" class="bottom-border-shadow">
                <div class="container no-padding border-bottom">
                    <div class="row">
                        <div class="col-md-8 no-padding">
                            <div class="visible-lg">
                                <ul id="hornavmenu" class="nav navbar-nav">
                                    <li class="parent">
                                        <a href="<?=base_url()?>" class="fa-home active">ANASAYFA</a>
                                    </li>
                     <li>
                                        <span class="fa-bolt">KATEGORİLER</span>
                                        <ul>
                                            <li class="parent">
											    <?php foreach ($kategoriler as $rs) {?>
                                            
											<a href="<?=base_url()?>kategori/><?=$rs->Id?>">  <span class="fa-angle-right" role="menuitem" tabindex="0"></span><?=$rs->adi?>
											</a> 
											    <?php } ?>
											</li>
										</ul>
									
								
                                            
                                    <li class="parent">
                                        <a href="<?=base_url()?>home/hakkimizda"class="fa-smile-o">HAKKIMIZDA</a>
										
                                    </li>
									 <li class="parent">
                                    <a href="<?=base_url()?>home/iletisim"class="fa-comments">İLETİŞİM</a>
										
                                    </li>
									
									   <li  class="parent">
                                      
                                  <span class="fa-key">GİRİŞ YAP</span>
                            <ul>
							    <li>
                                  <a href="<?=base_url()?>home/kayit"class="fa-smile-o">KAYIT OL</a> 
								</li>
						
								<li>
								   <a href="<?=base_url()?>home/bize_yazin"class="fa-smile-o">BİZE YAZIN...</a>
                                </li>
                            </ul>
                                   </li>
					</li>		 
                                 
									
								
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-4 no-padding">
                            <ul class="social-icons pull-right"> 
                                <li class="social-twitter">
                                    <a href="#" target="_blank" title="Twitter"></a>
                                </li>
                                <li class="social-facebook">
                                    <a href="#" target="_blank" title="Facebook"></a>
                                </li>
                                <li class="social-googleplus">
                                    <a href="#" target="_blank" title="Google+"></a>
                                </li>
								<li class="social-pinterest">
                                    <a href="#" target="_blank" title="Pinterest"></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
			
			
 <div id="page-wrapper" class="gray-bg dashbard-1">
       <div class="content-main">
  
 
 	 <!--faq-->
 	<div class="blank">
			  <div class="grid-form1">
<h3 id="forms-horizontal">Teslimat Bilgileri</h3>
<form class="form-horizontal" method="post" action="<?=base_url()?>uye/siparis_tamamla">
<?php
			if ($this->session->flashdata("mesaj"))
			{ ?>
		   <div class="callout-info">
		     <p> <?=$this->session->flashdata("mesaj")?></p>
			</div>
			<?php } ?> 
			
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label hor-form">Adı Soyadı</label>
    <div class="col-sm-10">
      <input type="text" name='adsoy' value="<?=$uye[0]->adsoy?>"  class="form-control" id="inputEmail3" placeholder="Adı Soyadı">
    </div>
  </div>
  
  
  
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label hor-form">Telefon</label>
    <div class="col-sm-10">
      <input type="text" name='tel' value="<?=$uye[0]->tel?>" class="form-control" id="inputEmail3" placeholder="Telefon">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label hor-form">Adres</label>
    <div class="col-sm-10">
      <input type="text" name='adres' value="<?=$uye[0]->adres?>" class="form-control" id="inputEmail3" placeholder="Adres">
    </div>
  </div>
  
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label hor-form">Sehir</label>
    <div class="col-sm-10">
      <input type="text" name='sehir' value="<?=$uye[0]->sehir?>" class="form-control" id="inputEmail3" placeholder="Sehir">
    </div>
  </div>
 
    <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label hor-form">Toplam Tutar</label>
    <div class="col-sm-10">
      <input type="text" name='toplam' readonly value="<?=$toplam?>" >
    </div>
  </div>
  
 ************************
 * KREDİ KARTI BİLGİLERİ*
 ************************  
   
   
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <input type="submit" name="submitAccount" value="SİPARİŞİ TAMAMLA" class="exclusive shopBtn"> 
    </div>
  </div>
  
</form>
</div>
			
	       </div>
		   
	</div>
</div>
	