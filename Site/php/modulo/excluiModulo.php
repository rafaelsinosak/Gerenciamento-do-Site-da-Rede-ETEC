<?php
	include_once("verifica.php");

	$idmodulo = $_POST["idmodulo"];
	
	//conexao com o banco de dados
	$con = new PDO("mysql:host=localhost;dbname=etec", "root", "etec");
			
	//exclui dados no banco
	$stmt = $con -> prepare("DELETE FROM modulo WHERE idmodulo= ?");
		
	$stmt -> bindParam(1,$idmodulo);		
	
	if($stmt -> execute()) echo"<script> alert('Dados do modulo excluidos com sucesso!');window.location='../../../TCC/login/indexADM.php';</script>";
		else{
			echo"<script> alert('Erro ao excluir os dados');window.location='../../../TCC/login/indexADM.php';</script>";
		}			
?>