<!DOCTYPE html>
<html class="fixed">
<head>
	
    <!-- Basic -->
    <meta charset="UTF-8">
    <title>Kocaeli Üniversitesi Bilişim Sistemleri Mühendisliği</title>
    <meta name="keywords" content="KouBilisim" />
    <meta name="description" content="KouBilisim">
    <meta name="author" content="bilisim.kocaeli.edu.tr">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

    <!-- Web Fonts  -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

    <!-- Vendor CSS -->
	<link rel="shortcut icon" href="Content/images/KouLogoIcon.ico" />
    <link rel="stylesheet" href="Content/vendor/bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" href="Content/vendor/font-awesome/css/font-awesome.css" />
    <link rel="stylesheet" href="Content/vendor/magnific-popup/magnific-popup.css" />
    <link rel="stylesheet" href="Content/vendor/bootstrap-datepicker/css/datepicker3.css" />

    <!-- Theme CSS -->
    <link rel="stylesheet" href="Content/stylesheets/theme.css" />

    <!-- Skin CSS -->
    <link rel="stylesheet" href="Content/stylesheets/skins/default.css" />

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="Content/stylesheets/theme-custom.css">

    <!-- Head Libs -->
    <script src="Content/vendor/modernizr/modernizr.js"></script>

</head>
<body>
    <!-- start: page -->
    <section class="body-sign">
        <div class="center-sign">
            <a href="#" class="logo pull-left">
                <img style="margin-top: 15px; width: 275px;" src="Content/images/Koouu.png" alt="Kocaeli Üniversitesi" />
            </a>

            <div class="panel panel-sign">
                <div class="panel-title-sign mt-xl text-right">
                    <h2 class="title text-uppercase text-bold m-none"><i class="fa fa-user mr-xs"></i> Giriş Yap</h2>
                </div>
                <div class="panel-body">
                    <form action="islem.php" method="POST">
                        <div class="form-group mb-lg">
                            <label>Kullanıcı Adı</label>
                            <div class="input-group input-group-icon">
							<input type="text" name="kadi" class = "form-control input-lg" />
                                <span class="input-group-addon">
                                    <span class="icon icon-lg">
                                        <i class="fa fa-user"></i>
                                    </span>
                                </span>
                            </div>
                        </div>

                        <div class="form-group mb-lg">
                            <div class="clearfix">
                                <label class="pull-left">Parola</label>
                                <!--<a href="#" class="pull-right">Şifremi Unuttum!</a>-->
                            </div>
                            <div class="input-group input-group-icon">
							<input type="password" name="sifre" class = "form-control input-lg" />
                                <span class="input-group-addon">
                                    <span class="icon icon-lg">
                                        <i class="fa fa-lock"></i>
                                    </span>
                                </span>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-8">
                                <div class="checkbox-custom checkbox-default">
                                    <input id="RememberMe" name="rememberme" type="checkbox" />
                                    <label for="RememberMe">Beni Hatırla</label>
                                </div>
                            </div>
                            <div class="col-sm-4 text-right">
                                <button type="submit" name="loggin" class="btn btn-primary hidden-xs">Giriş Yap</button>
                                <button type="submit" name="loggin" class="btn btn-primary btn-block btn-lg visible-xs mt-lg">Giriş Yap</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>

            <p class="text-center text-muted mt-md mb-md">&copy; 2017 Kocaeli Üniversitesi Bilişim Sistemleri Mühendisliği</p>
        </div>
    </section>
    <!-- end: page -->
    <!-- Vendor -->
    <script src="Content/vendor/jquery/jquery.js"></script>
    <script src="Content/vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>
    <script src="Content/vendor/bootstrap/js/bootstrap.js"></script>
    <script src="Content/vendor/nanoscroller/nanoscroller.js"></script>
    <script src="Content/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
    <script src="Content/vendor/magnific-popup/magnific-popup.js"></script>
    <script src="Content/vendor/jquery-placeholder/jquery.placeholder.js"></script>

    <!-- Theme Base, Components and Settings -->
    <script src="Content/javascripts/theme.js"></script>

    <!-- Theme Custom -->
    <script src="Content/javascripts/theme.custom.js"></script>

    <!-- Theme Initialization Files -->
    <script src="Content/javascripts/theme.init.js"></script>

	<?php
	if(isset($_GET['login']) && $_GET['login']=='no')
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
                     <p class="modal-title" style="font-size:17px;"><i class="fa fa-warning" aria-hidden="true"></i> <b>KULLANICI ADI VEYA ŞİFRE YANLIŞ..!</b></p>
                </div>
                <div class="modal-body">
                    <p>Lütfen Tekrar Deneyiniz..!</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">TAMAM</button>
                </div>
            </div>

        </div>
    </div>
	
</body>
</html>

