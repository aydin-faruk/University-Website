<?php 
	include 'kontrol/baglan.php';
?>

<!DOCTYPE html>
<html lang="tr">
<head>

    <meta charset="utf-8">
    <link rel="shortcut icon" href="Content/img/resim/KouLogoIcon.ico" />
    <title>Kocaeli Üniversitesi Bilişim Sistemleri Mühendisliği</title>
    <meta name="keywords" content="Bilisimkou, koubisim ,Kocaeli Üniversitesi, Kocaeli Üniversitesi Bilişim, Kocaeli Üniversitesi Bilisim, Kocaeli Üniversitesi Bilişim Sistemleri Mühendisliği, KOU Bilisim, KOU Bilişim, kou bilisimi kou bilişim, Bilişim Sistemleri Mühendisliği, Kocaeli, izmit, Bilişim, kou, KOU" />
    <meta name="description" content="Kocaeli Üniversitesi Bilişim Sistemleri Mühendisliği">
    <meta name="author" content="http://bilisim.kocaeli.edu.tr/">
    	
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="Content/vendor/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="Content/vendor/fontawesome/css/font-awesome.css">
    <link rel="stylesheet" href="Content/vendor/owlcarousel/owl.carousel.min.css" media="screen">
    <link rel="stylesheet" href="Content/vendor/owlcarousel/owl.theme.default.min.css" media="screen">
    <link rel="stylesheet" href="Content/vendor/magnific-popup/magnific-popup.css" media="screen">

    <link rel="stylesheet" href="Content/css/theme.css">
    <link rel="stylesheet" href="Content/css/theme-elements.css">
    <link rel="stylesheet" href="Content/css/theme-blog.css">
    <link rel="stylesheet" href="Content/css/theme-shop.css">
    <link rel="stylesheet" href="Content/css/theme-animate.css">

    <link rel="stylesheet" href="Content/vendor/circle-flip-slideshow/css/component.css" media="screen">
    <link rel="stylesheet" href="Content/vendor/nivo-slider/nivo-slider.css" media="screen">
    <link rel="stylesheet" href="Content/vendor/nivo-slider/default/default.css" media="screen">

    <link rel="stylesheet" href="Content/css/skins/default.css">

    <link rel="stylesheet" href="Content/css/custom.css">

    <script src="Content/vendor/modernizr/modernizr.js"></script>
	
