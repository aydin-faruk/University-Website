<?php
	
	include 'baglan.php';
	
	
	if(isset($_POST['loggin']))
	{
		if($_POST['kadi']==null || $_POST['sifre']==null)
		{	
			header('Location:sistemegiris.php?login=no');
		}
		else
		{
			
			$kadi=mysqli_real_escape_string($db,$_POST['kadi']);
			$sifre=mysqli_real_escape_string($db,md5($_POST['sifre']));
		
		
			$sorgu = mysqli_query($db,"SELECT * from akademikpersonel where Eposta='".$kadi."' and Sifresi='".$sifre."'");
			$verisay=mysqli_num_rows($sorgu);
			
			if( mysqli_num_rows($sorgu) > 0 )
			{
				$satir = mysqli_fetch_assoc($sorgu);
				$_SESSION['kimlik']=$satir['Unvan']." ".$satir['Adi']." ".$satir['Soyadi'];
				$_SESSION['id']=$satir['APersonelID'];
				
				if($satir['TamYetki']==1)
				{				  	
				    if($verisay>0)
					{	
						$_SESSION['yetki']=1;
						$_SESSION['kadi']=$kadi;
						header('Location:index.php');
					}
				}
				else if($satir['Yetki']==1)
				{				  
				  if($verisay>0)
					{	
						$_SESSION['yetki']=2;
						$_SESSION['kadi']=$kadi;
						header('Location:index.php');
					}
				}	
				else
				{
					$_SESSION['yetki']=0;
					header('Location:sistemegiris.php?login=no');
				}	
				
			}			
			
			else
			{
				header('Location:sistemegiris.php?login=no');
			}
		}
		
	}
	else
	{
		header('Location:sistemegiris.php?login=no');
	}
			
?>