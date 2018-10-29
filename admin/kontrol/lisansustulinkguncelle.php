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
			
			
			if(isset($_POST['guncelle']))
			{
				$id=mysqli_real_escape_string($db,$_POST['id']);
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
				
					
				$sorgu = mysqli_query($db, "UPDATE lisansustulink SET Baslik='".$baslik."', Link='".$link."',Durum=".$AnaAktif." WHERE LisansUstuID=".$id);
					
						
					
					if($sorgu)
					{
						header('Location:../LisansUstuLink.php?guncellendi=yes');
					}
					if(!$sorgu)
					{
						header('Location:../LisansUstuLinkGuncelle.php?guncelle=no&id='.$id);
					}
									
			}
		} 
			catch(Exception $e) 
			{
				echo $e->getMessage();
			}	
?>