<?php 
include ('../../libs/security.php'); 
  include ('../../libs/adodb5/adodb-pager.inc.php');
  include ('../../libs/adodb5/adodb.inc.php');
  include ('../../models/Conexion.php');
  include ('../../models/Modelo.php');
  include ('../../models/Equipo.php'); //nombre del archivo 
  include ('../../controllers/EquipoController.php');
  include ('../../libs/Er.php');
  include ('../layouts/header.php');
  /*include ('../../libs/security.php');*/
	
  	$clase = new EquipoController();
	if(isset($_POST['nombre'])) {
		$clase->insertaEquipo($_POST,$_FILES);
	}
?>
<div class="row" align="center">

	<div class"col-md-4">

		<?php include "../funcion.php" ?>
	
		<h2 align="center">Equipos</h2>
<!-- ../../upload.php -->
		<form role"form" action="" method="POST" enctype="multipart/form-data">
			
			<label for="nombre">Nombre</label>
				<input type="text" id="nombre" name="nombre" class="txt" value="
				<?php echo $clase->get_nombre(); ?>">
			<br>
			<label for="idpais">Pais</label>
			<?php echo $clase->getDropDown('pais','idpais','idpais');?>
			<br>
			
			<label for="escudo">Foto</label>
			<input type="file" id="escudo" name="escudo" class="txt" >
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			
			<button align ="center" id="send">Guardar</button>
		</form>
	</div> 
	<div class="col-md-6"> 
		<h2 class="text-center">Lista de equipos</h2>
		<?php $clase->show_grid(); ?>
	</div>
</div>

<?php include ('../layouts/footer.php'); ?>