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
					header('Location:../SliderGuncelle.php?guncelle=no&id='.$id);
				}
				else
				{			
					if(!empty($_FILES['Dosya']['name'][$i]))
					{							
						//Dosyaları Sil
						$sor = mysqli_query($db,"select * from slayt where SlaytID=".$id);
						while( $satir = mysqli_fetch_assoc($sor) )
						{		
								if (file_exists("../../".$satir['ResimYolu'])) 
								{
									unlink("../../".$satir['ResimYolu']);
								}
						}
					
					
					$yol;
					$klasor="../../Dosyalar/Slider";
					if(!empty($_FILES['Dosya']['name'][$i]))
					{	
						$yeniDosyaAdi=seo($_FILES['Dosya']['name']);
						move_uploaded_file($_FILES['Dosya']['tmp_name'],$klasor."/".$yeniDosyaAdi);
						$yol="Dosyalar/Slider/";
					} 
					
						$sorgu = mysqli_query($db, "UPDATE slayt SET ResimAdi='".$resimAdi."', ResimYolu='".$yol.$yeniDosyaAdi."', Link='".$link."', Durum=".$durum." WHERE SlaytID=".$id);
					}
					else
					{
						$sorgu = mysqli_query($db, "UPDATE slayt SET ResimAdi='".$resimAdi."', Link='".$link."', Durum=".$durum." WHERE SlaytID=".$id);
					}	
					
					if($sorgu)
					{
						header('Location:../Slider.php?guncellendi=yes');
					}
					if(!$sorgu)
					{
						header('Location:../SliderGuncelle.php?guncelle=no&id='.$id);
					}
					
					}
				
			}
		} 
			catch(Exception $e) 
			{
				echo $e->getMessage();
			}	
?>