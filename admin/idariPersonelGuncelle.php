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
                    <h2>İdari Personel Güncelle</h2>
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

                <h2 class="panel-title">Akademik Personel Güncelle</h2>
            </header>
            <div class="panel-body">
			<?php
						$id=$_GET['id'];
						$sorgu = mysqli_query($db,"SELECT * FROM idaripersonel where IPersonelID=".$id."");
						
						if( mysqli_num_rows($sorgu) > 0 ){
						  // sonuc kumesini donelim
						 $satir = mysqli_fetch_assoc($sorgu); 
					?>
                <form class="form-horizontal form-bordered" action="kontrol/idaripersonelguncelle.php" method="post" enctype="multipart/form-data">
                    
					<div class="form-group" style="display: none;">
                        <label class="col-md-3 control-label" for="inputDefault">id :</label>
                        <div class="col-md-6">
							<input type="text" name="id" class = "form-control input-lg" value="<?php echo $satir["IPersonelID"] ?>"/>
                        </div>
                    </div>
					<div class="form-group">
                        <label class="col-md-3 control-label" for="inputDefault">Görevi<font color="red">*</font> : </label>
                        <div class="col-md-6">
							
							<select name="gorev" class="form-control input-lg mb-md">
														<option>Bölüm Başkanı</option>
														<option>Bölüm Başkan Yardımcısı</option>
														<option>Bölüm Sekreteri</option>
							</select>
                        </div>
                    </div>
					<div class="form-group">
                        <label class="col-md-3 control-label" for="inputDefault">Ünvanı<font color="red">*</font> : </label>
                        <div class="col-md-6">
							
							<select name="unvan" class="form-control input-lg mb-md">
														<option>Prof. Dr.</option>
														<option>Doç. Dr.</option>
														<option>Yrd. Doç. Dr.</option>
														<option>Öğr. Gör.</option>
														<option>Arş. Gör.</option>
														<option>Sekreter</option>
							</select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="inputDefault">Adı<font color="red">*</font> : </label>
                        <div class="col-md-6">
							<input type="text" name="adi" class = "form-control input-lg" value="<?php echo $satir["Adi"] ?>"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="inputDefault">Soyadı<font color="red">*</font> : </label>
                        <div class="col-md-6">
                            <input type="text" name="soyadi" class = "form-control input-lg" value="<?php echo $satir["Soyadi"] ?>" />
                        </div>
                    </div>
					<div class="form-group">
                        <label class="col-md-3 control-label" for="inputDefault">Resim : </label>
                        <div class="col-md-6">
							<input type="file" id="inputFile" name="Dosya" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Dahili Tel<font color="red">*</font> : </label>
                        <div class="col-md-6">
                            <input type="text" name="dahilitel" class = "form-control input-lg" value="<?php echo $satir["DahiliTel"] ?>" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="inputDefault">E-Posta<font color="red">*</font> : </label>
                        <div class="col-md-6">
                            <input type="text" name="eposta" class = "form-control input-lg" value="<?php echo $satir["Eposta"] ?>" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="inputDefault">Web Adresi : </label>
                        <div class="col-md-6">
                            <input type="text" name="webadresi" class = "form-control input-lg" value="<?php echo $satir["WebAdresi"] ?>"/>
                        </div>
                    </div>
                    <div class="panel-footer">
                        <div class="row">
                            <div class="col-md-9 col-md-offset-3">
                                <button type="submit" name="guncelle" class="btn btn-primary hidden-xs">Kaydet</button>
                                <button type="submit" name="guncelle" class="btn btn-primary btn-block btn-lg visible-xs mt-lg">Kaydet</button>
                            </div>
                        </div>
                    </div>


                </form>
						<?php } ?>
            </div>
        </section>
    </div>




                </div>

                <!-- end: page -->
            </section>
        </div>

        
    </section>
	
	
	<?php
	if($_GET['guncelle']=="no")
	{
		echo '<script type="text/javascript">

                    $(document)
                        .ready(function() {
                            $("#XModal").modal("show");
                        });

                </script>';
	}
	?>	


<div id="XModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        
        <div class="modal-content">
            <div class="modal-header" style="background-color:red;">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">İdari Personel Güncelleme BAŞARISIZ..!</h4>
            </div>
            <div class="modal-body">
                <p>Kırmızı yıldız ile gösterilen zorunlu alanları doldurmanız gerekmektedir.</p>
				<p>Dosya uzantılarına ve şifre uyumluluğuna dikkat ediniz..</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">TAMAM</button>
            </div>
        </div>

    </div>
</div>
	

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