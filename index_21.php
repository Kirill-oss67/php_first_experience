<?php 

$fp = fopen('text.txt', 'r+');

// $file = [];

// $file = file('text.txt');

// while(!feof($fp)){
//     $file[] = fgets($fp) . '<br>' ;
// }

// fpassthru($fp);

// fwrite($fp, 'some text');

// flock($fp, LOCK_EX);

// sleep(5);

// flock($fp, LOCK_UN);

// sleep(5);

ftruncate($fp, 0);

fclose($fp);

var_dump($fp);

// var_dump($file);
// echo '<br>';
// echo $fp;