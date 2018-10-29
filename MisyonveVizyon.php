<?php
	include 'kontrol/baglan.php';
	include 'header.php';
?>
			
			
<div role="main" class="main">

    <div class="container">
        <div class="row">

            <div class="col-md-12">
			
			 <hr class="tall" />
                <div class="tabs">
                    <ul class="nav nav-tabs nav-justified">
                        <li class="">
                            <a href="#misyon10" data-toggle="tab" class="text-center" aria-expanded="false">Misyon</a>
                        </li>
                        <li class="active">
                            <a href="#vizyon10" data-toggle="tab" class="text-center" aria-expanded="true">Vizyon</a>
                        </li>
                    </ul>
					<?php 
										
							$sorgu = mysqli_query($db,"SELECT * FROM misyonvizyon");						
										
							if( mysqli_num_rows($sorgu) > 0 )
							{
							 // sonuc kumesini donelim
							while( $satir = mysqli_fetch_assoc($sorgu) )
							{								
					?>
                    <div class="tab-content">
                        <div id="misyon10" class="tab-pane">
                            <p><h4>Misyonumuz</h4></p>
							<?php echo $satir["Misyon"]; ?>
                        </div>
                        <div id="vizyon10" class="tab-pane active">
                            <p><h4>Vizyonumuz</h4></p>
							<?php echo $satir["Vizyon"]; ?>
                        </div>
                    </div>
					<?php	}	}	?>
                </div>
            </div>
            </div></div>
    <hr class="tall" />
</div>
			

<?php
	include 'footer.php';
?>
