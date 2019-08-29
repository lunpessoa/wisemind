<!DOCTYPE html>
<html>

<head>
	<title>Login</title>
	<meta charset="utf-8">

	<link rel="stylesheet" href="node_modules/bootstrap/compiler/bootstrap.css">
	<link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.css">
	<link rel="stylesheet" href="style/login.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">

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
						<h6 class="text-light text-font h5">O que você é?</h6>
					</div>
				</div>
			</div>
			<div class="card-body bg-dark border-0">
				<div class="row text-center">
					<div class="col-6">
						<a href="cad-estudy.php" class="btn text-light"><i class="fas fa-user-graduate" style="font-size:100px"></i><br><label class="mt-1 text-font">Estudante</label></a>
					</div>
					<div class="col-6">
						<a href="cad-prof.php" class="btn text-light"><i class="fas fa-user-tie" style="font-size:100px"></i><br><label class="mt-1 text-font">Profissional</label></a>
					</div>
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
	<script src="js/javinha.js"></script>
	<script src="node_modules/popper.js/dist/umd/popper.js"></script>
	<script src="node_modules/bootstrap/dist/js/bootstrap.js"></script>
</body>

</html>