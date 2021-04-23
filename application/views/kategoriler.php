   <div id="portfolio" class="bottom-border-shadow">
                <div class="container bottom-border">
				<div class="row padding-top-40">
					<div class="thumbnails">
                        <ul class="portfolio-group">
						
                            <!-- Portfolio Item -->
							<?php
							foreach ($random as $rs)
							{ ?>
							
                            <li class="portfolio-item col-sm-4 col-xs-6 margin-bottom-40">
                               <figure class="animate fadeInLeft">
							            <a class="zoomTool" href="<?=base_url()?>home/urundetay/<?=$rs->Id?>" height=357 title="add to cart">
										<span class="icon-search"></span>DETAY</a>
										 <a href="<?=base_url()?>home/urundetay/<?=$rs->Id?>">
                                        <img alt="image1" src="<?=base_url()?>uploads/<?=$rs->resim?>">
										</a>
										
										<h5><?=$rs->adi?><h5>
										<h4>
										  <a class="defaultBtn" href="<?=base_url()?>home/urundetay/<?=$rs->Id?>" title="click to view" ><span class="icon-zoom-in"></span></a>
                                          <a class="shopBtn" href="#" title="add to cart" ><span class="icon-plus"></span></a>
										  <span class="pull-right"><?=$rs->sfiyat?>TL</span>
										  </h4>
										
                                    </figure>
                               
                            </li>
							
							<?php } ?>
                           
                        </ul>
                    </div>
					</div>
                </div>
            </div>
   <!-- Top Menu -->
            <div id="hornav" class="bottom-border-shadow">
                <div class="container no-padding border-bottom">
                    <div class="row">
                        <div class="col-md-8 no-padding">
                            <div class="visible-lg">
                                <ul id="hornavmenu" class="nav navbar-nav">
								<?php
								  $anasayfa=null;
								  $iletisim=null;
								  $hakkimizda=null;
								  if ($menu=="anasayfa")
									  $anasayfa="active";
								  if ($menu=="hakkimizda")
									  $hakkimizda="active";
								  if ($menu=="iletisim")
									  $iletisim="active";
								  
								 ?> 
								
								
                                    <li class="<?=$anasayfa?>">
                                        <a href="<?=base_url()?>" class="fa-home active">ANASAYFA</a>
                                    </li>
                         <li>
                                        <span class="fa-bolt">KATEGORİLER</span>
                                        <ul>
                                            <li class="parent">
											    <?php foreach ($kategoriler as $rs) { ?>
                                            
											<a href="<?=base_url()?>home/kategoriler">  <span class="fa-angle-right" role="menuitem" tabindex="0"></span><?=$rs->adi?>
											</a> 
											    <?php } ?>
											</li>
										</ul>
						
							    <li class="<?=$hakkimizda?>">
                                    <a href="<?=base_url()?>home/hakkimizda"class="fa-smile-o">HAKKIMIZDA</a>
										
                                </li>
								  <li class="<?=$iletisim?>">
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
            <!-- === END HEADER === -->
            <!-- === BEGIN CONTENT === -->
            <div id="slideshow" class="bottom-border-shadow">
                <div class="container no-padding background bottom-border-shadow ">
                    <div class="row">
                        <!-- Carousel Slideshow -->
                        <div id="carousel-example" class="carousel slide" data-ride="carousel">
                            <!-- Carousel Indicators -->
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example" data-slide-to="1"></li>
                                <li data-target="#carousel-example" data-slide-to="2"></li>
                            </ol>
                            <div class="clearfix"></div>
                            <!-- End Carousel Indicators -->
                            <!-- Carousel Images -->
                            <div class="carousel-inner">
							   
							   <?php
							   $say=0;
							   $aktf=null;
							   foreach($kampanya as  $rs)
							   {   $say++;
							      if($say==1)
									 $aktf="active";
								 else
							         $aktf=null;
								 ?>
								 	 
                                <div class="item <?=$aktf?>">
								 <a href="<?=base_url()?>home/urundetay/<?=$rs->Id?>">
                                    <img style="width:100% " src="<?=base_url()?>uploads/<?=$rs->resim?>"></a>
									<h4><?=$rs->adi?></h4>
									
                                </div>
								
								 <?php } ?> 
							
                            </div>
                            <!-- End Carousel Images -->
                            <!-- Carousel Controls -->
                            <a class="left carousel-control" href="#carousel-example" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                            <!-- End Carousel Controls -->
                        </div>
                        <!-- End Carousel Slideshow -->
                    
                </div>
            </div>
          </div>
		   