<?php
$nombreusuario = $_POST("username");
$contraseña = $_POST("pass");
$recontraseña = $_POST("repass");
$correo = $_POST("email");
$fb = $_POST("face");
$twitter = $_POST("twitter");
$key = $_POST("key");
$foto = $_FILES["fotos"]["tmp_name"];

function moverfoto() {
	$prefijo = substr(md5(uniqid(rand())),0,6);
	$destino =  "fotos/".$nombreusuario."_".$prefijo;
		if ($tipo == "image/x-png" || $tipo == "image/gif" || $tipo == "image/jpeg") {
			move_uploaded_file($foto,$destino);
		}
}

function creadirectorios() {
	$dir = "C:\Program Files\e-shop";
	if(!mkdir($dir, 0, true))
{
    die('Fallo al crear carpetas...');
}
else
mkdir("\foto");
}
?>