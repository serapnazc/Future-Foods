
<?php
	include('./includes-website/html_header.php');
?>
----------------------------------------------------
<?php

function aaa($string){

  $string = preg_replace("`\[.*\]`U","",$string);
  $string = preg_replace('`&(amp;)?#?[a-z0-9]+;`i','-',$string);
  $string = htmlentities($string, ENT_COMPAT, 'utf-8');
  $string = preg_replace( "`&([a-z])(acute|uml|circ|grave|ring|cedil|slash|tilde|caron|lig|quot|rsquo);`i","\\1", $string );
  $string = preg_replace( array("`[^a-z0-9]`i","`[-]+`") , "-", $string);


  if ($down == 1)
  {
      $string = str_replace('-','_',$string);
      return strtolower(trim($string, '_'));
  }
  else
  {
      return strtolower(trim($string, '-'));
  }
}
$b ='BahÃ§eÅŸehir Ãœniversitesi';

$data = aaa($b);

echo $data;







 ?>
