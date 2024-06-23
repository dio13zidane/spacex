<?php

$a = $_GET['angka1'];
$b = $_GET['angka2'];
$oprt = $_GET['operation'];

if($oprt == "+"){
    echo $a + $b;
}elseif($oprt=="-"){
    echo $a - $b ;
}