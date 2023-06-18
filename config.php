<?php 



$dir_loc="http://".$_SERVER['HTTP_HOST']."/education/";
$whole_url=$_SERVER['REQUEST_URI'];
$targetpage=base64_encode($whole_url);
$php_self=$_SERVER['PHP_SELF'];
$page_name_1=str_replace("/education/","",$php_self);
$page_name_3=str_replace("/education/","",$page_name_1);
$page_name=$page_name_3;
$local_url_exculde="/";	


function seo_friendly_url($string){ 
		$string = str_replace(array('[\', \']'), '', $string); 
		$string = preg_replace('/\[.*\]/U', '', $string); $string = preg_replace('/&(amp;)?#?[a-z0-9]+;/i', '-', 
		$string); $string = htmlentities($string, ENT_COMPAT, 'utf-8'); 
		$string = preg_replace('/&([a-z])(acute|uml|circ|grave|ring|cedil|slash|tilde|caron|lig|quot|rsquo);/i', '\\1', 
		$string ); $string = preg_replace(array('/[^a-z0-9]/i', '/[-]+/') , '-', 
		$string); return strtolower(trim($string, '-')); 
		}

?>