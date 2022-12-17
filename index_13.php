<?php


function user_connect($db)
{
    return function ($user) use ($db) {
        echo $user . ' подключился к базе ' . $db . '<br>';   // замыкание (функция возвращает другую функцию 

    };
}


$db = user_connect(db: 'new base');

// $db('Masha');
// $db('Kirill');

function user_connect2($db, $user, $callback)
{
    $c = $user . ' подключился к базе ' . $db . '<br>';
    $res = $callback($c);
    echo $res;
}


user_connect2(
    db: 'new base',
    user: 'kirill',
    callback: function ($answer) {

        return 'URAURUURA ' . $answer;
    }
);
