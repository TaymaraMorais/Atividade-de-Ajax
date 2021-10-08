<?php
	include "conexao.php";
	$id = $_POST['id'];
	$sql = "DELETE FROM USUARIOS WHERE id_usuario = '$id';";
	mysqli_query($connect, $sql) or die(error());
	$response = array("success" => true);
	echo json_encode($response);
?>