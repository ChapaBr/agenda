<div class="row">
	<?php
		$sql = "SELECT * FROM tb_pessoas_fisicas";
		$resultado = mysqli_query($link, $sql);

		while($pessoas = $resultado -> fetch_array(MYSQLI_ASSOC)){
			$row_pessoas[] = $pessoas;
		}
		foreach ($row_pessoas as $item) {?>
		<div class="accordion" id="accordionExample">
		  <div class="card">
		    <div class="card-header" id="headingOne">
		      <h2 class="mb-0">
		        <button class="btn btn-link" data-toggle="collapse" data-target="#fisica-<?php echo $item['id'];?>" aria-expanded="false">
          			<h3><?php echo $item['apelido'];?></h3>
		        </button>
		      </h2>
		    </div>

		    <div id="fisica-<?php echo $item['id'];?>" class="collapse">
		      <div class="card-body">
		        <table class="table">
				  <thead class="thead-dark">
				    <tr class="text-center">
				      <th></th>
				      <th>Informações</th>
				      <th></th>
				    </tr>
				  </thead>
				  <tbody>
				    <tr>
				      <th>Nome</th>
				      <td></td>
				      <td><?php echo $item['nome'];?></td>
				    </tr>
				    <tr>
				      <th>Sobrenome</th>
				      <td></td>
				      <td><?php echo $item['sobrenome'];?></td>
				    </tr>
				    <tr>
				      <th>Email</th>
				      <td></td>
				      <td><?php echo $item['email'];?></td>
				    </tr>
				    <tr>
				      <th>Apelido</th>
				      <td></td>
				      <td><?php echo $item['apelido'];?></td>
				    </tr>
				    <tr>
				      <th>Telefone</th>
				      <td></td>
				      <td><?php echo $item['telefone'];?></td>
				    </tr>
				    <tr>
				      <th>Celular</th>
				      <td></td>
				      <td><?php echo $item['celular'];?></td>
				    </tr>
				    <tr>
				      <th>CEP</th>
				      <td></td>
				      <td><?php echo $item['cep'];?></td>
				    </tr>
				    <tr>
				      <th>Estado</th>
				      <td></td>
				      <td><?php echo $item['estado'];?></td>
				    </tr>
				    <tr>
				      <th>Cidade</th>
				      <td></td>
				      <td><?php echo $item['cidade'];?></td>
				    </tr>
				    <tr>
				      <th>Bairro</th>
				      <td></td>
				      <td><?php echo $item['bairro'];?></td>
				    </tr>
				    <tr>
				      <th>Rua</th>
				      <td></td>
				      <td><?php echo $item['rua'];?></td>
				    </tr>
				    <tr>
				      <th>Numero</th>
				      <td></td>
				      <td><?php echo $item['numero'];?></td>
				    </tr>
				    <tr>
				      <th>Complemento</th>
				      <td></td>
				      <td><?php echo $item['complemento'];?></td>
				    </tr>
				    <tr>
				      <th>Data de Nascimento</th>
				      <td></td>
				      <td><?php echo $item['nascimento'];?></td>
				    </tr>
				    <tr>
				      <th>Idade</th>
				      <td></td>
				      <td><?php echo $item['idade'];?></td>
				    </tr>
				  </tbody>
				</table>
		      </div>
		    </div>
		  </div>
		</div>
	<?php } ?>
</div>