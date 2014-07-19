

<?php 
include ('../../libs/security.php'); 
  include ('../../libs/adodb5/adodb-pager.inc.php');
  include ('../../libs/adodb5/adodb.inc.php');
  include ('../../models/Conexion.php');
  include ('../../models/Modelo.php');
  include ('../../models/Integrante.php'); //nombre del archivo 
  include ('../../controllers/IntegranteController.php');
  include ('../../libs/Er.php');
  include ('../layouts/header.php');
  
    $clase = new IntegranteController();

  if(isset($_POST['nombre'])) {
    

    $clase->insertaIntegrante($_POST,$_FILES);
  }
?>



<br /><br /><br /><br /><br /><br />

<div class="container">

      

      <!-- Jumbotron -->
      <div class="jumbotron">
            <?php include "../funcion.php" ?>

        <h1>Integrantes</h1>
        <p class="lead">Formulario para el registro de integrantes</p>
        <p><a id="modalbox" href="#formulario">Formulario</a></p>
      </div>

    <div class="container" id="formulario" align="center">
  <h2 align="center">Integrantes</h2>

  <form role"form" action="" method="POST" enctype="multipart/form-data">
    
    <label for="nombre">Nombre</label>
    <input type="text" id="nombre" name="nombre" class="txt" value="
      <?php echo $clase->get_nombre(); ?>">
    <br>
    <label for="apellido">Apellido</label>
    <input type="text" id="apellido" name="apellido" class="txt" value="
      <?php echo $clase->get_apellido(); ?>">
    <br>
    <label for="peso">Peso</label>
    <input type="text" id="peso" name="peso" class="txt" value="
      <?php echo $clase->get_peso(); ?>">
    <br>
    <label for="estatura">Estatura</label>
    <input type="text" id="estatura" name="estatura" class="txt" value="
      <?php echo $clase->get_estatura(); ?>">
    <br>
    <label for="foto">Foto</label>
    <input type="file" id="foto" name="foto" class="txt" value="
      <?php echo $clase->get_foto(); ?>">
    <br>
    <label for="edad">Edad</label>
    <input type="text" id="edad" name="edad" class="txt" value="
      <?php echo $clase->get_edad(); ?>">
    <br>
    <label for="idequipo">Numero equipo</label>
    <input type="text" id="idequipo" name="idequipo" class="txt" value="
      <?php echo $clase->get_idequipo(); ?>">
    <br>
    <br>
    <br>
    <br>
    <br>
    
    <button align ="center" id="send">Guardar</button>
  </form>
</div>  

      <!-- Site footer -->
      <div class="footer">
        <p>&copy; Company 2014</p>
      </div>

    </div>


<!-- basic fancybox setup -->

<!-- </body>
</html>

 -->


<?php include ('../layouts/footer.php'); ?>