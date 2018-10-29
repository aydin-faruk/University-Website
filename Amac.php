<?php
	include 'kontrol/baglan.php';
	include 'header.php';
?>

	
<div role="main" class="main">

    <div class="container">

            <div class="row">
                <div class="col-md-12"><hr class="tall" />
                             <h3 style="font-weight:600; text-align: -ms-center; text-align: center; text-align: -webkit-center; text-align: -moz-center; text-align: -o-center; text-align: -khtml-center;"><b> AMAÇ </b></h3>

                    <div class="container">
                        <?php 
										
							$sorgu = mysqli_query($db,"SELECT * FROM amac");						
										
							if( mysqli_num_rows($sorgu) > 0 )
							{
							 // sonuc kumesini donelim
							while( $satir = mysqli_fetch_assoc($sorgu) )
							{
								echo $satir["Aciklama"];
							}
							}							
									?>
                    </div>
                    </div>
            </div>

</div>
    <hr class="tall" />

</div>

<?php
	include 'footer.php';
?>
