<?php			
		include '../baglan.php';
	
		session_start();
		ob_start();
		
		try
			{
			if(!isset($_SESSION['kadi']) || $_SESSION['yetki']!=1)
			{
				header('Location:sistemegiris.php');
			}
			
			if(!isset($_POST['islem']))
			{
				$id=mysqli_real_escape_string($db,$_GET['id']);
				$sira=$_GET['sira'];
				$islem=$_GET['islem'];

				
				$sorgu = mysqli_query($db, "UPDATE lisansustulink SET Sira=0 WHERE LisansUstuID=".$id);
				
				if($islem=="asagi")
				{
					$yenisira=$sira+1;	
				}
				else if($islem=="yukari")
				{
					$yenisira=$sira-1;
				}		
					
				$asorgu = mysqli_query($db, "UPDATE lisansustulink SET Sira=".$sira." WHERE Sira=".$yenisira);
				$ysorgu = mysqli_query($db, "UPDATE lisansustulink SET Sira=".$yenisira." WHERE Sira=0");
							
				header('Location:../LisansUstuLink.php');
				
			}
		} 
			catch(Exception $e) 
			{
				echo $e->getMessage();
			}

?>