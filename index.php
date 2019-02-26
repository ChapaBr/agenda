<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Agenda</title>

	<!-- JQuery -->
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="crossorigin="anonymous"></script>

	<!-- Bootstrap - CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<!-- Main CSS -->
	<link rel="stylesheet" type="text/css" href="assets/css/main.css">
</head>
<body>

	<!-- Start Nav -->
<header>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Agendinha</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Novo Contato <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contatos</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Opções
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Editar</a>
          <a class="dropdown-item" href="#">Excluir</a>
        </div>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Pesquisar Contato" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>
    </form>
  </div>
</nav>
</header>
	<!--Starting the Creating New Contact -->
	<section id="new-contact">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<h2 class="titulo_funcoes">Criando um novo contato</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<form>
						<div class="form-group">
							<input type="text" class="form-control" id="input_nickname" aria-describedby="Entre com o Apelido da pessoa" placeholder="Apelido">
						</div>
						<div class="form-group">
							<input type="text" class="form-control" id="input_company" aria-describedy="Entre com a Empresa" placeholder="Empresa">
						</div>
						<div class="form-group">
							<input type="text" class="form-control" id="input_office"aria-describedy="Entre com o Cargo" placeholder="Cargo">
						</div>
						<div class="form-group row">
							<div class="dropdown">
								<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdown_cell">Celular</button>
							</div>
							<div class="dropdown-menu">
								<a class="dropdown-item enabled">Celular</a>
								<a class="dropdown-item disabled">Comercial</a>
								<a class="dropdown-item disabled">Residencial</a>
								<a class="dropdown-item disabled">Principal</a>
							</div>
							<input type="text" class="form-control" id="input_tell" aria-describedby="Aria do Telefone" placeholder="Telefone">
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
	<!-- Ending the Creating New Contact -->

	<!-- Bootstrap - JS -->
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>