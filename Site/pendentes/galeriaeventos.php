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
				<img src="imagens/sp.png" width=100px height=100px>
				<p></p>
			</div>
			
			<div id="logo">
				<img src="imagens/logo.png" width=200px height=100px>
				<p></p>
			</div>			
			<div id="topnav">
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="galerianoticia.php">Notícias</a></li>
					<li><a href="galeriaeventos.php">Eventos</a></li>        
					<li><a href="galeriadocente.php">Docente</a></li>   	  
					<li class="last"><a href="galeria.php">Galeria</a></li>	
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
								<input type="text" name="chave" id="s" onfocus="defaultInput(this)" onblur="clearInput(this)" placeholder="Pesquise"/>
								<input type="submit" id="searchsubmit" value=" " />
							</div>
						</form>
					</div>
					<br>
					<br>
					<br>

				<!-- ######################################### -->
				<!-- Gerenciamento da galeria de noticias	
				<!-- ######################################### -->

				<?php
					$conecta = new PDO("mysql:host=localhost;dbname=etec", "root", "etec");		

				
					
					$registro = $conecta->query ("SELECT g.titulo as gtitulo, n.idnoticia_evento as nidnoticia_evento, n.pasta as npasta, n.titulo as ntitulo, g.idgaleria as gidgaleria
				FROM galeria as g, noticia_evento as n
				WHERE (n.idnoticia_evento = g.idnoticia_evento) and idtipo_noticia=2");
					
							
					echo'<h1><center><b>TODOS OS EVENTOS</b></center></h1> ';	
							
					while ($campo = $registro -> fetch (PDO::FETCH_OBJ)){	
						echo'<table>
						<tr>
						<td width="5" align="center"><div class="camadafoto"><a class="link" href="leiamais.php?idnoticia_evento='.$campo -> nidnoticia_evento.'"><img src="php/noticia_evento/'.$campo ->npasta.'" width=230 height=120 border="0" alt=""/></a>';
						  
						echo'<span>' .$campo->ntitulo.'</span></td>';
						  
						echo'<p><td>' .$campo->ntexto.'<a class="link" href="leiamais.php?idnoticia_evento='.$campo -> nidnoticia_evento.'"><br>Leia mais</a></p></td>';		

							echo'<p><td><a class="link" href="galeriaEventos2.php?idgaleria='.$campo -> gidgaleria.'">Galeria do evento</a></tr></table>';
						
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
		  <h2>Como chegar</h2>
		  <iframe width="250" height="140" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com.br/maps?f=q&amp;source=s_q&amp;hl=pt-BR&amp;geocode=&amp;q=ETEC+S%C3%A3o+Jos%C3%A9+dos+Campos,+Parque+Residencial+Aquarius,+S%C3%A3o+Jos%C3%A9+dos+Campos+-+SP&amp;aq=&amp;sll=-23.219921,-45.906845&amp;sspn=0.36671,0.302811&amp;t=m&amp;ie=UTF8&amp;hq=ETEC&amp;hnear=Parque+Residencial+Aquarius,+S%C3%A3o+Jos%C3%A9+dos+Campos+-+S%C3%A3o+Paulo&amp;fll=-23.219921,-45.906845&amp;fspn=0.006182,0.009645&amp;st=107799112320184567157&amp;rq=1&amp;ev=zi&amp;split=1&amp;ll=-23.219921,-45.906845&amp;spn=0.012364,0.01929&amp;output=embed"></iframe>
		  
		  
		  <a href="https://www.google.com.br/maps/place/ETEC+-+S%C3%A3o+Jos%C3%A9+dos+Campos/@-23.220111,-45.906952,17z/data=!3m1!4b1!4m2!3m1!1s0x94cc357f12807135:0xa7e8aa77e5f28aac" target="_blank"><br>Clique aqui</a>
		
		</div>
		
		<div class="box contactdetails">
		  <h2>Contatos</h2>
		  <ul>
			<li>Tel: (12) 3941-1571</li>
			<li>Email: etecsjc@etecsjc.com</li>
			
		</div>
		<!-- LOGIN ADM -->
		<div class="box flickrbox">
		  <h2>Login do ADM</h2>
		  <form name="dados" method="POST" action="login/logar.php">
			<table border="0"><tr><td width="20%">
			<font color="white">Nome:</font></td><td><input type="text" name="nome" id="nome" size="15" value="">
			</td></tr>
			<tr><td>
			<font color="white">Senha:</font></td><td><input type="password"  id="senha" name="senha" size="15" value="">
	</td></tr>

		
			<tr><td align="right"><input type="submit" value="Entrar"></td>
			
			</form>
			
			<form name="dados" method="POST" action="login/destroisessao.php">						
				<td align="left"><input type="submit" name="" id="" value="sair" onClick=window.location="#" /></td></tr></table>
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
