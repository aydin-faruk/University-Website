<!doctype html>
<html class="fixed" lang="tr">
<head>
	
	<?php
	
		include 'baglan.php';
		
		session_start();
		ob_start();
		
		if(!isset($_SESSION['kadi']) || $_SESSION['yetki']!=1)
		{
			header('Location:sistemegiris.php');
		}		
	?>
    <!-- Basic -->
    <meta charset="UTF-8">

    <title>Kocaeli Üniversitesi Bilişim Sistemleri Mühendisliği</title>
    <link rel="shortcut icon" href="Content/images/KouLogoIcon.ico" />
    <meta name="keywords" content="" />
    <meta name="description" content=""/>
    <meta name="author" content="http://bilisim.kocaeli.edu.tr/">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

    <!-- Web Fonts  -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="Content/vendor/bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" href="Content/vendor/font-awesome/css/font-awesome.css" />
    <link rel="stylesheet" href="Content/vendor/magnific-popup/magnific-popup.css" />
    <link rel="stylesheet" href="Content/vendor/bootstrap-datepicker/css/datepicker3.css" />

    <!-- Specific Page Vendor CSS -->
    <link rel="stylesheet" href="Content/vendor/jquery-ui/css/ui-lightness/jquery-ui-1.10.4.custom.css" />
    <link rel="stylesheet" href="Content/vendor/bootstrap-multiselect/bootstrap-multiselect.css" />
    <link rel="stylesheet" href="Content/vendor/morris/morris.css" />

    <!-- Theme CSS -->
    <link rel="stylesheet" href="Content/stylesheets/theme.css" />

    <!-- Skin CSS -->
    <link rel="stylesheet" href="Content/stylesheets/skins/default.css" />

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="Content/stylesheets/theme-custom.css">
    <script src="Content/vendor/modernizr/modernizr.js"></script>
    <!-- Head Libs -->

