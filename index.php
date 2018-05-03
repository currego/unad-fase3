<html lang="es">
  <head>
   	 <meta charset="utf-8">
    <meta name="viewport" content="width:device-width,user-scalable=no">
   	<title>Unad - Inicio del curso</title>
   	<link rel="stylesheet" href="CSS/stilos.css" />
  </head>
  <body style="background-color:#FFFFFF" >
	
	 <!-- Encabezado de la página -->
    <header id="banner" class="body">
      <!-- Título de la página -->
	  <img src="img/logoUNAD2015.png" width="50%" alt="Logo Unad" class="photo1" align="right"/>
      <h1 align= "left" style="color:rgb(51, 153, 204)" >MySQL y PHP </h1>  
	 
      <!-- Barra de menú -->
      <nav>
        <ul>
          <li class="active"><a href="#banner">Inicio</a></li>
		  <li><a href="php.html">PHP</a></li>
          <li><a href="mysql.html">MySQL</a></li>
          <li><a href="php-database.html">PHP-Database</a></li>
          <li><a href="acercade.html">Acerca de</a></li>
        </ul>
      </nav>
    </header>

    <!-- Campo para poner el contenido de elementos relacionados con el contenido principal, se
         representan con la etiqueta aside-->
    <aside id="featured" class="body">
      <article>
	  <?php
		include("contador.php");
		$visitante = 0;
		$visitante = contador();
		echo "<strong> <p style=color:#3333ff; align=right>Eres el visitante No $visitante </p> </strong>";
	?> 
        <h2>Videos del cruso programación web 1</h2>
	       
	   
      </article>
    </aside>

    <!-- Contenido de la página -->
    <section id="content" class="body">
		<h3><a target="_blank" href="https://www.youtube.com/watch?v=DSbopQgDoWM">Instalación Xampp	</a></h3>
			<iframe width="560" height="315" src="https://www.youtube.com/embed/DSbopQgDoWM" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
        <h3><a target="_blank" href="https://www.youtube.com/embed/qFKq77Qd0MY">Curso PHP y MySQL #1	</a></h3>
			<iframe width="560" height="315" src="https://www.youtube.com/embed/qFKq77Qd0MY" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
        <h3><a target="_blank" href="https://www.youtube.com/embed/D66lXvkJvJ4">Curso PHP y MySQL #2	</a></h3>
			<iframe width="560" height="315" src="https://www.youtube.com/embed/D66lXvkJvJ4" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
 
            <!-- Información del footer-->
         
    </section>

    <section id="extras" class="body">
      <div class="menu-inferior">
        <h2>Menú</h2>

        <!-- Enlaces a blogs.-->
        <ul>
          <li><a href="#banner" rel="external">Inicio</a></li>
          <li><a href="php.html" rel="external">PHP</a></li>
          <li><a href="mysql.html" rel="external">MySQL</a></li>
          <li><a href="php-database.html" rel="external">PHP-Database</a></li>
          <li><a href="acercade.html" rel="external">Acerca de</a></li>
		</ul>
      </div>
     <!-- Redes Sociales-->
      <div class="social">
        <h2>social</h2>
        <ul>         
          <li><a href="http://facebook.com/" rel="me">facebook</a></li>    
          <li><a href="http://twitter.com/" rel="me">twitter</a></li>
        </ul>
      </div>
    </section><!-- /#extras -->
    <!-- Contenido del pie de pagina con información del autor-->
	<footer id="contentinfo" class="body">
			<!-- Contenido de acerca de nosotros-->
	   
		<h2 align="middle">Autor: Cristian Urrego</h2>
		<p align="middle"> <strong> Universidad Nacional Abierta y a Distancia UNAD - Unidad 1 y 2: Fase de Construcción - Crear un OVI en formato WEB con HTML5 y CSS3</p>
    </footer>

  </body>
</html>