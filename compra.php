<html>

<head>
	<?php include('menu.html');?>

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

						<form>
							<section class="form-row">
								<section class="form-group col-md-6">
									<label for="inputnome">Nome</label>
									<input type="email" class="form-control" id="inputEmail4" placeholder="Nicolas">
								</section>
								<section class="form-group col-md-6">
									<label for="inputsobrenome">Sobrenome</label>
									<input type="password" class="form-control" id="inputPassword4" placeholder="Silva">
								</section>
							</section>
							<section class="form-group">
								<label for="inputAddress">Endereço</label>
								<input type="text" class="form-control" id="inputAddress" placeholder="R. João Manoel">
							</section>
							<section class="form-group">
								<label for="inputAddress2">Complemento</label>
								<input type="text" class="form-control" id="inputAddress2"
									placeholder="Apartamento, Casa, Estudio...">
							</section>
							<section class="form-row">
								<section class="form-group col-md-6">
									<label for="inputCity">Cidade</label>
									<input type="text" class="form-control" id="inputCity" placeholder="São Paulo">
								</section>
								<section class="form-group col-md-4">
									<label for="inputState">Estado</label>
									<select id="inputState" class="form-control">
										<option selected>Escolha</option>
										<option>SP</option>
									</select>
								</section>
								<section class="form-group col-md-2">
									<label for="inputNumero">Número</label>
									<input type="text" class="form-control" id="inputNumero" placeholder="xxxx">
								</section>
							</section>
							<section class="form-row">
								<section class="form-group col-md-4">
									<label for="inputRG">RG</label>
									<input type="number" class="form-control" id="inputRG" placeholder="xx.xxx.xxx-x">
								</section>
								<section class="form-group col-md-4">
									<label for="inputCPF">CPF</label>
									<input type="number" class="form-control" id="inputCPF"
										placeholder="xxx.xxx.xxx-xx">
								</section>
								<section class="form-group col-md-4">
									<label for="inputTelefone">Telefone</label>
									<input id="inputTelefone" class="form-control" placeholder="(xx)xxxxx-xxxx">
								</section>
							</section><br>
							<button type="button" class="btn btn-primary btn-lg btn-block">Gerar Boleto</button>
						</form>
					</section>
				</section>
			</section>
		</section>
</body>

<script src="js/script.js"></script>

</html>