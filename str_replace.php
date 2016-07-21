<?php 
 $string = "Location: ../upgrade/index.php\n";

 $string = str_replace(array("\r", "\n"), array('', ''), $string);

 var_dump($string);

 ?>