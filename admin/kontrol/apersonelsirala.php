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

				
				$sorgu = mysqli_query($db, "UPDATE akademikpersonel SET Sira=0 WHERE APersonelID!=5 AND Sira!=-1 AND APersonelID=".$id);
				
				if($islem=="asagi")
				{
					$yenisira=$sira+1;	
				}
				else if($islem=="yukari")
				{
					$yenisira=$sira-1;
				}		
					
				$asorgu = mysqli_query($db, "UPDATE akademikpersonel SET Sira=".$sira." WHERE APersonelID!=5 AND Sira=".$yenisira);
				$ysorgu = mysqli_query($db, "UPDATE akademikpersonel SET Sira=".$yenisira." WHERE APersonelID!=5 AND Sira=0");
							
				header('Location:../AkademikPersonel.php');
				
			}
		} 
			catch(Exception $e) 
			{
				echo $e->getMessage();
			}

?>