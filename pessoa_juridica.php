<!-- Include Header -->
<?php
include('layouts/header.php');
?>

<!-- Content -->
<section>
	<div class="container form-box">
		<div class="row">
			<div class="col-lg-12">
				<h2 class="form-title">Cadastrar Pessoa Jurídica</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<form method="post" action="#">
				  <div class="row">
				    <div class="col">
				      <div class="input-group mb-3">
						  <div class="input-group-prepend">
						    <span class="input-group-text" id="basic-addon1"><i class="fas fa-user"></i></span>
						  </div>
						  <input type="text" class="form-control" placeholder="Nome Fantasia" aria-label="Username" aria-describedby="basic-addon1">
						</div>
				    </div>
				    <div class="col">
				      <div class="input-group mb-3">
						  <div class="input-group-prepend">
						    <span class="input-group-text" id="basic-addon1"><i class="fas fa-user"></i></span>
						  </div>
						  <input type="text" class="form-control" placeholder="Razão Social" aria-label="Username" aria-describedby="basic-addon1">
						</div>
				    </div>
				  </div>
				  <div class="row">
				    	<div class="col">
				    		<div class="input-group mb-3">
						  	  <div class="input-group-prepend">
						    	<span class="input-group-text" id="basic-addon1"><i class="fas fa-at"></i></span>
						  	  </div>
						  	  <input type="email" class="form-control" placeholder="Email" aria-label="Username" aria-describedby="basic-addon1">
							</div>
				    	</div>
				    	<div class="col">
				    		<div class="input-group mb-3">
						  	  <div class="input-group-prepend">
						    	<span class="input-group-text" id="basic-addon1"><i class="fas fa-user"></i></span>
						  	  </div>
						  	  <input type="text" class="form-control" placeholder="CNPJ" aria-label="Username" aria-describedby="basic-addon1">
							</div>
				    	</div>
				  	</div>
				  	<div class="row">
				    	<div class="col">
				    		<div class="input-group mb-3">
						  	  <div class="input-group-prepend">
						    	<span class="input-group-text" id="basic-addon1"><i class="fas fa-phone"></i></span>
						  	  </div>
						  	  <input type="text" class="form-control" placeholder="Telefone" aria-label="Username" aria-describedby="basic-addon1">
							</div>
				    	</div>
				    	<div class="col">
				    		<div class="input-group mb-3">
						  	  <div class="input-group-prepend">
						    	<span class="input-group-text" id="basic-addon1"><i class="fas fa-mobile-alt"></i></span>
						  	  </div>
						  	  <input type="text" class="form-control" placeholder="Celular" aria-label="Username" aria-describedby="basic-addon1">
							</div>
				    	</div>
				  	</div>
				  	<div class="row">
				    	<div class="col">
				    		<div class="input-group mb-3">
						  	  <div class="input-group-prepend">
						    	<span class="input-group-text" id="basic-addon1"><i class="fas fa-map-marker-alt"></i></span>
						  	  </div>
						  	  <input type="text" class="form-control" placeholder="CEP" aria-label="Username" aria-describedby="basic-addon1">
							</div>
				    	</div>
				    	<div class="col">
					    	<div class="input-group mb-3">
					    	  <div class="input-group-append">
							    <span class="input-group-text" for="inputGroupSelect02" id="basic-addon1"><i class="fas fa-map-marker-alt"></i></span>
							  </div>
							  <select class="custom-select" id="inputGroupSelect02">
							    <option selected>Estado</option>
							    <option value="1">AC</option>
							    <option value="2">AL</option>
							    <option value="3">AP</option>
							    <option value="4">AM</option>
							    <option value="5">BA</option>
							    <option value="6">CE</option>
							    <option value="7">DF</option>
							    <option value="8">ES</option>
							    <option value="9">GO</option>
							    <option value="10">MA</option>
							    <option value="11">MT</option>
							    <option value="12">MS</option>
							    <option value="13">MG</option>
							    <option value="14">PA</option>
							    <option value="15">PB</option>
							    <option value="16">PR</option>
							    <option value="17">PE</option>
							    <option value="18">PI</option>
							    <option value="19">RJ</option>
							    <option value="20">RN</option>
							    <option value="21">RS</option>
							    <option value="22">RO</option>
							    <option value="23">RR</option>
							    <option value="24">RC</option>
							    <option value="25">SP</option>
							    <option value="26">SE</option>
							    <option value="27">TO</option>
							  </select>
							</div>
						</div>
						<div class="col">
				    		<div class="input-group mb-3">
						  	  <div class="input-group-prepend">
						    	<span class="input-group-text" id="basic-addon1"><i class="fas fa-map-marker-alt"></i></span>
						  	  </div>
						  	  <input type="text" class="form-control" placeholder="Cidade" aria-label="Username" aria-describedby="basic-addon1">
							</div>
				    	</div>
				  	</div>
				  	<div class="row">
				    	<div class="col">
				    		<div class="input-group mb-3">
						  	  <div class="input-group-prepend">
						    	<span class="input-group-text" id="basic-addon1"><i class="fas fa-map-marker-alt"></i></span>
						  	  </div>
						  	  <input type="text" class="form-control" placeholder="Bairro" aria-label="Username" aria-describedby="basic-addon1">
							</div>
				    	</div>
				    	<div class="col">	
				    		<div class="input-group mb-3">
						  	  <div class="input-group-prepend">
						    	<span class="input-group-text" id="basic-addon1"><i class="fas fa-street-view"></i></span>
						  	  </div>
						  	  <input type="text" class="form-control" placeholder="Rua" aria-label="Username" aria-describedby="basic-addon1">
							</div>
				    	</div>
				    	<div class="col">	
				    		<div class="input-group mb-3">
						  	  <div class="input-group-prepend">
						    	<span class="input-group-text" id="basic-addon1"><i class="fas fa-sort-numeric-down"></i></span>
						  	  </div>
						  	  <input type="number" class="form-control" placeholder="Numero" aria-label="Username" aria-describedby="basic-addon1">
							</div>
				    	</div>
				    	<div class="col">	
				    		<div class="input-group mb-3">
						  	  <div class="input-group-prepend">
						    	<span class="input-group-text" id="basic-addon1"><i class="fas fa-street-view"></i></span>
						  	  </div>
						  	  <input type="text" class="form-control" placeholder="Complemento" aria-label="Username" aria-describedby="basic-addon1">
							</div>
				    	</div>
				  	</div>
				  	<div class="row">
				    	<div class="col">
				    		<div class="input-group mb-3">
						  	  <div class="input-group-prepend">
						    	<span class="input-group-text" id="basic-addon1"><i class="fas fa-calendar-alt"></i></span>
						  	  </div>
						  	  <input type="date" class="form-control" placeholder="Fundação" aria-label="Username" aria-describedby="basic-addon1">
							</div>
				    	</div>
				    	<div class="col">
				    		<div class="input-group mb-3">
						  	  <div class="input-group-prepend">
						    	<span class="input-group-text" id="basic-addon1"><i class="fas fa-calendar-alt"></i></span>
						  	  </div>
						  	  <input type="text" class="form-control" placeholder="Setor" aria-label="Username" aria-describedby="basic-addon1">
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