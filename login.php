<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Formulario de Publicación</title>
    <link rel="stylesheet" href="style2.css">
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
  <div class="container">
		<h1>Nuevo Post</h1>
		<form method="POST" action="guardar_post.php" enctype="multipart/form-data">
			<label for="autor">Email del autor:</label>
			<input type="email" name="autor" required>

			<label for="titulo">Título:</label>
			<input type="text" name="titulo" required>

			<label for="contenido">Contenido:</label>
			<textarea name="contenido" rows="6" required></textarea>

			<label for="fecha">Fecha de publicación:</label>
			<input type="date" name="fecha" required><br><br>

			<label for="imagen">Url de una imagen:</label>
			<input type="text" name="imagen">

			<input type="submit" value="Publicar">
		</form>
	</div>
  </body>
</html>