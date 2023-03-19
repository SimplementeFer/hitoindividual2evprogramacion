
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Diferencias entre lenguajes de programación</title>
    <link rel="stylesheet" href="style.css">
    <?php
        $ip = $_SERVER['REMOTE_ADDR'];
        $date = date('d-m-Y H:i:s');
        
        setcookie('acceso', "IP: $ip, Fecha: $date", time() + (86400 * 30)); 
    ?>

</head>
<body>
	<header>
		<nav>
			<ul>
				<li><a href="#">Inicio</a></li>
				<li><a href="#">Lenguajes orientados a objetos</a></li>
				<li><a href="#POO">Lenguajes procedimentales</a></li>
				<li><a href="#Eventos">Lenguajes de eventos</a></li>
                <li><a href="login.php">¡Pública tu entrada!</a></li>
                <li><a href="entradas.php">Entradas públicas</a><li>
			</ul>
		</nav>
	</header>
	
	<div class="container">
		<h1>Lenguajes de programación</h1>
		<p>Los lenguajes de programación son herramientas utilizadas por los desarrolladores para escribir programas informáticos. Existen diferentes tipos de lenguajes de programación, cada uno con su propia sintaxis y características. En esta página, vamos a hablar sobre las diferencias entre los lenguajes orientados a objetos, los lenguajes procedimentales y los lenguajes de eventos.</p>
		
		<h2 id="POO">Lenguajes orientados a objetos</h2>
		<p>Los lenguajes orientados a objetos (OO) se basan en el concepto de objetos, que son entidades que tienen propiedades y métodos. Los objetos pueden interactuar entre sí para realizar una tarea. Ejemplos de lenguajes orientados a objetos son Java, C++, Python y Ruby.</p>
		<p>La programación orientada a objetos (POO) es un paradigma de programación que se enfoca en la creación de objetos que interactúan entre sí para realizar una tarea o solucionar un problema. En lugar de ver la programación como una secuencia de instrucciones, la POO enfatiza en la interacción entre objetos y la relación entre ellos.</p>

            <p>Un objeto es una instancia de una clase, que es un tipo de datos definido por el programador. La clase define las propiedades y comportamientos que tiene un objeto de ese tipo. Las propiedades son características que tienen los objetos de una clase, mientras que los métodos son las acciones que pueden realizar los objetos de esa clase.</p>
            
            <p>La POO se basa en cuatro principios fundamentales:</p>
            
                <p>Abstracción: La abstracción es la capacidad de simplificar y reducir la complejidad de un problema, identificando los aspectos más relevantes para el problema y representándolos en el objeto.</p>
            
                <p>Encapsulación: La encapsulación es la capacidad de ocultar la complejidad interna del objeto y exponer sólo los métodos y propiedades necesarios para su interacción con otros objetos.</p>
            
                <p> Herencia: La herencia es la capacidad de una clase de heredar propiedades y métodos de otra clase. Esto permite reutilizar el código y definir nuevas clases a partir de clases existentes.</p>
            
                <p>Polimorfismo: El polimorfismo es la capacidad de una clase de tener múltiples formas o comportamientos. Esto permite que un objeto de una clase se comporte de manera diferente dependiendo del contexto en el que se utilice.</p>
            
                <p>La POO se utiliza ampliamente en la programación de software, ya que permite crear aplicaciones complejas y escalables mediante la creación de objetos que interactúan entre sí. Además, la POO permite reutilizar el código, lo que reduce la cantidad de código necesario para crear una aplicación y simplifica su mantenimiento y actualización.</p>
            
 
		<h2 id="Procedimientos">Lenguajes procedimentales</h2>
		
        <p>Los lenguajes procedimentales se basan en la ejecución de instrucciones en un orden específico para lograr un objetivo. En este tipo de lenguajes, los programas están organizados en procedimientos o funciones que realizan tareas específicas. Ejemplos de lenguajes procedimentales son C, Pascal y Fortran.</p>
        
            <p>La programación por procedimientos es un paradigma de programación que se basa en la ejecución de una serie de procedimientos, también conocidos como funciones o subrutinas, para realizar una tarea o solucionar un problema. En la programación por procedimientos, el programa se divide en una serie de procedimientos, cada uno de los cuales realiza una tarea específica. Estos procedimientos se pueden llamar de forma secuencial para lograr el objetivo final del programa.</p>
            
            <p>En la programación por procedimientos, las funciones o subrutinas son la unidad básica de programación y suelen estar diseñadas para realizar una tarea específica. Estas funciones pueden recibir argumentos de entrada, procesarlos y devolver un resultado. Por ejemplo, una función podría calcular la media de una lista de números, mientras que otra función podría ordenar una lista de elementos.</p>
            
            <p>La programación por procedimientos no se centra tanto en los objetos como la programación orientada a objetos. En cambio, los datos son tratados como estructuras de datos, que son colecciones de datos relacionados que se organizan para permitir un acceso y procesamiento eficientes. Los datos se pueden modificar directamente en la estructura, sin la necesidad de crear un objeto.</p>
            
            <p>Aunque la programación por procedimientos ha sido reemplazada en gran medida por la programación orientada a objetos, todavía se utiliza en algunos lenguajes de programación como C y Fortran. Además, la programación por procedimientos sigue siendo una herramienta valiosa para la programación de sistemas y para aplicaciones que no requieren la complejidad de la programación orientada a objetos.</p>
            
            <p>La principal ventaja de la programación por procedimientos es su simplicidad. Al dividir el programa en una serie de funciones o subrutinas, se puede simplificar el proceso de programación y hacerlo más fácil de entender y mantener. Además, la programación por procedimientos puede ser más eficiente que la programación orientada a objetos en ciertas situaciones, ya que no hay necesidad de crear y manipular objetos.</p>




        <h2 id="Eventos">Lenguajes de eventos</h2>
        <p>Los lenguajes de eventos se basan en la idea de que los programas responden a eventos específicos, como la pulsación de una tecla o el movimiento del ratón. En lugar de seguir un flujo de ejecución lineal, los programas de eventos son activados por eventos y ejecutan código específico en respuesta. Ejemplos de lenguajes de eventos son JavaScript y Visual Basic.</p>

        <p>La programación dirigida por eventos es un paradigma de programación en el que los programas responden a eventos que ocurren en el sistema o en la interfaz de usuario. En lugar de ejecutar una secuencia de instrucciones, el programa espera eventos y responde a ellos mediante la ejecución de una acción o función asociada.</p>
        
        <p>En la programación dirigida por eventos, el flujo de control del programa es determinado por eventos que se producen en lugar de un conjunto predefinido de pasos. Por lo tanto, en lugar de que el programa realice una secuencia de acciones específicas, el programa está a la espera de eventos que puedan ocurrir, y luego responde en consecuencia.</p>
        
        <p>Los eventos pueden ser generados por una variedad de fuentes, como el usuario que interactúa con la interfaz de usuario, el sistema operativo, otros programas o dispositivos externos. Por ejemplo, un clic en un botón en una interfaz de usuario podría generar un evento que desencadena una acción específica en el programa.</p>
        
        <p>La programación dirigida por eventos se utiliza comúnmente en la programación de interfaces de usuario y en sistemas operativos. También se utiliza en el desarrollo de videojuegos, donde los eventos pueden ser generados por la interacción del jugador con el juego.</p>
        
        <p>La principal ventaja de la programación dirigida por eventos es su capacidad para responder a eventos en tiempo real, lo que la hace especialmente adecuada para la programación de interfaces de usuario. Además, la programación dirigida por eventos es escalable y se puede utilizar para programar sistemas complejos que manejen grandes cantidades de eventos.</p>
        
        <p>Una desventaja de la programación dirigida por eventos es que puede ser difícil de depurar, ya que el flujo de control no es tan predecible como en otros paradigmas de programación. Además, la programación dirigida por eventos puede ser menos eficiente que otros enfoques, especialmente en sistemas con una gran cantidad de eventos generados de forma frecuente.</p>



        <b><i><p>En resumen, cada tipo de lenguaje de programación tiene sus propias características y ventajas. Los lenguajes orientados a objetos se basan en la programación orientada a objetos, los lenguajes procedimentales se basan en la ejecución de instrucciones en un orden específico y los lenguajes de eventos se basan en la programación basada en eventos. Elegir el lenguaje adecuado para un proyecto depende de los requisitos del proyecto y de las habilidades del desarrollador.</p></b></i>
    </div>
    
    <?php echo $_COOKIE['acceso']; ?><br/>
 
    
</body>
</html>
