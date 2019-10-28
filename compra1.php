<?php
	include('assets/conexao.php');
	session_start();
	if(isset($_SESSION["log_status"]) && $_SESSION["log_status"]==true){
	$sql=('select * from usuarios where id_usuario = '. $_SESSION["id_user"].';');
	$resul=mysqli_query($conexao, $sql);
    $con=mysqli_fetch_array($resul);
?>

<html>

<head>
	<?php include('menu.php');?>

	<title> Wise Mind </title>
	<link rel="shortcut icon" href="img/ico.png" />
	<link rel="stylesheet" type="text/css" href="style/csscompra.css" />
	<meta charset="UTF-8">
</head>

<body id="body">
	<section class="container-fluid mb-5 plano">
		<div class="row align-content-center" style="height:400px;">
			<div class="col-6">
				<p class="text-center">
					<label class="h1 d-block mb-3">APENAS R$39,99</label>
					<i class="fas fa-brain display-3 d-block text-warning"></i>
					<label class="h2 d-block mt-3">PLANO WISER </label>
				</p>
			</div>
			<div class="col-6">
				<div id="materiais">Materiais exclusivos</div>
				<div id="curriculo">Aprenda a montar um bom curriculo</div>
				<div id="vagas">Acesso a vagas de emprego</div>
			</div>
		</div>
	</section>


	<section class="container-fluid formulario p-5 text-light">
		<section class="container">
			<section class="row justify-content-center mb-2">
				<section class="col-md-12">

					<label class="h5 my-3 font-italic">Para concluir o pagamento, precisamos dos seguintes dados
						pessoais para efetuarmos a geração do
						boleto.</label>
				</section>
			</section>
			<form action="assets/compra-config.php" method="POST" name="form-boleto" autocomplete="off">
				<section class="form-row">
					<section class="form-group col-md-6">
						<label for="inputnome">Nome</label>
						<input type="text" class="form-control text-light" id="inputEmail4" placeholder="Nicolas"
							name="nome" required>
					</section>
					<section class="form-group col-md-6">
						<label for="inputsobrenome">Sobrenome</label>
						<input type="text" class="form-control text-light" placeholder="Silva" name="sobrenome"
							required>
					</section>
				</section>
				<section class="form-group">
					<label for="inputAddress">Rua</label>
					<input type="text" class="form-control text-light" id="inputAddress" placeholder="R. João Manoel"
						name="rua" required>
				</section>
				<section class="form-row">
					<section class="form-group col-md-8">
						<label for="inputAddress2">Complemento</label>
						<input type="text" class="form-control text-light" id="inputAddress2"
							placeholder="Apartamento, Casa, Estudio..." name="complemento">
					</section>
					<section class="form-group col-md-4">
						<label for="inputTelefone">CEP</label>
						<input id="inputTelefone" class="form-control text-light cep" placeholder="07500-000" name="cep"
							required>
					</section>
				</section>
				<section class="form-row">
					<section class="form-group col-md-6">
						<label for="inputCity">Cidade</label>
						<input type="text" name="cidade" class="form-control text-light" id="inputCity"
							placeholder="São Paulo" required>
					</section>
					<section class="form-group col-md-4">
						<label for="inputState">Estado</label>
						<input type="text" name="estado" class="form-control text-light uf" placeholder="SP"
							name="estado" required>
					</section>
					<section class="form-group col-md-2">
						<label for="inputNumero">Número</label>
						<input type="text" name="numero" class="form-control text-light" id="inputNumero"
							placeholder="142" name="numero" required>
					</section>
				</section>
				<section class="form-row">
					<section class="form-group col-md-12 justify-content-center d-flex">
						<button type="submit" class="btn btn-dark btn-lg font-italic" name="Enviar">Gerar
							Boleto</button>
					</section>
				</section>
			</form>
		</section>
	</section>
	<?php include('rodape.html'); ?>
	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
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
		$('.cep').mask('99999-999');
		$('.cpf').mask('999.999.999-99');
		$('.phone_with_ddd').mask('(99) 99999-9999');
		$('.uf').mask('AA');
	});
</script>
<?php
		}else{
			echo('<script>window.alert("Faça o login antes")
			window.location.href = "login.php";</script>');
		}
	
?>

</html>