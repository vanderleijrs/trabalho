<!DOCTYPE HTML>

<html>
<head>
		<title>Resposta</title>
			<link rel ="shortcut icon" href = "images/favicon.png" type = "image/x-png"/>
			<meta charset="utf-8" />
			<meta name="viewport" content="width=device-width, initial-scale=1" />
			<link rel="stylesheet" href="assets/css/main.css" />
			<link rel="stylesheet" href="css.css" />
			<script src="js/js1.js"></script>
            <script src="js/js2.js"></script>
	</head>
	<body>
		<!-- Header -->
		<header id="header">
			<a href="index.html" class="logo">Projeto Saber</a>
		</header>
    	<!-- Menu -->
		<nav class="navbar navbar-inverse" style="background-color:#f0f5f5" border-color="#f0f5f5"  >
            <div class="container-fluid">
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>                        
				  </button>
				</div>
				<div class="collapse navbar-collapse" id="myNavbar">
				  <ul class="nav navbar-nav">
					<li><a href="index.html">Página Inicial</a></li>
					<li><a href="ruas.html">Ruas</a></li>
					<li><a href="assaltos.html">Assaltos</a></li>
					<li><a href="sobre.html">Sobre</a></li>
				  </ul>
				</div>
			  </div>
        </nav>
	<div class="p">	
	<?php
	    $date = new DateTime( '2014-08-19' );
		if (!empty($_POST['rua'])) {
           $rua = $_POST['rua'];
           echo 'Você informou que foi assaltado na rua: '.$rua.'<br><br>';
        } else {
         $rua = "<br>Você não digitou o nome da rua onde foi assaltado, volte e informe o nome da rua<br><br>";
		 echo "Você não digitou o nome da rua onde foi assaltado, volte e informe o nome da rua<br><br>";
        }
		if (!empty($_POST['bairro'])) {
           $bairro = $_POST['bairro'];
           echo 'Você informou que foi assaltado no bairro: '.$bairro.'<br><br>';
        } else {
           echo "Você não digitou o nome do bairro onde foi assaltado, volte e informe o nome do bairro<br><br>";
        }
		if (!empty($_POST['date'])) {
           $date = $_POST['date'];
           echo 'Você relatou que foi assaltado em '.$date.' na rua '.$rua.' <br><br>';
        } else {
           echo "Você não relatou em que data foi assaltado<br><br>";
        }
		
		if (!empty($_POST['time'])) {
           $time = $_POST['time'];
           echo 'Você relatou que foi assaltado às '.$time.' na rua '.$rua.'. <br><br>';
        } else {
           echo "Você não relatou qual foi o horário do assalto<br><br>";
        }
		
	?>
	 <-<-<-<a href="assaltos.html">Voltar</a>  
	</p>
		<!-- Footer -->
			<footer id="footer">
				<div class="inner">
					<h2>Onde Reclamar</h2>
					<ul class="actions">
						<li><span class="icon fa-phone"></span> <a href="#">156 ou 118</a></li>
						<li><span class="icon fa-envelope"></span> <a href="#">http://www2.portoalegre.rs.gov.br</a></li>
						<li><span class="icon fa-map-marker"></span> Praça Montevideo, 10 - Centro Histórico, Porto Alegre - RS, cep 90010-170</li>
					</ul>
				</div>
				<div class="copyright">
					&copy; VANDERLEI RODRIGUES
				</div>
			</footer>
</html>