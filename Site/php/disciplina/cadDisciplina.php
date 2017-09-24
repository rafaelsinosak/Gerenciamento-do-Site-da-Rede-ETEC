<?php  
	include_once("verifica.php");
	//recebe dados do formulário
	$nome=$_POST["nome"];
	$carga_horaria=$_POST["carga_horaria"];
	$descricao=$_POST["descricao"];
	$idmodulo=$_POST["idmodulo"];
	$idcurso=$_POST["idcurso"];

	//conexao com o banco de dados
    $con = new PDO ("mysql:host=localhost;dbname=etec", "root" , "etec");
  
	//insere dados no banco
    $stmt=$con->prepare ("insert into disciplina ( nome , carga_horaria, descricao, idmodulo, idcurso) values ( ?, ?, ? , ?, ?)");
		
	$stmt->bindParam(1,$nome);	
	$stmt->bindParam(2,$carga_horaria);	
	$stmt->bindParam(3,$descricao);	
	$stmt->bindParam(4,$idmodulo);	
	$stmt->bindParam(5,$idcurso);	
	
	if($stmt->execute()) echo"<script> alert('Disciplina cadastrada com sucesso!');window.location='../../../TCC/login/indexADM.php';</script>";
		else{
			echo"<script> alert('Erro ao cadastrar');window.location='../../../TCC/login/indexADM.php';</script>";
		}
  ?>
  
  