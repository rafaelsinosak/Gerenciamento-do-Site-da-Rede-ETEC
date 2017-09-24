<?php
	include_once("verifica.php");

	$descricao = $_POST["descricao"];	

	//conexao com o banco de dados
    $con = new PDO ("mysql:host=localhost;dbname=etec", "root" , "etec");
  
	//inseri dados no banco
    $stmt = $con -> prepare ("INSERT INTO modulo ( descricao) VALUES (?)");		
			
	$stmt -> bindParam(1,$descricao);			 
	 
	if($stmt -> execute()) echo"<script> alert('Modulo cadastrado com sucesso!');window.location='../../../TCC/login/indexADM.php';</script>";
		else{
			echo"<script> alert('Erro ao cadastrar...');window.location='../../../TCC/login/indexADM.php';</script>";
		}	
?>