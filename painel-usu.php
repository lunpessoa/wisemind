<!DOCTYPE html>
<html>

<head>
	<?php include('menu.html'); ?>

	<title>Painel Usuário</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="style/painel-usu.css">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

</head>

<body>
	<div class="container-fluid position-fixed" style="margin-top:130px">
		<div class="row">
			<div class="col-2 offset-1">
				<div class="card border border-0 bg-transparent" style="height:450px;">
					<div class="card-body border-0" style="background-color:#26282E;">
						<h1 class="h4 text-warning"><b>Perfil</b></h1>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="container-fluid" style="margin-top:130px">
		<div class="row mb-5">
			<div class="col-7 offset-4">
				<div class="card border border-0 bg-transparent">
					<div class="card-header border-bottom-0 text-white p-4 d-flex">
						<label class="h3 text-font-calibri"><b>INFORMAÇÕES PESSOAIS</b></label>
						<button class="btn btn-hover-white ml-auto"><i class="fas fa-pen"></i><b> ATUALIZAR</b></button>
					</div>
					<div class="card-body border-0 p-5">
						<div class="row p-2">
							<div class="col-3">
								<span class="text-clear">Nome</span>
							</div>
							<div class="col-9">
								<span class="h5 text-white">Luan</span>
							</div>
						</div>
						<div class="row p-2">
							<div class="col-3">
								<span class="text-clear">Sobrenome</span>
							</div>
							<div class="col-9">
								<span class="h5 text-white">Pessoa</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="row mb-5">
			<div class="col-7 offset-4">
				<div class="card border border-0 bg-transparent">
					<div class="card-header border-bottom-0 text-white p-4 d-flex">
						<label class="h3 text-font-calibri"><b>ENDEREÇO DE E-MAIL</b></label>
						<button class="btn btn-hover-white ml-auto"><i class="fas fa-pen"></i><b> ATUALIZAR</b></button>
					</div>
					<div class="card-body border-0 p-5">
						<div class="row p-2">
							<div class="col-3">
								<span class="text-clear">Endereço de E-mail</span>
							</div>
							<div class="col-9">
								<span class="h5 text-white">luan.pessoa.393@hotmail.com</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>


	</div>

	<!--
	<div class="container d-flex align-items-center justify-content-center" style="height: 170vh;">
		<div class="card border border-0 bg-transparent" style="border-radius: 10px;">
			<div class="card-header border-bottom-0 bg-dark" style="border-top-left-radius: 10px; border-top-right-radius: 10px;">
				<div class="row">
					<div class="col-12 text-center">
						<h1 class="h1 text-warning"><b>Perfil</b></h1>
					</div>
				</div>
			</div>
			<div class="card-body bg-dark border-0">

				<div class="row mb-5">
					<div class="col-12 d-flex justify-content-center">
						<div class="ft-perfil">
							<img src="img/foto-perfil.jpg" class="img-fluid">
						</div>
					</div>

				</div>
				<form>
					<div class="container d-flex justify-content-start">
						<div class="col-6 input-group form-group">
							<label style="color:#b5b5b5;" class="text-font">Nome</label>
							<input type="text" class="form-control text-light" style="background-color:#282d30; width:100%; border-color:#1f1f1f;">
						</div>
						<div class="col-6 input-group form-group">
							<label class="text-font" style="color:#b5b5b5;">Sobrenome</label>
							<input type="password" class="form-control text-light" style="background-color:#282d30; width:100%; border-color:#1f1f1f;">
						</div>
					</div>
					<label class="text-font" style="color:#b5b5b5;">Email</label>
					<div class="col-11 input-group form-group">
						<input type="password" class="form-control text-light" style="background-color:#282d30; border-color:#1f1f1f;">
					</div>
					<label class="text-font" style="color:#b5b5b5;">Endereço</label>
					<div class="input-group form-group">
						<input type="password" class="form-control text-light" style="background-color:#282d30; border-color:#1f1f1f;">
					</div>
					<label class="text-font" style="color:#b5b5b5;">CPF</label>
					<div class="input-group form-group">
						<input type="password" class="form-control text-light" style="background-color:#282d30; border-color:#1f1f1f;">
					</div>
				</form>
			</div>
			<div class="card-footer bg-dark border-top-0 text-center text-font">
			</div>
		</div>
	</div>
	-->


</body>


</html>