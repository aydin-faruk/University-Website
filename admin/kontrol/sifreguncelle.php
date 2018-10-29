<?php			
		include '../baglan.php';
	
		session_start();
		ob_start();
		
		try
			{
			if(!isset($_SESSION['kadi']) || $_SESSION['yetki']==0)
			{
				header('Location:sistemegiris.php');
			}
				
			if(isset($_POST['sifredegistir']))
			{
				$id=mysqli_real_escape_string($db,$_POST['id']);
				$esifre=md5($_POST['esifre']);
				$ysifre=$_POST['ysifre'];
				$ysifretekrar=$_POST['ysifretekrar'];
				
				
				$sorguBul = mysqli_query($db,"SELECT * FROM akademikpersonel where APersonelID=".$id."");
								
				if( mysqli_num_rows($sorguBul) > 0 )
				{
					// sonuc kumesini donelim
					$satir = mysqli_fetch_assoc($sorguBul);
					
					if($satir['Sifresi']==$esifre)
					{
						if($ysifre == $ysifretekrar)
						{	
							$sorgu = mysqli_query($db, "UPDATE akademikpersonel SET Sifresi='".md5($ysifre)."' WHERE APersonelID=".$id."");
								
							if($sorgu)
							{
								header('Location:../sifreguncelle.php?sd=yes');
							}
							if(!$sorgu)
							{
								header('Location:../sifreguncelle.php?sd=no');
							}
						}
						else
						{
							header('Location:../sifreguncelle.php?sd=no');
						}
					}
					else
					{
						header('Location:../sifreguncelle.php?sd=no');
					}
				}
				else
				{
					header('Location:../sifreguncelle.php?sd=no');
				}
			}
		} 
			catch(Exception $e) 
			{
				echo $e->getMessage();
			}


?>