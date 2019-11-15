<?php
	include('assets/conexao.php');
	session_start();
	if(isset($_SESSION["log_status"]) && $_SESSION["log_status"]==true){
	$sql=('select * from usuarios where id_usuario = '. $_SESSION["id_user"].';');
	$resul=mysqli_query($conexao, $sql);
    $con=mysqli_fetch_array($resul);
?>

<!DOCTYPE html>
<html>

<head>
	<?php include('menu.php'); ?>

	<title>Página de chats</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style/parcerias.css">

</head>

<body>
	<section class="container mb-5" style="margin-top:150px">
		<hr>
		<section class="row mt-5">
			<section class="col-12">
				<a class="btn" href="#">
					<div class="card mb-3 w-100">
						<div class="row no-gutters">
							<div class="col-md-4">
								<img src="img/ibm.jpg" class="card-img" alt="...">
							</div>
							<div class="col-md-8">
								<div class="card-body justify-content-start d-flex">
									<h5 class="card-title h4 d-block">International Business Machines Corporation </h5>
									<p class="card-text mt-5 d-block">This is a wider card with supporting text below as a natural
										lead-in to additional content. This content is a little bit longer.</p>
								</div>
							</div>
						</div>
					</div>
				</a>
			</section>
		</section>
	</section>

	<div class="modal fade" id="modalExemplo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
		aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Criar sala</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<form action="assets/sala.php" method="POST">
					<div class="modal-body">

						<div class="form-group">
							<label for="exampleInputNome1">Nome</label>
							<input name="nome" type="text" class="form-control" id="exampleInputEmail1"
								placeholder="Nome da sala">
							<small id="emailHelp" class="form-text text-muted">Crie um nome sugestivo</small>
							<label for="exampleInputNome1">Área</label>
							<input name="area" type="text" class="form-control" id="exampleInputEmail1"
								placeholder="Área do conhecimento">
						</div>

					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
						<button type="submit" class="btn btn-primary" name="criar">Criar sala</button>
					</div>
				</form>
			</div>
		</div>
	</div>

	<?php include('rodape.html'); ?>
	<script src="node_modules/jquery/dist/jquery.js"></script>
	<script src="js/cadastro.js"></script>
	<script src="node_modules/popper.js/dist/umd/popper.js"></script>
	<script src="node_modules/bootstrap/dist/js/bootstrap.js"></script>
	<script src="https://igorescobar.github.io/jQuery-Mask-Plugin/js/jquery.mask.min.js"></script>
</body>
<script>
	$(document).ready(function () {
		$(window).keydown(function (event) {
			if (event.keyCode == 13) {
				event.preventDefault();
				return false;
			}
		});
	});

	$(document).ready(function () {
		$('.date').mask('99/99/9999');
		$('.cep').mask('99999-999');
		$('.cpf').mask('999.999.999-99');
		$('.phone_with_ddd').mask('(99) 99999-9999');
		$('.uf').mask('AA');
	});
</script>
<?php
		}else{
			$_SESSION["facaLog"]=true;
        	echo('<script>window.location.href = "login.php";</script>');
		}
	
?>

</html>