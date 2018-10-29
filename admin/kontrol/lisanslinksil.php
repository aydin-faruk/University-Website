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
			
					
			$sorgu = mysqli_query($db,'SELECT Sira FROM lisanslink WHERE LisansID='.$silinecekID);
			$sonuc = mysqli_fetch_assoc($sorgu);
			$sira = $sonuc['Sira'];	
			
			$sorgu = mysqli_query($db,"select * from lisanslink where Sira>".$sira." order by Sira");
			for($i=0; $i<mysqli_num_rows($sorgu); $i++)
			{
				$s = mysqli_query($db, "UPDATE lisanslink SET Sira=".($sira+$i)." WHERE Sira=".($sira+$i+1));						
			}
								
				$DuyuruSil=mysqli_query($db,"DELETE from lisanslink where LisansID=".$silinecekID);
				header('Location:../LisansLink.php?silindi=yes');	
		} 
			catch(Exception $e) 
			{
				echo $e->getMessage();
			}				
?>