<!--webpage hecho por jose gerardo martinez moran... fines educativos-->

<!doctype html><!--para html5-->
<html>

<head><!--cabeza de la pagina-->
	<title>e-shop :: Tu tienda electronica</title>
	<meta charset="utf-8"/> <!--codigo que se usara para la pagina, aplicada a todas-->
	<link name rel="stylesheet" type="text/css" href="css/index.css" /> <!--link que se redirige a donde se encuentra el archivo de estilo-->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" ><!--para el uso de responsive design-->
</head>

<body>
	<div id="nav">
		<div id="right">
			<img src="img/cart.fw.png">
		</div>
		<div id="left">
			<h3 id="slogan" align="right">Tu tienda de electronica</h3>
		</div>
	</div>
	<div id="container" >
    <article class="advise" id="advise">
<?
	$dir = "C:\Program Files\e-shop";
	$csvadmin = "admin.csv";
    if (file_exists($dir)) {
		if ($exist = opendir($dir)) {
			while (($dir = readdir($exist)) !== false) {
				if (file_exists($csvadmin)) {
	}
	else {
		?>
        <!--Uso del modal dialog-->
        <div id="noinstalado"><!--aqui se usara el link que comunicara el diseño de la ventana modal-->
        	<a href="#openModal"> ¡¡¡Esta pagina no esta instalado en su computadora!!!, le pedimos que haga click aqui para su correcta instalacion</a><!--link para abrir el modalDialog-->
            <div id="openModal" class="modalDialog"><!--modalDialog-->
<div><!--contenido del modalDialog-->
<a href="#close" title="Cerrar" class="close">X</a><!--para cerrar el modalDialog-->
<h2>Bienvenido!!!</h2>
<p>A continuacion se solicitara algunos datos para su registro</p>
<form name="registro" action="php/registro.php" method="get" />
<div id="part1">
<input id="username" type="text" name="username" placeholder="Nombre de usuario" />
<br />
<input id="pass" type="password" name="pass" placeholder="Contraseña" />
<br />
<input id="repass" type="password" name="repass" placeholder="Repite Contraseña" />
<br />
<input id="email" type="email" name="email" placeholder="e-mail" />
<br />
<input id="face" type="text" name="face" placeholder="Facebook" />
<br />
<input id="twitter" type="text" name="twitter" placeholder="Twitter" />
</div>
<div id="part2">
holadsfasdffdg
</div>
</form>
</div>
</div>
        </div>
    <?
	}
	}
	}
	}
	?>
    </article>
    <article class="login" id="login">
    <form id="log" name="log" method="post">
    <input name="user" type="text" id="user" placeholder="Nombre de usuario"/>
    <br />
    <input name="pss" type="password" id="pss" placeholder="Contraseña" />
    <br />
    <input type="submit" value="Iniciar" id="start" name="start" />
    </form>
    </article>
    </div>
	<footer> Este solo es una prueba </footer>
</body>
</html>