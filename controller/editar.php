<?php
require('conn.php');
$id = $_POST['returnId'];
$pessoa_fisica = $_POST['pessoa_fisica'];
$pessoa_juridica = $_POST['pessoa_juridica'];
## Recuperando Informações de Pessoas Físicas
$nome = $_POST['inputNome'];
$sobrenome = $_POST['inputSobrenome'];
$email = $_POST['inputEmail'];
$apelido = $_POST['inputApelido'];
$telefone = $_POST['inputTelefone'];
$celular = $_POST['inputCelular'];
$cep = $_POST['inputCep'];
$estado = $_POST['inputEstado'];
$cidade = $_POST['inputCidade'];
$bairro = $_POST['inputBairro'];
$rua = $_POST['inputRua'];
$numero = $_POST['inputNumero'];
$complemento = $_POST['inputComplemento'];
$nascimento = $_POST['inputNascimento'];
$idade = $_POST['inputIdade'];

## Recuperando Informações de Pessoa Jurídicas
$nome_fantasia = $_POST['inputNomeFantasia'];
$razao_social = $_POST['inputRazaoSocial'];
$email = $_POST['inputEamil'];
$cnpj = $_POST['inputCnpj'];
$telefone = $_POST['inputTelefone'];
$celular = $_POST['inputCelular'];
$cep = $_POST['inputCep'];
$estado = $_POST['inputEstado'];
$cidade = $_POST['inputCidade'];
$bairro = $_POST['inputBairro'];
$rua = $_POST['inputRua'];
$numero = $_POST['inputNumero'];
$complemento = $_POST['inputComplemento'];
$fundacao = $_POST['inputFundacao'];
$setor = $_POST['inputSetor'];

$con = new conn();
$link = $con -> conecta_mysql();

if ($pessoa_fisica) {
	$sql = "UPDATE tb_pessoas_fisicas SET nome = '$nome', sobrenome = '$sobrenome', email = '$email', apelido = '$apelido', telefone = '$telefone', celular = '$celular', cep = '$cep', estado = '$estado', cidade = '$cidade', bairro = '$bairro', rua = '$rua', numero = '$numero', complemento = '$complemento', nascimento = '$nascimento', idade = '$idade' WHERE id = '$id'";
	if (mysqli_query($link, $sql)) {
		header('Location: ../index.php?success-edit=1');
	} else {
		header('Location: ../index.php?erro-edit=1');
	}
} 
if ($pessoa_juridica) {
 	$sql = "UPDATE tb_pessoas_juridicas SET nome_fantasia = '$nome_fantasia', razao_social = '$razao_social', email = '$email', cnpj = '$cnpj', telefone = '$telefone', celular = '$celular', cep = '$cep', estado = '$estado', cidade = '$cidade', bairro = '$bairro', rua = '$rua', numero = '$numero', complemento = '$complemento', fundacao = '$fundacao', setor = '$setor' WHERE id = '$id'";
	if (mysqli_query($link, $sql)) {
		header('Location: ../index.php?success-edit=2');
	} else {
		header('Location: ../index.php?erro-edit=2');
	}
 }

?>
