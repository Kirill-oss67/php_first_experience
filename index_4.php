<?php 

$str = '22string';
$a = 1;
$final = $str . $a;
echo '<br/>';
var_dump($a);
$str = (int)$str;

$a = (string)$a ;

echo '<br/>';
var_dump($a);

