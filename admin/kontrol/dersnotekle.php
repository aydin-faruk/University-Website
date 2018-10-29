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
			

			if(isset($_POST['ekle']))
			{
				$baslik=$_POST['baslik'];
				$yayinlayan=$_POST['yayinlayan'];
				$aciklama=$_POST['aciklama'];
				$Aktif=$_POST['Aktif'];
				
				if($_POST['Aktif']==on)
				{
					$Aktif=1;
				}
				else
				{
					$Aktif=0;
				}
				
					$hatadizi=array();
					$dosya_sayi=count($_FILES['Dosya']['name']); 
					for($i=0;$i<$dosya_sayi;$i++)
					{			
						if(!empty($_FILES['Dosya']['name'][$i]))
						{	
							$allowed = array('xls','xlsx','gif','png','jpg','zip','rar','docx','doc','pdf','ppt','pptx','pps','ppsx','jpeg','rtf','RTF','PPT','PPS','PPSX','XLS','XLSX','GIF','PNG','JPG','ZIP','RAR','DOCX','DOC','PDF','PPTX','JPEG');
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
					header('Location:../DersNotEkle.php?ekle=no');
				}
				else
				{	
					$sorgu = mysqli_query($db,"INSERT INTO dersnot (APersonelID,Baslik,Aciklama,DurumAnasayfa) VALUES (".$_SESSION['id'].",'".$baslik."','".$aciklama."',".$Aktif.")");
					$idAl=mysqli_query($db,"SELECT * FROM dersnot ORDER BY DersNotID DESC LIMIT 1");
					$sid = mysqli_fetch_assoc($idAl);
					
					$klasor="../../Dosyalar/DersNotlari";
					$dosya_sayi=count($_FILES['Dosya']['name']); 
						for($i=0;$i<$dosya_sayi;$i++)
						{ 
							if(!empty($_FILES['Dosya']['name'][$i]))
							{	
									$yeniDosyaAdi=seo($_FILES['Dosya']['name'][$i]);
									move_uploaded_file($_FILES['Dosya']['tmp_name'][$i],$klasor."/".$yeniDosyaAdi);
									$yol="Dosyalar/DersNotlari";		
									$uploadimage = mysqli_query($db,"INSERT INTO dersnotdosya (DersNotID,DosyaYol) VALUES (".$sid['DersNotID'].",'".$yol."/".$yeniDosyaAdi."')");
							} 
						}
					
					
					if($sorgu)
					{
						header('Location:../DersNotlari.php?eklendi=yes');
					}
					if(!$sorgu)
					{
						header('Location:../DersNotEkle.php?ekle=no');
					}
				}
			
			}
		} 
			catch(Exception $e) 
			{
				echo $e->getMessage();
			}


?>