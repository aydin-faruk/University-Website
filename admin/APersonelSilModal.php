<?php
		
	include 'baglan.php';
	
	if(!isset($_SESSION['kadi']) || $_SESSION['yetki']!=1)
		{
			header('Location:sistemegiris.php');
		}
	
	$id=mysqli_real_escape_string($db,$_GET['apersonelId']); 
?>

<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">&times;</button>
    <h4 class="modal-title"><strong><i class="fa fa-warning" aria-hidden="true"></i> UYARI</strong></h4>
</div>
<div class="modal-body">
	<p style="color:red;"> <b>Silinecek personele ait tüm duyurular ve ders notlarıda silinecektir!</b></p>
    <p> Silmek istediğinize emin misiniz?</p>
</div>
<div class="modal-footer">
    <a href="kontrol/akademikpersonelsil.php?id=<?php echo $id; ?>"><button style="background-color:red; border-color:red;" class="btn btn-primary">Onayla</button></a>
</div>