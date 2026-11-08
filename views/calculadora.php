<?php
if (!isset($_SESSION['nombre']))
    {
    echo ("<script>alert('Primero inicie sesión'); location.href='index.php?accion=login';</script>");
    exit();
    }
?>
<script>
function validar(operacion){
    var num1=document.getElementById("txtnum1").value;
    var num2=document.getElementById("txtnum2").value;

    if(num1=="" || num2==""){
        alert("Ambos campos deben estar llenos");
        return false;
    }
    if(parseFloat(num1)<0 || parseFloat(num2)<0){
        alert("Los números deben ser mayores o iguales a 0");
        return false;
    }
    if(operacion=="división" && parseFloat(num2)==0){
        alert("No se puede dividir para 0");
        return false;
    }
    return true;
}
</script>

<h2>Bienvenido <?php echo $_SESSION['nombre']; ?></h2>
<form method="post" action="index.php?accion=resultado">
    Número 1:<br>
    <input type="number" step="any" name="txtnum1" id="txtnum1"><br>
    Número 2:<br>
    <input type="number" step="any" name="txtnum2" id="txtnum2"><br>
    <button type="submit" name="btnoperacion" value="suma" onclick="return validar('suma')">+</button>
    <button type="submit" name="btnoperacion" value="resta" onclick="return validar('resta')">-</button>
    <button type="submit" name="btnoperacion" value="multiplicación" onclick="return validar('multiplicación')">*</button>
    <button type="submit" name="btnoperacion" value="división" onclick="return validar('división')">/</button>
</form>
