<?php
	session_start();
	include('../assets/conexao.php');

	setlocale( LC_ALL , 'pt_BR' );
	date_default_timezone_set('America/Bahia');

	$sql_inserir = ('update date_login set ultimo_login = "'.date("Y-m-d H:i:s", time()).'" where id_usu = '.$_SESSION['id_user'].';');
	$sql_query = mysqli_query($conexao, $sql_inserir);

	session_destroy();
    header('location:../index.php');
?>