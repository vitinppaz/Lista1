<?php

$num = $_POST['num'];

if($_POST['num'] > 0){
    echo "Valor positivo";
}else{
    if($_POST['num'] < 0){
        echo "Valor negativo";
    }else{
        echo "Valor igual a zero";
    }
}