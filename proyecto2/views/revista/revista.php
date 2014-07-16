<?php 
  include ('../../libs/adodb5/adodb-pager.inc.php');
  include ('../../libs/adodb5/adodb.inc.php');
  include ('../../models/Conexion.php');
  include ('../../models/Modelo.php');
  include ('../../models/Revista.php');
  include ('../../controllers/RevistaController.php');
  include ('../../libs/Er.php');
  include ('../layouts/header.php');

  if (isset($_POST['nombre'])){
  	
  	$revistaC=new RevistaController();
  	$revistaC->insertaRevista($_POST);
}
?>


      <div class="jumbotron">
        <h1>Revista</h1>
        <p>Click para abrir el formulario para el registro de la revista</p>
      </div>

      <br /><br /><br />

<div class="container" align="center">
	<div class="container" align="center">
		<div class="col-md-3">
		</div>
		<div class="col-md-6" align="center">
		  <form id="contact" name="contact" action="#" method="post" align = "right">
		    
		    <label for="nombre">Nombre</label>
		    <br>
		    <input type="text" id="nombre" name="nombre" class="txt" size="60">
		    <br>
		    <label for="portada">Portada</label>
		    <br>
		    <input type="file" id="portada" name="portada" class="txt" size="60">
		    <br>
		    <br>
		    	<label for="fecha">Fecha</label>
		    	<br>
                <div class='input-group date' id='datetimepicker1' align="center">
                	
                	<br>
                    <input type='text' class="form-control" id="fecha_creacion" name="fecha" size="60"/>
                    <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
            <br>    
            <label for="volumen">Volumen</label>
		    <br>
		    <input type="text" id="volumen" name="volumen" class="txt" size="60">
		    <br>
		    <label for="titulo">Titulo</label>
		    <br>
		    <input type="text" id="titulo" name="titulo" class="txt" size="60">
		    <br>
		    <label for="subtitulo">Subtitulo</label>
		    <br>
		    <input type="text" id="subtitulo" name="subtitulo" class="txt" size="60">
		    <br>
		    <label for="numero">Numero</label>
		    <br>
		    <input type="text" id="numero" name="numero" class="txt" size="10">
		    <br>
		    <label for="clave">Clave</label>
		    <br>
		    <input type="text" id="clave" name="clave" class="txt" size="60">
		    <br>
		    <label for="directorio">Directorio</label>
		    <br>
		    <textarea rows="4" cols="60" id="directorio" name="directorio"></textarea>
		    <br>
		    <label for="editorial">Editorial</label>
		    <br>
		    <textarea rows="4" cols="60" id="editorial" name="editorial"></textarea>
		    <br>
		    <label for="id_status">Status</label>
		    <br>
		    <select id="id_status" name="id_status">
			  <option value="1">Propuesta</option>
			  <option value="2">En desarrollo</option>
			  <option value="3">Finalizado</option>
			  <option value="4">Cancelado</option>
			</select>
			<br><br><br>
		    
		    <button align ="center" id="send">Guardar</button>
		  </form>
		</div>  
	</div>



      




<?php include ('../layouts/footer.php'); ?>
