<?php
	include_once("verifica.php"); 

    $idcurso=$_POST["idcurso"];
	$nome=$_POST["nome"];
    $descricao=$_POST["descricao"];
	$duracao_mes=$_POST["duracao_mes"];
	$coordenador=$_POST["coordenador"];
	$atuacao=$_POST["atuacao"];
	
	//conexao com o banco de dados
    $con = new PDO ("mysql:host=localhost;dbname=etec", "root" , "etec");

	//inseri dados no banco
	$stmt=$con->prepare ("INSERT INTO curso ( nome , descricao, atuacao, duracao_mes, coordenador, idcurso) VALUES ( ?, ?, ? , ?, ?, ?)");		
	
	$stmt->bindParam(1,$nome);	
	$stmt->bindParam(2,$descricao);	
	$stmt->bindParam(3,$atuacao);	
	$stmt->bindParam(4,$duracao_mes);	
	$stmt->bindParam(5,$coordenador);	
	$stmt->bindParam(6,$idcurso);	
	
	if($stmt->execute()) echo"<script> alert('Curso cadastrado com sucesso!');window.location='../../../TCC/login/indexADM.php';</script>";
		else{
			echo"<script> alert('Erro ao cadastrar...');window.location='../../../TCC/login/indexADM.php';</script>";
		}	
?>