
<?php
  session_start();

  require 'database.php';

  if (isset($_SESSION['user_id'])) {
    $records = $conn->prepare('SELECT id, email, password FROM users WHERE id = :id');
    $records->bindParam(':id', $_SESSION['user_id']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $user = null;

    if (count($results) > 0) {
      $user = $results;
    }
  }
  
?>
<html>
	<head>
		<title>Menu Desplegable</title>
		<style type="text/css">
			
			* {
				margin:0px;
				padding:0px;
			}
			
			#header {
				margin:auto;
				width:500px;
				font-family:Arial, Helvetica, sans-serif;
			}
			
			ul, ol {
				list-style:none;
			}
			
			.nav > li {
				float:left;
			}
			
			.nav li a {
				background-color:#000;
				color:#fff;
				text-decoration:none;
				padding:10px 12px;
				display:block;
			}
			
			.nav li a:hover {
				background-color:#434343;
			}
			
			.nav li ul {
				display:none;
				position:absolute;
				min-width:140px;
			}
			
			.nav li:hover > ul {
				display:block;
			}
			
			.nav li ul li {
				position:relative;
			}
			
			.nav li ul li ul {
				right:-140px;
				top:0px;
			}
			
		</style>
	</head>
	<body>

    <br> Welcome.
      <br>You are Successfully Logged In
      <a href="login.php">Salir</a>

      </a>
		<div id="header">
			<ul class="nav">
				<li><a href="">Inicio</a></li>
				<li><a href="">Practicas</a>
					<ul>
						<li><a href="Practicas\index.html">Practica 1</a></li>
						<li><a href="Practicas\tablas.html">Practica 2</a></li>
						<li><a href="Practicas\menusim.html">Practica 3</a></li>
						<li><a href="Practicas\menudin.html">Practica 4</a></li>
                        <li><a href="Practicas\qwery.html">Practica 5</a></li>
                        <li><a href="Practicas\graficos.html">Practica 6</a></li>
					</ul>
				</li>
				<li><a href="">Practicas Avanzadas</a>
					<ul>
                    <li><a href="Practicas\septima\scr\public\index.html">Practica 7</a></li>
					</ul>
				</li>
				<li><a href="">Contacto</a></li>
			</ul>
		</div>
	</body>
</html>