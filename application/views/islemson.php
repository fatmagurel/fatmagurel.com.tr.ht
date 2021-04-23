
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
                            <
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
                                        <!-- banner-bootom-w3-agileits -->
													<div class="banner-bootom-w3-agileits">
														<div class="container">
														<div class="well well-small">
															<ul class="breadcrumb">
																<li><a href="<?=base_url()?>">Home</a><span class="divider"></span></li>
																<li class="active">Sipariş Alındı</li>
															</ul>
															 <!-- banner-bootom-w3-agileits -->
															<div class="banner-bootom-w3-agileits">
																<div class="container">
																<ul class="breadcrumb">
																	<li><a href="<?=base_url()?>">Home</a><span class="divider"></span></li>
																	<li class="active">Sipariş Onayı</li>
																	<center><p>Siparişiniz Tamamlanmıştır</p>
																<p>Bizi Tercih Ettiğiniz İçin Teşekkür Ederiz</p>
																<p>Ürününüz En Kısa Sürede Size İletilecektir</p>
																</center>
																</ul>
																</div>
															 </div>
														</div>
														</div>
													 </div>
													<!--//single_page--></em>
                                    
                            <div class="row animate fadeInUp">
                                <h2 class="text-center margin-top-10">Siz hayal edin biz gerçekleştirelim...</h2>
                               
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>
            <!-- === END CONTENT === -->