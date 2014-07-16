<?php 
  include ('../../libs/adodb5/adodb-pager.inc.php');
  include ('../../libs/adodb5/adodb.inc.php');
  include ('../../models/Conexion.php');
  include ('../../models/Modelo.php');
  include ('../../models/Equipo.php'); //nombre del archivo 
  include ('../../controllers/EquipoController.php');
  include ('../../libs/Er.php');
  include ('../layouts/header.php');
	if(isset($_POST['nombre'])) {
		
		$equipoC = new EquipoController();
		$equipoC->insertaEquipo($_POST);
	}
  
?>


<div class="row" align="center">
	<div class"col-md-4">
		<h2 align="center">Equipos</h2>

		<form role"form" action="" method="POST">
			
			<label for="nombre">Nombre</label>
			<input type="text" id="nombre" name="nombre" class="txt">
			<br>
			<label for="idpais">Pais</label>
			<select id="idpais" name="idpais">
			  <option value="1">Mexico</option>
			  <option value="2">Brasil</option>
			  <option value="3">Alemania</option>
			  <option value="4">Argentina</option>
			  <option value="5">Paises Bajos</option>
			  <option value="6">Francia</option>
			</select>
			<br>
			
			<label for="escudo">Foto</label>
			<input type="file" id="escudo" name="escudo" class="txt">
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			
			<button align ="center" id="send">Guardar</button>
		</form>
	</div> 
</div>

<?php include ('../layouts/footer.php'); ?>