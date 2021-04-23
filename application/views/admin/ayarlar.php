 <?php

        $this->load->view('admin\_header');
		$this->load->view('admin\_sidebar');
?>
	<script src="<?=base_url()?>ckeditor/ckeditor.js"></script>

<div id="page-wrapper" class="gray-bg dashbard-1">
  <div class="content-main">
 
 	<!--banner-->	
		     <div class="banner">
		    	<h2>
				<a href="index.html">Home</a>
				<i class="fa fa-angle-right"></i>
				<span>Site Ayarları</span>
				</h2>
		    </div>
		<!--//banner-->
 	 <!--faq-->
 	<div class="blank">
 
	    <div class="grid_3 grid_5">
	     <h3 class="head-top">Site</h3>
	     
						<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
								<ul id="myTab" class="nav nav-tabs" role="tablist">
								  <li role="presentation" class="active"> <a href="#genel" data-toggle="tab"  aria-expanded="false">Genel</a></li>
								  <li role="presentation"> <a href="#email" data-toggle="tab" aria-controls="email" aria-expanded="false">Email</a></li>
								  <li role="presentation"><a href="#sosyal " data-toggle="tab" aria-controls="sosyal" aria-expanded="false">Sosyal </a></li>
								  <li class=""><a href="#iletisim"  data-toggle="tab" aria-controls="iletisim" aria-expanded="true">İletişim</a></li>
								  <li class=""><a href="#hakkimizda"  data-toggle="tab" aria-controls="hakkimizda" aria-expanded="false">Hakkımızda</a></li>
								   
								  
								</ul>
								
								
							 <form method="post" action="<?=base_url()?>admin/Home/ayarlar_guncelle/<?=$veri[0]->Id?>" class="form-horizontal">
							<div class="tab-content">
								<div class="tab-pane active" id="genel">
							 
									<div class="form-group">
										<label for="inputName " class="col-sm-2 control-label hor-form">Adı</label>
										<div class="col-sm-10">
										<input type="text" name="adi" value="<?=$veri[0]->adi?>" class="form-control" id="inputName" placeholder="Name">
										</div>
									</div>
					  
									<div class="form-group">
										<label for="inputName " class="col-sm-2 control-label hor-form">Adres</label>
										<div class="col-sm-10">
										<input type="text" name="adres" value="<?=$veri[0]->adres?>" class="form-control" id="inputName" placeholder="Adres">
										</div>
									</div>
					  
									<div class="form-group">
										<label for="inputName " class="col-sm-2 control-label hor-form">Keywords</label>
										<div class="col-sm-10">
										<input type="text" name="keywords" value="<?=$veri[0]->keywords?>" class="form-control" id="inputName" placeholder="Keywords">
										</div>
									</div>
					  
									<div class="form-group">
										<label for="inputName " class="col-sm-2 control-label hor-form">Telefon</label>
										<div class="col-sm-10">
										<input type="text" name="tel" value="<?=$veri[0]->tel?>" class="form-control" id="inputName" placeholder="Telefon">
										</div>
									</div>
					  
					   
									<div class="form-group">
										<label for="inputEmail3" class="col-sm-2 control-label hor-form">Şehir</label>	
										<div class="col-sm-10">
										<input type="text" name="sehir" value="<?=$veri[0]->sehir?>" class="form-control" id="inputName" placeholder="Sehir"></input>
										</div>
									</div>
					  
								</div>
								
								 <div class="tab-pane" id="email">                       
								    <div class="form-group">
										<label class="col-md-3 control-label">Smtpserver</label>
										<div class="col-md-6 col-xs-12">
									    <input type="text" class="form-control" value="<?=$veri[0]->smtpserver?>" name="smtpserver"/>
										</div>
									</div> 
									<div class="form-group">
										<label class="col-md-3 control-label">Smtpemail</label>
										<div class="col-md-6 col-xs-12">
										<input type="text" class="form-control" value="<?=$veri[0]->smtpemail?>" name="smtpemail"/>
								        </div>
								    </div>
									<div class="form-group">
										<label class="col-md-3 control-label">Port</label>
										<div class="col-md-6 col-xs-12">
										<input type="text" class="form-control" value="<?=$veri[0]->smtpport?>" name="smtpport"/>
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-3 control-label">Şifre</label>
										<div class="col-md-6 col-xs-12">
										<input type="password" class="form-control" value="<?=$veri[0]->password?>" name="password"/>
								        </div> 	
									</div>
								</div>
								
								<div class="tab-pane" id="sosyal">                       
								    <div class="form-group">
										<label class="col-md-3 control-label">Twitter</label>
										<div class="col-md-6 col-xs-12">
									    <input type="text" class="form-control" value="<?=$veri[0]->twitter?>" name="twitter"/>
										</div>
									</div> 
									<div class="form-group">
										<label class="col-md-3 control-label">Facebook</label>
										<div class="col-md-6 col-xs-12">
										<input type="text" class="form-control" value="<?=$veri[0]->facebook?>" name="facebook"/>
								        </div>
								    </div>
									<div class="form-group">
										<label class="col-md-3 control-label">İnstagram</label>
										<div class="col-md-6 col-xs-12">
										<input type="text" class="form-control" value="<?=$veri[0]->instagram?>" name="instagram"/>
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-3 control-label">Pinterest</label>
										<div class="col-md-6 col-xs-12">
										<input type="text" class="form-control" value="<?=$veri[0]->pinterest?>" name="pinterest"/>
								        </div> 	
									</div>
								</div>
								
								
								<div class="tab-pane" id="hakkimizda">
								    Hakkımızda Bilgileri
								    <textarea name="ckeditor" id="ckeditor" rows="15" cols="80">
								        <?=$veri[0]->hakkimizda?>
								    </textarea>
									 <script>
									 CKEDITOR.replace('ckeditor');
									  </script>
								</div>
								
								<div class="tab-pane" id="iletisim">
								    İletişim Bilgileri
								    <textarea name="ckeditor1" id="ckeditor1" rows="15" cols="80">
								        <?=$veri[0]->iletisim?>
								    </textarea>
									 <script>
									 CKEDITOR.replace('ckeditor1');
									  </script>
								</div>
								
														 
								<div class="panel-footer">
									<button type="submit" class ="btn btn-primary pull-right ">GÜNCELLE</button>
								</div>	
							
							
							</form>
							
						</div>
							
						
					</div>
	   
	    
	 
	
	    </div>
     </div>
   
  </div>
</div>