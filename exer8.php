<?php
$salario = $_POST['salario'];

if($salario<3000){
    $novoSalario = $salario * 1.5;
}else{
    $novoSalario = $salario * 1.3;
}

echo "O salario reajustado é {$novoSalario}";