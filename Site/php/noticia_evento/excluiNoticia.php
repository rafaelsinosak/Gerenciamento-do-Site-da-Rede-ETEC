<?php
	include_once("verifica.php");

	$idnoticia_evento = $_POST["idnoticia_evento"];
	
	//conexao com o banco de dados
	$con = new PDO("mysql:host=localhost;dbname=etec", "root", "etec");
			
	//exclui dados no banco
	$stmt = $con -> prepare("DELETE FROM noticia_evento WHERE idnoticia_evento = ?");
		
	$stmt -> bindParam(1,$idnoticia_evento);			
	
	if($stmt -> execute()) echo"<script> alert('Notícia excluída com sucesso!!!');window.location='../../../TCC/login/indexADM.php';</script>";
		else{
			echo"<script> alert('Erro na exclusão da Notícia!!!');window.location='../../../TCC/login/indexADM.php';</script>";
		}	
?>