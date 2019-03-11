<!-- Include DB -->
<?php
require('conn.php');

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


if ($nome == '') {
	$sql = "INSERT INTO tb_pessoas_juridicas (nome_fantasia, razao_social, email, cnpj, telefone, celular, cep, estado, cidade, bairro, rua, numero, complemento, fundacao, setor) VALUES ('$nome_fantasia', '$razao_social', '$email', '$cnpj', '$telefone', '$celular', '$cep', '$estado', '$cidade', '$bairro', '$rua', '$numero', '$complemento', '$fundacao', '$setor')";
	if (mysqli_query($link, $sql)) {
		header('Location: ../pessoa_juridica.php?success=1');
	} else {
		header('Location: ../pessoa_juridica.php?erro=1');
	}
} else {

	$sql = "INSERT INTO tb_pessoas_fisicas (nome, sobrenome, email, apelido, telefone, celular, cep, estado, cidade, bairro, rua, numero, complemento, nascimento, idade) VALUES ('$nome', '$sobrenome', '$email', '$apelido', '$telefone', '$celular', '$cep', '$estado', '$cidade', '$bairro', '$rua', '$numero', '$complemento', '$nascimento', '$idade')";
	if (mysqli_query($link, $sql)) {
		header('Location: ../pessoa_fisica.php?success=1');
	} else {
		header('Location: ../pessoa_fisica.php?erro=1');
	}
}
?>