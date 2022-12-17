<?php 

$a = 1;
$b = 2;
$c = array(1);
echo "привет, Игорь";
echo '<br/>';
switch(true){                                 // оператор множественного выбора
                                                   
    case $b == 1:

        echo 1;
        break;

    case $b == 2:
        echo 2;
        break;

    case $b == 3:
        echo 3;
        break;
    default:
    echo 'NO';

}

