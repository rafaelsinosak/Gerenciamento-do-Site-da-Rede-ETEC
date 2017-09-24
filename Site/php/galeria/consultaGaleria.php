<?php
	include_once("verifica.php");
?>

<html>
	<head>
		<title>Galerias</title>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<link rel="stylesheet" href="../../../TCC/styles/layout.css" type="text/css" />
		<link rel="stylesheet" href="../../../TCC/styles/layout1.css" type="text/css" />
		<link rel="stylesheet" href="../../../TCC/css/styles.css" type="text/css" />
		<script type="text/javascript" src="../../../TCC/scripts/jquery-adm.js" type="text/javascript"></script>
		<script type="text/javascript" src="../../../TCC/scripts/scriptadm.js"></script>
	</head>
	</body>
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
	$chave = $_POST["chave"];
		
	//conexao com o banco de dados
	$conecta = new PDO("mysql:host=localhost;dbname=etec", "root", "etec");
	
	//consulta dados no banco
	$registro = $conecta->prepare("SELECT * from galeria WHERE titulo like ?");
		
	$registro -> bindValue (1, "%" .$chave. "%");
		if ($registro -> execute()){
			if ($registro -> rowCount() > 0){

				//Buscar por palavra-chave
				echo '<center><b>----------------------------------------------- Busca por "'.$chave.'"</b>
				-----------------------------------------------<br></center>';

				while ($campo = $registro -> fetch (PDO::FETCH_OBJ)){

					echo '<b>Galeria:</b> '. $campo -> titulo . '<br>
					<hr>';
				}
			}
		else echo "<script> alert('Galeria não encontrada!!!');window.location='../../../TCC/login/indexADM.php';</script>";
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