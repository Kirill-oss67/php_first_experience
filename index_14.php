<?php


function hello(){
    if($_GET['name'] === 'masha') $_GET['name'] .= ' Ivanova'; 
};
if($_GET['name'] === 'masha') $_GET['name'] .= ' Ivanova' ;      // суперглобалные переменные

// var_dump($_GET);
// hello();

// $_POST;

function hello1(){
    if($_POST['name'] === 'masha') $_POST['name'] .= ' Ivanova'; 
};
if($_POST['name'] === 'masha') $_POST['name'] .= ' Ivanova' ;      // суперглобалные переменные

var_dump($_POST);
hello1() ;


// $_REQUEST;

