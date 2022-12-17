<?php


$meshok = ['кошелек'=> 500, 'конверт' => 'курсовая работа', 
'чехол' => false, 
'барсетка' => ['ipad', 'ipod', 'iphone', ['samsung', 'huawey'] ]
 ];

//  echo $meshok['кошелек'];

 foreach($meshok as $key => $item){
    echo '$key - ';
    var_dump($key) . '<br/>';
    echo '$item - ';
    var_dump($item) . '<br/>';
    echo '<br>';
 }
 echo '<br>';
 echo '<br>';

 for($i = 0; $i < count($meshok['барсетка']); $i++){
    var_dump($meshok['барсетка'][$i] );
    echo '<br>';
 }