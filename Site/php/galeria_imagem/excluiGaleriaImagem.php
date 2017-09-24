<?php
	include_once("verifica.php");

	$idgaleria_imagens = $_POST["idgaleria_imagens"];
	
	//conexao com o banco de dados
	$con= new PDO("mysql:host=localhost;dbname=etec", "root", "etec");
			
	//exclui dados no banco
	$stmt=$con->prepare("DELETE FROM galeria_imagens WHERE idgaleria_imagens = ?");
		
	$stmt->bindParam(1,$idgaleria_imagens);			
	
	 if($stmt->execute()) echo"<script> alert('Imagem excluída com sucesso!!!');window.location='../../../TCC/login/indexADM.php';</script>";
		else{
			echo"<script> alert('Erro na exclusão da Imagem!!!');window.location='../../../TCC/login/indexADM.php';</script>";
		}		
?>