<?php
include('layouts/header.php');
include('controller/conn.php');
$con = new conn();
$link = $con -> conecta_mysql();
?>

<section>
	<div class="container form-box">
		<div class="row">
			<div class="col-lg-12">
				<h2 class="form-title text-center">Editar Pessoa Jurídica</h2>
			</div>
		</div>
		<div class="row">
			<?php
			$id = $_POST['returnId'];
				$sql = "SELECT * FROM tb_pessoas_juridicas WHERE id = '$id'";
				$resultado = mysqli_query($link, $sql);

				while($pessoas = $resultado -> fetch_array(MYSQLI_ASSOC)){
					$row_pessoa[] = $pessoas;
				}
				foreach ($row_pessoa as $item) {?>
			<div class="col-lg-12">
				<form method="post" action="controller/editar.php">
				  <div class="row">
				    <div class="col">
				      <div class="input-group mb-3">
						  <div class="input-group-prepend">
						    <span class="input-group-text" id="basic-addon1"><i class="fas fa-user"></i></span>
						  </div>
						  <input type="text" class="form-control" placeholder="Nome Fantasia" aria-label="Username" aria-describedby="basic-addon1" name="inputNomeFantasia" value="<?php echo $item['nome_fantasia'];?>">
						  <input type="hidden" name="returnId" value="<?php echo $item['id'];?>">
						  <input type="hidden" name="pessoa_juridica" value="true">
						</div>
				    </div>
				    <div class="col">
				      <div class="input-group mb-3">
						  <div class="input-group-prepend">
						    <span class="input-group-text" id="basic-addon1"><i class="fas fa-user"></i></span>
						  </div>
						  <input type="text" class="form-control" placeholder="Razão Social" aria-label="Username" aria-describedby="basic-addon1" name="inputRazaoSocial" value="<?php echo $item['razao_social'];?>">
						</div>
				    </div>
				  </div>
				  <div class="row">
				    	<div class="col">
				    		<div class="input-group mb-3">
						  	  <div class="input-group-prepend">
						    	<span class="input-group-text" id="basic-addon1"><i class="fas fa-at"></i></span>
						  	  </div>
						  	  <input type="email" class="form-control" placeholder="Email" aria-label="Username" aria-describedby="basic-addon1" name="inputEmail" value="<?php echo $item['email'];?>">
							</div>
				    	</div>
				    	<div class="col">
				    		<div class="input-group mb-3">
						  	  <div class="input-group-prepend">
						    	<span class="input-group-text" id="basic-addon1"><i class="fas fa-user"></i></span>
						  	  </div>
						  	  <input type="text" class="form-control cnpj" placeholder="CNPJ" aria-label="Username" aria-describedby="basic-addon1" name="inputCnpj" value="<?php echo $item['cnpj'];?>">
							</div>
				    	</div>
				  	</div>
				  	<div class="row">
				    	<div class="col">
				    		<div class="input-group mb-3">
						  	  <div class="input-group-prepend">
						    	<span class="input-group-text" id="basic-addon1"><i class="fas fa-phone"></i></span>
						  	  </div>
						  	  <input type="text" class="form-control phone_with_ddd" placeholder="Telefone" aria-label="Username" aria-describedby="basic-addon1" name="inputTelefone" value="<?php echo $item['telefone'];?>">
							</div>
				    	</div>
				    	<div class="col">
				    		<div class="input-group mb-3">
						  	  <div class="input-group-prepend">
						    	<span class="input-group-text" id="basic-addon1"><i class="fas fa-mobile-alt"></i></span>
						  	  </div>
						  	  <input type="text" class="form-control cell_with_ddd" placeholder="Celular" aria-label="Username" aria-describedby="basic-addon1" name="inputCelular" value="<?php echo $item['celular'];?>">
							</div>
				    	</div>
				  	</div>
				  	<div class="row">
				    	<div class="col">
				    		<div class="input-group mb-3">
						  	  <div class="input-group-prepend">
						    	<span class="input-group-text" id="basic-addon1"><i class="fas fa-map-marker-alt"></i></span>
						  	  </div>
						  	  <input type="text" class="form-control cep" placeholder="CEP" aria-label="Username" aria-describedby="basic-addon1" name="inputCep" value="<?php echo $item['cep'];?>">
							</div>
				    	</div>
				    	<div class="col">
					    	<div class="input-group mb-3">
					    	  <div class="input-group-append">
							    <span class="input-group-text" for="inputGroupSelect02" id="basic-addon1"><i class="fas fa-map-marker-alt"></i></span>
							  </div>
							  <select class="custom-select" id="inputGroupSelect02" name="inputEstado">
							    <option selected><?php echo $item['estado']; ?></option>
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
						  	  <input type="text" class="form-control" placeholder="Cidade" aria-label="Username" aria-describedby="basic-addon1" name="inputCidade" value="<?php echo $item['cidade'];?>">
							</div>
				    	</div>
				  	</div>
				  	<div class="row">
				    	<div class="col">
				    		<div class="input-group mb-3">
						  	  <div class="input-group-prepend">
						    	<span class="input-group-text" id="basic-addon1"><i class="fas fa-map-marker-alt"></i></span>
						  	  </div>
						  	  <input type="text" class="form-control" placeholder="Bairro" aria-label="Username" aria-describedby="basic-addon1" name="inputBairro" value="<?php echo $item['bairro'];?>">
							</div>
				    	</div>
				    	<div class="col">	
				    		<div class="input-group mb-3">
						  	  <div class="input-group-prepend">
						    	<span class="input-group-text" id="basic-addon1"><i class="fas fa-street-view"></i></span>
						  	  </div>
						  	  <input type="text" class="form-control" placeholder="Rua" aria-label="Username" aria-describedby="basic-addon1" name="inputRua" value="<?php echo $item['rua'];?>">
							</div>
				    	</div>
				    	<div class="col">	
				    		<div class="input-group mb-3">
						  	  <div class="input-group-prepend">
						    	<span class="input-group-text" id="basic-addon1"><i class="fas fa-sort-numeric-down"></i></span>
						  	  </div>
						  	  <input type="number" class="form-control" placeholder="Numero" aria-label="Username" aria-describedby="basic-addon1" name="inputNumero" value="<?php echo $item['numero'];?>">
							</div>
				    	</div>
				    	<div class="col">	
				    		<div class="input-group mb-3">
						  	  <div class="input-group-prepend">
						    	<span class="input-group-text" id="basic-addon1"><i class="fas fa-street-view"></i></span>
						  	  </div>
						  	  <input type="text" class="form-control" placeholder="Complemento" aria-label="Username" aria-describedby="basic-addon1" name="inputComplemento" value="<?php echo $item['complemento'];?>">
							</div>
				    	</div>
				  	</div>
				  	<div class="row">
				    	<div class="col">
				    		<div class="input-group mb-3">
						  	  <div class="input-group-prepend">
						    	<span class="input-group-text" id="basic-addon1"><i class="fas fa-calendar-alt"></i></span>
						  	  </div>
						  	  <input type="text" class="form-control date" placeholder="Fundação" aria-label="Username" aria-describedby="basic-addon1" name="inputFundacao" value="<?php echo $item['fundacao'];?>">
							</div>
				    	</div>
				    	<div class="col">
				    		<div class="input-group mb-3">
						  	  <div class="input-group-prepend">
						    	<span class="input-group-text" id="basic-addon1"><i class="fas fa-calendar-alt"></i></span>
						  	  </div>
						  	  <input type="text" class="form-control" placeholder="Setor" aria-label="Username" aria-describedby="basic-addon1" name="inputSetor" value="<?php echo $item['setor'];?>">
							</div>
				    	</div>
				  	</div>
				  	<div class="row">
				  		<div class="col">
				  			<div class="input-group mb-3">
				  				<div class="input-group-prepend">
				  					<span class="input-group-text" id="basic-addon1"><i class="fas fa-check"></i></span>
				  				</div>
				  				<button class="btn btn-primary form-control" type="submit">Salvar</button>
				  			</div>
				  		</div>
				  	</div>
				</form>
			</div>
		<?php } ?>
		</div>
	</div>
</section>
<!-- Content -->

<?php
include('layouts/footer.php');
?>