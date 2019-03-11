<!-- Include Header -->
<?php
require_once('layouts/header.php');
require_once('controller/conn.php');
$con = new conn();
$link = $con -> conecta_mysql();
?>

<!-- Start Content -->
<section>
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<h2 class="title">Pessoas Físicas</h2>

				<?php
				$success_delete = isset($_GET['success-delete']) ? $_GET['success-delete'] : 0;
				$erro_delete = isset($_GET['erro-delete']) ? $_GET['erro-delete'] : 0;
				$success_edit = isset($_GET['success-edit']) ? $_GET['success-edit'] : 0;
				$erro_edit = isset($_GET['erro-edit']) ? $_GET['erro-edit'] : 0;
				if ($success_delete == 1) {
						echo '<div class="alert alert-success text-center" role="alert"> 
								<strong>EXCLUIDO COM SUCESSO!</strong>
								<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    								<span aria-hidden="true">&times;</span>
  							  	</button>
							  </div>';
					} 
					if ($erro_delete == 1) {
					 	echo '<div class="alert alert-danger text-center" role="alert"> 
								<strong>ERRO AO TENTAR EXCLUIR</strong>
								<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    								<span aria-hidden="true">&times;</span>
  							  	</button>
							  </div>';
					 }

					 if ($success_edit == 1) {
						echo '<div class="alert alert-success text-center" role="alert"> 
								<strong>EDITADO COM SUCESSO!</strong>
								<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    								<span aria-hidden="true">&times;</span>
  							  	</button>
							  </div>';
					} 
					if ($erro_edit == 1) {
					 	echo '<div class="alert alert-danger text-center" role="alert"> 
								<strong>ERRO AO TENTAR EDITAR</strong>
								<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    								<span aria-hidden="true">&times;</span>
  							  	</button>
							  </div>';
					 }

					require_once('lista_pessoa_fisica.php');
				?>
			</div>
			<div class="col-lg-6">
				<h2 class="title">Pessoas Jurídica</h2>

				<?php
				$success_delete = isset($_GET['success-delete']) ? $_GET['success-delete'] : 0;
				$erro_delete = isset($_GET['erro-delete']) ? $_GET['erro-delete'] : 0;
				$success_edit = isset($_GET['success-edit']) ? $_GET['success-edit'] : 0;
				$erro_edit = isset($_GET['erro-edit']) ? $_GET['erro-edit'] : 0;
				if ($success_delete == 2) {
						echo '<div class="alert alert-success text-center" role="alert"> 
								<strong>EXCLUIDO COM SUCESSO!</strong>
								<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    								<span aria-hidden="true">&times;</span>
  							  	</button>
							  </div>';
					} 
					if ($erro_delete == 2) {
					 	echo '<div class="alert alert-danger text-center" role="alert"> 
								<strong>ERRO AO TENTAR EXCLUIR</strong>
								<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    								<span aria-hidden="true">&times;</span>
  							  	</button>
							  </div>';
					 }

					 if ($success_edit == 2) {
						echo '<div class="alert alert-success text-center" role="alert"> 
								<strong>EDITADO COM SUCESSO!</strong>
								<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    								<span aria-hidden="true">&times;</span>
  							  	</button>
							  </div>';
					} 
					if ($erro_edit == 2) {
					 	echo '<div class="alert alert-danger text-center" role="alert"> 
								<strong>ERRO AO TENTAR EDITAR</strong>
								<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    								<span aria-hidden="true">&times;</span>
  							  	</button>
							  </div>';
					 }
					require_once('lista_pessoa_juridica.php');
				?>
			</div>
		</div>
	</div>
</section>
<!-- End Content -->

<!-- Include Footer -->
<?php
require_once('layouts/footer.php');
?>