<html>
	<head>
		<title>ETEC - São José dos Campos</title>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<meta http-equiv="imagetoolbar" content="no" />
		<link rel="stylesheet" href="styles/layout.css" type="text/css" />	
		<link href="styles/estilo.css" rel="stylesheet" type="text/css" />
		<link href="css/pirobox.css" media="screen" rel="stylesheet" type="text/css" />
		<script type="text/javascript" src="js/jquery1.2.6.js"></script>
		<script type="text/javascript" src="js/pirobox.js"></script>
		
		<script type="text/javascript">
		$(document).ready(function(){

		<!--David this OPTIONS are for inside box navigation-->

			$('.thumbs').piroBox({
					border: 10,
					borderColor : '#222', 
					mySpeed: 700,  
					bg_alpha: 0.3,
					cap_op_start : 0.4,
					cap_op_end: 0.8,
					pathLoader : '#000 url(img/ajax-loader.gif) center center no-repeat;', 
					gallery : '.gallery_in li a', 
					gallery_li : '.gallery_in li', 
					next_class : '.next_in',
					previous_class : '.previous_in'
			});	
			$('.thumbs').piroBox({
			
		<!--David this OPTIONS are for outside box navigation-->

					border: 1, 
					mySpeed: 700,
					borderColor : '#444',  
					bg_alpha: 0.5,
					cap_op_start : 0.4,
					cap_op_end: 0.8,
					pathLoader : '#000 url(img/ajax-loader.gif) center center no-repeat;', 
					gallery : '.gallery li a', 
					gallery_li : '.gallery li',
					single : '.single  a',
					next_class : '.next',
					previous_class : '.previous'
			});	
		});

		</script>

		<script> 
			function apagaDivs(total){
			
				for(i=1;i<=total;i++){
					obj=document.getElementById("pagina"+i);
					obj.style.visibility='hidden';
				}
			}
			function mostraDiv(qual){
				obj=document.getElementById(qual);
				obj.style.visibility='visible';
			}
		</script>


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
					
					
				 <h2 style="margin-top:10px;" ><center>Galeria</center><br>

            <div class="gallery_in">
			<?php
				$idgaleria=$_GET["idgaleria"];
                echo '<ul>';
                
				$conecta = new PDO("mysql:host=localhost;dbname=etec", "root", "etec");	
				$registro = $conecta->query("SELECT g.titulo as gtitulo, gi.pasta as gipasta, gi.descricao as gidescricao FROM galeria as g,  galeria_imagens as gi WHERE (gi.idgaleria = g.idgaleria) and (g.idgaleria = ".$idgaleria.")");				
				while ($campo = $registro -> fetch (PDO::FETCH_OBJ)){	
					echo '<li>';
                    echo '<a href="php/galeria_imagem/'.$campo -> gipasta.'" title="'.$campo ->gidescricao.'" ><img src="php/galeria_imagem/'.$campo -> gipasta.'" alt="demo" width="200" height="139" /></a>';
                    echo '</li>';                    
				}
				echo '</ul><br></div>';
			?>
			
			</div>
		</div>
		<br class="clear" />
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
