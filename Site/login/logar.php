<?php
  session_start(); // cria sessão
  $nome=$_POST["nome"];// recupera dados do formulário
  $senha=$_POST["senha"];
    
  $conecta = mysql_connect("localhost","root","etec");// conecta
  mysql_select_db("etec",$conecta);//seleciona base de dados
  //define sql para verificar autenticação
  $sql ="select * from adm where login='".$nome."' and senha='".$senha."'";
  $registro=mysql_query($sql,$conecta);//executa sql
  $cont=mysql_num_rows($registro);//conta quantos registros foram retornados pela consulta
  if ($cont==0)
	{ 
		echo "<script> alert('Acesso negado');window.location='../../../TCC/index.php';</script>"; 
	}// se 0 então não existe usuario ou senha está incorreta
  else
     {	 // recuperar informações
		 $campo=mysql_fetch_array($registro);
	    // armazena informações na sessão
		 $_SESSION["login"]=$nome;
		 $_SESSION["senha"]=$senha;
		
		 header("location:indexADM.php");		 		
	 }
  mysql_close($conecta);//fecha conexão
?> 