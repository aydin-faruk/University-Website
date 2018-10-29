<?php			
		include '../baglan.php';
	
		session_start();
		ob_start();
		
		try
			{
			if(!isset($_SESSION['kadi']) || $_SESSION['yetki']!=1)
			{
				header('Location:../sistemegiris.php');
			}
			
			$silinecekID= mysqli_real_escape_string($db,$_GET['id']);		
					
			
				$sorgu = mysqli_query($db,"select * from olanaklardosya where OlanakID=".$silinecekID);
				
				while( $satir = mysqli_fetch_assoc($sorgu) )
				{		
						if (file_exists("../../".$satir['DosyaYol'])) 
						{
							unlink("../../".$satir['DosyaYol']);
						}
						$sonuc=mysqli_query($db,"DELETE from olanaklardosya where ODosyaID=".$satir['ODosyaID']);	
				}
					

			$sorgu = mysqli_query($db,'SELECT Sira FROM olanaklar WHERE OlanakID='.$silinecekID);
			$sonuc = mysqli_fetch_assoc($sorgu);
			$sira = $sonuc['Sira'];	
			
			$sorgu = mysqli_query($db,"select * from olanaklar where Sira>".$sira." order by Sira");
			for($i=0; $i<mysqli_num_rows($sorgu); $i++)
			{
				$s = mysqli_query($db, "UPDATE olanaklar SET Sira=".($sira+$i)." WHERE Sira=".($sira+$i+1));						
			}	
						
						
				$OlanakSil=mysqli_query($db,"DELETE from olanaklar where OlanakID=".$silinecekID);

				header('Location:../BolumOlanaklar.php?silindi=yes');	
			} 
			catch(Exception $e) 
			{
				echo $e->getMessage();
			}		
?>