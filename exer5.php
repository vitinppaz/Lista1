<?php

$numA = $_POST['numA'];
$numB = $_POST['numB'];

if($numA < $numB){
    echo $numA." - ".$numB;
}else{
    echo $numB." - ".$numA;
}
