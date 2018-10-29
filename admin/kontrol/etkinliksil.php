<?php			
		include '../baglan.php';
	
		session_start();
		ob_start();
		
		try
			{
			if(!isset($_SESSION['kadi']) || $_SESSION['yetki']==0)
			{
				header('Location:../sistemegiris.php');
			}
			
			$silinecekID= mysqli_real_escape_string($db,$_GET['id']);		
					
			
				$sorgu = mysqli_query($db,"select * from etkinlikdosya where EtkinlikID=".$silinecekID);
				
				while( $satir = mysqli_fetch_assoc($sorgu) )
				{		
						if (file_exists("../../".$satir['DosyaYol'])) 
						{
							unlink("../../".$satir['DosyaYol']);
						}
						$sonuc=mysqli_query($db,"DELETE from etkinlikdosya where DosyaID=".$satir['DosyaID']);	
				}
								
				$DuyuruSil=mysqli_query($db,"DELETE from etkinlik where EtkinlikID=".$silinecekID);
				header('Location:../Etkinlikler.php?silindi=yes');	
			} 
			catch(Exception $e) 
			{
				echo $e->getMessage();
			}			
?>