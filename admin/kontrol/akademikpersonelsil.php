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
					
				$silDuyuru = mysqli_query($db,"select * from duyuru where APersonelID!=5 and APersonelID=".$silinecekID);
				
				while( $satirDuyuru = mysqli_fetch_assoc($silDuyuru) )
				{		
						$silDuyuruDosya = mysqli_query($db,"select * from duyurudosya where DuyuruID=".$satirDuyuru['DuyuruID']);
						while($satirDosya = mysqli_fetch_assoc($silDuyuruDosya))
						{
							if (file_exists("../../".$satirDosya['DosyaYol'])) 
							{
								unlink("../../".$satirDosya['DosyaYol']);
							}
							$sonuc=mysqli_query($db,"DELETE from duyurudosya where DosyaID=".$satirDosya['DosyaID']);
						}	
						
					$DuyuruSil=mysqli_query($db,"DELETE from duyuru where DuyuruID=".$satirDuyuru['DuyuruID']);				
				}
				
				
				
				$silBolumDuyuru = mysqli_query($db,"select * from bolumduyuru where APersonelID!=5 and APersonelID=".$silinecekID);
				
				while( $satirBolumDuyuru = mysqli_fetch_assoc($silBolumDuyuru) )
				{		
						$silBolumDuyuruDosya = mysqli_query($db,"select * from bolumduyurudosya where BolumDuyuruID=".$satirBolumDuyuru['BolumDuyuruID']);
						while($satirDosya = mysqli_fetch_assoc($silBolumDuyuruDosya))
						{
							if (file_exists("../../".$satirDosya['DosyaYol'])) 
							{
								unlink("../../".$satirDosya['DosyaYol']);
							}
							$sonuc=mysqli_query($db,"DELETE from bolumduyurudosya where DosyaID=".$satirDosya['DosyaID']);
						}	
						
					$BolumDuyuruSil=mysqli_query($db,"DELETE from bolumduyuru where BolumDuyuruID=".$satirBolumDuyuru['BolumDuyuruID']);				
				}
				
				
				
				
				$silDersNot = mysqli_query($db,"select * from dersnot where APersonelID!=5 and APersonelID=".$silinecekID);
				
				while( $satirDersNot = mysqli_fetch_assoc($silDersNot))
				{		
						$silDersNotDosya = mysqli_query($db,"select * from dersnotdosya where DersNotID=".$satirDersNot['DersNotID']);
						while($satirDosya = mysqli_fetch_assoc($silDersNotDosya))
						{
							if (file_exists("../../".$satirDosya['DosyaYol'])) 
							{
								unlink("../../".$satirDosya['DosyaYol']);
							}
							$sonuc=mysqli_query($db,"DELETE from dersnotdosya where DosyaID=".$satirDosya['DosyaID']);
						}	
						
					$DuyuruSil=mysqli_query($db,"DELETE from dersnot where DersNotID=".$satirDersNot['DersNotID']);				
				}
				
			$sira;	
			$sorgu = mysqli_query($db,"select * from akademikpersonel where APersonelID!=5 and APersonelID=".$silinecekID);
				
				while( $satir = mysqli_fetch_assoc($sorgu) )
				{		
						if (file_exists("../../".$satir['ResimYolu'])) 
						{
							unlink("../../".$satir['ResimYolu']);
						}
						$sira=$satir['Sira'];
				}	

			
				$sorgu = mysqli_query($db,"select * from akademikpersonel where Sira>".$sira." and Sira!=-1 order by Sira");
				for($i=0; $i<mysqli_num_rows($sorgu); $i++)
				{
					$s = mysqli_query($db, "UPDATE akademikpersonel SET Sira=".($sira+$i)." WHERE Sira=".($sira+$i+1));						
				}	
			 
			$sorgu=mysqli_query($db,"DELETE from akademikpersonel where APersonelID!=5 and APersonelID=".$silinecekID);
			 
			if($sorgu>0)
			{
			   header('Location:../AkademikPersonel.php?silindi=yes');
			}
			else
			{	
			   header('Location:../AkademikPersonel.php?silindi=no');
			}   
		} 
			catch(Exception $e) 
			{
				echo $e->getMessage();
			}
?>