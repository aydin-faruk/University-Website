<?php			
		include '../baglan.php';
	
		session_start();
		ob_start();
		
		try
			{
			if(!isset($_SESSION['kadi']) || $_SESSION['yetki']==0)
			{
				header('Location:../sistemegiris.php');

			}
			
			function seo($s) 
			{
			 $tr = array('ş','Ş','ı','I','İ','ğ','Ğ','ü','Ü','ö','Ö','Ç','ç','(',')','/',':',',');
			 $eng = array('s','s','i','i','i','g','g','u','u','o','o','c','c','','','-','-','');
			 $s = str_replace($tr,$eng,$s);
			 $s = strtolower($s);
			 $s = preg_replace('/&amp;amp;amp;amp;amp;amp;amp;amp;amp;.+?;/', '', $s);
			 $s = preg_replace('/\s+/', '-', $s);
			 $s = preg_replace('|-+|', '-', $s);
			 $s = preg_replace('/#/', '', $s);
			 $s = trim($s, '-');
			 return $s;
			}
			
			if(isset($_POST['guncelle']))
			{
				$id=mysqli_real_escape_string($db,$_POST['id']);
				$baslik=$_POST['baslik'];
				$aciklama=$_POST['aciklama'];
				
				$hatadizi=array();
					$dosya_sayi=count($_FILES['Dosya']['name']); 
					for($i=0;$i<$dosya_sayi;$i++)
					{			
						if(!empty($_FILES['Dosya']['name'][$i]))
						{	
							$allowed =  array('png','jpg','jpeg','PNG','JPG','JPEG');
							$filename = $_FILES['Dosya']['name'][$i];
							$ext = pathinfo($filename, PATHINFO_EXTENSION);
							if(!in_array($ext,$allowed)) 
							{
								$hatadizi[$i]="error";
							}							
						}
					}
			
				if(in_array('error',$hatadizi))
				{
					header('Location:../BolumOlanakGuncelle.php?guncelle=no&id='.$id);
				}
				else
				{			
					$sorgu = mysqli_query($db, "UPDATE olanaklar SET Baslik='".$baslik."', Aciklama='".$aciklama."' WHERE OlanakID=".$id);
					
					if($_POST['DosyaSilOnay']==on)
					{
						//Dosyaları Sil
						$sor = mysqli_query($db,"select * from olanaklardosya where OlanakID=".$id);
						while( $satir = mysqli_fetch_assoc($sor) )
						{		
								if (file_exists("../../".$satir['DosyaYol'])) 
								{
									unlink("../../".$satir['DosyaYol']);
								}
								$sonuc=mysqli_query($db,"DELETE from olanaklardosya where ODosyaID=".$satir['ODosyaID']);	
						}
					}
					
					//Dosyaları Ekle
						$klasor="../../Dosyalar/Olanak";
						$dosya_sayi=count($_FILES['Dosya']['name']);
						if($dosya_sayi>0)
						{
							for($i=0;$i<$dosya_sayi;$i++)
							{ 
								if(!empty($_FILES['Dosya']['name'][$i]))
								{ 
									$yeniDosyaAdi=seo($_FILES['Dosya']['name'][$i]);
									move_uploaded_file($_FILES['Dosya']['tmp_name'][$i],$klasor."/".$yeniDosyaAdi);
									$yol="Dosyalar/Olanak";		
									$uploadimage = mysqli_query($db,"INSERT INTO olanaklardosya (OlanakID,DosyaYol) VALUES (".$id.",'".$yol."/".$yeniDosyaAdi."')");
								} 
							}
						}
					
					
					if($sorgu)
					{
						header('Location:../BolumOlanaklar.php?guncellendi=yes');
					}
					if(!$sorgu)
					{
						header('Location:../BolumOlanakGuncelle.php?guncelle=no&id='.$id);
					}
					
					}
				
			}
		} 
			catch(Exception $e) 
			{
				echo $e->getMessage();
			}	
?>