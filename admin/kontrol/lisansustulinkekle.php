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
					
										
					$sira=mysqli_num_rows(mysqli_query($db,"SELECT Sira FROM lisansustulink ORDER BY Sira"))+1;
					$sorgu = mysqli_query($db,"INSERT INTO lisansustulink (Baslik, Link, Durum, Sira) VALUES ('".$baslik."','".$link."',".$AnaAktif.",".$sira.")");			

					
					if($sorgu)
					{
						header('Location:../LisansUstuLink.php?eklendi=yes');
					}
					if(!$sorgu)
					{
						header('Location:../LisansUstuLinkEkle.php?ekle=no');
					}
			}
		} 
			catch(Exception $e) 
			{
				echo $e->getMessage();
			}


?>