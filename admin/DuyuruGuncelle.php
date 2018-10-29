<!doctype html>
<html class="fixed" lang="tr">
<head>
		
		<?php
		
		include 'baglan.php';
		
		session_start();
		ob_start();
		
		if(!isset($_SESSION['kadi']) || $_SESSION['yetki']==0)
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
                    <h2>Genel Duyuru Güncelleme</h2>


                </header>

                <!-- start: page -->
                <div class="row">
                    					                   
<link rel="stylesheet" href="Content/vendor/bootstrap-datepicker/css/datepicker.css" />


<div class="row">
    <div class="col-lg-12">
        <section class="panel" style="margin-top:30px;">
            <header class="panel-heading">
                <div class="panel-actions">
                    <a href="#" class="fa fa-caret-down"></a>
                    <a href="#" class="fa fa-times"></a>
                </div>

                <h2 class="panel-title">Genel Duyuru Güncelle</h2>
            </header>
            <div class="panel-body">
			
				<?php
						$id=mysqli_real_escape_string($db,$_GET['id']);
						
						
						$sorgu = mysqli_query($db,"SELECT * FROM duyuru where DuyuruID=".$id."");
						
						if( mysqli_num_rows($sorgu) > 0 ){
						  // sonuc kumesini donelim
						 $satir = mysqli_fetch_assoc($sorgu); 
					?>
			
				<form class="form-horizontal form-bordered" action="kontrol/duyuruguncelle.php" method="post" enctype="multipart/form-data">
                   
					<div class="form-group" style="display: none;">
                        <label class="col-md-3 control-label" for="inputDefault">id :</label>
                        <div class="col-md-6">
							<input type="text" name="id" class = "form-control input-lg" value="<?php echo $satir['DuyuruID'] ?>"/>
                        </div>
                    </div>
											
				   
                     <div class="form-group" style="margin-top:30px;">
                        <label class="col-md-3 control-label" for="inputDefault">Başlık<font color="red">*</font> : </label>
                        <div class="col-md-6">
						<input type="text" name="baslik" class = "form-control input-lg" value="<?php echo $satir['Baslik'] ?>">
                        </div>
                    </div>               
                                         

                    <div class="form-group" style="margin-top:30px;">
                        <label class="col-md-3 control-label">Yayın Tarihi<font color="red">*</font> : </label>
                        <div class="col-md-6">
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                </span>
								<input type="text" name="tarih" value="<?php echo $satir['Tarih'] ?>" class = "form-control input-lg" placeholder = "__/__/____", id = "example1">
                                <!-- Load jQuery and bootstrap datepicker scripts -->
                                <script src="scripts/jquery-3.1.0.min.js"></script>
                                <script src="Content/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
                                <script type="text/javascript">
                                // When the document is ready
                                $(document).ready(function () {

                                    $('#example1').datepicker({
                                        format: "yyyy-mm-dd"
                                    });

                                });
                                </script>
                                
                            </div>
                        </div>
                    </div>
					
					
					<div class="form-group" style="margin-top:30px;">
                        <label class="col-md-3 control-label">Son Yayın Tarih<font color="red">*</font> : </label>
                        <div class="col-md-6">
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                </span>
								<input type="text" name="sontarih" value="<?php echo $satir['SonTarih'] ?>" class = "form-control input-lg" placeholder = "__/__/____", id = "example2">
                                <!-- Load jQuery and bootstrap datepicker scripts -->
                                <script src="scripts/jquery-3.1.0.min.js"></script>
                                <script src="Content/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
                                <script type="text/javascript">
                                // When the document is ready
                                $(document).ready(function () {

                                    $('#example2').datepicker({
                                        format: "yyyy-mm-dd"
                                    });

                                });
                                </script>
                                
                            </div>
                        </div>
                    </div>
					
					

                        <div class="form-group">
                            <label class="col-md-3 control-label" for="inputSuccess" style="color:red; font-weight: bold;">Yayın Sonrası Silinecek mi? : </label>
                            <div class="col-md-6">

                                <div class="checkbox">
                                    <label>
										<input style="width:30px; height:30px;" type="checkbox" name="AnaAktif" <?php if($satir['DurumAnasayfa']==1) echo 'checked'?>>
									</label>
                                </div>
                            </div>
                        </div>
                    
					<div class="form-group">
                            <label class="col-md-3 control-label" for="inputSuccess"> <b style="color: red">Önceki Dosya(lar) Silinsin mi ?</b></label>
                            <div class="col-md-6">
                                <div class="checkbox">
                                    <label>
										<input style="width:30px; height:30px;" type="checkbox" name="DosyaSilOnay">
									</label>
                                </div>
                            </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="inputDefault">Dosya : </label>
                        <div class="col-md-6">
                            <h6 style="color:black; font-weight:600;"> (Ctrl tuşu ile BİRÇOK DOSYA yükleyebilirsiniz.)</h6>
                            <h6 style="color:red; font-weight:600;"> <b>Güvenlik önlemi</b> sebebi ile sadece,</h6>
							<h6 style="color:red; font-weight:600;"> <b>pdf, rar, docx, zip, jpg, png, jpeg, pptx, gif, xlsx</b> bu uzantılardaki dosyaları yükleyiniz lütfen.</h6>
							<h6 style="color:red; font-weight:600;"> txt veya video dosyalarınızı zip veya rar ile atabilirsiniz.</h6>
							<input type="file" id="inputFile" name="Dosya[]" multiple/>
                        </div>
                    </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label" for="inputDefault">Açıklama : </label>
                            <div class="col-md-6">
								 <textarea type="text" name="aciklama" class = "form-control", rows = "7", id = "editor1"><?php echo $satir['Aciklama'] ?></textarea>
                                <script type="text/javascript" src="scripts/jquery-3.1.0.min.js"></script>
                                <script src="ckeditor/ckeditor.js"></script>
                                <script type="text/javascript">CKEDITOR.replace('editor1');</script>
                            </div>
                        </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label" for="inputSuccess">Tüm Duyurular'da Aktif mi? : </label>
                        <div class="col-md-6">

                            <div class="checkbox">
                                <label>
									<input style="width:30px; height:30px;" type="checkbox" name="TumAktif" <?php if($satir['DurumTumDuyuru']==1) echo 'checked'?>>
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="panel-footer">
                        <div class="row">
                            <div class="col-md-9 col-md-offset-3">
                                <button type="submit" name="guncelle" class="btn btn-primary hidden-xs">Güncelle</button>
                                <button type="submit" name="guncelle" class="btn btn-primary btn-block btn-lg visible-xs mt-lg">Güncelle</button>
                            </div>
                        </div>
                    </div>

                   </form>
						<?php } ?>
            </div>
        </section>
    </div>
</div>

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


<!-- Modal -->
<div id="XModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header" style="background-color:red;">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Duyuru Güncelleme BAŞARISIZ..!</h4>
            </div>
            <div class="modal-body">
                <p>Kırmızı yıldız ile gösterilen zorunlu alanları doldurmanız gerekmektedir.</p>
				<p>Dosya uzantılarına dikkat ediniz..</p>
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