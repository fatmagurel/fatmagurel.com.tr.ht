
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
                            <h2>İletişim</h2>
                            <div class="row">
                                <div class="col-md-6 animate fadeIn">
								
				 <ul class="list-inline about-me-icons margin-vert-20">
							
                                        <li>
                                            <a href="#">
                                                <i class="fa-lg fa-border fa-linkedin"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa-lg fa-border fa-facebook"></i>
                                            </a>
                                        </li>
                                     
                                        <li>
                                            <a href="#">
                                                <i class="fa-lg fa-border fa-google-plus"></i>
                                            </a>
                                        </li>
                                    </ul>
			</div>
                                
                                </div>
                                <div class="col-md-16 margin-bottom-10 animate fadeInRight">
                                    <h3 class="padding-top-10 pull-left">Modeko
                                        <small>Mobilya Sitesi</small>
                                    </h3>
                                    <div class="clearfix"></div>
                                    <h4>
                                        <em><?=$veri[0]->iletisim?></em>
                                    </h4>
                                   
							   </div>
                            </div>
                            
                            <div class="row animate fadeInUp">
                                <h2 class="text-center margin-top-10">Siz hayal edin biz gerçekleştirelim...</h2>
                               
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>
            <!-- === END CONTENT === -->