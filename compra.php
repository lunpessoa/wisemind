<html>

<head>
	<?php include('menu.php');?>

	<title> Wise Mind </title>
	<link rel="shortcut icon" href="img/ico.png" />
	<link rel="stylesheet" type="text/css" href="style/csscompra1.css" />
	<meta charset="UTF-8">
</head>

<body id="body">
	<section id="caixa" class="mb-5">
		<section id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
			</ol>
			<section class="carousel-inner">
				<section class="carousel-item active">
					<img src="" class="d-block w-100">
				</section>
				<section class="carousel-item">
					<img src="" class="d-block w-100">
				</section>
				<section class="carousel-item">
					<img src="" class="d-block w-100">
				</section>
			</section>
			<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</section>

	</section>
	<font face="century gothic" color="#fff">
		<section id="vantagens"><br><br>
			<center>
				<h1>Vantagens do Plano Wiser</h1>
			</center>
			<section id="vantagem1"></section><br>
			<section id="materiais">Materiais exclusivos</section>
			<section id="vantagem2"></section><br>
			<section id="curriculo">Aprenda a montar um bom curriculo</section>
			<section id="vantagem3"></section><br>
			<section id="vagas">Acesso a vagas de emprego</section>
		</section>

		<section id="formulario">
			<section id="boleto"> <br><br>
				<section class="row justify-content-center mb-5">
					<section id="segundo">
						<h4><b>
								<font color="#003f6c">PLANO WISER</font>
							</b></h4>
						<b>Pagamento R$39,99</b><br><br>
						Para concluir o pagamento, precisamos dos seguintes dados pessoais para efetuarmos a geração do
						boleto

						<form action="assets/compra-config.php" method="POST" name="form-boleto">
							<section class="form-row">
								<section class="form-group col-md-6">
									<label for="inputnome">Nome</label>
									<input type="text" class="form-control" id="inputEmail4" placeholder="Nicolas" name="nome" required>
								</section>
								<section class="form-group col-md-6">
									<label for="inputsobrenome">Sobrenome</label>
									<input type="text" class="form-control" placeholder="Silva" name="sobrenome" required>
								</section>
							</section>
							<section class="form-group">
								<label for="inputAddress">Rua</label>
								<input type="text" class="form-control" id="inputAddress" placeholder="R. João Manoel" name="rua" required>
							</section>
							<section class="form-row">
							<section class="form-group col-md-8">
								<label for="inputAddress2">Complemento</label>
								<input type="text" class="form-control" id="inputAddress2"
									placeholder="Apartamento, Casa, Estudio..." name="complemento">
							</section>
							<section class="form-group col-md-4">
									<label for="inputTelefone">CEP</label>
									<input id="inputTelefone" class="form-control cep" placeholder="07500-000" name="cep"required>
								</section>
							</section>
							<section class="form-row">
								<section class="form-group col-md-6">
									<label for="inputCity">Cidade</label>
									<input type="text" name="cidade" class="form-control" id="inputCity" placeholder="São Paulo" required>
								</section>
								<section class="form-group col-md-4">
									<label for="inputState">Estado</label>
									<input type="text" name="estado" class="form-control uf" placeholder="SP" name="estado" required>
								</section>
								<section class="form-group col-md-2">
									<label for="inputNumero">Número</label>
									<input type="text" name="numero" class="form-control" id="inputNumero" placeholder="142" name="numero" required>
								</section>
							</section>
								
							<button type="submit" class="btn btn-primary btn-lg btn-block" name="Enviar">Gerar Boleto</button>
						</form>
					</section>
				</section>
			</section>
		</section>
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

</html>