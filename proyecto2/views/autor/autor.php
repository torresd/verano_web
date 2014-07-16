<?php 
    include ('../../libs/adodb5/adodb-pager.inc.php');
  include ('../../libs/adodb5/adodb.inc.php');
  include ('../../models/Conexion.php');
  include ('../../models/Modelo.php');
  include ('../../models/Autor.php');
  include ('../../controllers/AutorController.php');
  include ('../../libs/Er.php');
  include ('../layouts/header.php');

  if (isset($_POST['nombre'])){
  	
  	$autorC=new AutorController();
  	$autorC->insertaAutor($_POST);
}
?>


      <div class="jumbotron">
        <h1>Autor</h1>
        <p>Click para abrir el formulario para el registro de autores</p>
      </div>

      <br /><br /><br />

<div class="container" align="center">
	<div class="container" align="center">
		<div class="col-md-3">
		</div>
		<div class="col-md-6" align="center">

		  <form id="contact" name="contact" action="#" method="post" align = "right">
		    
		    <label for="nombre">Nombre(s)</label>
		    <br>
		    <input type="text" id="nombre" name="nombre" class="txt" size="60">
		    <br>
		    <label for="apellidos">Apellido(s)</label>
		    <br>
		    <input type="text" id="apellidos" name="apellidos" class="txt" size="60">
		    <br>
		    <label for="nombre">E-mail</label>
		    <br>
		    <input type="email" id="email" name="email" class="txt" size="60">
		    <br>
		    <br>
		    
		    <button align ="center" id="send">Guardar</button>
		  </form>
		</div> 
		<div class="col-md-3">
		</div> 
	</div>



      




<?php include ('../layouts/footer.php'); ?>