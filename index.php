<?php
	//ob_start("ob_gzhandler");  
	include 'header.php';
	include 'kontrol/baglan.php';
		
?>

	<div role="main" class="main">

		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="nivo-slider">
						<div class="slider-wrapper theme-default">
							<div id="nivoSlider" class="nivoSlider" style="max-height: 392px;">
							
							<?php						
						
							$sorguslayt = mysqli_query($db,"SELECT * FROM slayt WHERE Durum=1 ORDER BY Sira");						
							
							if( mysqli_num_rows($sorguslayt) > 0 ){
							 
							  while( $sorguslider = mysqli_fetch_assoc($sorguslayt) )
							  {					
								echo '<a href="'.$sorguslider["Link"].'" target="_blank"><img src="'.$sorguslider["ResimYolu"].'" data-thumb="'.$sorguslider["ResimYolu"].'" alt=""/></a>';
							  }
							}
							?>
						  </div>
							<div id="htmlcaption" class="nivo-html-caption"></div>
						</div>
					</div>
				</div>
			</div>

			
		</div>
	</div>
		

		  <div class="container">
			<div class="row">
			   
				<div class="col-md-7">
					<hr />

					<h3 style="font-weight:600; text-align: -ms-center; text-align: center; text-align: -webkit-center; text-align: -moz-center; text-align: -o-center; text-align: -khtml-center;">Genel Duyurular</h3>


					<div class="row">
						<div class="col-md-12">
							<div style="text-align: -ms-center; text-align: center; text-align: -webkit-center; text-align: -moz-center; text-align: -o-center; text-align: -khtml-center;">
									
						<?php						
								$suanTarih = date('Y-m-d');
								$sorgu = mysqli_query($db,"SELECT * FROM duyuru d, akademikpersonel ap WHERE d.APersonelID=ap.APersonelID AND d.Tarih<='".$suanTarih."' AND '".$suanTarih."'<=d.SonTarih ORDER BY d.Tarih DESC LIMIT 10");						
							
							if( mysqli_num_rows($sorgu) > 0 ){
							  // sonuc kumesini donelim
							  while( $satir = mysqli_fetch_assoc($sorgu) )
							  {
						?>
						
									<div style="text-align: left; border: 2px solid #016d2f; margin-top: 10px;" class="feature-box secundary">
										<div class="feature-box-icon">
											<i class="fa fa-bullhorn"></i>
											<?php 	 
													 $tarih1= strtotime(date('d.m.Y'));
													 $tarih2= strtotime($satir["Tarih"]);
													  
													 $fark=round(($tarih1-$tarih2)/86400);
													 
													 if($fark<2 && $fark>=0)
														echo "<span class='yeni-sp'>YENİ</span> ";
														 ?>
										</div>
										<div class="feature-box-info">
											<h6 class="shorter" style="cursor:pointer; margin-top: 10px; text-transform: uppercase;"><a data-toggle="modal" onclick="gonder(<?php echo $satir["DuyuruID"]; ?>);"><?php echo $satir["Baslik"]; ?></a></h6>
											<p class="tall"><i class="fa fa-calendar"></i> <?php echo date("d.m.Y", strtotime($satir["Tarih"])); ?>&emsp;<i class="fa fa-user"></i> <?php echo $satir["Unvan"]." ".$satir["Adi"]." ".$satir["Soyadi"]; ?></p>
										</div>
									</div>

							<?php } }?>
							
								<div style="text-align:right; border-bottom: 2px solid #016d2f; margin-top: 24px;" class="feature-box secundary">
									 <a href="TumDuyurular.php"><input type="button" value="Tüm Genel Duyurular" class="btn btn-primary btn-lg"></a>

									</div>
							</div>
							</div>

					</div>

				
	<div id="DetayModal" class="modal fade" role="dialog">
		<div class="modal-dialog">
				<!-- Modal content-->
				<div class="modal-content" id="DetayId">
				 
				 </div>	
			

		</div>
	</div>

	
