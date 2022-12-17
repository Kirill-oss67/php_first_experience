<?php

$str = '  && ?? ? &    Marina is very beautifull and Kirill is handsome       && ?? ? &         ';
var_dump($str);
echo '<br>';
// var_dump($str[0]);
// $data = strlen($str);
$need_to_find = 'Marina';
// $data = strpos($str, 'Marina');
// $len = strlen($need_to_find);
// $data = substr($str, stripos($str, $need_to_find), length: $len);
$data = trim($str, ' ?&');
// $data = str_replace($need_to_find, 'Katia', $data);

$data = explode(' ', $data);

var_dump($data);
