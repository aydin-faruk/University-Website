<?php
	
	include '../baglan.php';
	
		session_start();
		ob_start();
	
	$s="Örnek Seo Link";
	
	
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
		 $s = str_replace('.', '', $s);
		 $s = trim($s, '-');
		 return $s;
	}
	
	echo seo($s);
	
	/* yazilimlar/<?=seo($uruncek["urun_ad"]).'/'.$uruncek["urun_id"]?>
		
		RewriteRule ^haber-detay/([0-9a-zA-Z-_]+)/([0-9]+)$ haber-detay.php?sef=$1&haber_id=$2 [L,QSA]	
	*/
	
?>