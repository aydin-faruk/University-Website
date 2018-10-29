<?php
	session_start();	 
	ob_start();
	 
	session_destroy();
	
	echo "<p  style='margin-top:100px;'><center><b>Basarili Bir  Sekilde Cikis Yaptiniz. Ana Sayfaya Yonlendiriliyorsunuz.</b></center></p>";
	
	header("Refresh: 2; url=sistemegiris.php");

?>