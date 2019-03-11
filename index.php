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
				<?php require_once('lista_pessoa_fisica.php');?>
			</div>
			<div class="col-lg-6">
				<h2 class="title">Pessoas Jurídica</h2>
				<?php require_once('lista_pessoa_juridica.php');?>
			</div>
		</div>
	</div>
</section>
<!-- End Content -->

<!-- Include Footer -->
<?php
require_once('layouts/footer.php');
?>