<!--<div class="se-pre-con"></div>-->
	
	<script type="text/javascript" src="../../scripts/jquery-3.1.0.min.js"></script>
	<script type="text/javascript">
	   
			function gonder(DuyuruID) {
				$(".se-pre-con").fadeIn("slow");
				$.ajax({
					type: "GET",
					url: "DuyuruDetayModal.php", //#DetayModal #DetayId
					data: {duyuruId: DuyuruID},
					contentType: "application/html; charset=utf-8",
					dataType: "html",
					success: function (msg) {
						//$(".se-pre-con").fadeOut("fast");
						$("#DetayId").empty();
						$("#DetayId").html(msg);
						$("#DetayModal").modal("show");
						console.log(msg);
					}
					
				});
			}
		
	</script>
					
					
					
					
				</div>
				
				<div class="container">
					<div class="row">
						<div class="col-md-5">
										<hr />

										<h3 style="font-weight:600; text-align: -ms-center; text-align: center; text-align: -webkit-center; text-align: -moz-center; text-align: -o-center; text-align: -khtml-center;">Bölüm Duyuruları</h3>
					<div class="row">
						<div class="col-md-12">
							<div style="text-align: -ms-center; text-align: center; text-align: -webkit-center; text-align: -moz-center; text-align: -o-center; text-align: -khtml-center; min-height:300px;">
									
										   <?php						
						
										$sorgu = mysqli_query($db,"SELECT * FROM bolumduyuru bd, akademikpersonel ap WHERE bd.APersonelID=ap.APersonelID AND DurumAnasayfa=1 ORDER BY bd.Tarih DESC LIMIT 5");						
										
											if( mysqli_num_rows($sorgu) > 0 ){
											  
											  while( $satir = mysqli_fetch_assoc($sorgu) )
											  {
										?>
										   
											<div style="text-align: left; border:2px solid #016d2f; margin-top: 10px;" class="feature-box secundary">
												<div class="feature-box-icon">
													<i class="fa fa-university"></i>
													
													<?php 	 
													 $tarih1= strtotime(date('d.m.Y'));
													 $tarih2= strtotime($satir["Tarih"]);
													  
													 $fark=round(($tarih1-$tarih2)/86400);
													 
													 if($fark<2 && $fark>=0)
														echo "<span class='yeni-sp'>YENİ</span> ";
														 ?>
													
												</div>
												<div class="feature-box-info">
													<h6 class="shorter" style="cursor:pointer; margin-top: 10px; text-transform: uppercase;"><a data-toggle="modal" onclick="bdgonder(<?php echo $satir["BolumDuyuruID"]; ?>);"><?php echo $satir["Baslik"]; ?></a></h6>
													<p class="tall"> <i class="fa fa-calendar"></i> <?php echo date("d.m.Y", strtotime($satir["Tarih"])); ?>&emsp;<i class="fa fa-user"></i> <?php echo $satir["Unvan"]." ".$satir["Adi"]." ".$satir["Soyadi"]; ?></p>
												</div>
											</div>
										   <?php } }?>
											<div style="text-align:right; border-bottom: 2px solid #016d2f; margin-top: 24px;" class="feature-box secundary">
												<a href="TumBolumDuyurulari.php"><input type="button" value="Tüm Bölüm Duyuruları" class="btn btn-primary btn-lg"></a>
											</div>
										</div>
										
										
	<div id="BDDetayModal" class="modal fade" role="dialog">
		<div class="modal-dialog">

			<!-- Modal content-->
			<div class="modal-content" id="BDDetayId">
				
			</div>

		</div>
	</div>


	<script type="text/javascript" src="../../scripts/jquery-3.1.0.min.js"></script>
	<script type="text/javascript">
	   
			function bdgonder(DuyuruID) {
				$.ajax({
					type: "GET",
					url: "BDuyuruDetayModal.php",
					data: {bduyuruId: DuyuruID},
					contentType: "application/html; charset=utf-8",
					dataType: "html",
					success: function (msg) {
						$("#BDDetayId").empty();
						$("#BDDetayId").html(msg);
						$("#BDDetayModal").modal("show");
						console.log(msg);
					}
				});
			}
		
	</script>
										
										
										
							
								
								
								
							<hr />
							<h3 style="font-weight:600; text-align: -ms-center; text-align: center; text-align: -webkit-center; text-align: -moz-center; text-align: -o-center; text-align: -khtml-center;">ETKİNLİKLER</h3>
						

										<div style="text-align: -ms-center; text-align: center; text-align: -webkit-center; text-align: -moz-center; text-align: -o-center; text-align: -khtml-center; min-height:300px;">
											
											<?php						
						
											$sorgu = mysqli_query($db,"SELECT * FROM etkinlik WHERE DurumAnasayfa=1 ORDER BY Tarih DESC LIMIT 4");						
										
										if( mysqli_num_rows($sorgu) > 0 ){
										  // sonuc kumesini donelim
										  while( $satir = mysqli_fetch_assoc($sorgu) )
										  {
										?>
											<div style="text-align: left; border: 2px solid #016d2f; margin-top: 10px;" class="feature-box secundary">
												<div class="feature-box-icon">
													<i class="fa fa-users"></i>
													<?php 	 
													 $tarih1= strtotime(date('d.m.Y'));
													 $tarih2= strtotime($satir["Tarih"]);
													  
													 $fark=round(($tarih1-$tarih2)/86400);
													 
													 if($fark<6 && $fark>=0)
														echo "<span class='yeni-sp'>YENİ</span> ";
														 ?>
												</div>
												<div class="feature-box-info">
													<h6 class="shorter" style="cursor:pointer; margin-top: 10px; text-transform: uppercase;"><a data-toggle="modal" onclick="egonder(<?php echo $satir["EtkinlikID"]; ?>);"><?php echo $satir["Baslik"]; ?></a></h6>
													<p class="tall"> <i class="fa fa-calendar"></i> <?php echo date("d.m.Y", strtotime($satir["Tarih"])); ?></p>
												</div>
											</div>
											<?php } }?>
								<div style="text-align:right; border-bottom: 2px solid #016d2f; margin-top: 24px;" class="feature-box secundary">

												<a href="TumEtkinlikler.php"><input type="button" value="Tüm Etkinlikler" class="btn btn-primary btn-lg"> </a>
											</div>
										</div>
						
						
	<div id="EDetayModal" class="modal fade" role="dialog">
		<div class="modal-dialog">

			<!-- Modal content-->
			<div class="modal-content" id="EDetayId">
				
			</div>

		</div>
	</div>


	<script type="text/javascript" src="../../scripts/jquery-3.1.0.min.js"></script>
	<script type="text/javascript">
	   
			function egonder(DuyuruID) {
				$.ajax({
					type: "GET",
					url: "EtkinlikDetayModal.php",
					data: {etkinlikId: DuyuruID},
					contentType: "application/html; charset=utf-8",
					dataType: "html",
					success: function (msg) {
						$("#EDetayId").empty();
						$("#EDetayId").html(msg);
						$("#EDetayModal").modal("show");
						console.log(msg);
					}
				});
			}
		
	</script>									
				</div>
			 </div>
		   </div>
	  </div>
	</div>
</div>
		  </div> 
	<hr />

	<?php
		include 'footer.php';
	?>