</head>
<body>
    <section class="body">

        <!-- start: header -->
        <header class="header">
            <div class="logo-container">
                <a href="index.php" class="logo">
                    <img src="Content/images/KouLogo.png" height="35" alt="KouBilisim" />
                </a>
                <div class="visible-xs toggle-sidebar-left" data-toggle-class="sidebar-left-opened" data-target="html" data-fire-event="sidebar-left-opened">
                    <i class="fa fa-bars" aria-label="Toggle sidebar"></i>
                </div>
            </div>

            <!-- start: search & user box -->
            <div class="header-right">

                

                <span class="separator"></span>

                
               <?php
						if($_SESSION['yetki']==1)
						{
							include 'menu.php';
						}
						else if($_SESSION['yetki']==2)
						{
							include 'menuyetkisiz.php';
						}
					?>
            </aside>
            <!-- end: sidebar -->

            <section role="main" class="content-body">
                <header class="page-header">
                    <h2>İletişim</h2>


                </header>

                <!-- start: page -->
                <div class="row">




                       <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                <div class="panel-actions">
                    <a href="#" class="fa fa-caret-down"></a>
                    <a href="#" class="fa fa-times"></a>
                </div>

                <h2 class="panel-title">İletişim Bilgilerini Güncelle</h2>
            </header>
            <div class="panel-body">
			<?php
						$sorgu = mysqli_query($db,"SELECT * FROM iletisim WHERE iletisimID=1");
						
						if( mysqli_num_rows($sorgu) > 0 ){
						  // sonuc kumesini donelim
						 $satir = mysqli_fetch_assoc($sorgu); 
					?>
					
				<form class="form-horizontal" action="kontrol/iletisimguncelle.php" method="post">
                    <h4 class="mb-xlg">İletişim Bilgileri</h4>
                    <fieldset>

                     <div class="form-group" style="display: none;">
                        <label class="col-md-3 control-label" for="inputDefault">id :</label>
                        <div class="col-md-6">
							<input type="text" name="id" class = "form-control input-lg" value="<?php echo $satir["iletisimID"] ?>"/>
                        </div>
                    </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label" for="profileFirstName">Email : </label>
                            <div class="col-md-8">
								<input type="text" name="mail" class = "form-control input-lg" value="<?php echo $satir["Mail"]; ?>"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="profileFirstName">Adres : </label>
                            <div class="col-md-8">
								<input type="text" name="adres" class = "form-control input-lg" value="<?php echo $satir["Adres"]; ?>"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="profileFirstName">Telefon : </label>
                            <div class="col-md-8">
								<input type="text" name="tel" class = "form-control input-lg" value="<?php echo $satir["Tel"] ?>"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="profileFirstName">Telefon(2) : </label>
                            <div class="col-md-8">
								<input type="text" name="teldiger" class = "form-control input-lg" value="<?php echo $satir["TelDiger"]; ?>"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="profileFirstName">Fax : </label>
                            <div class="col-md-8">
								<input type="text" name="fax" class = "form-control input-lg" value="<?php echo $satir["Fax"]; ?>"/>
                            </div>
                        </div>

                        <hr class="tall" />
                        <h4 class="mb-xlg">Sosyal Medya Bilgileri</h4>
                        <fieldset class="mb-xl">

                            <div class="form-group">
                                <label class="col-md-3 control-label" for="profileFirstName">Facebook : </label>
                                <div class="col-md-8">
								<input type="text" name="facebook" class = "form-control input-lg" value="<?php echo $satir["Facebook"]; ?>"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="profileFirstName">Twitter : </label>
                                <div class="col-md-8">
								<input type="text" name="twitter" class = "form-control input-lg" value="<?php echo $satir["Twitter"]; ?>"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="profileFirstName">LinkedIN : </label>
                                <div class="col-md-8">
								<input type="text" name="linkedin" class = "form-control input-lg" value="<?php echo $satir["LinkedIN"] ?>"/>
                                </div>
                            </div>
                        </fieldset>

                        

                    </fieldset>

                    <div class="panel-footer">
                        <div class="row">
                            <div class="col-md-9 col-md-offset-3">
                                <button type="submit" name="ilet" class="btn btn-primary">Kaydet</button>
                            </div>
                        </div>
                    </div>

                </form>
						<?php } ?>
            </div>
        </section>		
    </div>


	<script type="text/javascript" src="scripts/jquery-3.1.0.min.js"></script>	


	
	<?php
	if($_GET['guncellendi']=='no')
	{
		echo '<script type="text/javascript">

                    $(document).ready(function() { $("#XModal").modal("show"); });

                </script>';
	}
	?>	
    <!-- Modal -->
    <div id="XModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header" style="background-color:red;">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                     <h4 class="modal-title"><b> GÜNCELLEME BAŞARISIZ!</b></h4>
                </div>
                <div class="modal-body">
                    <p style="font-size:15px;">Lütfen Alanları Boş Geçmeyiniz..</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">TAMAM</button>
                </div>
            </div>

        </div>
    </div>

	
	<?php
	if($_GET['guncellendi']=='yes')
	{
		echo '<script type="text/javascript">

                    $(document).ready(function() { $("#GModal").modal("show"); });

                </script>';
	}
	?>	
    <!-- Modal -->
    <div id="GModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header" style="background-color:#00aa4f;">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                     <h4 class="modal-title"><b> GÜNCELLEME BAŞARILI!</b></h4>
                </div>
                <div class="modal-body">
                    <p style="font-size:15px;">İletişim, Başarılı Bir Şekilde Güncellendi.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">TAMAM</button>
                </div>
            </div>

        </div>
    </div>
		
	
	


                </div>

                <!-- end: page -->
            </section>
        </div>

        
    </section>

    <!-- Vendor -->
    <script src="Content/vendor/jquery/jquery.js"></script>
    <script src="Content/vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>
    <script src="Content/vendor/bootstrap/js/bootstrap.js"></script>
    <script src="Content/vendor/nanoscroller/nanoscroller.js"></script>
    <script src="Content/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
    <script src="Content/vendor/magnific-popup/magnific-popup.js"></script>
    <script src="Content/vendor/jquery-placeholder/jquery.placeholder.js"></script>

    <!-- Specific Page Vendor -->
    <script src="Content/vendor/jquery-ui/js/jquery-ui-1.10.4.custom.js"></script>
    <script src="Content/vendor/jquery-ui-touch-punch/jquery.ui.touch-punch.js"></script>
    <script src="Content/vendor/jquery-appear/jquery.appear.js"></script>
    <script src="Content/vendor/bootstrap-multiselect/bootstrap-multiselect.js"></script>
    <script src="Content/vendor/jquery-easypiechart/jquery.easypiechart.js"></script>
    <script src="Content/vendor/flot/jquery.flot.js"></script>
    <script src="Content/vendor/flot-tooltip/jquery.flot.tooltip.js"></script>
    <script src="Content/vendor/flot/jquery.flot.pie.js"></script>
    <script src="Content/vendor/flot/jquery.flot.categories.js"></script>
    <script src="Content/vendor/flot/jquery.flot.resize.js"></script>
    <script src="Content/vendor/jquery-sparkline/jquery.sparkline.js"></script>
    <script src="Content/vendor/raphael/raphael.js"></script>
    <script src="Content/vendor/morris/morris.js"></script>
    <script src="Content/vendor/gauge/gauge.js"></script>
    <script src="Content/vendor/snap-svg/snap.svg.js"></script>
    <script src="Content/vendor/liquid-meter/liquid.meter.js"></script>
    <script src="Content/vendor/jqvmap/jquery.vmap.js"></script>
    <script src="Content/vendor/jqvmap/data/jquery.vmap.sampledata.js"></script>
    <script src="Content/vendor/jqvmap/maps/jquery.vmap.world.js"></script>
    <script src="Content/vendor/jqvmap/maps/continents/jquery.vmap.africa.js"></script>
    <script src="Content/vendor/jqvmap/maps/continents/jquery.vmap.asia.js"></script>
    <script src="Content/vendor/jqvmap/maps/continents/jquery.vmap.australia.js"></script>
    <script src="Content/vendor/jqvmap/maps/continents/jquery.vmap.europe.js"></script>
    <script src="Content/vendor/jqvmap/maps/continents/jquery.vmap.north-america.js"></script>
    <script src="Content/vendor/jqvmap/maps/continents/jquery.vmap.south-america.js"></script>

    <!-- Theme Base, Components and Settings -->
    <script src="Content/javascripts/theme.js"></script>

    <!-- Theme Custom -->
    <script src="Content/javascripts/theme.custom.js"></script>

    <!-- Theme Initialization Files -->
    <script src="Content/javascripts/theme.init.js"></script>

</body>
</html>