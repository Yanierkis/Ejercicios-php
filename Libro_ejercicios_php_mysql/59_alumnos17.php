<html>
<head>
<title>Problema</title>
</head>
<body>
	<?php
if (isset($_COOKIE['usuario']))
echo "Cookie de sesión creada. Su valor es $_COOKIE[usuario]";
else
echo "No existe cookie de sesión";
?>
<br>
<a href="pagina15.php">Crear cookie de sesión</a>
</body>
</html>