<?php
	include_once("verifica.php");

	$idnoticia_evento = $_POST["idnoticia_evento"];
	$arquivo=$_FILES['imagem']['tmp_name'];
	$imagem= addslashes(file_get_contents($_FILES['imagem']['tmp_name']));
	$imagem_nome= addslashes($_FILES['imagem']['name']);
			
	move_uploaded_file($_FILES["imagem"]["tmp_name"],"noticia/" . $_FILES["imagem"]["name"]);
			
	$pasta="noticia/" . $_FILES["imagem"]["name"];
	$titulo = $_POST["titulo"];
	$texto = $_POST["texto"];
	$resumo = $_POST["resumo"];
	$dia = $_POST["dia"];
	$autor = $_POST["autor"];
	$chave = $_POST["chave"];
	
	//conexao com o banco de dados
	$con= new PDO("mysql:host=localhost;dbname=etec", "root", "etec");
			
	//atualizar dados no banco
	$stmt=$con->prepare("UPDATE  noticia_evento SET pasta = ?,titulo = ?, texto = ?, resumo = ?, dia = ?, autor = ?, palavra_chave = ? WHERE idnoticia_evento = ?");
		
	$stmt->bindParam(1,$pasta);	
	$stmt->bindParam(2,$titulo);	
	$stmt->bindParam(3,$texto);	
	$stmt->bindParam(4,$resumo);	
	$stmt->bindParam(5,$dia);		
	$stmt->bindParam(6,$autor);	
	$stmt->bindParam(7,$chave);	
	$stmt->bindParam(8,$idnoticia_evento);		
	
	if($stmt->execute()) echo"<script> alert('Notícia atualizado com sucesso!!!');window.location='../../../TCC/login/indexADM.php';</script>";
		else{
			echo"<script> alert('Erro na atualização da Notícia!!!');window.location='../../../TCC/login/indexADM.php';</script>";
		}		
?>