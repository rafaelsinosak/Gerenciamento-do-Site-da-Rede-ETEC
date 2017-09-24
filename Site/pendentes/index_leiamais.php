
<html>
	<head>
		<title>ETEC - São José dos Campos</title>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<meta http-equiv="imagetoolbar" content="no" />
		<link rel="stylesheet" href="styles/layout.css" type="text/css" />
		<link rel="stylesheet" href="styles/layout1.css" type="text/css" />
		<script type="text/javascript" src="scripts/jquery-1.4.1.min.js"></script>
		<script type="text/javascript" src="scripts/jquery.jcarousel.pack.js"></script>
		<script type="text/javascript" src="scripts/jquery.jcarousel.setup.js"></script>
		<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<link rel="stylesheet" media="all" href="css/style.css"/>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		<!-- Adding "maximum-scale=1" fixes the Mobile Safari auto-zoom bug: http://filamentgroup.com/examples/iosScaleBug/ -->		
					
		<!-- JS -->
		<script src="js/jquery-1.7.1.min.js"></script>
		<script src="js/custom.js"></script>
		<script src="js/tabs.js"></script>
		<script src="js/css3-mediaqueries.js"></script>
		<script src="js/jquery.columnizer.min.js"></script>
			
		<!-- Isotope -->
		<script src="js/jquery.isotope.min.js"></script>
			
		<!-- Lof slider -->
		<script src="js/jquery.easing.js"></script>
		<script src="js/lof-slider.js"></script>
		<link rel="stylesheet" href="css/lof-slider.css" media="all"  /> 
		<!-- ENDS slider -->

		<!-- JCarousel -->
		<script type="text/javascript" src="js/jquery.jcarousel.min.js"></script>
		<link rel="stylesheet" media="screen" href="css/carousel.css" /> 
		<!-- ENDS JCarousel -->
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

	<!-- ####################################################################################################### -->
	<div class="wrapper col2">
		<div id="container">    
			<div class="wrapper cf">	
				<!-- SLIDER -->						
				<div id="home-slider" class="lof-slidecontent">	
				<div class="preload"><div></div></div>
					<!-- slider content --> 
					<div class="main-slider-content" >
						<ul class="sliders-wrap-inner">

							<?php
								$conecta = new PDO("mysql:host=localhost;dbname=etec", "root", "etec");		
										
								$registro = $conecta->query("SELECT * from noticia_evento ORDER BY idnoticia_evento DESC LIMIT 0,5");
										
								while ($campo = $registro -> fetch (PDO::FETCH_OBJ)){	
									echo'<li><img src="php/noticia_evento/'.$campo ->pasta.'" width="960" height="367" alt=""/>								
										  <div class="slider-description">';
									echo'<h4>' .$campo -> titulo.'</h4>';
									echo'<p>' .$campo -> resumo.'
												<a class="link" href="leiamais1.php?idnoticia_evento='.$Sidnoticia_evento.'">Leia mais</a>
											</p>
										 </div>
									</li>';	
								}
							?>
							
							
						</ul>
					</div>
					<!-- ENDS slider content --> 
				           
					<!-- slider nav -->
					<div class="navigator-content">
						<div class="navigator-wrapper">
					        <ul class="navigator-wrap-inner">

							<?php
								$conecta = new PDO("mysql:host=localhost;dbname=etec", "root", "etec");		
										
								$registro = $conecta->query("SELECT * from noticia_evento ORDER BY idnoticia_evento DESC LIMIT 0,5");
										
								while ($campo = $registro -> fetch (PDO::FETCH_OBJ)){	
									echo'<li><img src="php/noticia_evento/'.$campo ->pasta.'" width="188" height="73" alt=""/>								
									</li>';					
								}
							?>
						</div>
						<div class="button-next">Next</div>
						<div  class="button-previous">Previous</div>
					  <!-- REMOVED TILL FIXED <div class="button-control"><span>STOP</span></div> -->
					</div> 
					<!-- slider nav -->
				</div> 
					<!-- ENDS SLIDER -->
			</div>
		</div>
	</div>

	<!-- ####################################################################################################### -->

	<div class="wrapper col3">
		<div id="container">
			<div class="homepage">
				<ul>
					<li>
						<h2><img src="imagens/cursos2.jpg"  width="260px" height="105px" /><b></b></h2>
						<p><b>Clique aqui para saber sobre todos os nossos cursos oferecidos na Região </b></p>
						<p class="readmore"><a href="unidade.html">Continue lendo &raquo;</a></p>
					</li>
					<li>
						<h2><img src="imagens/eventos.png" width="290px" height="105px" class="img2" alt="" width=285px height=110px /></h2>
						<p><b>Fique por dentro dos eventos que acontecem na ETEC</b></p>
						<p class="readmore"><a href="quadrinhos.html">Continue lendo &raquo;</a></p>
					</li>
					<li class="last">
						<h2><img src="imagens/noticias.jpg" width="265px" height="105px" class="img2" alt="" /><b></b></h2>
						<p><b>Veja aqui algumas noticias sobre a Sede da ETEC </b></p>
						<p class="readmore"><a href="galerianoticia.html">Continue lendo &raquo;</a></p>
					</li>
				</ul>
				<br class="clear" />
			</div>
		</div>
	</div>
	<!-- ####################################################################################################### -->
	<div class="wrapper col4">
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
				</ul>				
			</div>
		
			<!-- LOGIN ADM -->
			<div class="box flickrbox">
				<h2>Login do ADM</h2>
				<form name="dados" method="POST" action="login/logar.php">
				<table border="0">
					<tr><td width="20%"><font color="white">Nome:</font></td><td><input type="text" name="nome" id="nome" size="15" value=""></td></tr>
					<tr><td><font color="white">Senha:</font></td><td><input type="password"  id="senha" name="senha" size="15" value=""></td></tr>				
					<tr><td align="right"><input type="submit" value="Entrar"></td>					
				</form>					
				<form name="dados" method="POST" action="login/destroisessao.php">						
					<td align="left"><input type="submit" name="" id="" value="sair" onClick=window.location="#" /></td></tr>
				</form>
				</table>
				
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
