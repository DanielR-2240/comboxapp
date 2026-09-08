<?php

session_start();
include("conexion.php");
$error = "";
if(isset($_POST['ingresar'])){
$correo = $_POST['correo'];
$contrasena = $_POST['contrasena'];
$consulta = "SELECT * FROM usuarios 
WHERE correo='$correo' 
AND password='$contrasena'";
$resultado = mysqli_query($conexion,$consulta);
if(mysqli_num_rows($resultado) > 0){
$_SESSION['usuario'] = $correo;
header("Location:inicio.php");
}else{
$error = "Datos incorrectos";
}
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Iniciar Sesión</title>
<style>
body{
margin:0;
padding:0;
font-family:Arial;
background:linear-gradient(to right,#141e30,#243b55);
display:flex;
justify-content:center;
align-items:center;
height:100vh;
}
.tarjeta{
width:350px;
background:white;
padding:40px;
border-radius:20px;
text-align:center;
box-shadow:0px 5px 20px rgba(0,0,0,0.4);
}
h2{
color:#111;
margin-bottom:25px;
font-size:35px;
}
input{
width:100%;
padding:14px;
margin-top:10px;
margin-bottom:20px;
border:1px solid #ccc;
border-radius:10px;
font-size:16px;
}
.boton{
width:100%;
padding:15px;
border:none;
border-radius:10px;
background:#007bff;
color:white;
font-size:18px;
cursor:pointer;
transition:0.3s;
}
.boton:hover{
background:#0056b3;
}
.volver{
width:100%;
padding:15px;
border:none;
border-radius:10px;
background:#ff9800;
color:white;
font-size:18px;
cursor:pointer;
margin-top:15px;
}
.volver:hover{
background:#e68900;
}
.error{
background:#ffdddd;
color:red;
padding:10px;
border-radius:10px;
margin-bottom:20px;
}
</style>
</head>
<body>
<div class="tarjeta">
<h2>Iniciar Sesión</h2>
<?php if($error != ""){ ?>
<div class="error">
<?php echo $error; ?>
</div>
<?php } ?>
<form method="POST">
<input 
type="email" 
name="correo" 
placeholder="Correo"
required
><input 
type="password" 
name="contrasena" 
placeholder="Contraseña"
required>
<button 
type="submit" 
name="ingresar"
class="boton">
Ingresar
</button>
</form>
<button 
onclick="history.back()"
class="volver">
Volver
</button>
</div>
</body>
</html>