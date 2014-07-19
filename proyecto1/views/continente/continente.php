<?php 
include ('../../libs/security.php'); 
  include ('../../libs/adodb5/adodb-pager.inc.php');
  include ('../../libs/adodb5/adodb.inc.php');
  include ('../../models/Conexion.php');
  include ('../../models/Modelo.php');
  include ('../../models/Continente.php'); //nombre del archivo 
  include ('../../controllers/ContinenteController.php');
  include ('../../libs/Er.php');
  include ('../layouts/header.php');
	if(isset($_POST['nombre'])) {
		
		$continenteC = new ContinenteController();
		$continenteC->insertaContinente($_POST);
	}
  
?>


<div align="center">
  <h2 align="center">Continentes</h2>

  <form role"form" action="" method="POST">
    
    <label for="nombre">Nombre</label>
    <input type="text" id="nombre" name="nombre" class="txt">
    <br>
    <br>
    <br>
    
    <button align ="center" id="send">Guardar</button>
  </form>
</div>

<?php include ('../layouts/footer.php'); ?>