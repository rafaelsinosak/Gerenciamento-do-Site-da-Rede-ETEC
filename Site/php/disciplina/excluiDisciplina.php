<?php
	include_once("verifica.php");
	//recebe dados do formulário
	$iddisciplina = $_POST["iddisciplina"];
	
	//conexao com o banco de dados
	$con= new PDO("mysql:host=localhost;dbname=etec", "root", "etec");
			
	//exclui dados no banco
	$stmt=$con->prepare("DELETE FROM disciplina WHERE iddisciplina= ?");
		
	$stmt->bindParam(1,$iddisciplina);			
	
	if($stmt->execute()) echo"<script> alert('Dados da disciplina excluidos com sucesso!');window.location='../../../TCC/login/indexADM.php';</script>";
		else{
			echo"<script> alert('Erro ao excluir...');window.location='../../../TCC/login/indexADM.php';</script>";
		}	
?>