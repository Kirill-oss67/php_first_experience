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


$foo('hello');
