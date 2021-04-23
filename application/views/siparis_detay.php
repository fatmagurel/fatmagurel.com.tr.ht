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
			
<!---content--->			
<!-- banner-bootom-w3-agileits -->
<div id="content">
                <div class="container background-white">
                    <div class="row margin-vert-30">
                        <div class="col-md-12">
						<!-- banner-bootom-w3-agileits -->
<div class="banner-bootom-w3-agileits">
	<div class="container">
	<div class="well well-small">
		<?php if($this->session->flashdata("mesaj")){?>
		<div class="callout callout-info">
			<p><?=$this->session->flashdata("mesaj")?></p>
		</div>
		<?php }?>
		<table class="table table-bordered">
		<tbody>
			<tr>
				<th style="width: 10px">Nr</th>
				<th>Adı</th>
				<th>Fiyat</th>
				<th>Miktar</th>
				<th>Tutar</th>
				<th>İptal</th>
			</tr>
		<?php 
		$rn=0;
		$toplam=0;
		foreach($veriler as $rs)
		{
			$rn++;
			$toplam+=$rs->tutar;
		?>
			<tr>
				<td style="width: 10px"><?=$rn?></td>
				<td><?=$rs->adi?></td>
				<td><?=$rs->fiyat?> TL</td>
				<td><?=$rs->adet?></td>
				<td><?=$rs->tutar?>TL</td>
				<td><a href="<?=base_url()?>uye/siparis_iptal/<?=$rs->Id?>" onclick="return confirm('İptal Edilecek Emin Misin?')" class="btn btn-block btn-danger btn-xs"><i class="fa fa-remove"></i>İptal</a>
				</td>
			</tr>
		<?php 
		}?>
		</tbody>
		</table>
		Sipariş Toplamı :<?=$toplam?>TL
	</div>
	</div>
 </div>
<!--//single_page-->