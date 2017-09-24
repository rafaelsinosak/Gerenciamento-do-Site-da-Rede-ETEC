<?php
	include_once("verifica.php");
	//recede dados do formulário
	$iddisciplina = $_POST["iddisciplina"];
	$nome = $_POST["nome"];
	$carga_horaria = $_POST["carga_horaria"];
	$descricao = $_POST["descricao"];
	$idcurso = $_POST["idcurso"];
	$idmodulo = $_POST["idmodulo"];			
	//conexao com o banco de dados
	$con= new PDO("mysql:host=localhost;dbname=etec", "root", "etec");
			
	//atualiza dos dados no banco
	$stmt=$con->prepare("UPDATE  disciplina SET nome = ?, carga_horaria = ?, descricao = ?, idcurso = ?, idmodulo = ? WHERE iddisciplina = ?");
		
	$stmt->bindParam(1,$nome);	
	$stmt->bindParam(2,$carga_horaria);	
	$stmt->bindParam(3,$descricao);	
	$stmt->bindParam(4,$idcurso);	
	$stmt->bindParam(5,$idmodulo);			
	$stmt->bindParam(6,$iddisciplina);

	if($stmt->execute()) echo"<script> alert('Dados da disciplina alterados com sucesso!');window.location='../../../TCC/login/indexADM.php';</script>";
		else{
			echo"<script> alert('Erro ao alterar...');window.location='../../../TCC/login/indexADM.php';</script>";
		}		
?>

