<?php		
	include_once("verifica.php");

	// variaveis do formulario
	$titulo = $_POST["titulo"];
	$idnoticia_evento = $_POST["idnoticia_evento"];			
		
	//conexao com o banco de dados
	$con= new PDO("mysql:host=localhost;dbname=etec", "root", "etec");
			
	//inseri dados no banco
	$stmt=$con->prepare("insert into galeria(titulo, idnoticia_evento) values (?, ?)");
		
	$stmt->bindvalue(1,$titulo);	
	$stmt->bindValue(2,$idnoticia_evento);	
	
	if($stmt->execute()) echo"<script> alert('Galeria cadastrado com sucesso!!!');window.location='../../../TCC/login/indexADM.php';</script>";
		else{
			echo"<script> alert('Erro na inserção da Galeria!!!');window.location='../../../TCC/login/indexADM.php';</script>";
		}		
?>