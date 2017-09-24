<?php
	include_once("verifica.php");

	$idgaleria = $_POST["idgaleria"];
	$titulo = $_POST["titulo"];
		
	//conexao com o banco de dados
	$con= new PDO("mysql:host=localhost;dbname=etec", "root", "etec");
				
	//atualiza dados no banco
	$stmt=$con->prepare("UPDATE  galeria SET titulo = ?  WHERE idgaleria = ?");
			
	$stmt->bindParam(1,$titulo);	
	$stmt->bindParam(2,$idgaleria);				
		
	if($stmt->execute()) echo"<script> alert('Galeria atualizado com sucesso!!!');window.location='../../../TCC/login/indexADM.php';</script>";
		else{
			echo"<script> alert('Erro na atualização da Galeria!!!');window.location='../../../TCC/login/indexADM.php';</script>";
		}		
?>