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
                    <h2>Lisans</h2>


                </header>

                <!-- start: page -->
                <div class="row">
<section class="panel">
    <header class="panel-heading">
        <div class="panel-actions">
            <a href="#" class="fa fa-caret-down"></a>
            <a href="#" class="fa fa-times"></a>
        </div>

        <h2 class="panel-title">Lisans İşlemleri</h2>
    </header>
                     <div class="panel-body">
        <div class="row">            
                <div class="col-sm-6">
                    <div class="mb-md">
                        <a href="LisansEkle.php">
                            <button class="btn btn-primary">Ekle <i class="fa fa-plus"></i></button>
                        </a>
                    </div>
                </div>             
        </div>
        <table class="table table-bordered table-striped mb-none" id="datatable-editable">
            <thead>
                <tr>
                    <th>Başlık</th>
                    <th>Aktif mi?</th>
                    <th>İşlem</th>
					<th></th>
                </tr>
            </thead>
            <tbody>
					<?php
						
						$sorgu = mysqli_query($db,"SELECT * FROM lisans ORDER BY Sira");
	
						if( mysqli_num_rows($sorgu) > 0 ){
						  // sonuc kumesini donelim
						  while( $satir = mysqli_fetch_assoc($sorgu) ){
					?>
                    <tr class="gradeX">

                        <td style="text-transform: uppercase;"><?php echo $satir["Baslik"] ?></td>
                        <td>
							<?php 
								if($satir["Durum"]==1) echo "Aktif";
								if($satir["Durum"]==0) echo "Değil"; 		
							?>
						</td>
                        <td class="actions">
                            <a href="LisansGuncelle.php?id=<?php echo $satir['LisansID']; ?>"><i style="font-size:25px; color:#016d2f;" class="fa fa-pencil"></i></a>                          
                            <a onclick="gonder(<?php echo $satir['LisansID']; ?>)" data-toggle="modal" style="cursor:pointer;" class="on-default remove-row"><i style="font-size:25px; color:red;" class="fa fa-trash-o"></i></a>
                        </td>
						<td>
							<?php if($satir["Sira"] != 1){ ?>
								<a href="kontrol/lisanssirala.php?islem=yukari&id=<?php echo $satir['LisansID']; ?>&sira=<?php echo $satir["Sira"]; ?>" ><img src="Content/images/yukari.png" alt="" style="width: 25px;" /></a>
							<?php } ?>
							
							<?php if($satir["Sira"] != mysqli_num_rows($sorgu)){ ?>
								<a href="kontrol/lisanssirala.php?islem=asagi&id=<?php echo $satir['LisansID']; ?>&sira=<?php echo $satir["Sira"]; ?>"><img src="Content/images/asagi.png" alt="" style="width: 25px;" /></a>
							<?php } ?>
						</td>
                    </tr>
						<?php

						}} ?>
            </tbody>
        </table>
    </div>


			<script type="text/javascript" src="scripts/jquery-3.1.0.min.js"></script>	

	<?php
	if($_GET['silindi']=='yes')
	{
		echo '<script type="text/javascript">

                    $(document).ready(function() { $("#YModal").modal("show"); });

                </script>';
	}
	?>	
    <!-- Modal -->
    <div id="YModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header" style="background-color:#00aa4f;">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                     <h4 class="modal-title"><b> SİLME BAŞARILI!</b></h4>
                </div>
                <div class="modal-body">
                    <p style="font-size:15px;">Lisans, Başarılı Bir Şekilde Silindi.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">TAMAM</button>
                </div>
            </div>

        </div>
    </div>
	
	
	<?php
	if($_GET['eklendi']=='yes')
	{
		echo '<script type="text/javascript">

                    $(document).ready(function() { $("#EModal").modal("show"); });

                </script>';
	}
	?>	
    <!-- Modal -->
    <div id="EModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header" style="background-color:#00aa4f;">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                     <h4 class="modal-title"><b> EKLEME BAŞARILI!</b></h4>
                </div>
                <div class="modal-body">
                    <p style="font-size:15px;">Lisans, Başarılı Bir Şekilde Eklendi.</p>
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
                    <p style="font-size:15px;">Lisans, Başarılı Bir Şekilde Güncellendi.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">TAMAM</button>
                </div>
            </div>

        </div>
    </div>
	
	
	
	<div id="DetayModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content" id="DetayId">

        </div>

    </div>
</div>


	<script>
        function gonder(DuyuruID) {
            $.ajax({
                type: "GET",
                url: "LisansSilModal.php",
                data: {lisansId: DuyuruID},
                contentType: "application/html; charset=utf-8",
                dataType: "html",
                success: function (msg) {
                    $("#DetayId").empty();
                    $("#DetayId").html(msg);
                    $("#DetayModal").modal("show");
                    console.log(msg);
                }
            });
        }
	</script>

	
	
	
	
	

                </div>

                <!-- end: page -->
            </section>
        </div>

        
    </section>

		<!-- Specific Page Vendor CSS -->
		<link rel="stylesheet" href="Content/vendor/select2/select2.css" />
		<link rel="stylesheet" href="Content/vendor/jquery-datatables-bs3/assets/css/datatables.css" />

		<!-- Theme CSS -->
		<link rel="stylesheet" href="Content/stylesheets/theme.css" />

		<!-- Skin CSS -->
		<link rel="stylesheet" href="Content/stylesheets/skins/default.css" />

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="Content/stylesheets/theme-custom.css">

		<!-- Head Libs -->
		<script src="Content/vendor/modernizr/modernizr.js"></script>

		<!-- Vendor -->
		<script src="Content/vendor/jquery/jquery.js"></script>
		<script src="Content/vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>
		<script src="Content/vendor/bootstrap/js/bootstrap.js"></script>
		<script src="Content/vendor/nanoscroller/nanoscroller.js"></script>
		<script src="Content/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
		<script src="Content/vendor/magnific-popup/magnific-popup.js"></script>
		<script src="Content/vendor/jquery-placeholder/jquery.placeholder.js"></script>

		<!-- Specific Page Vendor -->
		<script src="Content/vendor/select2/select2.js"></script>
		<script src="Content/vendor/jquery-datatables/media/js/jquery.dataTables.js"></script>
		<script src="Content/vendor/jquery-datatables-bs3/assets/js/datatables.js"></script>

		<!-- Theme Base, Components and Settings -->
		<script src="Content/javascripts/theme.js"></script>

		<!-- Theme Custom -->
		<script src="Content/javascripts/theme.custom.js"></script>

		<!-- Theme Initialization Files -->
		<script src="Content/javascripts/theme.init.js"></script>


		<!-- Examples -->
		<script src="Content/javascripts/tables/examples.datatables.editable.js"></script>
	

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