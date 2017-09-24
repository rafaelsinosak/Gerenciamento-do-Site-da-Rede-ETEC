<?php
	include_once("verifica.php");
?>

<html>
	<head>
		<title>Cursos</title>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<link rel="stylesheet" href="../../../TCC/styles/layout.css" type="text/css" />
		<link rel="stylesheet" href="../../../TCC/styles/layout1.css" type="text/css" />
		<link rel="stylesheet" href="../../../TCC/css/styles.css" type="text/css" />
		<script type="text/javascript" src="../../../TCC/scripts/jquery-adm.js" type="text/javascript"></script>
		<script type="text/javascript" src="../../../TCC/scripts/scriptadm.js"></script>
	</head>

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
	
	<div class="wrapper col3">
	<div id="container">	

<?php 
    $nome=$_POST["nome"];

	//conexao com o banco de dados
    $conecta = new PDO ("mysql:host=localhost;dbname=etec", "root" , "etec");	
	 
	//consulta dados no banco
	$registro=$conecta->prepare ("SELECT * from curso where nome like ?");
	$registro->bindValue (1,$nome . "%");
	if ($registro->execute()){
		if ($registro->rowCount() > 0 ){
			echo ' <center><h1>Cursos cadastrados:</h1></center>';
			while ($campo = $registro -> FETCH (PDO::FETCH_OBJ)){	 
			 
				echo "<center><table border='1' width='100%' align='center'><tr><td  bgcolor='gray'><b><font color=#FFF>Nome do curso:</b> " . $campo -> nome . "</font><br></tr></td>";
				echo " <tr><td><b>Descrição do curso:</b> " . $campo -> descricao . "<br>";	  
				echo " <b>Duração do curso:</b> " . $campo -> duracao_mes . "<br>";
				echo " <b>Coordenador do curso:</b> " . $campo -> coordenador . "<br>";
				echo " <b>Atuação no mercado de trabalho:</b> " . $campo -> atuacao . "<br>";
				echo'</tr></td></table>';
			}
		}
		else echo "<script> alert('Curso não encontrado!!!');window.location='../../../TCC/login/indexADM.php';</script>";		  
	}
?>

	</div>
	</div>
		<div class="wrapper col4">
			<div id="footeradm">
				<div class="box1">
					<h2>Voltar ao gerenciamento</h2>
					<a href="../../../TCC/login/indexADM.php"><img src="../../../../TCC/img/voltar.png"></a>
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

  