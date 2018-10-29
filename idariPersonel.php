<?php
	include 'header.php';
	include 'kontrol/baglan.php';
?>
			
			
<div role="main" class="main">

    <div class="container">

        <div class="row">
	
		<div class="col-md-12">
		
		  <hr class="tall" />
		  	        <h3 style="font-weight:600; text-align: -ms-center; text-align: center; text-align: -webkit-center; text-align: -moz-center; text-align: -o-center; text-align: -khtml-center;"><b> İDARİ PERSONEL </b></h3>
				
			<?php 
										
				$sorgu = mysqli_query($db,"SELECT * FROM idaripersonel ORDER BY Sira");						
										
				if( mysqli_num_rows($sorgu) > 0 ){
					// sonuc kumesini donelim
					while( $satir = mysqli_fetch_assoc($sorgu) )
					{
			?>	
				<div class="col-md-4">
					<div class="panel-group secundary" id="accordion2">
									<div class="panel panel-default">
										<div class="panel-heading">
											<h4 class="panel-title">
												<a class="accordion-toggle">
													<?php echo $satir["Gorev"] ?>
												</a>
											</h4>
										</div>
										<div id="collapse2One" class="accordion-body collapse in">
											<div class="panel-body">
													<div class="col-md-12" style="text-align: -webkit-center;">
														<img src="<?php 
																		if($satir["ResimYolu"]==null)
																			echo "Dosyalar/empty.png";
																		else
																			echo $satir["ResimYolu"]; ?>" style="height: 171px; max-width: 99%;"/>
													</div>
													<div class="col-md-12">
														<a href="<?php 
																if($satir["WebAdresi"]==null)
																			echo "#";
																		else
																			echo $satir["WebAdresi"]; ?>" target="_blank"><input type="button" value="<?php if($satir["Unvan"]=="Sekreter") $unvan=""; else $unvan=$satir["Unvan"]; echo $unvan." ".$satir["Adi"]." ".$satir["Soyadi"]; ?>" class="btn btn-primary btn-lg btn-block"></a>									
													</div>
													<div class="col-md-12" style="text-align: -webkit-center; margin-top:5px;">
														<p><?php 
																if($satir["DahiliTel"]==null)
																			echo "-";
																		else
																			echo $satir["DahiliTel"]; ?>
														</p>
													</div>
													<div class="col-md-12" style="text-align: -webkit-center;">
														<p style="margin-top: -15px;"><a href="mailto:<?php echo $satir["Eposta"]; ?>">
														<?php 
																if($satir["Eposta"]==null)
																			echo "-";
																		else
																			echo $satir["Eposta"]; ?> </a></p>
													</div>
											</div>
										</div>
									</div>
					</div>	
				</div>
										<?php } } ?>
			</div>	

        </div>

    </div>
    <hr class="tall" />

</div>


<?php
	include 'footer.php';
?>
