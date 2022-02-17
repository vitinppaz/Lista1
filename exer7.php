<?php
$altura = $_POST['altura'];
$sexo = $_POST['sexo'];


if($_POST['sexo'] == "M"){
    $pesoIdeal = (72.7*$altura)-58;
}elseif($_POST['sexo'] == "F"){
    $pesoIdeal = (62.1*$altura)-44.7;
}

echo "O peso ideal é: {$pesoIdeal}";