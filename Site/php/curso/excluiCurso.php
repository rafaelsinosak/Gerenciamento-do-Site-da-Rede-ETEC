<?php
	include_once("verifica.php"); 

	$idcurso = $_POST["idcurso"];
	
	//conexao com o banco de dados
	$con= new PDO("mysql:host=localhost;dbname=etec", "root", "etec");
			
	//exclui dados no banco
	$stmt=$con->prepare("DELETE FROM curso WHERE idcurso = ?");
		
	$stmt->bindParam(1,$idcurso);			
	
	if($stmt->execute()) echo"<script> alert('Dados do curso excluidos com sucesso');window.location='../../../TCC/login/indexADM.php';</script>";
		else{
			echo"<script> alert('Erro ao excluir...');window.location='../../../TCC/login/indexADM.php';</script>";
		}			
?>