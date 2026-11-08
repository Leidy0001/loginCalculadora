<script>
function validarLogin(){
    var usuario=document.getElementById("txtusuario").value;
    var clave=document.getElementById("txtclave").value;
    if(usuario=="" || clave==""){
        alert("Llene todos los campos");
        return false;
    }
    return true;
}
</script>

<h2>Iniciar sesión</h2>
<form method="post" action="models/validar.php">
    Usuario:<br>
    <input type="text" name="txtusuario" id="txtusuario"><br>
    Clave:<br>
    <input type="password" name="txtclave" id="txtclave"><br>
    <input type="submit" value="aceptar" onclick="return validarLogin()">
</form>
