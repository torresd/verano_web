<?php 
  include ('../../libs/adodb5/adodb-pager.inc.php');
  include ('../../libs/adodb5/adodb.inc.php');
  include ('../../models/Conexion.php');
  include ('../../models/Modelo.php');
  include ('../../models/Estadio.php'); //nombre del archivo 
  include ('../../controllers/EstadioController.php');
  include ('../../libs/Er.php');
  include ('../layouts/header.php');
	if(isset($_POST['nombre'])) {
		
		$estadioC = new EstadioController();
		$estadioC->insertaEstadio($_POST);
	}
  
?>


<div align="center">
	<h2 align="center">Estadios</h2>

	<form role"form" action="" method="POST">
		
		<label for="nombre">Nombre</label>
		<input type="text" id="nombre" name="nombre" class="txt">
		<br>
		<label for="idciudad">Ciudad</label>
    <select id="idciudad" name="idciudad">
      <option value="1">Belo Horizonte</option>
      <option value="2">Brasilia</option>
      <option value="3">Cuiaba</option>
      <option value="4">Curitiba</option>
      <option value="5">Fortaleza</option>
      <option value="6">Manaos</option>
    </select>
		<br>
    	
		<button align ="center" id="send">Guardar</button>
	</form>
</div>

<?php include ('../layouts/footer.php'); ?>