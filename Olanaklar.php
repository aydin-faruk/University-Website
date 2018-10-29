<?php
	include 'header.php';
?>
			
			
<div role="main" class="main">

    <div class="container">

        <div class="row">
            <div class="col-md-12"><hr class="tall" />
                <div class="container">
           		  	        <h3 style="font-weight:600; text-align: -ms-center; text-align: center; text-align: -webkit-center; text-align: -moz-center; text-align: -o-center; text-align: -khtml-center;"><b> OLANAKLAR </b></h3>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="toogle" data-plugin-toggle="">
								
								<?php						
									$sorgu = mysqli_query($db,"SELECT * FROM olanaklar ORDER BY Sira");						
									
									if( mysqli_num_rows($sorgu) > 0 ){
									  // sonuc kumesini donelim
									  while( $satir = mysqli_fetch_assoc($sorgu) )
									  {
								?>
                                <section class="toggle">
                                    <label> <?php echo $satir['Baslik'] ?></label>
                                    <div class="toggle-content">

                                        <div class="container" style="max-width: 95%; margin-left: -25px;">
                                            <div class="col-md-8">
                                                <?php echo $satir['Aciklama'] ?>
                                            </div>
											<div class="col-md-4">
												<?php 
													$sorguDosya = mysqli_query($db,"SELECT * FROM olanaklardosya where OlanakID=".$satir['OlanakID']);		
													if(mysqli_num_rows($sorguDosya) > 0) 
													{		
														while( $satirDosya = mysqli_fetch_assoc($sorguDosya))
														{	?>
																<div class="row lightbox" data-plugin-options='{"delegate": "a", "type": "image", "gallery": {"enabled": true}}'>
																	<a class="img-thumbnail push-bottom" href="<?php echo $satirDosya['DosyaYol']; ?>" data-plugin-options='{"type":"image"}'>
																		<img alt="" height="300" class="img-responsive" src="<?php echo $satirDosya['DosyaYol']; ?>">
																		<span class="zoom">
																			<i class="fa fa-search"></i>
																		</span>
																	</a>
																</div>	
												<?php } } ?>												
                                            </div>
                                        </div>
                                    </div>
                                </section>
									<?php } } ?>
                            </div>
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>

    </div>
    <hr class="tall" />

</div>


			
			
<?php
	include 'footer.php';
?>
