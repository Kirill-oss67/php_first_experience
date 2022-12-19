<?php

// file_put_contents('text.txt', ' и жить счастливо', FILE_APPEND);

// echo file_get_contents('text.txt');

// $dir = $_SERVER['DOCUMENT_ROOT'] . '/';
// echo is_dir($dir);
// $list = scandir($dir);
// var_dump($list);

// echo filesize('text.txt');


// echo phpinfo();

 $i = 0;

 while(true){
    $i++;
    echo $i;
    if($i === 10){
      exit();
    }
 }