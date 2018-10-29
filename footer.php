

<footer id="footer" class="color">
            <div class="container">
                <div class="row">						
					<div class="col-md-4">
						<div style="font-size: 11px; font-family: serif;">
                            <h4><a href="http://teknoloji.kocaeli.edu.tr" target="_blank"><i class="fa fa-university"></i> Fakültemiz</a></h4>
							<h4><a href="https://webmail.kocaeli.edu.tr/" target="_blank"><i class="fa fa-envelope"></i> E-Posta</a></h4>
                            <h4><a href="http://www.kocaeli.edu.tr/telefon-rehberi.php" target="_blank"><i class="fa fa-phone-square"></i> Telefon Rehberi</a></h4>
							<h4><a href="http://sanaltur.kocaeli.edu.tr/" target="_blank"><i class="fa fa-play-circle"></i> Sanal Tur</a></h4>
							<h4><a href="http://www.kocaeli.edu.tr/tanitim/" target="_blank"><i class="fa fa-users"></i> Aday Öğrenci</a></h4>
                            <h4><a href="http://www.kocaeli.edu.tr/gorseller.php" target="_blank"><i class="fa fa-camera"></i> Görsellerle Üniversitemiz</a></h4>
                        </div>
                    </div>
						
                    <div class="col-md-4">
                        <div class="contact-details">
                            <h4>İletişim Bilgilerimiz</h4>
                            <ul class="contact">
							<?php 
										
							$sorgu = mysqli_query($db,"SELECT * FROM iletisim");						
										
							if( mysqli_num_rows($sorgu) > 0 )
							{
								while( $satir = mysqli_fetch_assoc($sorgu) )
							{														
									?>
                                    <li><p><i class="fa fa-map-marker"></i> <strong> Adres :</strong> <?php echo $satir["Adres"]; ?></p></li>
									<li><p><i class="fa fa-phone"></i> <strong> Telefon :</strong> <?php echo $satir["Tel"]; ?></p></li>
									<li><p><i class="fa fa-phone"></i> <strong> Telefon :</strong> <?php echo $satir["TelDiger"]; ?></p></li>
									<li><p><i class="fa fa-fax"></i> <strong> Fax :</strong> <?php echo $satir["Fax"]; ?></p></li>
									<li><p><i class="fa fa-envelope"></i> <strong> E-Posta :</strong> <a href="mailto:<?php echo $satir["Mail"]; ?>"> <?php echo $satir["Mail"]; ?> </a></p></li>
						
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <h4>Bizi Takip Edin</h4>
                        <div class="social-icons">
                            <ul class="social-icons">
                                    <li class="facebook"><a href="<?php echo $satir["Facebook"]; ?>" target="_blank" data-placement="bottom" data-tooltip title="Facebook">Facebook</a></li>
									<li class="twitter"><a href="<?php echo $satir["Twitter"]; ?>" target="_blank" data-placement="bottom" data-tooltip title="Twitter">Twitter</a></li>
									<li class="linkedin"><a href="<?php echo $satir["LinkedIN"]; ?>" target="_blank" data-placement="bottom" data-tooltip title="Linkedin">Linkedin</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div><?php }
							} ?>
            <div class="footer-copyright">
                <div class="container">
                    <div class="row">
                        
                        <div class="col-md-7">
                            <p>© <?php echo date('Y'); ?> Kocaeli Üniversitesi Bilişim Sistemleri Mühendisliği</p>
                        </div>
                        <div class="col-md-5">
                             <p style="text-align:right; font-size:11.7px; color:#d4d6d5;">Web Geliştirici <font color="white">Faruk AYDIN</font></p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <script src="Content/vendor/jquery/jquery.js"></script>
    <script src="Content/vendor/jquery.appear/jquery.appear.js"></script>
    <script src="Content/vendor/jquery.easing/jquery.easing.js"></script>
    <script src="Content/vendor/jquery-cookie/jquery-cookie.js"></script>
    <script src="Content/vendor/bootstrap/bootstrap.js"></script>
    <script src="Content/vendor/common/common.js"></script>
    <script src="Content/vendor/jquery.validation/jquery.validation.js"></script>
    <script src="Content/vendor/jquery.stellar/jquery.stellar.js"></script>
    <script src="Content/vendor/jquery.easy-pie-chart/jquery.easy-pie-chart.js"></script>
    <script src="Content/vendor/jquery.gmap/jquery.gmap.js"></script>
    <script src="Content/vendor/isotope/jquery.isotope.js"></script>
    <script src="Content/vendor/owlcarousel/owl.carousel.js"></script>
    <script src="Content/vendor/jflickrfeed/jflickrfeed.js"></script>
    <script src="Content/vendor/magnific-popup/jquery.magnific-popup.js"></script>
    <script src="Content/vendor/vide/vide.js"></script>

    <script src="Content/js/theme.js"></script>

    <script src="Content/vendor/circle-flip-slideshow/js/jquery.flipshow.js"></script>
    <script src="Content/vendor/nivo-slider/jquery.nivo.slider.js"></script>
    <script src="Content/js/views/view.home.js"></script>

    <script src="Content/js/custom.js"></script>

    <script src="Content/js/theme.init.js"></script>

    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 style="font-weight:600; color:#FFF;" class="modal-title"><strong><i style="font-size: 25px;" class="fa fa-info-circle" aria-hidden="true"></i> INFORMATION</strong></h4>
                </div>
                <div class="modal-body">
                    <p>Soon, will be the English service.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Ok</button>
                </div>
            </div>

        </div>
    </div>
    
</body>
</html>
