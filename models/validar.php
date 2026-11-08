<?php
session_start();
include "conexion.php";
$usuario=$_POST['txtusuario'];
$clave=$_POST['txtclave'];
$sql="select * from usuarios where usuario='$usuario' and clave='$clave'";
$respuesta=$conn->query($sql);
if ($respuesta->num_rows>0)
    {
    $fila=$respuesta->fetch_assoc();
    $_SESSION['nombre']=$fila['nombre'];
    echo ("<script>location.href='../index.php?accion=calculadora';</script>");
    }
else
    {
    echo ("<script>alert('Usuario o clave incorrectos'); location.href='../index.php?accion=login';</script>");
    }
?>
