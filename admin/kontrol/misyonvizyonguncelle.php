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
				$maciklama=$_POST['maciklama'];
				$vaciklama=$_POST['vaciklama'];			
					
				$sorgu = mysqli_query($db, "UPDATE misyonvizyon SET Misyon='".$maciklama."', Vizyon='".$vaciklama."' WHERE MisyonVizyonID=".$id);
					
					
					if($sorgu)
					{
						header('Location:../BolumMisyonveVizyon.php?guncellendi=yes');
					}
					if(!$sorgu)
					{
						header('Location:../BolumMisyonveVizyon.php?guncelle=no&id='.$id);
					}
					
			}
		} 
			catch(Exception $e) 
			{
				echo $e->getMessage();
			}
?>