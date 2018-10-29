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
				
			
			if(isset($_POST['ilet']))
			{
				$id=mysqli_real_escape_string($db,$_POST['id']);
				$mail=$_POST['mail'];
				$adres=$_POST['adres'];
				$tel=$_POST['tel'];
				$teldiger=$_POST['teldiger'];
				$fax=$_POST['fax'];
				
				$facebook=$_POST['facebook'];
				$twitter=$_POST['twitter'];
				$linkedin=$_POST['linkedin'];
				
				//echo $id."<br/>".$mail."<br/> ".$adres."<br/> ".$tel.$teldiger."<br/> ".$fax."<br/> ".$facebook."<br/> ".$twitter." ".$linkedin;
				
				
				$sorgu = mysqli_query($db, "UPDATE iletisim SET Mail='".$mail."', Adres='".$adres."', Tel='".$tel."', TelDiger='".$teldiger."', Fax='".$fax."', Facebook='".$facebook."', Twitter='".$twitter."', LinkedIN='".$linkedin."' WHERE iletisimID=".$id."");
							
				if($sorgu)
				{
					header('Location:../iletisim.php?guncellendi=yes');
				}
				if(!$sorgu)
				{
					header('Location:../iletisim.php?guncellendi=no');
				}
				
			}
		} 
			catch(Exception $e) 
			{
				echo $e->getMessage();
			}


?>