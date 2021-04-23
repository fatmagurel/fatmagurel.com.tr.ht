
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
                                      
                                 
								<li>
								   <a href="<?=base_url()?>home/bize_yazin"class="fa-smile-o">BİZE YAZIN...</a>
                                </li>
                            
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
            <!-- End Top Menu -->
 <!-- === BEGIN CONTENT === -->
            <div id="content">
                <div class="container background-white">
                    <div class="row margin-vert-30">
                        <div class="col-md-12">
                            <h2>Bize İletmek İstediğiniz Bir Şey Yok Mu?</h2>
							 <span type="span" class="label label-info"><?= $this->session->flashdata("mesaj")?></span><br>  
                            <div class="row">
                      		 <form method="post" action="<?=base_url()?>home/mesaj_kaydet" class="form-horizontal">
							<div class="tab-content">
						            
									<div class="form-group">
									<br>
										<label for="inputName " class="col-sm-2 control-label hor-form">Adı Soyadı</label>
										<div class="col-sm-5">
										<input type="text" name="adsoy"  class="form-control">
										</div>
									</div>
					  
								
								
								 <div class="form-group">
										<label for="inputName " class="col-sm-2 control-label hor-form"><sup>*</sup>Email</label>
										<div class="col-sm-5">
										<input type="email" name="email"  class="form-control"  >
										</div>
									</div>
									
									<div class="form-group">
										<label for="inputName " class="col-sm-2 control-label hor-form">TEL</label>
										<div class="col-sm-5">
										<input type="text" name="tel"  class="form-control" >
										</div>
									</div>
									
									<div class="form-group">
										<label for="inputName " class="col-sm-2 control-label hor-form">Mesajınız</label>
										<div class="col-sm-5">
									    <textarea name="mesaj" rows="6" class="form-control"></textarea>
										<div class="panel-footer">
									<button type="submit" class ="btn btn-primary pull-right ">MESAJI GÖNDER</button>
								    </div>
									</div>
									</div>				 
							</form>
                        </div>
                              
                    </div>
                            <br>
                            <div class="row animate fadeInUp">
                                <h2 class="text-center margin-top-10">Siz hayal edin biz gerçekleştirelim...</h2>
                               
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>
            <!-- === END CONTENT === -->