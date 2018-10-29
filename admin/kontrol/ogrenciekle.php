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
				$AnaAktif=$_POST['AnaAktif'];
				
				if($_POST['AnaAktif']==on)
				{
					$AnaAktif=1;
				}
				else
				{
					$AnaAktif=0;
				}
				
					$hatadizi=array();		
						if(!empty($_FILES['Dosya']['name']))
						{	
							$allowed = array('xls','xlsx','gif','png','jpg','zip','rar','docx','doc','pdf','ppt','pptx','pps','ppsx','jpeg','rtf','RTF','PPT','PPS','PPSX','XLS','XLSX','GIF','PNG','JPG','ZIP','RAR','DOCX','DOC','PDF','PPTX','JPEG');
							$filename = $_FILES['Dosya']['name'];
							$ext = pathinfo($filename, PATHINFO_EXTENSION);
							if(!in_array($ext,$allowed)) 
							{
								$hatadizi[$i]="error";
							}							
						}
					
			
				if(in_array('error',$hatadizi))
				{
					header('Location:../OgrenciEkle.php?ekle=no');
				}
				else
				{	
					$yol;
					$klasor="../../Dosyalar/Ogrenci";
					if(!empty($_FILES['Dosya']['name'][$i]))
					{	
						$yeniDosyaAdi=seo($_FILES['Dosya']['name']);
						move_uploaded_file($_FILES['Dosya']['tmp_name'],$klasor."/".$yeniDosyaAdi);
						$yol="Dosyalar/Ogrenci/";
					} 
					
					$sira=mysqli_num_rows(mysqli_query($db,"SELECT Sira FROM ogrenci ORDER BY Sira"))+1;
					$sorgu = mysqli_query($db,"INSERT INTO ogrenci (Baslik, Link, Durum, Sira) VALUES ('".$baslik."','".$yol.$yeniDosyaAdi."',".$AnaAktif.",".$sira.")");			

					
					if($sorgu)
					{
						header('Location:../Ogrenci.php?eklendi=yes');
					}
					if(!$sorgu)
					{
						header('Location:../OgrenciEkle.php?ekle=no');
					}
				}
			
			}
		} 
			catch(Exception $e) 
			{
				echo $e->getMessage();
			}


?>