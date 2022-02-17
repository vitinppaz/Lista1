<?php

$num = $_POST['num'];

if($num >= 10){
    echo "<span style='color:red;'>O valor é maior ou igual a 10 - ".$num."</span>";
}else{
?>
    <span style="color:blue;">O valor NÃO é maior ou igual a 10 - <?php echo $num; ?></span>
<?php    
}
