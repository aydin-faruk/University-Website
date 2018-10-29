<?php
	include 'kontrol/baglan.php';
	include 'header.php';
?>
				
				
<div role="main" class="main">

    <div class="container">

        <div class="row">
            <div class="col-md-12">
				<hr class="tall" />
                <div class="container">
					<?php 
										
							$sorgu = mysqli_query($db,"SELECT * FROM yukseklisans");						
										
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
