<?php 
  session_start();
  include ('../layouts/header.php');
?>


      <div class="jumbotron">
        <h1>Status</h1>
        <p>Click para abrir el formulario para el registro de status</p>
      </div>

      <br /><br /><br />

<div class="container" align="center">
	<div class="container" align="center">
		<div class="col-md-3">
		</div>
		<div class="col-md-6" align="center">

		  <form id="contact" name="contact" action="#" method="post" align = "right">
		    
		    <label for="status">Status</label>
		    <br>
		    <input type="text" id="status" name="status" class="txt" size="60">
		    <br>
		    
		    <button align ="center" id="send">Guardar</button>
		  </form>
		</div> 
		<div class="col-md-3">
		</div> 
	</div>



      




<?php include ('../layouts/footer.php'); ?>
