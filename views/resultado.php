<?php
if (!isset($_SESSION['nombre']))
    {
    echo ("<script>alert('Primero inicie sesión'); location.href='index.php?accion=login';</script>");
    exit();
    }
$nombre=$_SESSION['nombre'];
$num1=$_POST['txtnum1'];
$num2=$_POST['txtnum2'];
$operacion=$_POST['btnoperacion'];

switch ($operacion)
    {
    case "suma": $resultado=$num1+$num2; break;
    case "resta": $resultado=$num1-$num2; break;
    case "multiplicación": $resultado=$num1*$num2; break;
    case "división": $resultado=$num1/$num2; break;
    }

echo ("<h2>Bienvenido $nombre</h2>");
echo ("<p>El resultado de la $operacion entre $num1 y $num2 es: $resultado</p>");
?>
<button onclick="location.href='index.php?accion=calculadora'">Volver a calcular</button>
