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
  <!-- === BEGIN CONTENT === -->
            <div id="content">
                <div class="container background-white">
                    <div class="container">
                        <div class="row margin-vert-30">
						 <div class="col-md-6 col-md-offset-3 col-sm-offset-3">
						 <form class="form horizontal loginFrm" method="post" action="<?=base_url()?>home/login">
						 
							 <div class="login-header margin-bottom-30">
                                        <h2>Sisteme Giriş Yapınız</h2>
										 
                                    </div>
									 <div class="input-group margin-bottom-20">
									 <strong><?= $this->session->flashdata("mesaj")?></strong> 
                                        <span class="input-group-addon">
                                            <i class="fa fa-user"></i>
                                        </span>
                                        <input placeholder="Username" name="eposta" class="form-control" type="text">
                                    </div>
                                    <div class="input-group margin-bottom-20">
                                        <span class="input-group-addon">
                                            <i class="fa fa-lock"></i>
                                        </span>
                                        <input placeholder="Password" name="sifre" class="form-control" type="password">
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label class="checkbox">
                                                <input type="checkbox">Beni Hatırla</label>
                                        </div>
										
						
                                        <div class="col-md-6">
                                            <button class="btn btn-primary pull-right" type="submit">Giriş</button>
                                        </div>
                                    </div>
                                    <hr>
                                    <h4>Şifremi Unuttum</h4>
                                    <p>
                                        <a href="#">Click here</a>to reset your password.</p>
							</form>	
                            
						
                            <!-- End Login Box -->
                        </div>
                    </div>
                </div>
            </div>
			</div>
            <!-- === END CONTENT === -->