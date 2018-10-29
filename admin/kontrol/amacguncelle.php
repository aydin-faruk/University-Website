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
				$aciklama=$_POST['aciklama'];			
					
				$sorgu = mysqli_query($db, "UPDATE amac SET Aciklama='".$aciklama."' WHERE AmacID=".$id);
					
					
					if($sorgu)
					{
						header('Location:../BolumAmac.php?guncellendi=yes');
					}
					if(!$sorgu)
					{
						header('Location:../BolumAmac.php?guncelle=no&id='.$id);
					}
					
			}
		} 
			catch(Exception $e) 
			{
				echo $e->getMessage();
			}
?>