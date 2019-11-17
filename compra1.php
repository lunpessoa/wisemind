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
	<title> Torne-se Wiser </title>
	<?php include('menu.php');?>
	<link rel="shortcut icon" href="img/ico.png" />
	<link rel="stylesheet" type="text/css" href="style/csscompra.css" />
	<link rel="stylesheet" href="node_modules//dist/css/bootstrap-select.css">
	<meta charset="UTF-8">
</head>

<body id="body">
	<section class="img-fluid backimage text-center" alt="Responsive image">
		<img src="img/wiserelement.png" class="position-relative wiserelement" alt="">
	</section>

	<section class="container-fluid p-5 w-100 plano align-items-center d-flex" style="z-index:0;">
		<div class="container">
			<!--first section-->
			<div class="row align-items-center how-it-works d-flex">
				<div class="col-2 text-center d-inline-flex justify-content-center align-items-center">
					<div class="circle font-weight-bold"><i class="fas fa-dollar-sign"></i></div>
				</div>
				<div class="col-6 font-lobster">
					<h1>Apenas R$ 39,90</h1>
				</div>
			</div>
			<!--path between 1-2-->
			<div class="row timeline">
				<div class="col-2">
					<div class="corner top-right"></div>
				</div>
				<div class="col-8">
					<hr />
				</div>
				<div class="col-2">
					<div class="corner left-bottom"></div>
				</div>
			</div>
			<!--second section-->
			<div class="row align-items-center justify-content-end how-it-works d-flex">
				<div class="col-6 text-right font-lobster">
					<h1>Conteúdos Adicionais</h1>
				</div>
				<div class="col-2 text-center full d-inline-flex justify-content-center align-items-center">
					<div class="circle font-weight-bold"><i class="fas fa-plus"></i></div>
				</div>
			</div>
			<!--path between 2-3-->
			<div class="row timeline">
				<div class="col-2">
					<div class="corner right-bottom"></div>
				</div>
				<div class="col-8">
					<hr />
				</div>
				<div class="col-2">
					<div class="corner top-left"></div>
				</div>
			</div>
			<!--third section-->
			<div class="row align-items-center how-it-works d-flex">
				<div class="col-2 text-center top d-inline-flex justify-content-center align-items-center">
					<div class="circle font-weight-bold"><i class="fas fa-brain"></i></div>
				</div>
				<div class="col-6 font-lobster">
					<h1>Melhor Experiência</h1>
				</div>
			</div>
		</div>
	</section>

	<section class="container-fluid formulario p-5 text-light" style="z-index:0; margin-top:500px;">
		<section class="container">
			<section class="row justify-content-center mb-2">
				<section class="col-md-12">
					<label class="h5 my-3 font-italic pt-5">Para concluir o pagamento, precisamos dos seguintes
						dados
						pessoais para efetuarmos a geração do
						boleto.</label>
				</section>
			</section>
			<form action="assets/compra-config.php" method="POST" name="form-boleto" autocomplete="off">
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
						<select id="uf" name="estado" class="form-control text-light selectpicker" required>
							<option value="AC">Acre</option>
							<option value="AL">Alagoas</option>
							<option value="AP">Amapá</option>
							<option value="AM">Amazonas</option>
							<option value="BA">Bahia</option>
							<option value="CE">Ceará</option>
							<option value="DF">Distrito Federal</option>
							<option value="ES">Espírito Santo</option>
							<option value="GO">Goiás</option>
							<option value="MA">Maranhão</option>
							<option value="MT">Mato Grosso</option>
							<option value="MS">Mato Grosso do Sul</option>
							<option value="MG">Minas Gerais</option>
							<option value="PA">Pará</option>
							<option value="PB">Paraíba</option>
							<option value="PR">Paraná</option>
							<option value="PE">Pernambuco</option>
							<option value="PI">Piauí</option>
							<option value="RJ">Rio de Janeiro</option>
							<option value="RN">Rio Grande do Norte</option>
							<option value="RS">Rio Grande do Sul</option>
							<option value="RO">Rondônia</option>
							<option value="RR">Roraima</option>
							<option value="SC">Santa Catarina</option>
							<option value="SP">São Paulo</option>
							<option value="SE">Sergipe</option>
							<option value="TO">Tocantins</option>
						</select>
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
	<script src="../dist/js/bootstrap-select.js"></script>

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
			$_SESSION["facaLog"]=true;
        	echo('<script>window.location.href = "login.php";</script>');
		}
	
?>
<?php
	if (!isset($_SESSION["assinatura"])) {
		$_SESSION["assinatura"]=false;
	}

?>
<?php  if($_SESSION["assinatura"]==true){ 
	include('toast.php');
	echo("<script src='assets/toast.js'></script>
	<script>assinatura();</script>");

	$_SESSION["assinatura"]=false;
	}

?>

</html>