<?php

$language = 'php';

$str = 'i am learning "php"';

$hello = 'hello ';

$str_end = '... i know php';

$some_str = 'i am learning ' . $language;

$final =  $str . $str_end; // конкатенация строк(присоединение строк)

$result = "i am learning {$language}";

$hello .= $result;

$heredoc = <<< HEREDOC
sfsefsefsefsef $hello 
HEREDOC;

$dir = `dir`; // исполнение консольной программы, используется с обратными кавычками

echo $final;
echo'<br/>';

echo $some_str;
echo'<br/>';

echo $result;
echo'<br/>';

echo $hello;
echo'<br/>';

echo $heredoc;
echo'<br/>';

var_dump($dir);
echo'<br/>';