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
			
			if(isset($_POST['guncelle']))
			{
				$id=mysqli_real_escape_string($db,$_POST['id']);
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
					header('Location:../LisansUstuGuncelle.php?guncelle=no&id='.$id);
				}
				else
				{			
					if(!empty($_FILES['Dosya']['name'][$i]))
					{
						//Dosyaları Sil
						$sor = mysqli_query($db,"select * from lisansustu where LisansUstuID=".$id);
						while( $satir = mysqli_fetch_assoc($sor) )
						{		
								if (file_exists("../../".$satir['Link'])) 
								{
									unlink("../../".$satir['Link']);
								}
						}
					
						
						$yol;
						$klasor="../../Dosyalar/LisansUstu";
						if(!empty($_FILES['Dosya']['name'][$i]))
						{	
							$yeniDosyaAdi=seo($_FILES['Dosya']['name']);
							move_uploaded_file($_FILES['Dosya']['tmp_name'],$klasor."/".$yeniDosyaAdi);
							$yol="Dosyalar/LisansUstu/";
						} 
						
						$sorgu = mysqli_query($db, "UPDATE lisansustu SET Baslik='".$baslik."', Link='".$yol.$yeniDosyaAdi."',Durum=".$AnaAktif." WHERE LisansUstuID=".$id);
					}
					else
					{
						$sorgu = mysqli_query($db, "UPDATE lisansustu SET Baslik='".$baslik."', Durum=".$AnaAktif." WHERE LisansUstuID=".$id);
					}	
					
					if($sorgu)
					{
						header('Location:../LisansUstu.php?guncellendi=yes');
					}
					if(!$sorgu)
					{
						header('Location:../LisansUstuGuncelle.php?guncelle=no&id='.$id);
					}
					
					}
				
			}
		} 
			catch(Exception $e) 
			{
				echo $e->getMessage();
			}	
?>