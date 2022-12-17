<?php 


$str = 'Marina is z x z 123123  very beautifull and Kirill is handsome';

// $res = preg_split('/\s+/', $str);

$res = preg_match_all('/[A-Z]$/', $str, $mathes); 

var_dump($res);   