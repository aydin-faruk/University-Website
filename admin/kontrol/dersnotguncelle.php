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
					header('Location:../DersNotGuncelle.php?guncelle=no&id='.$id);
				}
				else
				{			
					$sorgu = mysqli_query($db, "UPDATE dersnot SET Baslik='".$baslik."', Aciklama='".$aciklama."', DurumAnasayfa=".$Aktif." WHERE DersNotID=".$id);
					
					if($_POST['DosyaSilOnay']==on)
					{
						//Dosyaları Sil
						$sor = mysqli_query($db,"select * from dersnotdosya where DersNotID=".$id);
						while( $satir = mysqli_fetch_assoc($sor) )
						{		
								if (file_exists("../../".$satir['DosyaYol'])) 
								{
									unlink("../../".$satir['DosyaYol']);
								}
								$sonuc=mysqli_query($db,"DELETE from dersnotdosya where DosyaID=".$satir['DosyaID']);	
						}
					}
					//Dosyaları Ekle
						$klasor="../../Dosyalar/DersNotlari";
						$dosya_sayi=count($_FILES['Dosya']['name']);
						if($dosya_sayi>0)
						{
							for($i=0;$i<$dosya_sayi;$i++)
							{ 
								if(!empty($_FILES['Dosya']['name'][$i]))
								{ 
									$yeniDosyaAdi=seo($_FILES['Dosya']['name'][$i]);
									move_uploaded_file($_FILES['Dosya']['tmp_name'][$i],$klasor."/".$yeniDosyaAdi);
									$yol="Dosyalar/DersNotlari";		
									$uploadimage = mysqli_query($db,"INSERT INTO dersnotdosya (DersNotID,DosyaYol) VALUES (".$id.",'".$yol."/".$yeniDosyaAdi."')");
								} 
							}
						}
					
					
					if($sorgu)
					{
						header('Location:../DersNotlari.php?guncellendi=yes');
					}
					if(!$sorgu)
					{
						header('Location:../DersNotGuncelle.php?guncelle=no&id='.$id);
					}
					
					}
				
			}
		} 
			catch(Exception $e) 
			{
				echo $e->getMessage();
			}	
?>