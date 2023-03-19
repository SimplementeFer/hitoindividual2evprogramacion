
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Diferencias entre lenguajes de programación</title>
    <link rel="stylesheet" href="style3.css">


</head>
<body>
	<header>
		<nav>
			<ul>
            <li><a href="web.php">Inicio</a></li>
				<li><a href="web.php#">Lenguajes orientados a objetos</a></li>
				<li><a href="web.php#POO">Lenguajes procedimentales</a></li>
				<li><a href="web.php#Eventos">Lenguajes de eventos</a></li>
                <li><a href="login.php">¡Pública tu entrada!</a></li>
                <li><a href="entradas.php">Entradas públicas</a><li>
			</ul>
		</nav>
	</header>

    
	<?php
// Establecer los detalles de la conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hitoindividual2evprogramacion";

// Establecer una conexión a la base de datos

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar si la conexión es exitosa
if ($conn->connect_error) {
  die("Falló la conexión a la base de datos: " . $conn->connect_error);
}

// Obtener los posts de la tabla
$sql = "SELECT * FROM entradas";
$result = $conn->query($sql);

// Mostrar los posts en el formato deseado
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    echo '<div class="post">';
    echo '<div class="post-image"> <img src="' . $row["imagen"] . '"> </div>';
    echo '<div class="post-content">';
    echo '<h2>' . $row["titulo"] . '</h2>';
    echo '<p>' . $row["contenido"] . '</p>';
    echo '<div class="post-info">';
    echo '<p> Fecha de publicación: ' . $row["fecha"] . '</p>';
    echo '<p> Autor: ' . $row["autor"] . '</p>' . '<br>' ;
    echo '<button class="post-edit">Editar</button> <button class="post-delete">Eliminar</button>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
  }
} else {
  echo "No hay posts en la base de datos";
}

// Cerrar la conexión a la base de datos
$conn->close();
?>
</body>
</html>