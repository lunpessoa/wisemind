<?php
if (!isset($_SESSION)) {
	session_start();
}
?>
<!DOCTYPE html>
<html>

<head>
	<title>Cadastro</title>
	<meta charset="utf-8">

	<link rel="stylesheet" href="node_modules/bootstrap/compiler/bootstrap.css">
	<link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.css">
	<link rel="stylesheet" href="style/login.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
	<link rel="icon" href="img/logo.png" type="image/x-icon" />
	<link rel="shortcut icon" href="img/logo.png" type="image/x-icon" />

</head>

<body style="height:100vh; width:100vw; overflow:hidden;">
	<section id="logo" style="z-index:1;">
		<section class="svgLogo">
			<svg class="logoWiseMind" version="1.1" width="300px" height="300px" viewBox="0 0 4000 4000"
				style="position:absolute; margin:30px;">
				<defs>
					<style type="text/css">
						.fil0 {
							fill: #003C6E
						}

						.fil2 {
							fill: #FFD109
						}

						.fil3 {
							fill: #373435;
							fill-opacity: 0.290196
						}

						.fil1 {
							fill: #373435;
							fill-opacity: 0.400000
						}
					</style>
				</defs>
				<g id="Camada_x0020_1">
					<metadata id="CorelCorpID_0Corel-Layer" />
					<polygon class="fil0"
						points="346,195 320,195 353,27 488,27 523,195 490,195 441,416 422,325 399,421 " />
					<polygon class="fil1" points="525,206 520,182 480,182 435,389 446,437 " />
					<polygon class="fil1" points="318,205 323,182 356,182 406,393 395,437 " />
					<polygon class="fil2"
						points="231,807 48,807 187,195 346,195 420,510 490,195 651,195 791,807 607,807 554,422 485,807 355,807 286,432 " />
					<polygon class="fil3" points="582,631 585,652 666,652 710,457 698,402 " />
					<polygon class="fil0" points="653,639 515,639 625,27 791,27 " />
					<polygon class="fil3" points="257,631 254,652 173,652 129,457 141,402 " />
					<polygon class="fil0" points="210,27 48,27 189,643 325,643 " />
				</g>
			</svg>
		</section>
	</section>

	<?php include('teste.svg'); ?>
	<div class="container d-flex align-items-center" style="height: 100vh;">
		<div class="card border border-0 bg-transparent" style="border-radius: 10px;">
			<div class="card-header border-bottom-0 bg-dark"
				style="border-top-left-radius: 10px; border-top-right-radius: 10px;">
				<div class="row">
					<div class="col-12 text-center">
						<h1 class="h1 text-warning"><b>WISE MIND</b></h1>
					</div>
					<div class="col-12 text-center">
						<h6 class="text-light text-font h5">Torne-se um Wiser!</h6>
					</div>
				</div>
			</div>
			<div class="card-body bg-dark border-0">
				<form name="cad" action="assets/cadastro.php" method="POST" class="container was-validated" novalidate=""
					autocomplete="off">
					<div id="fase1">
						<div class="row ">
							<div class="col-6">
								<label style="color:#b5b5b5; text-dark" class="text-font">Nome</label>
								<div class="input-group form-group">
									<input id="nome" type="text" placeholder="Ex. Joaquim"
										class="form-control text-light"
										style="background-color:#282d30; border-color:#1f1f1f; " name="nome" required>
								</div>
							</div>
							<div class="col-6">
								<label class="text-font" style="color:#b5b5b5;">Sobrenome</label>
								<div class="input-group form-group">
									<input id="sobrenome" type="text" placeholder="Ex. Souza"
										class="form-control text-light"
										style="background-color:#282d30; border-color:#1f1f1f;" name="sobrenome"
										required>
								</div>
							</div>
						</div>
						<div class="row " id="data">
							<div class="col-6">
								<label style="color:#b5b5b5; text-dark" class="text-font">Data de Nascimento</label>
								<div class="input-group form-group">
									<input id="datanasc" type="text" placeholder="10/02/1979"
										class="form-control date text-light"
										style="background-color:#282d30; border-color:#1f1f1f;" name="datanasc"
										required>
								</div>
							</div>
							<div class="col-6">
								<label class="text-font" style="color:#b5b5b5;">Celular</label>
								<div class="input-group form-group">
									<input id="celular" type="text" placeholder="(00) 00000-0000"
										class="form-control phone_with_ddd text-light"
										style="background-color:#282d30; border-color:#1f1f1f;" name="celular" required>
								</div>
							</div>
						</div>
					</div>
					<div id="fase2" style="display: none;">
						<div class="row">
							<div class="col-4">
								<label style="color:#b5b5b5; text-dark" class="text-font">UF</label>
								<div class="input-group form-group">
									<select id="uf" class="form-control text-light"
										style="background-color:#282d30; border-color:#1f1f1f;" data-size="5" required
										name="estado">
										<option value="" selected disabled hidden>XX</option>
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
										<option value="SC">SC</option>
										<option value="SP">SP</option>
										<option value="SE">SE</option>
										<option value="TO">TO</option>
									</select>
								</div>
							</div>
							<div class="col-8">
								<label class="text-font" style="color:#b5b5b5;">Cidade</label>
								<div class="input-group form-group">
									<input id="cidade" type="text" placeholder="Suzano" class="form-control text-light"
										style="background-color:#282d30; border-color:#1f1f1f;" name="cidade" required>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-8">
								<label class="text-font" style="color:#b5b5b5;">Bairro</label>
								<div class="input-group form-group">
									<input id="bairro" type="text" placeholder="25 de Janeiro"
										class="form-control text-light"
										style="background-color:#282d30; border-color:#1f1f1f;" name="bairro" required>
								</div>
							</div>
							<div class="col-4">
								<label class="text-font" style="color:#b5b5b5;">N°</label>
								<div class="input-group form-group">
									<input id="numero-camp" type="text" placeholder="XXX"
										class="form-control text-light"
										style="background-color:#282d30; border-color:#1f1f1f;" name="numero" required>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-12">
								<label style="color:#b5b5b5; text-dark" class="text-font">Rua</label>
								<div class="input-group form-group">
									<input id="rua" type="text" placeholder="R. Vila Rica"
										class="form-control text-light"
										style="background-color:#282d30; border-color:#1f1f1f;" name="rua" required>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-6">
								<label class="text-font" style="color:#b5b5b5;">CEP</label>
								<div class="input-group form-group">
									<input id="cep" type="text" placeholder="00000-000"
										class="form-control cep text-light"
										style="background-color:#282d30; border-color:#1f1f1f;" name="cep" required>
								</div>
							</div>
							<div class="col-6">
								<label class="text-font" style="color:#b5b5b5;">CPF</label>
								<div class="input-group form-group">
									<input id="cpf-camp" type="text" placeholder="000.000.000-00"
										class="form-control cpf text-light"
										style="background-color:#282d30; border-color:#1f1f1f;" name="cpf" required>
								</div>
							</div>
						</div>
					</div>
					<div id="fase3" style="display: none;">
						<div class="row">
							<div class="col-12">
								<label style="color:#b5b5b5; text-dark" class="text-font">Certicado</label>
								<div class="input-group form-group">
									<input id="certificado" type="text" class="form-control text-light"
										style="background-color:#282d30; border-color:#1f1f1f;" name="certificado"
										required>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-12">
								<label class="text-font" style="color:#b5b5b5;">Experiência</label>
								<div class="input-group form-group">
									<input id="experiencia" type="text" class="form-control text-light" rows="5"
										style="background-color:#282d30; border-color:#1f1f1f;resize: none;"
										name="experiencia" required>
								</div>
							</div>
						</div>
					</div>
					<div id="fase4" style="display: none;">
						<div class="row">
							<div class="col-12">
								<label style="color:#b5b5b5; text-dark" class="text-font">E-mail</label>
								<div class="input-group form-group">
									<input type="text" class="form-control text-light"
										style="background-color:#282d30; border-color:#1f1f1f;" name="email" required>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-12">
								<label style="color:#b5b5b5; text-dark" class="text-font">Senha</label>
								<div class="input-group form-group">
									<input type="password" class="form-control text-light"
										style="background-color:#282d30; border-color:#1f1f1f;" name="senha" required>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-12">
								<label style="color:#b5b5b5; text-dark" class="text-font">Confirmar Senha</label>
								<div class="input-group form-group">
									<input type="password" class="form-control text-light"
										style="background-color:#282d30; border-color:#1f1f1f;" name="confirme"
										required>
								</div>
							</div>
						</div>
					</div>
					<div class="form-group  justify-content-center mt-3" style="display: none;" id="enviar">
						<button type="submit" value="Criar-prof" class="btn w-50 entrar"
							style="font-waight:bold; font-family:'Franklin Gothic';" name="Criar-prof">Criar</i>
						</button>

					</div>

				</form>

				<div class="form-group justify-content-center mt-3" id="botao" style="display: flex;">
					<button type="submit" value="Criar" class="btn w-50 entrar"
						style="font-waight:bold; font-family:'Franklin Gothic';"> <i class="fas fa-arrow-right"></i>
					</button>
				</div>
				<div class="form-group justify-content-center mt-3" id="botao2" style="display: none;">
					<button type="submit" value="Criar" class="btn w-50 entrar"
						style="font-waight:bold; font-family:'Franklin Gothic';"> <i class="fas fa-arrow-right"></i>
					</button>
				</div>
				<div class="form-group  justify-content-center mt-3" style="display: none;" id="botao3">
					<button type="submit" value="Criar" class="btn w-50 entrar"
						style="font-waight:bold; font-family:'Franklin Gothic';"> <i class="fas fa-arrow-right"></i>
					</button>
				</div>

			</div>
			<div class="card-footer bg-dark border-top-0 text-center text-font"
				style="border-bottom-left-radius: 10px; border-bottom-right-radius: 10px; color:#b5b5b5;">
				Já possui conta? <a href="login.php" class="btn text-warning p-0">Entrar!</a>
			</div>
		</div>
	</div>


	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="node_modules/jquery/dist/jquery.js"></script>
	<script src="js/cadastro.js"></script>
	<script src="node_modules/popper.js/dist/umd/popper.js"></script>
	<script src="node_modules/bootstrap/dist/js/bootstrap.js"></script>
	<script src="node_modules/JQuery-Mask/dist/jquery.mask.min.js"></script>

	<!-- javascript SimpleBar -->
	<script src="node_modules/OverlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
	<script src="node_modules/OverlayScrollbars/js/OverlayScrollbars.min.js"></script>
	<script src="js/javinha.js"></script>

</body>
<script type="text/javascript" src="js/enderecamento.js"></script>

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
	if (!isset($_SESSION["email"])) {
		$_SESSION["email"]=false;
	}

?>
<?php if( $_SESSION["email"]==true){ 
	include('toast.php');
	echo("<script src='assets/toast.js'></script>
	<script>email();</script>");

	$_SESSION["email"]=false;
	}

?>
<?php
	if (!isset($_SESSION["senhas"])) {
		$_SESSION["senhas"]=false;
	}

?>
<?php if( $_SESSION["senhas"]==true){ 
	include('toast.php');
	echo("<script src='assets/toast.js'></script>
	<script>senhas()</script>");

	$_SESSION["senhas"]=false;
	}

?>

</html>