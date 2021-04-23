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
   <!--/contact-->
   <div id="content">
                <div class="container background-white">
                    <div class="row margin-vert-30">
                        <div class="col-md-12">
													<h4 class="white-w3ls">ÜYE <span>HESAP BİLGİLERİ</span></h4>
						<form action="<?=base_url()?>uye/uye_guncelle" method="post">
							<?php if($this->session->flashdata("mesaj")){?>
							<div class="callout callout-info">
								<p><span style="color:#8B008B" face="Verdana"><i><?=$this->session->flashdata("mesaj")?></i></span></p><br/>
							</div>
							<?php }?>
							<div class="styled-input agile-styled-input-top">
								<input type="text" value="<?=$uye[0]->adsoy?>" name="adsoy" required="">
								<label>Ad Soyad</label>
								<span></span>
							</div>
							<div class="styled-input agile-styled-input-top">
								<input type="text" value="<?=$uye[0]->tel?>" name="tel" required="">
								<label>Telefon</label>
								<span></span>
							</div>
							<div class="styled-input">
								<input type="email" value="<?=$uye[0]->email?>" name="eposta" required=""> 
								<label>Email</label>
								<span></span>
							</div> 
							<div class="styled-input">
								<input type="text" value="<?=$uye[0]->sifre?>" name="sifre" required="">
								<label>Şifre</label>
								<span></span>
							</div> 
							<div class="styled-input">
								<input type="text" value="<?=$uye[0]->adres?>" name="adres" required="">
								<label>Adres</label>
								<span></span>
							</div>
							<div class="styled-input">
								<input type="text" value="<?=$uye[0]->sehir?>" name="sehir" required="">
								<label>Şehir</label>
								<span></span>
							</div>
							<input type="submit" value="Bilgileri Güncelle">
						</form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- === END CONTENT === -->