</head>
<body>

    <div class="body">
        
        <header id="header" class="clean-top center">
           
            <div class="container">
               
                <div class="header-inner">

                    

                </div>
                               

                <button class="btn btn-responsive-nav btn-inverse" data-toggle="collapse" data-target=".nav-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
            </div>
            <div style="margin-top:13px;">
			
			<div class="container">
			
                <a style="margin-bottom:10px;" href="http://bilisim.kocaeli.edu.tr/" class="scroll-menu-logo"><img src="Content/img/resim/Koouu.png" /></a>

				<div class="hidden-xs">
					<a href="http://www.kocaeli.edu.tr/" class="logo-image-link" target="_blank"><img src="Content/img/resim/kocaeli_simge.jpg" /></a>

                    <img src="Content/img/resim/kocaeli_universitesi.jpg" class="banner-image" />
				</div>
				<div class="visible-xs mt-lg">
					  <img src="Content/img/resim/MobilBanner.png" class="banner-mobil"/>
				</div>				
			</div>
			
           </div>
            <div class="navbar-collapse nav-main-collapse collapse">
                <div class="container">
                    <nav class="nav-main mega-menu">
                        <ul class="nav nav-pills nav-main" id="mainMenu">

                            <li><a href="index.php">ANASAYFA</a></li>
                            <li class="dropdown">
                                <a class="dropdown-toggle" href="#">
                                    BÖLÜM
                                    <i class="fa fa-angle-down"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="MisyonveVizyon.php">Misyon ve Vizyon</a></li>
                                    <li><a href="Amac.php">Amaç</a></li>
                                    <li><a href="Olanaklar.php">Olanaklar</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a class="dropdown-toggle" href="#">
                                    PERSONEL
                                    <i class="fa fa-angle-down"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="AkademikPersonel.php">Akademik Personel</a></li>
                                    <li><a href="idariPersonel.php">İdari Personel</a></li>
									<li><a href="admin/sistemegiris.php">Sisteme Giriş</a></li>
                                </ul>
                            </li>
                            
                            <li class="dropdown">
                                <a class="dropdown-toggle" href="#">
                                    LİSANS
                                    <i class="fa fa-angle-down"></i>
                                </a>
                                <ul class="dropdown-menu">
									<?php 
										
									$sorgu = mysqli_query($db,"SELECT * FROM lisans WHERE Durum=1 ORDER BY Sira");						
										
										if( mysqli_num_rows($sorgu) > 0 ){
										  
										  while( $satir = mysqli_fetch_assoc($sorgu) )
										  {
									?>	
                                    <li><a href="<?php echo $satir["Link"]; ?>" target="_blank"><?php echo $satir["Baslik"]; ?></a></li>
									<?php } }?>

									<?php 
										
									$sorgu = mysqli_query($db,"SELECT * FROM lisanslink WHERE Durum=1 ORDER BY Sira");						
										
										if( mysqli_num_rows($sorgu) > 0 ){
										  
										  while( $satir = mysqli_fetch_assoc($sorgu) )
										  {
									?>	
                                    <li><a href="<?php echo $satir["Link"]; ?>" target="_blank"><?php echo $satir["Baslik"]; ?></a></li>
									<?php } }?>
									
								</ul>
                            </li>
                            <li class="dropdown">
                                <a class="dropdown-toggle" href="#">
                                    LİSANSÜSTÜ
                                    <i class="fa fa-angle-down"></i>
                                </a>
                                <ul class="dropdown-menu">                         
                                    <li><a href="YuksekLisans.php">Yüksek Lisans</a></li>
                                    <?php 
										
									$sorgu = mysqli_query($db,"SELECT * FROM lisansustu WHERE Durum=1 ORDER BY Sira");						
										
										if( mysqli_num_rows($sorgu) > 0 ){
										  while( $satir = mysqli_fetch_assoc($sorgu) )
										  {
									?>	
                                    <li><a href="<?php echo $satir["Link"]; ?>" target="_blank"><?php echo $satir["Baslik"]; ?></a></li>
									<?php } }?>

									<?php 
										
									$sorgu = mysqli_query($db,"SELECT * FROM lisansustulink WHERE Durum=1 ORDER BY Sira");						
										
										if( mysqli_num_rows($sorgu) > 0 ){
										  while( $satir = mysqli_fetch_assoc($sorgu) )
										  {
									?>	
                                    <li><a href="<?php echo $satir["Link"]; ?>" target="_blank"><?php echo $satir["Baslik"]; ?></a></li>
									<?php } }?>		
									
								</ul>
							</li>	
                            <li class="dropdown">
                                <a class="dropdown-toggle" href="#">
                                    ÖĞRENCİ
                                    <i class="fa fa-angle-down"></i>
                                </a>
                                <ul class="dropdown-menu">
									
									<?php 
										
									$sorgu = mysqli_query($db,"SELECT * FROM ogrenci WHERE Durum=1 ORDER BY Sira");						
										
										if( mysqli_num_rows($sorgu) > 0 ){
										  while( $satir = mysqli_fetch_assoc($sorgu) )
										  {
									?>	
                                    <li><a href="<?php echo $satir["Link"]; ?>" target="_blank"><?php echo $satir["Baslik"]; ?></a></li>
									<?php } }?>	
									
									<?php 
										
									$sorgu = mysqli_query($db,"SELECT * FROM ogrencilink WHERE Durum=1 ORDER BY Sira");						
										
										if( mysqli_num_rows($sorgu) > 0 ){
										  while( $satir = mysqli_fetch_assoc($sorgu) )
										  {
									?>	
                                    <li><a href="<?php echo $satir["Link"]; ?>" target="_blank"><?php echo $satir["Baslik"]; ?></a></li>
									<?php } }?>	
									
                                </ul>
                            </li>
                            <li>
                                <a href="iletisim.php">
                                    İLETİŞİM
                                </a>
                                
                            </li>
                            <li>
                                <a href="DersNotlari.php">DERS NOTLARI</a>

                            </li>
                            
                            <li class="dropdown">
                                
                                <a data-toggle="modal" href="#myModal">ENGLISH</a>
                                
                            </li>
							
                                
                        </ul>
                    </nav>
                </div>
            </div>
        </header>
