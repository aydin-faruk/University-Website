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
				$resimAdi=$_POST['resimAdi'];
				$link=$_POST['link'];
				$durum=$_POST['durum'];
				
				if($_POST['durum']==on)
				{
					$durum=1;
				}
				else
				{
					$durum=0;
				}
				
					$hatadizi=array();		
						if(!empty($_FILES['Dosya']['name']))
						{	
							$allowed =  array('gif','png','jpg','jpeg','GIF','PNG','JPG','JPEG');
							$filename = $_FILES['Dosya']['name'];
							$ext = pathinfo($filename, PATHINFO_EXTENSION);
							if(!in_array($ext,$allowed)) 
							{
								$hatadizi[$i]="error";
							}							
						}
					
			
				if(in_array('error',$hatadizi))
				{
					header('Location:../SliderEkle.php?ekle=no');
				}
				else
				{	
					$yol;
					$klasor="../../Dosyalar/Slider";
					if(!empty($_FILES['Dosya']['name'][$i]))
					{	
						$yeniDosyaAdi=seo($_FILES['Dosya']['name']);
						move_uploaded_file($_FILES['Dosya']['tmp_name'],$klasor."/".$yeniDosyaAdi);
						$yol="Dosyalar/Slider/";
					} 
					
					$sira=mysqli_num_rows(mysqli_query($db,"SELECT Sira FROM slayt ORDER BY Sira"))+1;
					
					$sorgu = mysqli_query($db,"INSERT INTO slayt (ResimAdi, ResimYolu, Link, Durum, Sira) VALUES ('".$resimAdi."','".$yol.$yeniDosyaAdi."','".$link."',".$durum.",".$sira.")");			

					
					if($sorgu)
					{
						header('Location:../Slider.php?eklendi=yes');
					}
					if(!$sorgu)
					{
						header('Location:../SliderEkle.php?ekle=no');
					}
				}
			
			}
		} 
			catch(Exception $e) 
			{
				echo $e->getMessage();
			}
		

?>