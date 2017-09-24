<?php
	include_once("verifica.php");

	// conecta com o banco
	$conecta = mysql_connect("localhost","root","etec");// conecta
	mysql_select_db("etec",$conecta);//seleciona base de dados
  
	if (!isset($_FILES['imagem']['tmp_name'])) {
		echo "<script> alert('Erro no cadastro da notícia!!!');window.location='../../../TCC/login/indexADM.php';</script>";
	}
		else{
			$arquivo=$_FILES['imagem']['tmp_name'];
			$imagem= addslashes(file_get_contents($_FILES['imagem']['tmp_name']));
			$imagem_nome= addslashes($_FILES['imagem']['name']);
			
			move_uploaded_file($_FILES["imagem"]["tmp_name"],"noticia/" . $_FILES["imagem"]["name"]);
			
			$pasta="noticia/" . $_FILES["imagem"]["name"];
			$titulo=$_POST['titulo'];
			$texto=$_POST['texto'];
			$resumo=$_POST['resumo'];
			$dia=$_POST['dia'];
			$autor=$_POST['autor'];
			$chave=$_POST['chave'];			
			$idtipo_noticia=$_POST['idtipo_noticia'];
			
			$save=mysql_query("INSERT INTO noticia_evento(titulo, texto, resumo, pasta, dia, autor, palavra_chave, idtipo_noticia) VALUES ('$titulo','$texto','$resumo','$pasta','$dia','$autor','$chave','$idtipo_noticia')");
			echo "<script> alert('Notícia cadastrada com sucesso!!!');window.location='../../../TCC/login/indexADM.php';</script>";
			exit();					
		}
?>
