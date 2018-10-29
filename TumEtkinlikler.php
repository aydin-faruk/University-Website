<?php
	include 'header.php';
	include 'kontrol/baglan.php';
?>

<?php

	$sayfada =10; // sayfada gösterilecek içerik miktarını belirtiyoruz.
 
	$sorgu = mysqli_query($db,'SELECT COUNT(*) AS toplam FROM etkinlik');
	$sonuc = mysqli_fetch_assoc($sorgu);
	$toplam_icerik = $sonuc['toplam'];
	 
	$toplam_sayfa = ceil($toplam_icerik / $sayfada);
	
	// eğer sayfa girilmemişse 1 varsayalım.
	$sayfa = isset($_GET['sayfa']) ? (int) $_GET['sayfa'] : 1;
	
	// eğer 1'den küçük bir sayfa sayısı girildiyse 1 yapalım.
	if($sayfa < 1) $sayfa = 1; 
	 
	// toplam sayfa sayımızdan fazla yazılırsa en son sayfayı varsayalım.
	if($sayfa > $toplam_sayfa) $sayfa = $toplam_sayfa; 
	
	// kaçıncı içerikten başlanacağını ifade edecek limit değeri.
	$limit = ($sayfa - 1) * $sayfada;
	 	 
	// yukarıdan geldiği varsayılan değişkenler:
	// $toplam_sayfa ve $sayfa
 
	$sayfa_goster = 11; // gösterilecek sayfa sayısı
	 
	$en_az_orta = ceil($sayfa_goster/2);
	$en_fazla_orta = ($toplam_sayfa+1) - $en_az_orta;
	 
	$sayfa_orta = $sayfa;
	if($sayfa_orta < $en_az_orta) $sayfa_orta = $en_az_orta;
	if($sayfa_orta > $en_fazla_orta) $sayfa_orta = $en_fazla_orta;
	 
	$sol_sayfalar = round($sayfa_orta - (($sayfa_goster-1) / 2));
	$sag_sayfalar = round((($sayfa_goster-1) / 2) + $sayfa_orta); 
	 
	if($sol_sayfalar < 1) $sol_sayfalar = 1;
	if($sag_sayfalar > $toplam_sayfa) $sag_sayfalar = $toplam_sayfa; 
		
?>

		
		
		<div>

    <div class="col-md-12">
        <hr />

        <h3 style="font-weight:600; text-align: -ms-center; text-align: center; text-align: -webkit-center; text-align: -moz-center; text-align: -o-center; text-align: -khtml-center;"><b> Tüm Etkinlikler </b></h3>
        <div class="row">
            <div class="col-md-12">

                    <div style="min-height:450px; text-align: -ms-center; text-align: center; text-align: -webkit-center; text-align: -moz-center; text-align: -o-center; text-align: -khtml-center;">
                   	<?php						
						$sorgu = mysqli_query($db,'SELECT * FROM etkinlik WHERE DurumTumEtkinlik=1 ORDER BY Tarih DESC LIMIT '.$limit.','.$sayfada);							
						if( mysqli_num_rows($sorgu) > 0 ){
							  // sonuc kumesini donelim
							  while( $satir = mysqli_fetch_assoc($sorgu) )
						   {
						?>          
                            <div style="text-align: left; border: 2px solid #016d2f; max-width: 750px; margin-top: 10px;" class="feature-box secundary">
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
                                    <p class="tall"> <i class="fa fa-calendar"></i> <?php echo date("d.m.Y", strtotime($satir["Tarih"])); ?>&emsp;</p>
                                </div>
                            </div>
						<?php } }
						
							echo '<div style="text-align:center;">';
								
								if($sayfa != 1) echo '								
											<a href="TumEtkinlikler.php?sayfa=1"><input type="button" value="İlk sayfa" class="btn btn-primary btn-lg"></a>';
											
								if($sayfa != 1) echo '
											<a href="TumEtkinlikler.php?sayfa='.($sayfa-1).'"><input type="button" value="Önceki" class="btn btn-primary btn-lg"></a>';
											
								if($sayfa != $toplam_sayfa) echo '
											<a href="TumEtkinlikler.php?sayfa='.($sayfa+1).'"><input type="button" value="Sonraki" class="btn btn-primary btn-lg"></a>';
								
								if($sayfa != $toplam_sayfa) echo '<a href="TumEtkinlikler.php?sayfa='.$toplam_sayfa.'"><input type="button" value="Son sayfa" class="btn btn-primary btn-lg"></a>';
										
								echo '</div> <br/>';
						
						?>
                    </div>
    
            </div>
        </div>

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
		
		
		
<?php
	include 'footer.php';
?>
