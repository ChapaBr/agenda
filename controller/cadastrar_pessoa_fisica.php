<!-- Include DB -->
<?php
require('conn.php');

## Recuperando Informações
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

$con = new conn();
$link = $con -> conecta_mysql();

$sql = "INSERT INTO tb_pessoas_fisicas (nome, sobrenome, email, apelido, telefone, celular, cep, estado, cidade, bairro, rua, numero, complemento, nascimento, idade) VALUES ('$nome', '$sobrenome', '$email', '$apelido', '$telefone', '$celular', '$cep', '$estado', '$cidade', '$bairro', '$rua', '$numero', '$complemento', '$nascimento', '$idade')";
if (mysqli_query($link, $sql)) {
	header('Location: ../pessoa_fisica.php?success=1');
} else {
	header('Location: ../pessoa_fisica.php?erro=1');
}
?>