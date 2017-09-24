<html>
	<head>
		<title>ETEC - São José dos Campos</title>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<meta http-equiv="imagetoolbar" content="no" />
		<link rel="stylesheet" href="styles/layout.css" type="text/css" />
		<script type="text/javascript" src="scripts/jquery-1.4.1.min.js"></script>
		<script type="text/javascript" src="scripts/jquery.jcarousel.pack.js"></script>
		<script type="text/javascript" src="scripts/jquery.jcarousel.setup.js"></script>
		<link href="styles/estilo.css" rel="stylesheet" type="text/css" />
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
					<li><a href="contato.html">Contato</a></li>	
				</ul>
			</div>
		</div>
		<br class="clear" />
    </div>
	  
	<div class="wrapper col3">
		<div id="container">	  
			<div id="principal">
					<div class="top-search">
						<form  method="POST" id="searchform" action="pesquisaevento.php">
							<div>
								<input type="text" name="palavra_chave" id="s" onfocus="defaultInput(this)" onblur="clearInput(this)" placeholder="Pesquise"/>
								<input type="submit" id="searchsubmit" value=" " />
							</div>
						</form>
					</div>
					<br>
					<br>
					<br>

				<!-- ######################################### -->

				<?php
					$conecta = new PDO("mysql:host=localhost;dbname=etec", "root", "etec");		

					$registro = $conecta->query("SELECT * FROM noticia_evento WHERE idtipo_noticia=2 ORDER BY idnoticia_evento DESC");
							
					echo'<h1><center><b>TODOS OS EVENTOS</b></center></h1> ';	
							
					while ($campo = $registro -> fetch (PDO::FETCH_OBJ)){	
						echo'<table>
						<tr>
						<td width="5" align="center"><div class="camadafoto"><a class="link" href="leiamais.php?idnoticia_evento='.$campo -> idnoticia_evento.'"><img src="php/noticia_evento/'.$campo ->pasta.'" width=230 height=120 border="0" alt=""/></a>';
						  
						echo'<span>' .$campo->titulo.'</span></td>';
						  
						echo'<p><td>' .$campo->texto.'<a class="link" href="leiamais.php?idnoticia_evento='.$campo -> idnoticia_evento.'"><br>Leia mais</a></p></td></tr></table>';				
							}
						echo'
						<br>
						<br>
						<br>';
				?>
				</div>
			</div>
		</div>
	</div>

	<!-- ####################################################################################################### -->
	<br><div class="wrapper col4">
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
