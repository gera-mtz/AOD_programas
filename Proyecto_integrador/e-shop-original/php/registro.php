<?php
$nombreusuario = $_POST("username");
$contraseña = $_POST("pass");
$recontraseña = $_POST("repass");
$correo = $_POST("email");
$fb = $_POST("face");
$twitter = $_POST("twitter");
$key = $_POST("key");
$foto = $_FILES["fotos"]["tmp_name"];
$destino;
$linea;

function moverfoto($destino) {
	$prefijo = substr(md5(uniqid(rand())),0,6);
	$destino =  "fotos\\".$nombreusuario."_".$prefijo;
		if ($tipo == "image/x-png" || $tipo == "image/gif" || $tipo == "image/jpeg") {
			move_uploaded_file($foto,$destino);
			return $destino;
		}
}

function creadirectorios($dir) {
	$dir = "C:\\e-shop";
	if(!mkdir($dir, 0, true))
	    die('Fallo al crear carpetas...');
	else
		mkdir("\\fotos");
	return $dir;
}

$csv = fopen("C:\\e-shop\\admin.csv", "x");
if (isset($nombreusuario) && !empty($nombreusuario) && isset($contraseña) && !empty($contraseña) && isset($recontraseña) && !empty($recontraseña) && isset($correo) && !empty($correo) && isset($foto) && !empty($foto) &&)
	if ($contraseña == $recontraseña) {
		if ($key == "X24A-4922-99O1-X430") {

		}
	}
}
?>