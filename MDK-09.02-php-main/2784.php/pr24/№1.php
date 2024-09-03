<?php
 echo file_get_contents('dir/test2.txt');

 echo '<br>'.filesize('dir/test2.txt');
echo '<br>'. filesize('dir/test2.txt')/ 1024;
echo '<br>'. filesize('dir/test2.txt')/ 1024/ 1024;
 ?>