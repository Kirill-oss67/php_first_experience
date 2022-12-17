<?php 

class Man{
    public $hair = 'Русые';
    public $body = 'Нормальное';
}

$sacha = new Man();

$ivan = new Man();

$arr_1 = array(100, 'letter', true);
$arr_2 = ['кошелек' => 500, 'письмо' => 'текст', 'чехол' => false];

echo 'Волосы Саши - '.$sacha->hair . '<br>';
echo 'Волосы Ивана - '.$ivan->hair . '<br>';
var_dump($arr_1);
var_dump($arr_2);    


