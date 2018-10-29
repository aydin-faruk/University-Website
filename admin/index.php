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

		include 'header.php';
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
                    <h2>Anasayfa</h2>


                </header>

                <!-- start: page -->
                <div class="row">
				
				<b><?php echo $_SESSION['kimlik'];?> </b>Hoş Geldiniz..
				<br /><br />
				
				<p>Değerli Kullanıcı;
				<br/>Lütfen <b style="color:red;">Ders Notlarınızı Bölüm Sitemizde Paylaşınız.</b> Böylelikle bölüm sitemiz daha çok aktif olacaktır.
				Teşekkür Ederiz.
				<br/><b>NOT: </b>Dosya yüklemek istemiyorsanız açıklama kısmına dropbox veya google drive linki verebilirsiniz. Aşağıdaki ipucuda link verme işlemi belirtilmiştir.
				</p>
				<br /><br />
				
				<?php if($_SESSION['yetki']==2) { ?>
					<p><b style="color:red;">***</b> Eğer <u>şifrenizi unutursanız</u>  <b style="color:red;">veritabanına erişebilen tam yetkili kullanıcılardan</b> destek alınız.
					<br /><br />
				<?php } ?>
				
				
				<div style="max-width:500px;">
					<p><i style="color:#0a7035; font-size:30px; font-weight:500;" class="fa fa-info-circle"></i> Aşağıdaki resimde açıklama ekleme ile ilgili ipuçu bulunmaktadır. <br /> Bu ipuçu açıklama yaparken tam verim almanızı sağlayacaktır.</p>
					<div class="thumbnail-gallery">
						<a class="img-thumbnail lightbox" href="Content/images/editorKullanim.jpg" data-plugin-options='{ "type":"image" }'>
							<img class="img-responsive" width="215" src="Content/images/editorKullanim.jpg">
							<span class="zoom">
								<i class="fa fa-search"></i>
							</span>
						</a>
					</div>
				</div>

				<?php if($_SESSION['yetki']==1) { ?>
					<div style="max-width:500px;">
						<p style="font-weight: bold;"><i style="color:#0a7035; font-size:30px; font-weight:500;" class="fa fa-info-circle"></i> Eğer <b style="color:red;">kullanıcılar şifrelerini unuturlarsa</b> bu resimlerdeki yolları takip edip onlara yeni bir şifre oluşturabilirsiniz. <br /> Güvenlik önlemi sebebi ile şifremi unuttum kısmı yapılmadı.</p>
						<p> 
							<br/><b style="color:red;">1.</b> İnternete <b style="color:red;">md5 converter</b> yazıp ilk çıkan siteye girebilirsiniz.
							<br/><b style="color:red;">2.</b> Girdiğiniz sitede vermek istediğiniz şifreyi girip <b style="color:red;">md5 koduna çeviriniz</b>.
							<br/><b style="color:red;">3.</b> Veritabanına girip <b style="color:red;">akademik personel tablosunda sifresi alanına</b> yeni şifreyi yapıştırınız..  
						</p>					
						<div class="col-md-4">
							<div class="thumbnail-gallery">
								<a class="img-thumbnail lightbox" href="Content/images/su-1.png" data-plugin-options='{ "type":"image" }'>
									<img class="img-responsive" width="215" src="Content/images/su-1.png">
									<span class="zoom">
										<i class="fa fa-search"></i>
									</span>
								</a>
							</div>
						</div>
						<div class="col-md-4">
							<div class="thumbnail-gallery">
								<a class="img-thumbnail lightbox" href="Content/images/su-2.png" data-plugin-options='{ "type":"image" }'>
									<img class="img-responsive" width="215" src="Content/images/su-2.png">
									<span class="zoom">
										<i class="fa fa-search"></i>
									</span>
								</a>
							</div>
						</div>
						<div class="col-md-4">
							<div class="thumbnail-gallery">
								<a class="img-thumbnail lightbox" href="Content/images/su-3.png" data-plugin-options='{ "type":"image" }'>
									<img class="img-responsive" width="215" src="Content/images/su-3.png">
									<span class="zoom">
										<i class="fa fa-search"></i>
									</span>
								</a>
							</div>
						</div>
						
					</div>
				<?php } ?>

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
	
	<?php 
	
		try
		{
				$suanTarih = date('Y-m-d');
				$idAL = mysqli_query($db,"SELECT * FROM duyuru WHERE DurumAnasayfa=1 AND '".$suanTarih."'>SonTarih");		
				if(mysqli_num_rows($idAL) > 0)
				{
					while($satiridAL=mysqli_fetch_assoc($idAL))
					{
						$sorgu = mysqli_query($db,"select * from duyurudosya where DuyuruID=".$satiridAL['DuyuruID']);
				
						while( $satir = mysqli_fetch_assoc($sorgu) )
						{		
								if (file_exists("../".$satir['DosyaYol'])) 
								{
									unlink("../".$satir['DosyaYol']);
								}
								$sonuc=mysqli_query($db,"DELETE from duyurudosya where DosyaID=".$satir['DosyaID']);	
						}						
								
						$DuyuruSil=mysqli_query($db,"DELETE from duyuru where DurumAnasayfa=1 and '".$suanTarih."'>SonTarih and DuyuruID=".$satiridAL['DuyuruID']);
					}
										
				}			
			} 
			catch(Exception $e) 
			{
				echo $e->getMessage();
			}
		
	?>
	
	

</body>
</html>