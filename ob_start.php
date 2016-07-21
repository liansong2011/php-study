<?php 

ob_end_flush();
echo '1111';
//ob_start(); //打开缓冲区 
echo "Hellon/"; //输出 
header('HTTP/1.0 401 Unauthorized');  
 
$content = ob_get_contents();
print_r($content);

// header("location:index.php"); //把浏览器重定向到index.php 
//ob_end_flush();//输出全部内容到浏览器 \

 ?>