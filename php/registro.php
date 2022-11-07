<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>KandyStore | Registro</title>
	<link rel="stylesheet" href="../php/style.css">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"><style type="text/css">
<!--
body {
	background-color: #99FF33;
}
-->
</style></head>
<body>
	<h1 align="center">&nbsp;</h1>
	<h1 align="center">Crear Usuario Nuevo</h1>
	<p align="center">Hacer click en el microfono para llenar los campos</p>
	<p align="center">&nbsp;</p>
	<form class="formulario" action="" method="post">

		<div class="contenorItems" id="Nombre">
			<div align="center">
			  <input name="nombre" id="input_nom"type="text" placeholder="Nombre" class="formulario" required>
			  <img alt="comienzo" class="start_img" id="start_nom" src="../imagenes/mic.gif">
	      </div>
		</div>
		<div class="contenorItems" id="Apellidos">
			<div align="center">
			  <input name="apellido" id="input_ape"type="text" placeholder="Apellidos" class="formulario" required>
			  <img alt="comienzo" class="start_img" id="start_ape" src="../imagenes/mic.gif">
	      </div>
		</div>
		<div class="contenorItems" id="Edad">
			<div align="center">
			  <input name="edad" id="input_edad"type="text" placeholder="Edad" class="formulario" required>
			  <img alt="comienzo" class="start_img" id="start_edad" src="../imagenes/mic.gif">
	      </div>
		</div>
		<div class="contenorItems" id="NumTel">
			<div align="center">
			  <input name="numTel" id="input_numTel"type="tel" placeholder="Número de Telefono" class="formulario" required>
			  <img alt="comienzo" class="start_img" id="start_numTel" src="../imagenes/mic.gif">
	      </div>
		</div>
	
		       <div align="center">
		         <p>&nbsp;</p>
		         <button> Guardar</button>
      </div>
        <p align="center">&nbsp;</p>
	           <div align="center"></div>
	</form>
	<div>
		<p class='error'>
			<?php
			if($_POST){
				include_once 'usuario.php';

				$nombre=$_POST['nombre'];
				$apellido=$_POST['apellido'];
				$edad=$_POST['edad'];
				$numTel=$_POST['numTel'];

				$nuevo = new acciones();

				$msg = $nuevo->nuevoUsuario($nombre,$apellido,$edad,$numTel);

				if($msg= true){
						echo "<script>alert('Se creo correctamente el usuario.'); 
						window.location.href='../index.html';
						</script>";
					}
					else{
						echo "Algo salio mal";
					}
				}
			?>
      </p>    
    </div>
    <script type="text/javascript" src="main.js"></script>
</body>
</html>