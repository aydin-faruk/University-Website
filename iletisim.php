<?php
	include 'header.php';
?>
		
			
			
<div role="main" class="main">
    
    <div class="container">
		<hr class="tall" />
        <h3><b>İLETİŞİM</b></h3>
        <div class="row">
            <div class="col-md-4">

                  <div class="row lightbox" data-plugin-options='{"delegate": "a", "type": "image", "gallery": {"enabled": true}}'>
                       <a class="img-thumbnail push-bottom" href="Content/img/resim/tekfak_kroki.jpg" data-plugin-options='{"type":"image"}'>
                            <img alt="" height="300" class="img-responsive" src="Content/img/resim/tekfak_kroki.jpg">
                            <span class="zoom">
                               <i class="fa fa-search"></i>
                           </span>
                         </a>
                 </div>
                   
            </div>
            <div class="col-md-8">

				<?php 
										
							$sorgu = mysqli_query($db,"SELECT * FROM iletisim");						
										
							if( mysqli_num_rows($sorgu) > 0 )
							{
							 // sonuc kumesini donelim
							while( $satir = mysqli_fetch_assoc($sorgu) )
							{														
									?>
				
                <span class="thumb-info-social-icons">
                    <a data-tooltip="" data-placement="bottom" target="_blank" href="<?php echo $satir["Facebook"]; ?>" data-original-title="Facebook"><i class="fa fa-facebook"></i><span>Facebook</span></a>
					<a data-tooltip="" data-placement="bottom" target="_blank" href="<?php echo $satir["Twitter"]; ?>" data-original-title="Twitter"><i class="fa fa-twitter"></i><span>Twitter</span></a>
					<a data-tooltip="" data-placement="bottom" target="_blank" href="<?php echo $satir["LinkedIN"]; ?>" data-original-title="Linkedin"><i class="fa fa-linkedin"></i><span>Linkedin</span></a>
 
                </span>
			
                <ul class="contact">
                                    <li><p><i class="fa fa-map-marker"></i> <strong> Adres :</strong> <?php echo $satir["Adres"]; ?></p></li>
									<li><p><i class="fa fa-phone"></i> <strong> Telefon :</strong> <?php echo $satir["Tel"]; ?></p></li>
									<li><p><i class="fa fa-phone"></i> <strong> Telefon :</strong> <?php echo $satir["TelDiger"]; ?></p></li>
									<li><p><i class="fa fa-fax"></i> <strong> Fax :</strong> <?php echo $satir["Fax"]; ?></p></li>
									<li><p><i class="fa fa-envelope"></i> <strong> E-Posta :</strong> <a href="mailto:<?php echo $satir["Mail"]; ?>"> <?php echo $satir["Mail"]; ?></a></p></li>
 
               </ul>
							<?php } } ?>
            </div>
        </div>

    </div>
    
    <hr class="tall" />

    <div class="container">
        <h3><b>ULAŞIM</b></h3>
        <div class="row">
            <div class="col-md-4">

                <div class="row lightbox" data-plugin-options='{"delegate": "a", "type": "image", "gallery": {"enabled": true}}'>
                    <a class="img-thumbnail push-bottom" href="Content/img/resim/umuttepe_karayolu.jpg" data-plugin-options='{"type":"image"}'>
                        <img alt="" height="300" class="img-responsive" src="Content//img/resim/umuttepe_karayolu.jpg">
                        <span class="zoom">
                            <i class="fa fa-search"></i>
                        </span>
                    </a>
                </div>

            </div>
            <div class="col-md-8">
                <hr />
                <p>Umuttepe Yerleşkesi, Eski İstanbul Yolu olarak bilinen ve İzmit şehir merkezi yerleşiminin kuzey bölgesinde bulunan çevre yolu üzerinde 10. km'de yer almaktadır.</p>

            </div>
        </div>

    </div>


</div>
			
			
			
<?php
	include 'footer.php';
?>
