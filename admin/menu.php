<?php				
		
		if(!isset($_SESSION['kadi']) || $_SESSION['yetki']!=1)
		{
			header('Location:sistemegiris.php');
		}		
	?>

       <div id="userbox" class="userbox">
	   
                    <a href="#" data-toggle="dropdown">
                        <figure class="profile-picture">
                            <img src="Content/empty.png" alt="Kou Bilişim Sist. Müh." class="img-circle" data-lock-picture="Content/images/KouLogo.png" />
                        </figure>
                        <div class="profile-info">
                           
                            <span class="name"><?php echo $_SESSION['kimlik']; ?></span>
                            <span class="role">
							<?php 
								if($_SESSION['yetki']==1) echo "Tam Yetkili";
								else echo "Yarı Yetkili";								
							?>
							</span>
                        </div>

                        <i class="fa custom-caret"></i>
                    </a>

                    <div class="dropdown-menu">
                        <ul class="list-unstyled">
                            <li class="divider"></li>
                            <li>
                                <a role="menuitem" tabindex="-1" href="Profilim.php"><i class="fa fa-user"></i>Profilim</a>
                            </li>
							<li>
                                <a role="menuitem" tabindex="-1" href="sifreguncelle.php"><i class="fa fa-lock"></i>Şifre Değiştir</a>
                            </li>
                            <li>
                                <a role="menuitem" tabindex="-1" href="cikis.php"><i class="fa fa-power-off"></i>Çıkış</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- end: search & user box -->
        </header>
        <!-- end: header -->

        <div class="inner-wrapper">
            <!-- start: sidebar -->
            <aside id="sidebar-left" class="sidebar-left">

                <div class="sidebar-header">

                    <div class="sidebar-toggle hidden-xs" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
                        <i class="fa fa-bars" aria-label="Toggle sidebar"></i>
                    </div>
                </div>




                <div class="nano">
                    <div class="nano-content">
                        <nav id="menu" class="nav-main" role="navigation">
                            <ul class="nav nav-main">
                                <li class="nav-active">
                                    <a href="index.php">
                                        <i class="fa fa-home" aria-hidden="true"></i>
                                        <span>Anasayfa</span>
                                    </a>
                                </li>
								<li class="nav-parent">
                                    <a>
                                        <i class="fa fa-bullhorn" aria-hidden="true"></i>
                                        <span>Duyurular</span>
                                    </a>
                                    <ul class="nav nav-children">
                                        <li>
                                            <a href="Duyurular.php">
                                                Genel Duyurular
                                            </a>
                                        </li>
                                        <li>
                                            <a href="BolumDuyurulari.php">
                                                Bölüm Duyuruları
                                            </a>
                                        </li>
                                    </ul>
                                </li>
								<li>
                                    <a href="Etkinlikler.php">
                                        <i class="fa fa-users" aria-hidden="true"></i>
                                        <span>Etkinlikler</span>
                                    </a>
                                </li>

                                <li>
                                    <a href="DersNotlari.php">
                                        <i class="fa fa-book" aria-hidden="true"></i>
                                        <span>Ders Notları</span>
                                    </a>
                                </li>
								<li class="nav-parent">
                                    <a>
                                        <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                                        <span>Lisans</span>
                                    </a>
                                    <ul class="nav nav-children">
                                        <li>
                                            <a href="Lisans.php">
                                                Dosyalı Menu
                                            </a>
                                        </li>
                                        <li>
                                            <a href="LisansLink.php">
                                                Linkli Menu
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-parent">
                                    <a>
                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                        <span>Lisansüstü</span>
                                    </a>
                                    <ul class="nav nav-children">
                                        <li>
                                            <a href="YuksekLisans.php">
                                                Yüksek Lisans
                                            </a>
                                        </li>
                                        <li>
                                            <a href="LisansUstu.php">
                                                Dosyalı Menu
                                            </a>
                                        </li>
										<li>
                                            <a href="LisansUstuLink.php">
                                                Linkli Menu
                                            </a>
                                        </li>
                                    </ul>
                                </li>
								<li class="nav-parent">
                                    <a>
                                        <i class="fa fa-male" aria-hidden="true"></i>
                                        <span>Öğrenci</span>
                                    </a>
                                    <ul class="nav nav-children">
                                        <li>
                                            <a href="Ogrenci.php">
                                                Dosyalı Menu
                                            </a>
                                        </li>
                                        <li>
                                            <a href="OgrenciLink.php">
                                                Linkli Menu
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-parent">
                                    <a>
                                        <i class="fa fa-circle" aria-hidden="true"></i>
                                        <span>Bölüm</span>
                                    </a>
                                    <ul class="nav nav-children">
                                        <li>
                                            <a href="BolumMisyonveVizyon.php">
                                                Misyon ve Vizyon
                                            </a>
                                        </li>
                                        <li>
                                            <a href="BolumAmac.php"> 
                                                Amaç
                                            </a>
                                        </li>
                                        <li>
                                            <a href="BolumOlanaklar.php">
                                                Olanaklar
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-parent">
                                    <a>
                                        <i class="fa fa-university" aria-hidden="true"></i>
                                        <span>Personel</span>
                                    </a>
                                    <ul class="nav nav-children">
                                        <li>
                                            <a href="AkademikPersonel.php">
                                                Akademik Personel
                                            </a>
                                        </li>
                                        <li>
                                            <a href="idariPersonel.php">
                                                İdari Personel
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="iletisim.php">
                                        <i class="fa fa-envelope" aria-hidden="true"></i>
                                        <span>İletişim</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="Slider.php">
                                        <i class="fa fa-sliders" aria-hidden="true"></i>
                                        <span>Slider (Slayt)</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="Profilim.php">
                                        <i class="fa fa-user" aria-hidden="true"></i>
                                        <span>Profilim</span>
                                    </a>
                                </li>
								<li>
                                    <a href="sifreguncelle.php">
                                        <i class="fa fa-lock" aria-hidden="true"></i>
                                        <span>Şifre Değiştir</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="cikis.php">
                                        <i class="fa fa-sign-out" aria-hidden="true"></i>
                                        <span>Güvenli Çıkış</span>
                                    </a>
                                </li>

                          </ul>
			</nav>
                    </div>
                </div>
				
	<script type="text/javascript" src="scripts/jquery-3.1.0.min.js"></script>			