<?php
	include_once("verifica.php");

	$idgaleria = $_POST["idgaleria"];
	
	//conexao com o banco de dados
	$con= new PDO("mysql:host=localhost;dbname=etec", "root", "etec");
			
	//exclui dados no banco
	$stmt=$con->prepare("DELETE FROM galeria WHERE idgaleria = ?");
		
	$stmt->bindParam(1,$idgaleria);			
	
	if($stmt->execute()) echo"<script> alert('Galeria excluído com sucesso!!!');window.location='../../../TCC/login/indexADM.php';</script>";
		else{
			echo"<script> alert('Erro na exclusão da Galeria!!!');window.location='../../../TCC/login/indexADM.php';</script>";
		}		
?>