<?php

        $this->load->view('admin\_header');
		$this->load->view('admin\_sidebar');
?>
 <div id="page-wrapper" class="gray-bg dashbard-1">
       <div class="content-main">
 
 	<!--banner-->	
		     <div class="banner">
		    	<h2>
				<a href="index.html">Home</a>
				<i class="fa fa-angle-right"></i>
				<span>Üyeler</span>
				</h2>
		    </div>
		<!--//banner-->
 	 <!--faq-->
 	<div class="blank">


			<div class="blank-page">
				
	        	<p>Üye Listesi<br>
        <strong><?= $this->session->flashdata("mesaj")?></strong>         
        </p>

	        </div>
			<div class="panel panel-pink">
             <div class="panel-heading"><a href="<?=base_url()?>admin/uyeler/ekle" class="btn btn-lg btn-success warning_1"><i class="fa fa-male"></i> Üye Ekle</a> </div>
							
							
							
                            <div class="panel-body">
                                <table class="table table-hover table-condensed">
                                    <thead>
                                    <tr>
                                        <th style="width:10 px"> S.No</th>
                                        <th>Adı Soyadı</th>
                                        <th>Email</th>
                                        <th>Telefon</th>
										<th>Şehir</th>
										<th>Yetki</th>
										<th>Durum</th>
										<th>Düzenle</th>
										<th>Sil</th>
                                    </tr>
								<?php
								$sno=0;
								foreach ($veriler as $rs)
								{ $sno++;
								?>
									 <tr>
                                       <td style="width:10px"><?=$sno?></td>
                                        <td><?=$rs->adsoy?></td>
                                        <td><?=$rs->email?></td>
                                        <td><?=$rs->tel?></td>
										<td><?=$rs->sehir?></td>
										<td><?=$rs->yetki?></td>
										<td><?=$rs->durum?></td>
										<td><a href="<?=base_url()?>admin/uyeler/duzenle/<?=$rs->Id?>" class="btn btn-sm btn-warning warning_33"> <i class= "fa fa-edit"></i> Düzenle</a></td>
										<td><a href="<?=base_url()?>admin/uyeler/sil/<?=$rs->Id?>" onclick="return confirm('Silinmesini istiyor musun?')" class="btn btn-sm btn-danger" > <i class= "fa fa-remove"></i> Sil</a></td>
										
                                        			
                                    </tr>
								<?php } ?>	
                                    </thead>
                                    <tbody>
                                   
                                    </tbody>
                                </table>
                            </div>
                        </div>
	       </div>
		   
	</div>
	<div>

	<?php
	$this->load->view('admin\_footer');
	?>