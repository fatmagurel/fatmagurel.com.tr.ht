<?php 
 $this->load->view('_header');
 ?>
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
            <!-- End Top Menu -->
 <!-- === BEGIN CONTENT === -->
             
            <div id="content">
                <div class="container background-white">
                    <div class="row margin-vert-30">                   
     <div class="well well-small">
	<div class="row-fluid">
			<div class="span5">
			<div id="myCarousel" class="carousel slide cntr">
                <div class="carousel-inner">
				
                  <div class="item active">
                   <a href="#"> <img src="<?=base_url()?>uploads/<?=$veri[0]->resim?>" style="width:100%"></a>
                  </div>
				  
				   <?php foreach ($kategoriler as $rs) {?>
                                            
											<a href="<?=base_url()?>kategori/><?=$rs->Id?>">  <span class="fa-angle-right" role="menuitem" tabindex="0"></span><?=$rs->adi?>
											</a> 
											    <?php } ?>
				  
				  
				  
				  </div>
                
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">‹</a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">›</a>
            </div>
			
			</div>
			<div class="span7">
				<h3><?=$veri[0]->adi?></h3>
				<hr class="soft">
				
				<form class="form-horizontal qtyFrm" method="post" action="<?=base_url()?>uye/sepete_ekle"  >
				  <div class="control-group">
					<label class="control-label"><span><?=$veri[0]->sfiyat?>TL</span></label>
					<br>
					<div class="controls"> 
					<input type="hidden" name="urunid" value="<?=$veri[0]->Id?>" class="span6" >
					<label class="control-label"><span>Stok Miktarı:<?=$veri[0]->stok?>Adet:</span></label>
					<input type="number" name="miktar" value="1" class="span6" placeholder="Qty" min="1" max= "<?=$veri[0]->stok?>"> Adet
					</div>
				  </div>
				
				  <div class="control-group">
					<label class="control-label"><span>Color</span></label>
					<div class="controls">
					  <select class="span11">
						  <option>Ahşap</option>
						  <option>Beyaz</option>
						  <option>Ladin</option>
						  <option>Kestane</option>
						</select>
					</div>
				  </div>
				 
			
				  <h4>Katagorisi:<?=$veri[0]->katadi?></h4>
				 
				  </p> <button type="submit" class="fa-credit-card"><span class=" icon-shopping-cart"></span> Add to cart</button>
				  </p> <button type="submit" value="sepete Ekle"><span class=" fa-shopping-cart"></span> Sepete Ekle</button>
				</form>
			</div>
			</div>
				<hr class="softn clr">


            <ul id="productDetail" class="nav nav-tabs">
              <li class="active"><a href="#genel" data-toggle="tab">Ürün Açıklaması</a></li>
			  <li><a href="#reviews" data-toggle="tab">Yorumlar</a></li>
        
			  <li class=""><a href="#yorum" data-toggle="tab">Yapılan Yorumlar </a></li>
             
            </ul>
            <div id="myTabContent" class="tab-content tabWrapper">
            <div class="tab-pane fade active in" id="genel">
			  <h4>Ürün Açıklama</h4>
			  <?=$veri[0]->aciklama?>
			  </div>
			  <div class="tab-pane fade" id="reviews" >
								<div class="table table-striped">
									<ul>
										<li><a href=""><i class="fa fa-user"></i></a></li>
										<li><a href=""><i class="fa fa-clock-o"></i>12:41 PM</a></li>
										<li><a href=""><i class="fa fa-calendar-o"></i>31 DEC 2014</a></li>
									</ul>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
									<p><b>Yorum Yaz</b></p>
									 <span type="span" class="label label-info"><?= $this->session->flashdata("mesaj")?></span><br>
									<form method="post" action="<?=base_url()?>home/yorum_kaydet/<?=$veri[0]->Id?>" class="form-horizontal">
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
										<label for="inputName " class="col-sm-2 control-label hor-form">Yorumunuz</label>
										<div class="col-sm-5">
									    <textarea name="yorum" rows="6" class="form-control"></textarea>
										<div class="panel-footer">
									<button type="submit" class ="btn btn-primary pull-right ">GÖNDER</button>
								    </div>
									</div>
									</div>				 
							</form>
									
								</div>
							</div>
							</div>
			  <div class="tab pane fade " id="yorum">
			  <h4> Yapılan Yorumlar</h4></a>
                <div class="table table-striped">
				<div class="panel panel-default">
                                            <div class="panel-heading">
                                                
                                            </div>
                                            <div id="collapse-One" class="accordion-body collapse in">
                                                <div class="panel-body">
                                                    <p>
													<?php
													 foreach($veri as  $rs)
							   {?>
								 <div class="item">
								 <a href="#"> <label " <?=$rs->yorum?>"></label></a>
							      </div>
								
								 <?php } ?> 
													</p>
                                                </div>
                                            </div>
                                        </div>
				</table>

			</div>			
			</div>
			</div>
		
			
		
		
		</div>
		</div>
		</div>
		</div>
		
	
           
           

							 
							 
							 
	<?php 
 $this->load->view('_footer');
 ?>						 
							 
							 
							 
							 
							 
							 
							 
							 
							 
                        

                    
            <!-- === END CONTENT === -->