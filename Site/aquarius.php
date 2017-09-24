﻿<html>
	<head>
		<title>ETEC - São José dos Campos</title>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<meta http-equiv="imagetoolbar" content="no" />
		<link rel="stylesheet" href="styles/layout.css" type="text/css" />
		<script type="text/javascript" src="scripts/jquery-1.4.1.min.js"></script>
		<script type="text/javascript" src="scripts/jquery.jcarousel.pack.js"></script>
		<script type="text/javascript" src="scripts/jquery.jcarousel.setup.js"></script>
	</head>

	<body id="top">

	<!-- ####################################################################################################### -->
	<div class="wrapper col1">
		<div id="header">
			<div id="logo2">
				<a href="http://www.saopaulo.sp.gov.br" target="_blank"><img src="imagens/sp.png" width=100px height=100px></a>
				<p></p>
			</div>
			
			<div id="logo">
				<a href="index.php"><img src="imagens/logo.png" width=200px height=100px></a>
				<p></p>
			</div>			
			<div id="topnav">
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="noticia.php">Notícias</a></li>
					<li><a href="eventos.php">Eventos</a></li>        
					<li><a href="docente.php">Docente</a></li>   	  
					<li class="last"><a href="galeria_escola.php">Galeria</a></li>	
					<li><a href="unidade.html">Unidades</a></li>	
				</ul>
			</div>
		</div>
		<br class="clear" />
    </div>

	<!-- ####################################################################################################### -->

	<!-- ####################################################################################################### -->
	<div class="wrapper col3">
		<div id="container">
		<center><h2>Etec - Jardim Aquarius</h2></center>
			<br>	
			<center><img src="imagens/aquarius.jpg" width=506 height=264></center><br><br><br>
		   
			<?php			
				$conecta = new PDO("mysql:host=localhost;dbname=etec", "root", "etec");									
					$registro = $conecta->query("SELECT * from curso order by nome ASC");
								
					while ($campo = $registro -> fetch (PDO::FETCH_OBJ)){			
						echo '<h2>'. $campo -> nome.' </h2> '. $campo -> descricao;
						echo'
						MERCADO DE TRABALHO: '.$campo -> atuacao;					   
						ECHO '<br><hr>';	  
					}
			?>
		</div>
	</div>

	<!-- ####################################################################################################### -->
	<div class="wrapper col4">
	  <div id="footer">
				<div class="box1">
					<h2><b>Institucional</b></h2>			  
					<ul>
						<li>Quem Somos</li>
						<li>Missão</li>
						<li>Valores</li>
					</ul>				  
					<a href="quemsomos.html"><br>Clique aqui</a>			
				</div>
		
				<div class="box contactdetails">
					<h2>Contatos</h2>
					<ul>
						<li>Tel: (12) 3941-1571</li>
						<li>Email: etecsjc@etecsjc.com</li>
						<br><br>
						<li>Endereço</li>
						<li>Av. Salmão 570 - Parque Residencial Aquárius</li>
					</ul>				
				</div>
				
			<!-- LOGIN ADM -->
			<div class="box flickrbox">
				<h2>Login do ADM</h2>
				<form name="dados" method="POST" action="login/logar.php">
				<table border="0"><tr><td width="20%">
					<font color="white">Nome:</font></td><td><input type="text" name="nome" id="nome" size="20" value=""></td></tr>
					<tr><td><font color="white">Senha:</font></td><td><input type="password" id="senha" name="senha" size="20" value="">
					</td></tr>
					<tr><td align="right"><input type="submit" value="Entrar"></td>
				</form>
				
				<form name="dados" method="POST" action="login/destroisessao.php">						
					<td align="left"><input type="submit" name="" id="" value="sair" onClick=window.location="#" /></td></tr>
				</table>
				</form>
				<br>
				<div class="wrap">
				
				<div class="fix"></div>
				</div>
			</div>
		<br class="clear" />
	  </div>
	</div>
	<!-- ####################################################################################################### -->
	<div class="wrapper col5">
	  <div id="copyright">
		<p class="fl_left"><center><b>ETEC - São José dos Campos</b></center></p>
		   
	  </div>
	</div>

	</body>
</html>
