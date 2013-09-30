<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Lector archivo csv</title>
</head>

<style type="text/css">
header
{
	border:2px solid #F93;
	padding:10px 40px; 
	background:#dddddd;
	width:300px;
	border-radius:25px;
	font-family:"Comic Sans MS", cursive;
}
body
{
	color: #F00;
	background-color: #000;
}

</style>

<body>
<header>
<h1>Lector de archivos csv</h1>
</header>
<form action="archivocsv.php" method="post" enctype="multipart/form-data">
<input type="file" name="csv" title="Cargar archivo"/>
<input type="submit" name="Cargar" value="Cargar archivo" />
<input name="action" type="hidden" value="cargar" />
<div>
<?php
function leerarchivo() {
	global $csv;
	global $gestor;
	global $linea;
	global $cell;
	
	if (@$_POST["action"] == "cargar") {
		$csv = $_FILES['csv']['tmp_name'];
		echo "Nombre del archivo: " . $_FILES['csv']['name'] . "\n"; 
		echo "<table>\n\n";
		if (isset($csv) && !empty($csv)) {  
			if (($gestor = fopen ($csv, 'r')) !== false) {
				while (($linea = fgetcsv($gestor, 10000, ',')) !== false) {
						echo "<tr>";
						foreach ($linea  as $cell) {
							echo "<td>" . htmlspecialchars($cell) . "</td>";
						}
						echo "<tr>\n";
				}
			fclose($gestor);
			}
		}
		echo "\n</table>";
	}
}
leerarchivo();
?>
</div>
</form>
</body>
</html>