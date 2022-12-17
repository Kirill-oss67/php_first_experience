<?php 

$fp = fopen('text.txt', 'r+');

flock($fp, LOCK_EX);

flock($fp, LOCK_EX);

fpassthru($fp);

fclose($fp);