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
			

			if(isset($_POST['ekle']))
			{
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
					header('Location:../BolumOlanakEkle.php?ekle=no');
				}
				else
				{	
					$sira=mysqli_num_rows(mysqli_query($db,"SELECT Sira FROM olanaklar ORDER BY Sira"))+1;
					$sorgu = mysqli_query($db,"INSERT INTO olanaklar (Baslik,Aciklama,Sira) VALUES ('".$baslik."','".$aciklama."','".$sira."')");
					
					$idAl=mysqli_query($db,"SELECT * FROM olanaklar ORDER BY OlanakID DESC LIMIT 1");
					$sid = mysqli_fetch_assoc($idAl);
					
					$klasor="../../Dosyalar/Olanak";
					$dosya_sayi=count($_FILES['Dosya']['name']); 
						for($i=0;$i<$dosya_sayi;$i++)
						{ 
							if(!empty($_FILES['Dosya']['name'][$i]))
							{	
									$yeniDosyaAdi=seo($_FILES['Dosya']['name'][$i]);
									move_uploaded_file($_FILES['Dosya']['tmp_name'][$i],$klasor."/".$yeniDosyaAdi);
									$yol="Dosyalar/Olanak";		
									$uploadimage = mysqli_query($db,"INSERT INTO olanaklardosya (OlanakID,DosyaYol) VALUES (".$sid['OlanakID'].",'".$yol."/".$yeniDosyaAdi."')");
							} 
						}
					
					
					if($sorgu)
					{
						header('Location:../BolumOlanaklar.php?eklendi=yes');
					}
					if(!$sorgu)
					{
						header('Location:../BolumOlanakEkle.php?ekle=no');
					}
				}
			
			}
		} 
			catch(Exception $e) 
			{
				echo $e->getMessage();
			}


?>