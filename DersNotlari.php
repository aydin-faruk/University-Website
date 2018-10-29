<?php
	include 'header.php';
	include 'kontrol/baglan.php';
?>		

<div class="container">
    <div class="col-md-12">
        <hr />

        <h3 style="font-weight:600; text-align: -ms-center; text-align: center; text-align: -webkit-center; text-align: -moz-center; text-align: -o-center; text-align: -khtml-center;"><b> Ders Notları </b></h3>
        
		 <div class="row">
           
		   <div class="col-md-12">
                    <div style="min-height:450px; text-align: -ms-center; text-align: center; text-align: -webkit-center; text-align: -moz-center; text-align: -o-center; text-align: -khtml-center;">
                      
					  <div class="toogle" data-plugin-toggle="">
								<?php
										
										//$sorgu = mysqli_query($db,'SELECT * FROM dersnot d, akademikpersonel ap WHERE DurumTumDersNot=1 ORDER BY Baslik DESC');						
										$sorgu = mysqli_query($db,'SELECT * FROM akademikpersonel WHERE APersonelID!=5 ORDER BY Sira');						
										
										if( mysqli_num_rows($sorgu) > 0 ){
										  // sonuc kumesini donelim
										  while( $satir = mysqli_fetch_assoc($sorgu) )
										  {
											  
											$sorguSayi = mysqli_query($db,'SELECT COUNT(*) AS toplam FROM dersnot WHERE DurumAnasayfa=1 AND APersonelID='.$satir["APersonelID"]);										
											$sayi = mysqli_fetch_assoc($sorguSayi);
										
								?>
								<section class="toggle">
                                    <label style="text-align: left;"> <b>(<?php echo $sayi["toplam"] ?>)</b> <i class="fa fa-user"></i> <?php echo $satir["Unvan"]." ".$satir["Adi"]." ".$satir["Soyadi"]; ?> </label>
                                    <div class="toggle-content">
                                        <div class="container">
                                         <div class="col-md-12">
										 <?php
										 
										 $sorguNot = mysqli_query($db,'SELECT * FROM dersnot d, akademikpersonel ap WHERE d.APersonelID=ap.APersonelID AND ap.APersonelID='.$satir["APersonelID"].' AND DurumAnasayfa=1 ORDER BY Baslik');
										 
										 if(mysqli_num_rows($sorguNot) > 0)
										 { 
											 while( $getir = mysqli_fetch_assoc($sorguNot) )
											  {
										?>
											<div style="text-align: left; border: 2px solid #016d2f; max-width: 750px; margin-top: 10px;" class="feature-box secundary">
												<div class="feature-box-icon">
													<i class="fa fa-book"></i>
												</div>
												<div class="feature-box-info">
													<h6 class="shorter" style="cursor:pointer; margin-top: 10px; text-transform: uppercase;"><a data-toggle="modal" onclick="dgonder(<?php echo $getir["DersNotID"]; ?>);"><?php echo $getir["Baslik"]; ?></a></h6>
													<p class="tall"> <i class="fa fa-user"></i> <?php echo $getir["Unvan"]." ".$getir["Adi"]." ".$getir["Soyadi"]; ?></p>
												</div>
											</div>
											
										 <?php } 
										 }
											else
											{?>
												<div style="min-height:50px;">
												
													<h3 style="margin-top:10px;"> :( Üzgünüz Eklenmiş Ders Notu bulunmamaktadır.</h3>
												</div>
											
											<?php } ?>
										
													
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


<div id="DDetayModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content" id="DDetayId">
            
        </div>

    </div>
</div>


<script type="text/javascript" src="../../scripts/jquery-3.1.0.min.js"></script>
<script type="text/javascript">
   
        function dgonder(DuyuruID) {
            $.ajax({
                type: "GET",
                url: "DersNotDetayModal.php",
                data: {dersnotId: DuyuruID},
                contentType: "application/html; charset=utf-8",
                dataType: "html",
                success: function (msg) {
                    $("#DDetayId").empty();
                    $("#DDetayId").html(msg);
                    $("#DDetayModal").modal("show");
                    console.log(msg);
                }
            });
        }
    
</script>		
		
<?php
	include 'footer.php';
?>
