../<!doctype html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  
  <title>FIFA  Continentes</title>

  <link rel="stylesheet" type="text/css" media="all" href="../css/style.css">
  <link rel="stylesheet" type="text/css" media="all" href="../css/jquery.fancybox.css">
  <link rel="stylesheet" type="text/css" media="all" href="../css/bootstrap.min.css" >
  <link rel="stylesheet" type="text/css" media="all" href="../css/justified-nav.css">
  <link rel="stylesheet" href="../css/navbar.css" >
  

  <script type="text/javascript" src="../js/jquery.min.js"></script>
  <script type="text/javascript" src="../js/jquery.fancybox.js?v=2.0.6"></script>
  <script type="text/javascript" src="../js/ie-emulation-modes-warning.js"></script>
  <script type="text/javascript" src="../js/ie10-viewport-bug-workaround.js"></script>
  <script src="../js/forms.js"></script>
</head>

<body class="fondo">
<header class="navbar navbar-inverse navbar-fixed-top bs-docs-nav" role="banner">
  <div class="container">
    <div class="navbar-header">
      <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a href="../site/inicio.php" class="navbar-brand"><span class="glyphicon glyphicon-th-list"></span>FIFA</a>
    </div>
    <nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">
      <ul class="nav navbar-nav">
        <li>
          <a href="../integrantes/index.html">Integrantes</a>
        </li>
        <li>
          <a href="../pais/index.html">Pais</a>
        </li>
        <li>
          <a href="../continente/index.html">Continente</a>
        </li>
        <li>
          <a href="../equipo/index.html">Equipo</a>
        </li>
        <li>
          <a href="../posicion/index.html">Posicion</a>
        </li>
        <li>
          <a href="../estadio/index.html">Estadio</a>
        </li>
        <li  align="right">
          <a href="#"><span class="glyphicon glyphicon-shopping-cart"></span>    /</a>
        </li>
        <li  align="right">
          <a href="#"><span class="glyphicon glyphicon-subtitles"></span>    /</a>
        </li>
        <li  align="right">
          <a href="#"><span class="glyphicon glyphicon-search"></span>    /</a>
        </li>
        <li  align="right">
          <a href="#"><span class="glyphicon glyphicon-user"></span></a>
        </li>
      </ul>
    </nav>
  </div>
</header>
<!-- hidden inline form -->
<div id="inline" align="center">
	<h2 align="center">Continentes</h2>

	<form id="contact" name="contact" action="#" method="post" align = "center">
		
		<label for="nombre">Nombre</label>
		<input type="text" id="nombre" name="nombre" class="txt">
		<br>
		<label for="confederacion">Confederacion</label>
		<select id="confederacion" name="confederacion">
		  <option value="1">AFC (Asia)</option>
		  <option value="2">CAF (Africa)</option>
		  <option value="3">CONCACAF (Norte-Centro America y Caribe)</option>
		  <option value="4">CONMEBOL (Sudamerica)</option>
		  <option value="5">OFC (Oceania)</option>
		  <option value="6">UEFA (Europa)</option>
		</select>
		<br>
		<br>
		<br>
		<br>
		
		<button align ="center" id="send">Guardar</button>
	</form>
</div>

<br /><br /><br /><br /><br /><br />

<div class="container">

      

      <!-- Jumbotron -->
      <div class="jumbotron">
        <h1>Continentes</h1>
        <p class="lead">Formulario para el registro de continentes</p>
        <p><a id="modalbox" href="#inline">Formulario</a></p>
      </div>

      

      <!-- Site footer -->
      <div class="footer">
        <p>&copy; Company 2014</p>
      </div>

    </div>


<!-- basic fancybox setup -->

</body>
</html>

