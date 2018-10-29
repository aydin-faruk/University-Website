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
			
			$silinecekID= mysqli_real_escape_string($db,$_GET['id']);	
			
			$sira;			
			
			$sorgu = mysqli_query($db,"select * from idaripersonel where IPersonelID=".$silinecekID);
				 
				while( $satir = mysqli_fetch_assoc($sorgu) )
				{		
						if (file_exists("../../".$satir['ResimYolu'])) 
						{
							unlink("../../".$satir['ResimYolu']);
						}
						
						$sira=$satir['Sira'];
				}	
			
			
				$sorgu = mysqli_query($db,"select * from idaripersonel where Sira>".$sira." order by Sira");
				for($i=0; $i<mysqli_num_rows($sorgu); $i++)
				{
					$s = mysqli_query($db, "UPDATE idaripersonel SET Sira=".($sira+$i)." WHERE Sira=".($sira+$i+1));						
				}
				
				
			
			$sorgu=mysqli_query($db,"DELETE from idaripersonel where IPersonelID=".$silinecekID);
			

			if($sorgu>0)
			{
			   header('Location:../idariPersonel.php?silindi=yes');
			}
			else
			{	
			   header('Location:../idariPersonel.php?sil=no');
			}   
		} 
			catch(Exception $e) 
			{
				echo $e->getMessage();
			}
?>