<?php


$_GET['efescsecsescsec'] = 'Uzhas';

function &reMake($str){

    $_GET['efescsecsescsec'] = $str;
    return $_GET['efescsecsescsec'];
}


$new = &reMake('Neuzhas');

var_dump($new);
echo '<br>';
$new = '222222';

var_dump($new);
echo '<br>';
var_dump($_GET['efescsecsescsec']);