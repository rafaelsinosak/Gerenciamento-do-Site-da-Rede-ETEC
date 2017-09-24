<?php
	include_once("verifica.php");

	$conecta = mysql_connect("localhost","root","etec");// conecta
	mysql_select_db("etec",$conecta);//seleciona base de dados
  
	if (!isset($_FILES['imagem']['tmp_name'])) {
		echo "<script> alert('Erro na inserção da imagem!!!');window.location='../../../TCC/login/indexADM.php';</script>";
	}
		else{
			$arquivo=$_FILES['imagem']['tmp_name'];
			$imagem= addslashes(file_get_contents($_FILES['imagem']['tmp_name']));
			$imagem_nome= addslashes($_FILES['imagem']['name']);
			
			move_uploaded_file($_FILES["imagem"]["tmp_name"],"galeria/" . $_FILES["imagem"]["name"]);
			
			$pasta="galeria/" . $_FILES["imagem"]["name"];
			$descricao=$_POST['descricao'];
			$idgaleria=$_POST['idgaleria'];
			
			$save=mysql_query("INSERT INTO galeria_imagens (pasta, descricao, idgaleria) VALUES ('$pasta','$descricao','$idgaleria')");
			echo "<script> alert('Imagem inserida com sucesso!!!');window.location='../../../TCC/login/indexADM.php';</script>";
			exit();					
		}
?>
