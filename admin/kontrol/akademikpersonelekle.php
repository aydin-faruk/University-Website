<?php			
		include '../baglan.php';
	
		session_start();
		ob_start();
		
		try
			{
			if(!isset($_SESSION['kadi']) || $_SESSION['yetki']!=1)
			{
				header('Location:sistemegiris.php');
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
				$unvan=$_POST['unvan'];
				$adi=$_POST['adi'];
				$soyadi=$_POST['soyadi'];
				$dahilitel=$_POST['dahilitel'];
				$eposta=$_POST['eposta'];
				$webadresi=$_POST['webadresi'];
				$sifresi=$_POST['sifresi'];
				$sifresitekrar=$_POST['sifresitekrar'];
				if($sifresi==$sifresitekrar)
				{	
					if($_POST['yetki']==on)
					{
						$yetki=1;
					}
					else
					{
						$yetki=0;
					}
					
					if($_POST['tamyetki']==on)
					{
						$tamyetki=1;
					}
					else
					{
						$tamyetki=0;
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
						header('Location:../AkademikPersonelEkle.php?ekle=no');
					}
					else
					{	
						$yol;
						$klasor="../../Dosyalar/APersonel";
						if(!empty($_FILES['Dosya']['name'][$i]))
						{	
							$yeniDosyaAdi=seo($_FILES['Dosya']['name']);
							move_uploaded_file($_FILES['Dosya']['tmp_name'],$klasor."/".$yeniDosyaAdi);
							$yol="Dosyalar/APersonel/";
						}
						
						$sira=mysqli_num_rows(mysqli_query($db,"SELECT Sira FROM akademikpersonel WHERE Sira!=-1 ORDER BY Sira"))+1;
						
						$sorgu = mysqli_query($db,"INSERT INTO akademikpersonel (Unvan,Adi,Soyadi,DahiliTel,Eposta,WebAdresi,ResimYolu,Sifresi,Yetki,TamYetki,Sira) VALUES ('".$unvan."','".$adi."','".$soyadi."','".$dahilitel."','".$eposta."','".$webadresi."','".$yol.$yeniDosyaAdi."','".md5($sifresi)."',".$yetki.",".$tamyetki.",".$sira.")");
						
					}
					
					
					if($sorgu)
					{
						header('Location:../AkademikPersonel.php?eklendi=yes');
					}
					if(!$sorgu)
					{
						header('Location:../AkademikPersonelEkle.php?ekle=no');
					}
				}
				else
				{
					header('Location:../AkademikPersonelEkle.php?ekle=no');
				}
			}	
		} 
			catch(Exception $e) 
			{
				echo $e->getMessage();
			}


?>