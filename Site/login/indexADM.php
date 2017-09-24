<?php
	include_once("verifica.php");  
?>
<html>
	<head>
		<title>Gerenciamento do Site</title>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<link rel="stylesheet" href="../../../TCC/styles/layout.css" type="text/css" />
		<link rel="stylesheet" href="../../../TCC/styles/layout1.css" type="text/css" />
		<link rel="stylesheet" href="../../../TCC/css/styles.css" type="text/css" />
		<script type="text/javascript" src="../../../TCC/scripts/jquery-adm.js" type="text/javascript"></script>
		<script type="text/javascript" src="../../../TCC/scripts/scriptadm.js"></script>
		
		<script type="text/javascript" src="../../../TCC/js/tiny_mce/tiny_mce.js"></script>
		<script type="text/javascript"  src="../../../TCC/js/tiny_mce/plugins/tinybrowser/tb_tinymce.js.php"></script>
		<script type="text/javascript">
			tinyMCE.init({
				// General options
			language : "pt",
				mode : "textareas",
				theme : "advanced",
				plugins : "safari,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template",

				// Theme options
		theme_advanced_buttons1:
		"code,bold,italic,underline,strikethrough,justifyleft,justifycenter,justifyright,justifyfull,cleanup,link,unlink,image,table,formatselect,fontselect,fontsizeselect,forecolor,backcolor,fullscreen",

				// Theme options
				theme_advanced_buttons2 : "",
				theme_advanced_buttons3 : "",
				theme_advanced_buttons4 : "",


				theme_advanced_toolbar_location : "top",
				theme_advanced_toolbar_align : "left",
				theme_advanced_statusbar_location : "bottom",
				theme_advanced_resizing : true,

				// Example content CSS (should be your site CSS)
			 content_css : "css/content.css",

				// Drop lists for link/image/media/template dialogs
				template_external_list_url : "lists/template_list.js",
				external_link_list_url : "lists/link_list.js",
				external_image_list_url : "lists/image_list.js",
				media_external_list_url : "lists/media_list.js",
			file_browser_callback : "tinyBrowser",
				// Replace values for the template plugin
				template_replace_values : {
					username : "Some User",
					staffid : "991234"
				}
			});
		</script>		

		
		<!--<script src="tinymce/tinymce.min.js"></script>
		<script>
			tinymce.init({selector:'textarea'});
		</script>-->		
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
	<!-- ####################################################################################################### -->
	<body id="top">
	<div class="wrapper col1">
		<div id="header">
			<div id="logo2">
				<img src="../../../TCC/imagens/sp.png" width=100px height=100px>
				<p></p>
			</div>
			
			<div id="logo">
				<img src="../../../TCC/imagens/logo.png" width=200px height=100px>
				<p></p>
			</div>			
		</div>
		<br class="clear" />
    </div>

		<!-- ####################################################################################################### -->
		<!-- ##################################       MENU GERENCIAMENTO     ####################################### -->
		<!-- ####################################################################################################### -->
		<div class="wrapper col3">
			<div id="sample">	
			<div id="container">	
				<div class="box1">
					<font size="40" color="#06213f"><center>Gerenciamento do Site</center></font><br>
					<div id="menuArea" class="menuArea">
					<div id='cssmenu'>						  
						<ul>
						<li><a href='../index.php'><span>Home</span></a></li>
						<li class='active has-sub'><a href='#'><span>Noticias e Eventos</span></a>
							<ul>
								<li><a href='#'onclick='apagaDivs(27);mostraDiv("pagina1");'><span>Cadastrar</span></a></li>
								<li><a href='#'onclick='apagaDivs(27);mostraDiv("pagina2");'><span>Atualizar</span></a></li>
								<li><a href='#'onclick='apagaDivs(27);mostraDiv("pagina3");'><span>Excluir</span></a></li>
								<li><a href='#'onclick='apagaDivs(27);mostraDiv("pagina4");'><span>Consultar</span></a></li>
							</ul>
						</li>
						<li class='active has-sub'><a href='#'><span>Galeria</span></a>
							<ul>
								<li><a href='#'onclick='apagaDivs(27);mostraDiv("pagina5");'><span>Cadastrar</span></a></li>
								<li><a href='#'onclick='apagaDivs(27);mostraDiv("pagina6");'><span>Atualizar</span></a></li>
								<li><a href='#'onclick='apagaDivs(27);mostraDiv("pagina7");'><span>Excluir</span></a></li>
								<li><a href='#'onclick='apagaDivs(27);mostraDiv("pagina8");'><span>Consultar</span></a></li>
							</ul>
						</li>
						<li class='active has-sub'><a href='#'><span>Galeria de imagem</span></a>
							<ul>
								<li><a href='#'onclick='apagaDivs(27);mostraDiv("pagina9");'><span>Cadastrar</span></a></li>
								<li><a href='#'onclick='apagaDivs(27);mostraDiv("pagina10");'><span>Excluir</span></a></li>
								<li><a href='#'onclick='apagaDivs(27);mostraDiv("pagina11");'><span>Consultar</span></a></li>
							</ul>
						</li>
						<li class='active has-sub'><a href='#'><span>Professor</span></a>
							<ul>
								<li><a href='#'onclick='apagaDivs(27);mostraDiv("pagina12");'><span>Cadastrar</span></a></li>
								<li><a href='#'onclick='apagaDivs(27);mostraDiv("pagina13");'><span>Atualizar</span></a></li>
								<li><a href='#'onclick='apagaDivs(27);mostraDiv("pagina14");'><span>Excluir</span></a></li>
								<li><a href='#'onclick='apagaDivs(27);mostraDiv("pagina15");'><span>Consultar</span></a></li>
							</ul>
						</li>
						<li class='active has-sub'><a href='#'><span>Curso</span></a>
							<ul>
								<li><a href='#'onclick='apagaDivs(27);mostraDiv("pagina16");'><span>Cadastrar</span></a></li>
								<li><a href='#'onclick='apagaDivs(27);mostraDiv("pagina17");'><span>Atualizar</span></a></li>
								<li><a href='#'onclick='apagaDivs(27);mostraDiv("pagina18");'><span>Excluir</span></a></li>
								<li><a href='#'onclick='apagaDivs(27);mostraDiv("pagina19");'><span>Consultar</span></a></li>
							</ul>
						</li>   
						<li class='active has-sub'><a href='#'><span>Modulo</span></a>
							<ul>
								<li><a href='#'onclick='apagaDivs(27);mostraDiv("pagina20");'><span>Cadastrar</span></a></li>
								<li><a href='#'onclick='apagaDivs(27);mostraDiv("pagina21");'><span>Atualizar</span></a></li>
								<li><a href='#'onclick='apagaDivs(27);mostraDiv("pagina22");'><span>Excluir</span></a></li>
								<li><a href='#'onclick='apagaDivs(27);mostraDiv("pagina23");'><span>Consultar</span></a></li>
							</ul>
						</li>
						<li class='active has-sub'><a href='#'><span>Disciplina</span></a>
							<ul>
								<li><a href='#'onclick='apagaDivs(27);mostraDiv("pagina24");'><span>Cadastrar</span></a></li>
								<li><a href='#'onclick='apagaDivs(27);mostraDiv("pagina25");'><span>Atualizar</span></a></li>
								<li><a href='#'onclick='apagaDivs(27);mostraDiv("pagina26");'><span>Excluir</span></a></li>
								<li><a href='#'onclick='apagaDivs(27);mostraDiv("pagina27");'><span>Consultar</span></a></li>
							</ul>
						</li>
						</ul>
					</div>				
				</div>			
			</div>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>


		<!-- ###################################################################################################### -->
		<!-- ######################################     NOTICIA E EVENTOS     ##################################### -->
		<!-- ###################################################################################################### -->
		
		<!-- #########################################     CADASTRO     ########################################### -->
		

			
		<div id="pagina1" class="pagina">
			<div id="box">
			<form method="POST" action="../../TCC/php/noticia_evento/cadNoticia.php" enctype="multipart/form-data" name="addroom">
				<br><h1><center>Cadastro de Notícias</center></h1>
				<table border="0">
					<tr><td align="right">Título:</td><td> <input type="text" name="titulo" size="35" value=""></td></tr>
					<tr><td align="right">Imagem:</td><td><input type="file" name="imagem" size="35" value=""></td></tr>
					<tr><td align="right">Data:</td><td><input type="date" name="dia" size="15" value=""></td></tr>	
					<tr><td align="right">Autor: </td><td><input type="text" name="autor" size="50" value=""></td></tr>
					<tr><td align="right">Palavras chaves: </td><td><input type="text" name="chave" size="100" value=""></td></tr>
					<tr><td align="right">Texto: </td><td><textarea name="texto" rows="1" style="width: 70%"></textarea></td></tr>	
					<tr><td align="right">Resumo: </td><td><textarea name="resumo"></textarea></td></tr>

					<tr><td align="right">Selecione Categoria:</td>
					<td>
					<?php
					   ListaTipoNoticia();
					?>
					<?php
					function ListaTipoNoticia(){
						//escreve cabeçalho da lista select e da nome em função do campo de retorno
						echo "<select name='idtipo_noticia'>";
						// conecta com o banco
						$conecta = new PDO("mysql:host=localhost;dbname=etec", "root","etec");
						// executa consulta
						$resp = $conecta->query("select idtipo_noticia, descricao from tipo_noticia");
						// percorre consulta
						while ($campo=$resp->fetch(PDO::FETCH_OBJ)) {
							   // cria item option da select, item de escolha
							   // e define valor de retorno
							   
								echo "<option value ='".$campo-> idtipo_noticia ."'>";
								// mostra informação de escolha
								echo $campo-> descricao;
						}// retorna ao laço para imprimir restante, caso existam
						echo "</select>";
					}
					?>
					</td></tr>
				</table>
				
				<center><input type=image src="../../../TCC/img/botao_cadastrar.png"></center><br>
			</form>
			</div>
		</div>
			
		<!-- #########################################     ATUALIZAR     ########################################## -->
		<div id="pagina2" class="pagina">
			<div id="box">
			<form method="POST" action="../../TCC/php/noticia_evento/atualizaNoticia.php" enctype="multipart/form-data" name="addroom">
				<br><h1><center>Atualizar Notícias e Eventos</center></h1>
				<table border="0">
					<tr><td align="right">Selecione Noticia:</td>
					<td>
					<?php
					   criaListaNoticia();
					?>
					<?php
						function criaListaNoticia(){
							//escreve cabeçalho da lista select e da nome em função do campo de retorno
							echo "<select name='idnoticia_evento' >";
							// conecta com o banco
							$conecta = new PDO("mysql:host=localhost;dbname=etec", "root","etec");
							// executa consulta
							$resp = $conecta->query("select idnoticia_evento, titulo from noticia_evento");
							// percorre consulta
							while ($campo=$resp->fetch(PDO::FETCH_OBJ)) {
								   // cria item option da select, item de escolha
								   // e define valor de retorno
								   
									echo "<option value ='".$campo-> idnoticia_evento."'>";
									// mostra informação de escolha
									echo $campo-> titulo;
							}// retorna ao laço para imprimir restante, caso existam
							echo "</select>";
						}
					?>	
					</td></tr>
					<tr><td align="right">Título:</td><td> <input type="text" name="titulo" size="35" value=""></td></tr>
					<tr><td align="right">Dia:</td><td> <input type="date" name="dia" size="15" value=""></td></tr>
					<tr><td align="right">Imagem:</td><td><input type="file" name="imagem" size="35" value=""></td></tr>
					<tr><td align="right">Autor: </td><td><input type="text" name="autor" size="50" value=""></td></tr>
					<tr><td align="right">Palavras chaves: </td><td><input type="text" name="chave" size="100" value=""></td></tr>
					<tr><td align="right">Texto: </td><td><textarea name="texto" rows="10" style="width: 85%"></textarea></td></tr>	
					<tr><td align="right">Resumo: </td><td><textarea name="resumo" style="width: 85%"></textarea></td></tr>
				</table>
					
					<center><input type=image src="../../../TCC/img/botao_atualizar.png"></center><br>
			</form>
			</div>
		</div>
			
		<!-- ##########################################     EXCLUIR     ########################################### -->
		<div id="pagina3" class="pagina">
			<div id="box">
			<form method="POST" action="../../TCC/php/noticia_evento/excluiNoticia.php">
				<br><h1><center>Excluir Notícias e Eventos</center></h1>
				<?php
				   criaListaIdNoticia();
				?>   
				<?php
				function criaListaIdNoticia(){
					//escreve cabeçalho da lista select e da nome em função do campo de retorno
					echo "<center><select name='idnoticia_evento'>";
					// conecta com o banco
					$conecta = new PDO("mysql:host=localhost;dbname=etec", "root","etec");
					// executa consulta
					$resp = $conecta->query("select idnoticia_evento, titulo from noticia_evento");
					// percorre consulta
					while ($campo=$resp->fetch(PDO::FETCH_OBJ)) {
						   // cria item option da select, item de escolha
						   // e define valor de retorno
							   
							echo "<option value ='".$campo-> idnoticia_evento."'>";
							// mostra informação de escolha
							echo $campo-> titulo;
					}// retorna ao laço para imprimir restante, caso existam
					echo "</select></center>";
				}
				?>
					 <br><center><input type=image src="../../../TCC/img/botao_excluir.png" width="70" height="50"></center><br>
			</form>
			</div>
		</div>

		<!-- #########################################     CONSULTAR     ########################################## -->			
		<div id="pagina4" class="pagina">
			<div id="box">
				<form method="POST" action="../../TCC/php/noticia_evento/consultaNoticia.php">
					<br><h1><center>Consultar Notícias e Eventos</center></h1>
					<table border="0">
						<tr><td align="right">Título da notícia ou evento: </td><td> <input type="text" name="chave" size="35" value=""></td></tr>
					</table>
					<center><input type=image src="../../../TCC/img/lupa.png" width="70" height="50"></center><br>
				</form>
			</div>			
		</div>	

		<!-- ###################################################################################################### -->
		<!-- ##########################################     GALERIA     ########################################### -->
		<!-- ###################################################################################################### -->
		
		<!-- #########################################     CADASTRO     ########################################### -->
		<div id="pagina5" class="pagina">
			<div id="box">
			<form method="POST" action="../../TCC/php/galeria/cadGaleria.php">
				<br><h1><center>Cadastro de Galeria</center></h1>

				<table border="0">
					<tr><td align="right">Título:</td><td> <input type="text" name="titulo" size="35" value=""></td></tr>
					<tr><td align="right">Selecione Notícia:</td>
					<td>
					<?php
						ListaNoticia();
					?>  
					<?php
						function ListaNoticia(){
							//escreve cabeçalho da lista select e da nome em função do campo de retorno
							echo "<select name='idnoticia_evento'>";
							// conecta com o banco
							$conecta = new PDO("mysql:host=localhost;dbname=etec", "root","etec");
							// executa consulta
							$resp = $conecta->query("select idnoticia_evento, titulo from noticia_evento");
							// percorre consulta
							while ($campo=$resp->fetch(PDO::FETCH_OBJ)) {
								   // cria item option da select, item de escolha
								   // e define valor de retorno
								   
									echo "<option value ='".$campo-> idnoticia_evento ."'>";
									// mostra informação de escolha
									echo $campo-> titulo;
							}// retorna ao laço para imprimir restante, caso existam
							echo "</select>";
						}
					?>
					</td></tr>
				</table>
				<center><input type=image src="../../../TCC/img/botao_cadastrar.png"></center><br>
			</form>
			</div>
			</div>
		<!-- #########################################     ATUALIZAR     ########################################## -->
		<div id="pagina6" class="pagina">
			<div id="box">
			<form method="POST" action="../../TCC/php/galeria/atualizaGaleria.php">
				<br><h1><center>Atualizar Galeria</center></h1>
				<table border="0">
					<tr><td align="right">Título:</td><td> <input type="text" name="titulo" size="35" value=""></td></tr>
					<tr><td align="right">Selecione Galeria:</td>
					<td>
	
					<?php
					   criaListaGaleria();
					?>   

					<?php
					function criaListaGaleria(){
						//escreve cabeçalho da lista select e da nome em função do campo de retorno
						echo "<select name='idgaleria'>";
						// conecta com o banco
						$conecta = new PDO("mysql:host=localhost;dbname=etec", "root","etec");
						// executa consulta
						$resp = $conecta->query("select idgaleria, titulo from galeria");
						// percorre consulta
						while ($campo=$resp->fetch(PDO::FETCH_OBJ)) {
							   // cria item option da select, item de escolha
							   // e define valor de retorno
							   
								echo "<option value ='".$campo-> idgaleria."'>";
								// mostra informação de escolha
								echo $campo-> titulo;
						}// retorna ao laço para imprimir restante, caso existam
						echo "</select>";
					}
					?>
					</td></tr>
				</table>
				<center><br><input type=image src="../../../TCC/img/botao_atualizar.png"></center><br>
			</form>
			</div>
		</div>
			
		<!-- ##########################################     EXCLUIR     ########################################### -->
		<div id="pagina7" class="pagina">
			<div id="box">
			<form method="POST" action="../../TCC/php/galeria/excluiGaleria.php">
				<br><h1><center>Excluir Galeria</center></h1>
				<table border="0"><tr><td>
				<?php
				   criaListaGaleria1();
				?>
				<?php
					function criaListaGaleria1(){
						//escreve cabeçalho da lista select e da nome em função do campo de retorno
						echo "<center><select name='idgaleria'>";
						// conecta com o banco
						$conecta = new PDO("mysql:host=localhost;dbname=etec", "root","etec");
						// executa consulta
						$resp = $conecta->query("select idgaleria, titulo from galeria");
						// percorre consulta
						while ($campo=$resp->fetch(PDO::FETCH_OBJ)) {
							   // cria item option da select, item de escolha
							   // e define valor de retorno
							   
								echo "<option value ='".$campo-> idgaleria."'>";
								// mostra informação de escolha
								echo $campo-> titulo;
						}// retorna ao laço para imprimir restante, caso existam
						echo "</select></center>";
					}
				?>
				</td></tr>
				</table>
			<center><input type=image src="../../../TCC/img/botao_excluir.png" width="70" height="50"></center><br>
			</form>
			</div>
		</div>
			
		<!-- #########################################     CONSULTAR     ########################################## -->
		<div id="pagina8" class="pagina">
			<div id="box">
			<form method="POST" action="../../TCC/php/galeria/consultaGaleria.php">
				<br><h1><center>Consulta Galeria</center></h1>
				<table border="0">
					<tr><td align="right">Nome da galeria</td><td> <input type="text" name="chave" size="35" value=""></td></tr>
				</table>
				<center><input type=image src="../../../TCC/img/lupa.png" width="70" height="50"></center><br>
			</form>
			</div>			
		</div>			
			
		<!-- ###################################################################################################### -->
		<!-- ######################################     GALERIA IMAGEM     ######################################## -->
		<!-- ###################################################################################################### -->
		
		<!-- #########################################     CADASTRO     ########################################### -->
		<div id="pagina9" class="pagina">
			<div id="box">
			<form method="POST" action="../../TCC/php/galeria_imagem/cadGaleriaImagem.php" enctype="multipart/form-data" name="addroom">
				<br><h1><center>Cadastro de Imagens - Galeria</center></h1>
				<table border="0">
				<tr><td align="right">Imagem:</td><td><input type="file" name="imagem" size="35" value=""></td></tr>
				<tr><td align="right">Descrição da imagem:</td><td> <input type="text" name="descricao" size="35" value=""></td></tr>
				<tr><td align="right">Selecione Galeria:</td>
				<td>
				<?php
				   ListaGaleria();
				?>  
				<?php
					function ListaGaleria(){
						//escreve cabeçalho da lista select e da nome em função do campo de retorno
						echo "<select name='idgaleria'>";
						// conecta com o banco
						$conecta = new PDO("mysql:host=localhost;dbname=etec", "root","etec");
						// executa consulta
						$resp = $conecta->query("select idgaleria, titulo from galeria");
						// percorre consulta
						while ($campo=$resp->fetch(PDO::FETCH_OBJ)) {
							   // cria item option da select, item de escolha
							   // e define valor de retorno
							   
								echo "<option value ='".$campo-> idgaleria ."'>";
								// mostra informação de escolha
								echo $campo-> titulo;
						}// retorna ao laço para imprimir restante, caso existam
						echo "</select><br>";
				}
				?>
				</td></tr>
				</table>				
				<center><input type=image src="../../../TCC/img/botao_cadastrar.png"></center><br>
			</form>	
			</div>
		</div>

		<!-- ##########################################     EXCLUIR     ########################################### -->
			<div id="pagina10" class="pagina">
			<div id="box">
			<form method="POST" action="../../TCC/php/galeria_imagem/excluiGaleriaImagem.php">
				<br><h1><center>Excluir Galeria - Imagem</center></h1>
					
				<?php
				   criaListaImagem();
				?>   					

				<?php
				function criaListaImagem(){
					//escreve cabeçalho da lista select e da nome em função do campo de retorno
					echo "<center><select name='idgaleria_imagens'>";
					// conecta com o banco
					$conecta = new PDO("mysql:host=localhost;dbname=etec", "root","etec");
					// executa consulta
					$resp = $conecta->query("select idgaleria_imagens, pasta from galeria_imagens");
					// percorre consulta
					while ($campo=$resp->fetch(PDO::FETCH_OBJ)) {
						   // cria item option da select, item de escolha
						   // e define valor de retorno
						   
							echo "<option value ='".$campo-> idgaleria_imagens."'>";
							// mostra informação de escolha
							echo $campo-> pasta;
					}// retorna ao laço para imprimir restante, caso existam
					echo "</select></center>";
				}
				?>
				<br><center><input type=image src="../../../TCC/img/botao_excluir.png" width="70" height="50"></center><br>	
			</form>	
			</div>	
			</div>	
			
		<!-- #########################################     CONSULTAR     ########################################## -->
			<div id="pagina11" class="pagina">
			<div id="box">
			<form method="POST" action="../../TCC/php/galeria_imagem/consultaGaleriaImagem.php">
				<br><h1><center>Consulta Galeria - Imagem</center></h1>
				<table border="0">
					<tr><td align="right">Palavra chave</td><td> <input type="text" name="chave" size="35" value=""></td></tr>
				</table>
				<center><input type=image src="../../../TCC/img/lupa.png" width="70" height="50"></center><br>
			</form>	
			</div>
			</div>

		
		<!-- ###################################################################################################### -->
		<!-- #########################################     PROFESSOR     ########################################## -->
		<!-- ###################################################################################################### -->
		
		<!-- #########################################     CADASTRO     ########################################### -->
		<div id="pagina12" class="pagina">
			<div id="box">
			<form method="POST" action="../../TCC/php/professor/cadProf.php" enctype="multipart/form-data" name="addroom">			
				<br><h3><center>Cadastro de Professores</center></h3>		  
					<table>
						<tr>
							<td height="40" align="right">Nome:</td>
							<td><input type="text" size="80" name="nome"></td>							
						</tr>
						<tr>
							<td height="40" align="right">Formação:</td>
							<td><input type="text" name="formacao" style="width: 85%"></td>						
						</tr>
						<tr>
							<td height="40" align="right">Leciona na ETEC SJC desde:</td>
							<td><input type="text" size="30" name="etec_desde"></td>
						</tr>
						<tr>
							<td height="40" align="right">Habilitações que leciona:</td>
							<td><input type="text" name="habilitacao" style="width: 85%"></td>
						</tr>
						<tr>
							<td height="40" align="right">Disciplinas:</td>
							<td><input type="text" name="disciplina" style="width: 85%"></td>
						</tr>
						<tr>
							<td height="40" align="right">Foto:</td>
							<td><input type="file" size="30" name="imagem"></td>							
						</tr>
						<tr>
							<td height="40" align="right"><font color="blue">Link para o Curriculo lattes:</font></td>
							<td><input type="text" size="80" name="curriculo_online"></td>							
						</tr>
					</table>														
				<center><input type=image src="../../../TCC/img/botao_cadastrar.png"></center><br>
			</form>
			</div>
		</div>

		<!-- #########################################     ATUALIZAR     ########################################## -->			
		<div id="pagina13" class="pagina">		
			<div id="box">
			<form method="POST" action="../../TCC/php/professor/atualizaProf.php" enctype="multipart/form-data" name="addroom">
				<br><h3><center>Atualizar professor</center></h3>
					<table border="0">
					<tr>
						<td align="right" width="45%" height="40">Nome:</td>
						<td> <input type="text" name="nome" size="80" value=""></td>
					</tr>
					<tr><td align="right" height="40">Formação: </td>
						<td><input type="text" name="formacao" style="width: 85%"></td>
					</tr>	
					<tr>
						<td align="right" height="40">Leciona na ETEC SJC desde:</td>
						<td> <input type="text" name="etec_desde" size="30" value=""></td>
					</tr>
					<tr>
						<td align="right" height="40">Habilitações que leciona: </td>
						<td><input type="text" name="habilitacao" style="width: 85%"></td>
					</tr>
					<tr>
						<td align="right" height="40">Disciplinas: </td>
						<td><input type="text" name="disciplina" style="width: 85%"></td>
					</tr>
					<tr>
						<td align="right" height="40">Foto: </td>
						<td><input type="file" name="imagem" size="30" value=""></td>
					</tr>
					<tr>
						<td align="right" height="40">Curriculo lattes: </td>
						<td><input type="text" name="curriculo_online" size="80" value=""></td>
					</tr>
					<tr><td align="right" height="40">Selecione um professor para ser alterado:</td>
					<td>
				
					<?php
					   criaListaprofessor();
					?>   					

					<?php
					function criaListaprofessor(){
						//escreve cabeçalho da lista select e da nome em função do campo de retorno
						echo "<select name='idprofessor' >";
						// conecta com o banco
						$conecta = new PDO("mysql:host=localhost;dbname=etec", "root","etec");
						// executa consulta
						$resp = $conecta->query("select idprofessor, nome from professor");
						// percorre consulta
						while ($campo=$resp->fetch(PDO::FETCH_OBJ)) {
							   // cria item option da select, item de escolha
							   // e define valor de retorno
							   
								echo "<option value ='".$campo-> idprofessor."'>";
								// mostra informação de escolha
								echo $campo-> nome;
						}// retorna ao laço para imprimir restante, caso existam
						echo "</select>";
					}
					?>
					</td></tr>
				</table>
				<center><input type=image src="../../../TCC/img/botao_atualizar.png"></center><br>
			</form>
			</div>
		</div>
	
		<!-- ##########################################     EXCLUIR     ########################################### -->
		<div id="pagina14" class="pagina">	
			<div id="box">
				<br><h1><center>Excluir dados do professor</center></h1>
				<form method="POST" action="../../TCC/php/professor/excluiProf.php">
		
					<?php
					   criaListaIdProfessor();
					?>   				

					<?php
					function criaListaIdProfessor(){
						//escreve cabeçalho da lista select e da nome em função do campo de retorno
						echo "<center><select name='idprofessor'>";
						// conecta com o banco
						$conecta = new PDO("mysql:host=localhost;dbname=etec", "root","etec");
						// executa consulta
						$resp = $conecta->query("select idprofessor, nome from professor");
						// percorre consulta
						while ($campo=$resp->fetch(PDO::FETCH_OBJ)) {
							   // cria item option da select, item de escolha
							   // e define valor de retorno
							   
								echo "<option value ='".$campo-> idprofessor."'>";
								// mostra informação de escolha
								echo $campo-> nome;
						}// retorna ao laço para imprimir restante, caso existam
						echo "</select></center>";
					}
					?>
					<br><center><input type=image src="../../../TCC/img/botao_excluir.png" width="70" height="50"></center><br>
				</form>
			</div>
		</div>

		<!-- #########################################     CONSULTAR     ########################################## -->
		<div id="pagina15" class="pagina">	
			<div id="box">				
			<form name ="formulario" method="POST" action="../../TCC/php/professor/listagemProf.php">
				<br><h1><center>Consulta de professores</center></h1>
				<table border="0">
					<tr><td align="center" colspan="2">Caso deseje consultar todos os professores cadastrados não digite nada, apenas precione a tecla [ENTER]</td></tr>
					<tr><td align="right">Nome do professor:</td>
					<td><input type="text" name="nome"  size="35"></td></tr>
				</table>

					<br><center><input type=image src="../../../TCC/img/lupa.png" width="70" height="50"></center><br>
				</form>
			</div>	
		</div>	
			
		<!-- ###################################################################################################### -->
		<!-- ##########################################      CURSO    ############################################# -->
		<!-- ###################################################################################################### -->
		
		<!-- #########################################     CADASTRO     ########################################### -->
		<div id="pagina16" class="pagina">
			<div id="box">
			<form name ="formulario" method="POST" action="../../TCC/php/curso/cadCurso.php">
				<br><h1><center>Cadastro de Cursos</center></h1>
				<table border="0">
					<tr>
						<td height="40" align="right" width="30%">Nome do curso:</td>
						<td><input type="text" size="80" id="nome" name="nome"></td>
					</tr>
					<tr>
						<td height="40" align="right">Descrição do curso:</td>
						<td><textarea name="descricao" style="width: 80%"></textarea></td>
					</tr>					
					<tr>
						<td height="40" align="right">Tempo de duração do curso:</td>
						<td><input type="text" size="80" id="duracao_mes" name="duracao_mes"></td>
					</tr>
					<tr>
						<td height="40" align="right">Coordenador do curso:</td>
						<td><input type="text" size="80" id="coordenador" name="coordenador"></td>
					</tr>
					<tr>
						<td height="40" align="right">Atuação no mercado de trabalho:</td>
						<td><textarea name="atuacao" style="width: 80%"></textarea></td>
					</tr>
				</table>						
				<center><input type=image src="../../../TCC/img/botao_cadastrar.png"></center><br>
			</form>			
			</div>
		</div>

		<!-- #########################################     ATUALIZAR     ########################################## -->	
		<div id="pagina17" class="pagina">
			<div id="box">
				<form name ="formulario" method="POST" action="../../TCC/php/curso/atualizaCurso.php">
					<br><h1> <center>Atualizar curso</center></h1>
					<table border="0">
						<tr>
							<td height="40" align="right" width="40%">Nome:</td>
							<td><input type="text" name="nome" size="80" value=""></td></tr>
						<tr>
							<td height="40" align="right">Descrição do curso: </td>
							<td><textarea name="descricao" rows="3" value=""></textarea></td></tr>
						<tr>
							<td height="40" align="right">Duracão do curso:</td>
							<td> <input type="text" name="duracao_mes" size="80" value=""></td></tr>
						<tr>
							<td height="40" align="right">Coordenador do curso: </td>
							<td><input type="text" name="coordenador" size="80" value=""></td>
						</tr>
						<tr>
							<td align="right">Atuação no mercado de trabalho:</td>
							<td><textarea name="texto" style="width: 80%"></textarea></td></tr>
						<tr><td height="40" align="right">Selecione um curso:</td>
						<td>
						<?php
						   criaListacurso();
						?>   						

						<?php
						function criaListacurso(){
							//escreve cabeçalho da lista select e da nome em função do campo de retorno
							echo "<select name='idcurso' >";
							// conecta com o banco
							$conecta = new PDO("mysql:host=localhost;dbname=etec", "root","etec");
							// executa consulta
							$resp = $conecta->query("select idcurso, nome from curso");
							// percorre consulta
							while ($campo=$resp->fetch(PDO::FETCH_OBJ)) {
								   // cria item option da select, item de escolha
								   // e define valor de retorno
								   
									echo "<option value ='".$campo-> idcurso."'>";
									// mostra informação de escolha
									echo $campo-> nome;
							}// retorna ao laço para imprimir restante, caso existam
							echo "</select>";
						}
						?>
						</td></tr>
					</table>
				<center><input type=image src="../../../TCC/img/botao_atualizar.png"></center><br>
			</form>
			</div>
		</div>
			
		<!-- ##########################################     EXCLUIR     ########################################### -->
		<div id="pagina18" class="pagina">
			<div id="box">
			<form method="POST" action="../../TCC/php/curso/excluiCurso.php">
				<br><h1><center>Excluir Curso</center></h1>	
				<?php
				   criaListaIdCurso();
				?>   					

				<?php
				function criaListaIdCurso(){
					//escreve cabeçalho da lista select e da nome em função do campo de retorno
					echo "<center><select name='idcurso'>";
					// conecta com o banco
					$conecta = new PDO("mysql:host=localhost;dbname=etec", "root","etec");
					// executa consulta
					$resp = $conecta->query("select idcurso, nome from curso");
					// percorre consulta
					while ($campo=$resp->fetch(PDO::FETCH_OBJ)) {
						   // cria item option da select, item de escolha
						   // e define valor de retorno
						   
							echo "<option value ='".$campo-> idcurso."'>";
							// mostra informação de escolha
							echo $campo-> nome;
					}// retorna ao laço para imprimir restante, caso existam
					echo "</select></center>";
				}
				?>
				<br><center><input type=image src="../../../TCC/img/botao_excluir.png" width="70" height="50"></center><br>	
			</form>
			</div>
		</div>

		<!-- #########################################     CONSULTAR     ########################################## -->
		<div id="pagina19" class="pagina">
			<div id="box">
			<form name ="formulario" method="POST" action="../../TCC/php/curso/listagemCurso.php"><br>
				<br><h1><center>Consulta de Cursos</center></h1>
				<table border="0">
					<tr><td align="center" colspan="2">Caso deseje consultar todos os cursos cadastrados não digite nada, apenas precione a tecla [ENTER]</td></tr>
					<tr><td align="right">Nome do Curso:</td><td> <input type="text" name="nome"  size="35"></td></tr>
				</table>
				<center><input type=image src="../../../TCC/img/lupa.png" width="70" height="50"></center><br>			
			</form>

			</div>
		</div>
			
		<!-- ####################################################################################################### -->
		<!-- ##########################################     MODULO     ############################################# -->
		<!-- ####################################################################################################### -->
		
		<!-- #########################################     CADASTRO     ########################################### -->
		<div id="pagina20" class="pagina">
			<div id="box">
			<form name ="formulario" method="POST" action="../../TCC/php/modulo/cadModulo.php"><br>  
				<br><h3><center>Para cadastrar modulos de cursos "técnicos", basta colocar o numero correspondente ao modulo, se corresponder a um ano do ensino médio, cadastre o numero seguindo de "°ano"!</center></h3>
					<table>
						<tr>
							<td align="right" width="30%">Descrição do modulo:</td>
							<td><input type="text" size="60" id="descricao" name="descricao"></td>
						</tr>
					</table>
					
				<center><input type=image src="../../../TCC/img/botao_cadastrar.png"></center><br>						
			</form>
			</div>
		</div>
			
		<!-- #########################################     ATUALIZAR     ########################################## -->	
		<div id="pagina21" class="pagina">	
			<div id="box">
			<form method="POST" action="../../TCC/php/modulo/atualizaModulo.php">
				<br><h1><center>Atualizar módulo</center></h1>
				<table border="0">
					<tr><td align="right" width="45%">Descrição do modulo:</td><td> <input type="text" name="descricao" size="35" value=""></td></tr>
					<tr><td align="right">Selecione o módulo que deseja alterar:</td>
					<td>					
					<?php
					   criaListamodulo();
					?>   					

					<?php
					function criaListamodulo(){
						//escreve cabeçalho da lista select e da nome em função do campo de retorno
						echo "<select name='idmodulo' >";
						// conecta com o banco
						$conecta = new PDO("mysql:host=localhost;dbname=etec", "root","etec");
						// executa consulta
						$resp = $conecta->query("select idmodulo, descricao from modulo");
						// percorre consulta
						while ($campo=$resp->fetch(PDO::FETCH_OBJ)) {
							   // cria item option da select, item de escolha
							   // e define valor de retorno
							   
								echo "<option value ='".$campo-> idmodulo."'>";
								// mostra informação de escolha
								echo $campo-> descricao;
						}// retorna ao laço para imprimir restante, caso existam
						echo "</select>";
					}
					?>
					</td></tr>
				</table>
				<center><input type=image src="../../../TCC/img/botao_atualizar.png"></center><br>			
			</form>
			</div>
		</div>
			
		<!-- ##########################################     EXCLUIR     ########################################### -->
		<div id="pagina22" class="pagina">	
			<div id="box">
			<form method="POST" action="../../TCC/php/modulo/excluiModulo.php">
				<br><h1><center>Excluir Modulo</center></h1>
				<?php
				   criaListaIdModulo();
				?>   			

				<?php
				function criaListaIdModulo(){
					//escreve cabeçalho da lista select e da nome em função do campo de retorno
					echo "<center><select name='idmodulo'>";
					// conecta com o banco
					$conecta = new PDO("mysql:host=localhost;dbname=etec", "root","etec");
					// executa consulta
					$resp = $conecta->query("select idmodulo, descricao from modulo");
					// percorre consulta
					while ($campo=$resp->fetch(PDO::FETCH_OBJ)) {
						   // cria item option da select, item de escolha
						   // e define valor de retorno
						   
							echo "<option value ='".$campo-> idmodulo."'>";
							// mostra informação de escolha
							echo $campo-> descricao;
					}// retorna ao laço para imprimir restante, caso existam
					echo "</select></center>";
				}
				?>
				<br><center><input type=image src="../../../TCC/img/botao_excluir.png" width="70" height="50"></center>			
			</form>
			</div>
		</div>
			
		<!-- #########################################     CONSULTAR     ########################################## -->
		<div id="pagina23" class="pagina">	
			<div id="box">
			<form name ="formulario" method="POST" action="../../TCC/php/modulo/listagemModulo.php"><br>
				<br><h1><center>Consultar Módulos</center></h1>
				<table border="0">
					<tr><td align="center" colspan="2">Caso deseje consultar todas os modulos cadastradas não digite nada, apenas precione a tecla [ENTER]</td> </tr>
					<tr><td align="right">Módulo:</td><td> <input type="text" name="descricao"  size="35"></td></tr>
				</table>
				<center><input type=image src="../../../TCC/img/lupa.png" width="70" height="50"></center><br>			
			</form>
			</div>
		</div>
			
		<!-- ####################################################################################################### -->
		<!-- #########################################     DISCIPLINA     ########################################## -->
		<!-- ####################################################################################################### -->
		
		<!-- #########################################     CADASTRO     ########################################### -->
		<div id="pagina24" class="pagina">	
			<div id="box">
			<form method="POST" action="../../TCC/php/disciplina/cadDisciplina.php">
				<br><h1><center>Cadastrar disciplina</center></h1>
				<table border="0">
					<tr><td align="right" height="40">Nome:</td><td> <input type="text" name="nome" size="80" value=""></td></tr>
					<tr><td align="right" height="40">Carga horaria: </td><td><input type="text" name="carga_horaria" size="80" value=""></td></tr>	
					<tr><td align="right" height="40">Descricao:</td><td> <input type="text" name="descricao" size="80"value=""></td></tr>
					<tr><td align="right" height="40">Selecione o Curso correspondente a disciplina:</td>
					<td>
					<?php
					   criaListaCurso1();
					?>   					

					<?php
					function criaListaCurso1(){
						//escreve cabeçalho da lista select e da nome em função do campo de retorno
						echo "<select name='idcurso' >";
						// conecta com o banco
						$conecta = new PDO("mysql:host=localhost;dbname=etec", "root","etec");
						// executa consulta
						$resp = $conecta->query("select idcurso, nome from curso");
						// percorre consulta
						while ($campo=$resp->fetch(PDO::FETCH_OBJ)) {
							   // cria item option da select, item de escolha
							   // e define valor de retorno
							   
								echo "<option value ='".$campo-> idcurso."'>";
								// mostra informação de escolha
								echo $campo-> nome;
						}// retorna ao laço para imprimir restante, caso existam
						echo "</select><BR><BR>";
					}

					?>
					</td></tr>
					<tr><td align="right">Selecione o Módulo correspondente a disciplina:</td>
					<td>
						   
					<?php
					   criaListaModulo1();
					?>   					

					<?php
					function criaListaModulo1(){
						//escreve cabeçalho da lista select e da nome em função do campo de retorno
						echo "<select name='idmodulo' >";
						// conecta com o banco
						$conecta = new PDO("mysql:host=localhost;dbname=etec", "root","etec");
						// executa consulta
						$resp = $conecta->query("select idmodulo, descricao from modulo");
						// percorre consulta
						while ($campo=$resp->fetch(PDO::FETCH_OBJ)) {
							   // cria item option da select, item de escolha
							   // e define valor de retorno
							   
								echo "<option value ='".$campo-> idmodulo."'>";
								// mostra informação de escolha
								echo $campo-> descricao;
						}// retorna ao laço para imprimir restante, caso existam
						echo "</select>";
					}
					?>
					</td></tr>
				</table>
				<center><input type=image src="../../../TCC/img/botao_cadastrar.png"></center><br>
			</form>
			</div>
		</div>
			
		<!-- #########################################     ATUALIZAR     ########################################## -->	
		<div id="pagina25" class="pagina">
			<div id="box">
			<form method="POST" action="../../TCC/php/disciplina/atualizaDisciplina.php">
				<br><h1><center>Atualizar disciplina</center></h1>
				<table border="0">
					<tr><td align="right" height="40">Nome da disciplina:</td><td> <input type="text" name="nome" size="80" value=""></td></tr>
					<tr><td align="right" height="40">Carga horaria: </td><td><input type="text" name="carga_horaria" size="80" value=""></td></tr>	
					<tr><td align="right" height="40">Descrição da disciplina:</td><td> <input type="text" name="descricao" size="80" value=""></td></tr>
					<td align="right" height="40">Selecione um Curso correspondente a disciplina:</td>
					<td>
						<?php
						   criaListaCurso2();
						?>   					

						<?php
						function criaListaCurso2(){
							//escreve cabeçalho da lista select e da nome em função do campo de retorno
							echo "<select name='idcurso' >";
							// conecta com o banco
							$conecta = new PDO("mysql:host=localhost;dbname=etec", "root","etec");
							// executa consulta
							$resp = $conecta->query("select idcurso, nome from curso");
							// percorre consulta
							while ($campo=$resp->fetch(PDO::FETCH_OBJ)) {
								   // cria item option da select, item de escolha
								   // e define valor de retorno
								   
									echo "<option value ='".$campo-> idcurso."'>";
									// mostra informação de escolha
									echo $campo-> nome;
							}// retorna ao laço para imprimir restante, caso existam
							echo "</select>";
						}

						?>
					</td></tr>
					<tr><td align="right" height="40">Selecione um Modulo correspondente a disciplina:</td>
					<td>   
						<?php
						   criaListaModulo2();
						?>				

						<?php
						function criaListaModulo2(){
							//escreve cabeçalho da lista select e da nome em função do campo de retorno
							echo "<select name='idmodulo' >";
							// conecta com o banco
							$conecta = new PDO("mysql:host=localhost;dbname=etec", "root","etec");
							// executa consulta
							$resp = $conecta->query("select idmodulo, descricao from modulo");
							// percorre consulta
							while ($campo=$resp->fetch(PDO::FETCH_OBJ)) {
								   // cria item option da select, item de escolha
								   // e define valor de retorno
								   
									echo "<option value ='".$campo-> idmodulo."'>";
									// mostra informação de escolha
									echo $campo-> descricao;
							}// retorna ao laço para imprimir restante, caso existam
							echo "</select>";
						}

						?>
					</td></tr>
					
					<tr><td align="right" height="40">Selecione a disciplina que sera alterada:</td>
					<td>
					
						<?php
						   criaListaDisciplina();
						?>   					

						<?php
						function criaListaDisciplina(){
							//escreve cabeçalho da lista select e da nome em função do campo de retorno
							echo "<select name='iddisciplina' >";
							// conecta com o banco
							$conecta = new PDO("mysql:host=localhost;dbname=etec", "root","etec");
							// executa consulta
							$resp = $conecta->query("select iddisciplina, nome from disciplina");
							// percorre consulta
							while ($campo=$resp->fetch(PDO::FETCH_OBJ)) {
								   // cria item option da select, item de escolha
								   // e define valor de retorno
								   
									echo "<option value ='".$campo-> iddisciplina."'>";
									// mostra informação de escolha
									echo $campo-> nome;
							}// retorna ao laço para imprimir restante, caso existam
							echo "</select>";
						}
						?>
					</td></tr>
				</table>
				<center><input type=image src="../../../TCC/img/botao_atualizar.png"></center><br>				
			</form>
			</div>
		</div>
			
		<!-- ##########################################     EXCLUIR     ########################################### -->
		<div id="pagina26" class="pagina">	
			<div id="box">
			<form method="POST" action="../../TCC/php/disciplina/excluiDisciplina.php">
				<br><h1><center>Excluir Disciplina</center></h1>
				<?php
				   criaListaIdDisciplina();
				?>	

				<?php
				function criaListaIdDisciplina(){
					//escreve cabeçalho da lista select e da nome em função do campo de retorno
					echo "<center><select name='iddisciplina'>";
					// conecta com o banco
					$conecta = new PDO("mysql:host=localhost;dbname=etec", "root","etec");
					// executa consulta
					$resp = $conecta->query("select iddisciplina, nome from disciplina");
					// percorre consulta
					while ($campo=$resp->fetch(PDO::FETCH_OBJ)) {
						   // cria item option da select, item de escolha
						   // e define valor de retorno
						   
							echo "<option value ='".$campo-> iddisciplina."'>";
							// mostra informação de escolha
							echo $campo-> nome;
					}// retorna ao laço para imprimir restante, caso existam
					echo "</select></center>";
				}
				?>
				<br><center><input type=image src="../../../TCC/img/botao_excluir.png" width="70" height="50"></center><br>		
			</form>
			</div>
		</div>
			
		<!-- #########################################     CONSULTAR     ########################################## -->
		<div id="pagina27" class="pagina">	
			<div id="box">
			<form name ="formulario" method="POST" action="../../TCC/php/disciplina/listagemDisciplina.php"><br>
				<br><h1><center>Consulta de Disciplinas</center></h1>
				<table border="0">
					<tr><td align="center" colspan="2" height="40">Caso deseje consultar todas as disciplinas cadastradas não digite nada, apenas precione a tecla [ENTER]</td></tr> 
					<tr><td align="right" height="40">Disciplina:</td><td><input type="text" name="nome"  size="35"></td></tr>
				</table>
				<center><input type=image src="../../../TCC/img/lupa.png" width="70" height="50"></center><br>				
			</form>
		</div>
			
		</div>
		</div>		
		</div>
		</div>
		
		<!-- ENDS MENU -->
		<!-- ###################################################################################################### -->
		

		<!-- ###################################################################################################### -->
		<div class="wrapper col4">
			<div id="footeradm">
				<div class="box1">
					<h2>Login do ADM</h2>
					<form name="dados" method="POST" action="destroisessao.php">						
							<input type="submit" name="" id="" value="sair" onClick=window.location="#" />
					</form>
				</div>
			</div>
		</div>
		<!-- ###################################################################################################### -->
		<!-- ############################################     RODAPÉ     ########################################## -->
		<!-- ###################################################################################################### -->
		<div class="wrapper col5">
			<div id="copyright">
				<p class="fl_right"><center><b>ETEC - São José dos Campos</b></center></p>       
			</div>
		</div>
		<!-- ENDS RODAPÉ -->
	</body>
</html>