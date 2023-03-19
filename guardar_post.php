<?php

//Establecer los detalles de la conexión a la base de datos
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

// Obtener los valores del formulario
$email = $_POST['autor'];
$titulo = $_POST['titulo'];
$contenido = $_POST['contenido'];
$fecha_publicacion = $_POST['fecha'];
$imagen = $_POST['imagen'];

// Crear una consulta SQL para insertar los valores en la tabla
$sql = "INSERT INTO entradas (autor, titulo, contenido, fecha, imagen) VALUES ('$email', '$titulo', '$contenido', '$fecha_publicacion', '$imagen')";



// Ejecutar la consulta SQL y verificar si es exitosa
if ($conn->query($sql) === TRUE) {
    echo '<script language="javascript">alert("El post ha sido guardado correctamente en la base de datos");</script>';
} else {
  echo '<script language="javascript">alert("Se ha producido un error al guardar la información en la bdd");</script>' . $conn->error;
}

// Cerrar la conexión a la base de datos
$conn->close();
?>