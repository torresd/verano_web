<?php 
  session_start();
  include ('../layouts/header.php');
?>


      <div class="jumbotron">
        <h1>Examen 3</h1>
        <p>Este es el menu inicial de la revista que resulta ser el examen de tercer parcial</p>
      </div>

      

      <div class="row" id="contenedor">

        <ul id="buttons">
        <li>Mostrar opciones del contenido</li>
         <li><a class="hide" href="#">show</a></li>
        
        </ul>

        <div class="show">
        
          <a href="../site/inicio.php" class="btn btn-default btn-lg btn-block active" role="button">Inicio</a>
          <br />
          <a href="../autor/autor.php" class="btn btn-default btn-lg btn-block active" role="button">Autor</a>
          <br />
          <a href="../articulo/articulo.php" class="btn btn-default btn-lg btn-block active" role="button">Articulo</a>
          <br />
          <a href="../revista/revista.php" class="btn btn-default btn-lg btn-block active" role="button">Revista</a>
          <br />
          <a href="../status/status.php" class="btn btn-default btn-lg btn-block active" role="button">Estatus</a>
          <br />
        
        </div>

         

      </div>



      




<?php include ('../layouts/footer.php'); ?>
