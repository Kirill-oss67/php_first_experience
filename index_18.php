<?php

session_start();
var_dump($_SESSION);

$_SESSION['res'] = [1, 2, 3];
