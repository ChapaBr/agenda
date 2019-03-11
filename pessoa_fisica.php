<!-- Include Header -->
<?php
$success = isset($_GET['success']) ? $_GET['success'] : 0;
$erro = isset($_GET['erro']) ? $_GET['erro'] : 0;
include('layouts/header.php');
?>

<!-- Content -->
<section>
	<div class="container form-box">
		<div class="row">
			<div class="col-lg-12">
				<h2 class="form-title">Cadastrar Pessoa Física</h2>
				<?php
					if ($success == 1) {
						echo '<div class="alert alert-success text-center" role="alert"> 
								<strong>CADASTRADO COM SUCESSO!</strong>
								<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    								<span aria-hidden="true">&times;</span>
  							  	</button>
							  </div>';
					} 
					if ($erro == 1) {
					 	echo '<div class="alert alert-danger text-center" role="alert"> 
								<strong>ERRO AO CADASTRAS PESSOA</strong>
								<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    								<span aria-hidden="true">&times;</span>
  							  	</button>
							  </div>';
					 } 
				?>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<form method="post" action="controller/cadastrar_pessoa_fisica.php">
				  <div class="row">
				    <div class="col">
				      <div class="input-group mb-3">
						  <div class="input-group-prepend">
						    <span class="input-group-text" id="basic-addon1"><i class="fas fa-user"></i></span>
						  </div>
						  <input type="text" class="form-control" placeholder="Nome" aria-label="Username" aria-describedby="basic-addon1" name="inputNome">
						</div>
				    </div>
				    <div class="col">
				      <div class="input-group mb-3">
						  <div class="input-group-prepend">
						    <span class="input-group-text" id="basic-addon1"><i class="fas fa-user"></i></span>
						  </div>
						  <input type="text" class="form-control" placeholder="Sobrenome" aria-label="Username" aria-describedby="basic-addon1" name="inputSobrenome">
						</div>
				    </div>
				  </div>
				  <div class="row">
				    	<div class="col">
				    		<div class="input-group mb-3">
						  	  <div class="input-group-prepend">
						    	<span class="input-group-text" id="basic-addon1"><i class="fas fa-at"></i></span>
						  	  </div>
						  	  <input type="email" class="form-control" placeholder="Email" aria-label="Username" aria-describedby="basic-addon1" name="inputEmail">
							</div>
				    	</div>
				    	<div class="col">
				    		<div class="input-group mb-3">
						  	  <div class="input-group-prepend">
						    	<span class="input-group-text" id="basic-addon1"><i class="fas fa-user"></i></span>
						  	  </div>
						  	  <input type="text" class="form-control" placeholder="Apelido" aria-label="Username" aria-describedby="basic-addon1" name="inputApelido">
							</div>
				    	</div>
				  	</div>
				  	<div class="row">
				    	<div class="col">
				    		<div class="input-group mb-3">
						  	  <div class="input-group-prepend">
						    	<span class="input-group-text" id="basic-addon1"><i class="fas fa-phone"></i></span>
						  	  </div>
						  	  <input type="text" class="form-control" placeholder="Telefone" aria-label="Username" aria-describedby="basic-addon1" name="inputTelefone">
							</div>
				    	</div>
				    	<div class="col">
				    		<div class="input-group mb-3">
						  	  <div class="input-group-prepend">
						    	<span class="input-group-text" id="basic-addon1"><i class="fas fa-mobile-alt"></i></span>
						  	  </div>
						  	  <input type="text" class="form-control" placeholder="Celular" aria-label="Username" aria-describedby="basic-addon1" name="inputCelular">
							</div>
				    	</div>
				  	</div>
				  	<div class="row">
				    	<div class="col">
				    		<div class="input-group mb-3">
						  	  <div class="input-group-prepend">
						    	<span class="input-group-text" id="basic-addon1"><i class="fas fa-map-marker-alt"></i></span>
						  	  </div>
						  	  <input type="text" class="form-control" placeholder="CEP" aria-label="Username" aria-describedby="basic-addon1" name="inputCep">
							</div>
				    	</div>
				    	<div class="col">
					    	<div class="input-group mb-3">
					    	  <div class="input-group-append">
							    <span class="input-group-text" for="inputGroupSelect02" id="basic-addon1"><i class="fas fa-map-marker-alt"></i></span>
							  </div>
							  <select class="custom-select" id="inputGroupSelect02" name="inputEstado">
							    <option selected>Estado</option>
							    <option value="AC">AC</option>
							    <option value="AL">AL</option>
							    <option value="AP">AP</option>
							    <option value="AM">AM</option>
							    <option value="BA">BA</option>
							    <option value="CE">CE</option>
							    <option value="DF">DF</option>
							    <option value="ES">ES</option>
							    <option value="GO">GO</option>
							    <option value="MA">MA</option>
							    <option value="MT">MT</option>
							    <option value="MS">MS</option>
							    <option value="MG">MG</option>
							    <option value="PA">PA</option>
							    <option value="PB">PB</option>
							    <option value="PR">PR</option>
							    <option value="PE">PE</option>
							    <option value="PI">PI</option>
							    <option value="RJ">RJ</option>
							    <option value="RN">RN</option>
							    <option value="RS">RS</option>
							    <option value="RO">RO</option>
							    <option value="RR">RR</option>
							    <option value="RC">RC</option>
							    <option value="SP">SP</option>
							    <option value="SE">SE</option>
							    <option value="TO">TO</option>
							  </select>
							</div>
						</div>
						<div class="col">
				    		<div class="input-group mb-3">
						  	  <div class="input-group-prepend">
						    	<span class="input-group-text" id="basic-addon1"><i class="fas fa-map-marker-alt"></i></span>
						  	  </div>
						  	  <input type="text" class="form-control" placeholder="Cidade" aria-label="Username" aria-describedby="basic-addon1" name="inputCidade">
							</div>
				    	</div>
				  	</div>
				  	<div class="row">
				    	<div class="col">
				    		<div class="input-group mb-3">
						  	  <div class="input-group-prepend">
						    	<span class="input-group-text" id="basic-addon1"><i class="fas fa-map-marker-alt"></i></span>
						  	  </div>
						  	  <input type="text" class="form-control" placeholder="Bairro" aria-label="Username" aria-describedby="basic-addon1" name="inputBairro">
							</div>
				    	</div>
				    	<div class="col">	
				    		<div class="input-group mb-3">
						  	  <div class="input-group-prepend">
						    	<span class="input-group-text" id="basic-addon1"><i class="fas fa-street-view"></i></span>
						  	  </div>
						  	  <input type="text" class="form-control" placeholder="Rua" aria-label="Username" aria-describedby="basic-addon1" name="inputRua">
							</div>
				    	</div>
				    	<div class="col">	
				    		<div class="input-group mb-3">
						  	  <div class="input-group-prepend">
						    	<span class="input-group-text" id="basic-addon1"><i class="fas fa-sort-numeric-down"></i></span>
						  	  </div>
						  	  <input type="number" class="form-control" placeholder="Numero" aria-label="Username" aria-describedby="basic-addon1" name="inputNumero">
							</div>
				    	</div>
				    	<div class="col">	
				    		<div class="input-group mb-3">
						  	  <div class="input-group-prepend">
						    	<span class="input-group-text" id="basic-addon1"><i class="fas fa-street-view"></i></span>
						  	  </div>
						  	  <input type="text" class="form-control" placeholder="Complemento" aria-label="Username" aria-describedby="basic-addon1" name="inputComplemento">
							</div>
				    	</div>
				  	</div>
				  	<div class="row">
				    	<div class="col">
				    		<div class="input-group mb-3">
						  	  <div class="input-group-prepend">
						    	<span class="input-group-text" id="basic-addon1"><i class="fas fa-calendar-alt"></i></span>
						  	  </div>
						  	  <input type="date" class="form-control" placeholder="Data de Nascimento" aria-label="Username" aria-describedby="basic-addon1" name="inputNascimento">
							</div>
				    	</div>
				    	<div class="col">
				    		<div class="input-group mb-3">
						  	  <div class="input-group-prepend">
						    	<span class="input-group-text" id="basic-addon1"><i class="fas fa-calendar-alt"></i></span>
						  	  </div>
						  	  <input type="number" class="form-control" placeholder="Idade" aria-label="Username" aria-describedby="basic-addon1" name="inputIdade">
							</div>
				    	</div>
				  	</div>
				  	<div class="row">
				  		<div class="col">
				  			<div class="input-group mb-3">
				  				<div class="input-group-prepend">
				  					<span class="input-group-text" id="basic-addon1"><i class="fas fa-check"></i></span>
				  				</div>
				  				<button class="btn btn-primary form-control" type="submit">Cadastrar</button>
				  			</div>
				  		</div>
				  	</div>
				</form>
			</div>
		</div>
	</div>
</section>
<!-- Content -->

<!-- Include Footer -->
<?php
include('layouts/footer.php');
?>