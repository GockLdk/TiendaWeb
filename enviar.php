<?php 

	$destino="marioalverto543@hotmail.com"; 
	$nombre=$_POST["nombre"]; /* <input id="icon_prefix" type="text" class="validate" name="nombre" required><label for="icon_prefix">Nombre</label>*/ //Debe tener el nombre de la clase del html
	$asunto=$_POST["asunto"];
	$correo=$_POST["correo"];/*<input id="email" type="email" class="validate" name="correo" required><label for="email" data-error="Correo no valido" data-success="Correo valido">Email</label>*///Debe tener el nombre de la clase del html
	$mensaje=$_POST["mensaje"]; //Igual que las anteriores
	$contenido="Nombre: ".$nombre."\nCorreo: ".$correo."\nMensaje: ".$mensaje; //Llamara al nombre de lo que tecleo el usuario

	mail($destino,$asunto,$contenido); //Envia el correo
	header("Location: index.html"); //una vez enviado el correo recarga la pagina
?>
