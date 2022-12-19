<?php

$glob = 'world';

function hello($str)
{
    global $glob;
    echo $str . ' ' . $glob;
    $glob = 'Earth';
}
echo $glob;
echo '<br>';
$hello = 'hello';
hello($hello);
echo '<br>';
echo $glob;
echo '<br>';
hello($hello);
echo '<br>';

$foo = function ($str) use ($glob) {

    echo '<br>' . $str . ' ' . $glob . '<br>';
};



$test = 'test';



$foo('hello');

// <?php

// class Man{
//      public $hair = 'brown';
//      public $body = 'normal';
// public function eat($calories){
//     if($calories > 500){
//         $this->body = 'fat';
//     }else $this->body = 'slim';
// }

// }

// $marina = new Man();

// $kirill = new Man();

// echo 'Hair of marina ' . $marina->hair . '<br>';
// echo 'Hair of kirill ' . $kirill->hair . '<br>';

// $marina->hair = 'blond';
// echo 'Hair of marina ' . $marina->hair . '<br>';

// $marina->eat(200);
// $kirill->eat(2000);
// echo 'body of marina ' . $marina->body . '<br>';
// echo 'body of kirill ' . $kirill->body . '<br>';

// ?>

