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
						

			if(isset($_POST['ekle']))
			{
				$baslik=$_POST['baslik'];
				$link=$_POST['link'];
				$AnaAktif=$_POST['AnaAktif'];
				
				if($_POST['AnaAktif']==on)
				{
					$AnaAktif=1;
				}
				else
				{
					$AnaAktif=0;
				}
				
				
					
					$sira=mysqli_num_rows(mysqli_query($db,"SELECT Sira FROM ogrencilink ORDER BY Sira"))+1;
					$sorgu = mysqli_query($db,"INSERT INTO ogrencilink (Baslik, Link, Durum, Sira) VALUES ('".$baslik."','".$link."',".$AnaAktif.",".$sira.")");			

					
					if($sorgu)
					{
						header('Location:../OgrenciLink.php?eklendi=yes');
					}
					if(!$sorgu)
					{
						header('Location:../OgrenciLinkEkle.php?ekle=no');
					}
			}
		} 
			catch(Exception $e) 
			{
				echo $e->getMessage();
			}


?>