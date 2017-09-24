<?php
	include_once("verifica.php");

	$idprofessor = $_POST["idprofessor"];
	
	//conexao com o banco de dados
	$con= new PDO("mysql:host=localhost;dbname=etec", "root", "etec");
			
	//exclui dados no banco
	$stmt=$con->prepare("DELETE FROM professor WHERE idprofessor = ?");
		
	$stmt->bindParam(1,$idprofessor);			
	
	if($stmt->execute()) echo"<script> alert('Professor excluido com sucesso!');window.location='../../../TCC/login/indexADM.php';</script>";
		else{
			echo"<script> alert('Erro ao excluir o professor...');window.location='../../../TCC/login/indexADM.php';</script>";
		}		
?>