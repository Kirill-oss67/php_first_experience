<?php


$name = 'Masha';

function re_name($new_name, &$inner_name)   // использование ссылки переменных 
{
    $inner_name = $new_name;

    echo $inner_name;

    $another_name = 'hello';
}


re_name(new_name: 'Marina', inner_name: $name);

echo '<br>' . $name;
