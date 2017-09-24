<?php
	include_once("verifica.php");

	$idmodulo = $_POST["idmodulo"];
	$descricao = $_POST["descricao"];		
	
	//conexao com o banco de dados
	$con= new PDO("mysql:host=localhost;dbname=etec", "root", "etec");
			
	//atualiza dados no banco
	$stmt = $con -> prepare("UPDATE  modulo SET descricao = ? WHERE idmodulo = ?");
		
	$stmt->bindParam(1,$descricao);	
	$stmt->bindParam(2,$idmodulo);
	
	if($stmt -> execute()) echo"<script> alert('Dados do modulo alterados com sucesso!');window.location='../../../TCC/login/indexADM.php';</script>";
		else{
			echo"<script> alert('Erro ao alterar os dados');window.location='../../../TCC/login/indexADM.php';</script>";
		}			
?>