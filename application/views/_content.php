<!-- Portfolio -->
            <div id="portfolio" class="bottom-border-shadow">
                <div class="container bottom-border">
				<div class="thumbnail">
                    <div class="row padding-top-40">
                        <ul class="portfolio-group">
						
                            <!-- Portfolio Item -->
							<?php
							foreach ($yeni as $rs)
							{ ?>
							
                            <li class="portfolio-item col-sm-4 col-xs-6 margin-bottom-40">
                               <figure class="animate fadeInLeft">
							            <a class="zoomTool" href="<?=base_url()?>home/urundetay/<?=$rs->Id?>" height=357 title="add to cart">
										<span class="icon-search"></span><?=$rs->adi?></a>
										 <a href="#" class="tag"></a>
										 <a href="<?=base_url()?>home/urundetay/<?=$rs->Id?>">
                                        <img alt="image1" src="<?=base_url()?>uploads/<?=$rs->resim?>">
										</a>
										<?=$rs->adi?>
                                        <figcaption>
                                            <h3>Size özel tasarım mobilyalar...</h3>
                                            <span>Farklı tarzda yüzlerce çeşit markadan dilediğinizi seçin...</span>
                                        </figcaption>
                                    </figure>
                                
                            </li>
							
							<?php } ?>
                           
                        </ul>
                    </div>
					</div>
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
            <!-- End Portfolio -->
            <!-- === END CONTENT === -->