<?php
$lado = $_POST['lado'];
$a = $_POST['a'];
$p = $_POST['p'];
if(empty($p)){    
    $perimetro;
    $area;
    $perimetro = $lado * 8;
    $area = ($perimetro * $a) / 2;
    echo "<h1 align='center'>El area del octagono es: $area cm</h1>";
}else{
    $area;
    $area = ($p * $a) / 2;
    echo "<h1 align='center'>El area del octagono es: $area cm</h1>";
}
echo "<a align='center' href='index.html'>Regresar</a>";
?>