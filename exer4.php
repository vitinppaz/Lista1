<?php

$a = $_POST['numA'];
$b = $_POST['numB'];
$c = $_POST['numC'];
$d = $_POST['numD'];

$soma = $a + $c;
$multi = $b * $d;

if($soma > $multi){
    echo "A+C é maior que B*D";
}elseif($soma < $multi){
    echo "A+C é menor que B*D";
}else{
    echo "A+C é igual B*D";
}