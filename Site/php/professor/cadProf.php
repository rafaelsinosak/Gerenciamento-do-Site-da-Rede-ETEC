<?php
	include_once("verifica.php");

	$conecta = mysql_connect("localhost","root","etec");// conecta
	mysql_select_db("etec",$conecta);//seleciona base de dados
  
	if (!isset($_FILES['imagem']['tmp_name'])) {
		echo "<script> alert('Erro no cadastro do Professor!!!');window.location='../../../TCC/login/indexADM.php';</script>";
	}
	else{
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
			
		$save=mysql_query("INSERT INTO professor(nome, formacao, etec_desde, habilitacao, pasta, disciplina, curriculo_online) VALUES ('$nome','$formacao','$etec_desde','$habilitacao','$pasta','$disciplina','$curriculo_online')");
		echo "<script> alert('Professor cadastrado com sucesso!!!');window.location='../../../TCC/login/indexADM.php';</script>";
		exit();					
	}
?>