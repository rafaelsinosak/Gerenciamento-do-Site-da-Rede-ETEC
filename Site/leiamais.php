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
					<li><a href="unidade.html">Unidades</a></li>	
				</ul>
			</div>
		</div>
		<br class="clear" />
    </div>
	  
	<div class="wrapper col3">
		<div id="container">	  
			<div id="principal">
					<div class="top-search">
						<form  method="POST" id="searchform" action="pesquisanoticia.php">
							<div>
								<input type="text" name="palavra_chave" id="s" onfocus="defaultInput(this)" onblur="clearInput(this)" placeholder="Pesquise"/>
								<input type="submit" id="searchsubmit" value=" " />
							</div>
						</form>
					</div>
					<br>
					<br>
					<br>

				<!-- GALERIA DE IMAGENS -->
				<?php
					//recebe dados do formulário
					$idnoticia_evento = $_GET["idnoticia_evento"];
					//conecta nobanco 
					$conecta = new PDO("mysql:host=localhost;dbname=etec", "root", "etec");
					//faz consulta no banco
					$registro = $conecta->query("SELECT * from noticia_evento WHERE idnoticia_evento=".$idnoticia_evento);
					while ($campo = $registro -> fetch (PDO::FETCH_OBJ)){				
						echo'<center><span><h1>' .$campo->titulo.'</h1></span>
						'.$campo ->dia.'<br><br>
						<img src="php/noticia_evento/'.$campo ->pasta.'" width=506 height=264 border="0" alt=""/></center>';		  				
							  
						echo'<br><br><font size="3">' .$campo->texto.'</font>';									
						echo'<br>';
							
						// fazer uma select na tabela galeria e passar noticia_evento a fim de recuperar o id_galeria
						$conecta2=mysql_connect("localhost","root","etec");
						mysql_select_db("etec",$conecta2);
						$sql2 = "select idgaleria from galeria where idnoticia_evento =" .$campo->idnoticia_evento;

						$registros2=mysql_query($sql2,$conecta2);
						$cont2=mysql_num_rows($registros2);
						if ($cont2>0){
							//criar link
							$campo2=mysql_fetch_array($registros2);
							echo "<center><a href='galeria.php?idgaleria=".$campo2["idgaleria"]."'><img src='img/galeria.png' widht='70' height='70'>Veja Galeria</a></center>";
						}	
					}						
				?>
				
			</div>
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
