<?php
	include_once("verifica.php");

	$idprofessor = $_POST["idprofessor"];
	$arquivo=$_FILES['imagem']['tmp_name'];
	$imagem= addslashes(file_get_contents($_FILES['imagem']['tmp_name']));
	$imagem_nome= addslashes($_FILES['imagem']['name']);
			
	move_uploaded_file($_FILES["imagem"]["tmp_name"],"professor/" . $_FILES["imagem"]["name"]);
			
	$pasta="professor/" . $_FILES["imagem"]["name"];
	$nome=$_POST['nome'];
	$formacao=$_POST['formacao'];
	$etec_desde=$_POST['etec_desde'];
	$habilitacao=$_POST['habilitacao'];
	$disciplina=$_POST['disciplina'];
	$curriculo_online=$_POST['curriculo_online'];
	
	//conexao com o banco de dados
	$con= new PDO("mysql:host=localhost;dbname=etec", "root", "etec");
			
	//atualizar dados no banco
	$stmt=$con->prepare("UPDATE  professor SET pasta = ?, nome = ?, formacao = ?, etec_desde = ?, habilitacao = ?, disciplina = ?, curriculo_online = ? WHERE idprofessor = ?");
		
	$stmt->bindParam(1,$pasta);	
	$stmt->bindParam(2,$nome);	
	$stmt->bindParam(3,$formacao);	
	$stmt->bindParam(4,$etec_desde);		
	$stmt->bindParam(5,$habilitacao);	
	$stmt->bindParam(6,$disciplina);	
	$stmt->bindParam(7,$curriculo_online);
	$stmt->bindParam(8,$idprofessor);		
	
	if($stmt->execute()) echo"<script> alert('Professor atualizado com sucesso!!!');window.location='../../../TCC/login/indexADM.php';</script>";
		else{
			echo"<script> alert('Erro na atualização da Notícia!!!');window.location='../../../TCC/login/indexADM.php';</script>";
		}		
?>