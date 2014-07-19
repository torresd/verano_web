<?php 
include ('../../libs/security.php'); 
  include ('../../libs/adodb5/adodb-pager.inc.php');
  include ('../../libs/adodb5/adodb.inc.php');
  include ('../../models/Conexion.php');
  include ('../../models/Modelo.php');
  include ('../../models/Pais.php'); //nombre del archivo 
  include ('../../controllers/PaisController.php');
  include ('../../libs/Er.php');
  include ('../layouts/header.php');
	
		$clase = new PaisController();

	if(isset($_POST['nombre'])) {
		

		$clase->insertaPais($_POST,$_FILES);
	}
  
?>

<div class="row" align="center">
	<div class"col-md-4">

 	<?php include "../funcion.php" ?>

	<h2 align="center">Paises</h2>

	<form role"form" action="" method="POST" enctype="multipart/form-data">
		
		<label for="nombre">Nombre</label>
		<input type="text" id="nombre" name="nombre" class="txt" value="
			<?php echo $clase->get_nombre(); ?>">
		<br>
		<label for="bandera">Bandera</label>
		<input type="file" id="bandera" name="bandera" class="txt">
		<br>
		<label for="idcontinente">Continente</label>
		<select id="idcontinente" name="idcontinente">
		  <option value="1">Africa</option>
		  <option value="2">America</option>
		  <option value="3">Asia</option>
		  <option value="4">Europa</option>
		  <option value="5">Oceania</option>
		</select>
		<br>
		<br>
		<br>
		<br>
		
		<button align ="center" id="send">Guardar</button>
	</form>
	</div>
</div>


<?php include ('../layouts/footer.php'); ?>