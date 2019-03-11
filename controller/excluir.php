<?php
require('conn.php');

$id = $_POST['returnId'];
$pessoa_fisica = $_POST['pessoa_fisica'];
$pessoa_juridica = $_POST['pessoa_juridica'];

$con = new conn();
$link = $con -> conecta_mysql();

if ($pessoa_fisica) {
	$sql = "DELETE FROM tb_pessoas_fisicas WHERE id = '$id'";
	if (mysqli_query($link, $sql)) {
		header('Location: ../index.php?success-delete=1');
	} else {
		header('Location: ../index.php?erro-delete=1');
	}
}
if ($pessoa_juridica) {
	$sql = "DELETE FROM tb_pessoas_juridicas WHERE id = '$id'";
	if (mysqli_query($link, $sql)) {
		header('Location: ../index.php?success-delete=2');
	} else {
		header('Location: ../index.php?erro-delete=2');
	}
}



?>