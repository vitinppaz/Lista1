<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        Nota 1:<input type="text" name="nota1" id="nota1" value=""/><br/>
        Nota 2:<input type="text" name="nota2" id="nota2" value=""/><br/>
        Nota 3:<input type="text" name="nota3" id="nota3" value=""/><br/>
        Nota 4:<input type="text" name="nota4" id="nota4" value=""/><br/>
        <input type="submit" name="btnCalcular" id="btnCalcular" value="Calcular"/>
    </form>
</body>
</html>

<?php

if(isset($_POST['btnCalcular'])){

    $nota1 = $_POST['nota1'];
    $nota2 = $_POST['nota2'];
    $nota3 = $_POST['nota3'];
    $nota4 = $_POST['nota4'];

    $media = ($nota1 + $nota2 + $nota3 + $nota4)/4;

    if($media >= 7){
        echo "Aprovado";
    }else{
        echo "Reprovado";
    }

}
