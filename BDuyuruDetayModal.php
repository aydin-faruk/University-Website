<?php
		
	include 'kontrol/baglan.php';
	$id=mysqli_real_escape_string($db,$_GET['bduyuruId']);
	
	$sorgu = mysqli_query($db,"SELECT * FROM bolumduyuru where BolumDuyuruID=".$id."");
						
	if( mysqli_num_rows($sorgu) > 0 )
	{	
	// sonuc kumesini donelim
		$satir = mysqli_fetch_assoc($sorgu); 
?>

<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">&times;</button>
    <h4 style="font-weight:600; color:#FFF; text-transform: uppercase;" class="modal-title"><strong><i style="font-size: 25px;" class="fa fa-university" aria-hidden="true"></i> <?php echo $satir["Baslik"]; ?></strong></h4>
</div>
<div class="modal-body">
    <div>
        <?php echo $satir["Aciklama"]; ?>
    </div>
   <?php 
		$sorguDosya = mysqli_query($db,"SELECT * FROM bolumduyurudosya where BolumDuyuruID=".$id."");		
		if(mysqli_num_rows($sorguDosya) > 0) 
		{
			?><h5>Ekler</h5><?php	
			while( $satirDosya = mysqli_fetch_assoc($sorguDosya))
			{	?>
				<h6 style="font-size: 13.5px !important;"><a href="<?php echo $satirDosya['DosyaYol'] ?>" target="_blank"><?php echo substr($satirDosya['DosyaYol'],21); ?></a></h6>
	<?php } } ?>
    </div>
<div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">Tamam</button>
</div>
	<?php } ?>