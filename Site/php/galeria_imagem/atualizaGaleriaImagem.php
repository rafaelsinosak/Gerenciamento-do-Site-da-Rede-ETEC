<?php
	include_once("verifica.php");

	$idgaleria = $_POST["idgaleria"];
	$arquivo = $_POST["arquivo"];
		
	//conexao com o banco de dados
	$con = new PDO("mysql:host=localhost;dbname=etec", "root", "etec");
				
	//atualiza dados no banco
	$stmt=$con->prepare("UPDATE  galeria_imagens SET titulo = ?  WHERE arquivo = ?");
			
	$stmt->bindParam(1,$arquivo);	
	$stmt->bindParam(2,$idgaleria);				
		
	if($stmt->execute()) echo"<script> alert('Imagem atualizada com sucesso!!!');window.location='../../../TCC/login/indexADM.php';</script>";
		else{
			echo"<script> alert('Erro na atualização da Imagem!!!');window.location='../../../TCC/login/indexADM.php';</script>";
		}		
?>