<?php
  session_start();
  if (!isset($_SESSION["login"])) {
 
	echo "<script> alert('Acesso negado. Favor fazer login!!!'); location.href='../../../TCC/index.php'; </script>";
	exit;
}
?>	 
