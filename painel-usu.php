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
	<title>Painel Usuário</title>
	<?php include('menu.php'); ?>
	<meta charset="utf-8">
	<link rel="stylesheet" href="style/painel-usu.css">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

</head>

<body>
	<div class="container-fluid position-fixed" style="margin-top:130px">
		<div class="row">
			<div class="col-2 offset-1">
				<div class="card border border-0">
					<div class="card-header bg-warning border-0 pl-2 image-card">
						<button class="btn position-relative p-0 mr-3 btn-perfil-img overflow-hidden" href="#">
							<img class="img-fluid" src="img/Luan.jpeg" alt="">
							<label class="lnd-alter position-relative text-light text-font-calibri h3"><i
									class="fas fa-pen" style="cursor:pointer;"></i></label>
						</button>
						<label class="align-items-center text-font-calibri h3 font-italic font-weight-bold h-100">
							<p class="">#<?php echo($con['Nome']);?></p>
						</label>
					</div>
					<div class="card-body border-0 p-0" style="background-color:#26282E;">
						<div id="itens-nav" class="list-nav w-100">
							<ul class="nav flex-column text-font-calibri">
								<li class="nav-item config-item">
									<a class="nav-link h5 mb-0 px-3 pt-4" id="botao-conteudo-1" href="#"><i
											class="fas fa-user-cog mr-3"></i>
										<label class="h5 cursor-pointer">Informações</label></a>
								</li>
								<hr class="w-75 bg-white my-1">
								<li class="nav-item config-item">
									<a class="nav-link h5 mb-0 px-3 pt-4" id="botao-conteudo-2" href="#"><i
											class="fas fa-shield-alt mr-3"></i> <label
											class="h5 cursor-pointer">Segurança</label></a>
								</li>
								<hr class="w-75 bg-white my-1">
								<li class="nav-item config-item">
									<a class="nav-link h5 mb-0 px-3 pt-4" id="botao-conteudo-3" href="#"><i
											class="fas fa-mail-bulk mr-3"></i>
										<label class="h5 cursor-pointer">Endereço</label></a>
								</li>
								<hr class="w-75 bg-white my-1">
								<li class="nav-item config-item">
									<a class="nav-link h5 mb-0 px-3 pt-4" id="botao-conteudo-4" href="#"><i
											class="fas fa-credit-card mr-3"></i> <label class="h5 cursor-pointer">Plano
											/
											Pagamento</label></a>
								</li>
							</ul>
						</div>
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
						<button class="btn btn-hover-white ml-auto"><i class="fas fa-pen"></i><b>
								ATUALIZAR</b></button>
					</div>
					<div class="card-body border-0 p-5">
						<div class="row p-2">
							<div class="col-3">
								<span class="text-clear">Nome</span>
							</div>
							<div class="col-9">
								<span class="h5 text-white"><?php echo($con['Nome']);?></span>
							</div>
						</div>
						<div class="row p-2">
							<div class="col-3">
								<span class="text-clear">Sobrenome</span>
							</div>
							<div class="col-9">
								<span class="h5 text-white"><?php echo($con['Sobrenome']);?></span>
							</div>
						</div>
						<div class="row p-2">
							<div class="col-3">
								<span class="text-clear">Data de Nascimento</span>
							</div>
							<div class="col-9">
								<span class="h5 text-white"><?php echo($con['Data_Nasc']);?></span>
							</div>
						</div>
						<div class="row p-2">
							<div class="col-3">
								<span class="text-clear">CPF</span>
							</div>
							<div class="col-9">
								<span class="h5 text-white"></span>
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
						<label class="h3 text-font-calibri"><b>DESCRIÇÃO - Estudante</b></label>
						<button class="btn btn-hover-white ml-auto"><i class="fas fa-pen"></i><b>
								ATUALIZAR</b></button>
					</div>
					<div class="card-body border-0 p-5">
						<div class="row p-2">
							<div class="col-3">
								<span class="text-clear">Descrição</span>
							</div>
							<div class="col-9">
								<span class="h5 text-white">Silvio Santos Ipsum wellintaaammmmmmmmm. Eu não queria
									perguntar isso publicamenteam, ma vou perguntar. Carla, você tem o ensino
									fundamentauam? Você veio da caravana de ondeammm? É dinheiro ou não é? Ma você,
									topa
									ou no topamm. Mah ooooee vem pra cá. Vem pra cá. Mah é a porta da esperçamm.
									Boca
									sujuam... sem vergonhuamm. Ma quem quer dinheiroam? Ma vai pra lá. O Raul Gil é
									gayam! ... Maa O Ah Ae! Ih Ih! O Raul Gil é gayamm!</span>
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
						<label class="h3 text-font-calibri"><b>SITUAÇÃO - Estudante</b></label>
						<button class="btn btn-hover-white ml-auto"><i class="fas fa-pen"></i><b>
								ATUALIZAR</b></button>
					</div>
					<div class="card-body border-0 p-5">
						<div class="row p-2">
							<div class="col-3">
								<span class="text-clear">Tendencia de área</span>
							</div>
							<div class="col-9">
								<span class="h5 text-white">Silvio Santos Ipsum wellintaaammmmmmmmm. Eu não queria
									perguntar isso publicamenteam, ma vou perguntar. Carla, você tem o ensino
									fundamentauam?</span>
							</div>
						</div>
						<div class="row p-2">
							<div class="col-3">
								<span class="text-clear">Skills</span>
							</div>
							<div class="col-9">
								<span class="h5 text-white">Mah é a porta da esperçamm.
									Boca
									sujuam... sem vergonhuamm. Ma quem quer dinheiroam? Ma vai pra lá. O Raul Gil é
									gayam! ... Maa O Ah Ae! Ih Ih! O Raul Gil é gayamm!</span>
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
						<label class="h3 text-font-calibri"><b>SITUAÇÃO - Profissional</b></label>
						<button class="btn btn-hover-white ml-auto"><i class="fas fa-pen"></i><b>
								ATUALIZAR</b></button>
					</div>
					<div class="card-body border-0 p-5">
						<div class="row p-2">
							<div class="col-3">
								<span class="text-clear">Experiência</span>
							</div>
							<div class="col-9">
								<span class="h5 text-white">Silvio Santos Ipsum wellintaaammmmmmmmm. Eu não queria
									perguntar isso publicamenteam, ma vou perguntar. Carla, você tem o ensino
									fundamentauam?</span>
							</div>
						</div>
						<div class="row p-2">
							<div class="col-3">
								<span class="text-clear">Certificado</span>
							</div>
							<div class="col-9">
								<span class="h5 text-white">Mah é a porta da esperçamm.
									Boca
									sujuam... sem vergonhuamm. Ma quem quer dinheiroam? Ma vai pra lá. O Raul Gil é
									gayam! ... Maa O Ah Ae! Ih Ih! O Raul Gil é gayamm!</span>
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
						<label class="h3 text-font-calibri"><b>ESPECIALIZAÇÃO - Profissional</b></label>
						<button class="btn btn-hover-white ml-auto"><i class="fas fa-pen"></i><b>
								ATUALIZAR</b></button>
					</div>
					<div class="card-body border-0 p-5">
						<div class="row p-2">
							<div class="col-3">
								<span class="text-clear">Área</span>
							</div>
							<div class="col-9">
								<span class="h5 text-white">Silvio Santos Ipsum wellintaaammmmmmmmm. Eu não queria
									perguntar isso publicamenteam, ma vou perguntar. Carla, você tem o ensino
									fundamentauam?</span>
							</div>
						</div>
						<div class="row p-2">
							<div class="col-3">
								<span class="text-clear">Profissão</span>
							</div>
							<div class="col-9">
								<span class="h5 text-white">Mah é a porta da esperçamm.
									Boca
									sujuam... sem vergonhuamm. Ma quem quer dinheiroam? Ma vai pra lá. O Raul Gil é
									gayam! ... Maa O Ah Ae! Ih Ih! O Raul Gil é gayamm!</span>
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
						<label class="h3 text-font-calibri"><b>NÚMERO DE CONTATO</b></label>
						<button class="btn btn-hover-white ml-auto"><i class="fas fa-pen"></i><b>
								ATUALIZAR</b></button>
					</div>
					<div class="card-body border-0 p-5">
						<div class="row p-2">
							<div class="col-3">
								<span class="text-clear">Número de celular</span>
							</div>
							<div class="col-9">
								<span class="h5 text-white"><?php echo($con['Cell']);?></span>
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
						<label class="h3 text-font-calibri"><b>SENHA</b></label>
						<button class="btn btn-hover-white ml-auto"><i class="fas fa-pen"></i><b>
								ATUALIZAR</b></button>
					</div>
					<div class="card-body border-0 p-5">
						<div class="row p-2">
							<div class="col-3">
								<span class="text-clear">Senha</span>
							</div>
							<div class="col-9">
								<span class="h5 text-white">Altere sua senha</span>
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
						<label class="h3 text-font-calibri"><b>REGISTROS</b></label>
						<button class="btn btn-hover-white ml-auto d-none"><i class="fas fa-pen"></i><b>
								ATUALIZAR</b></button>
					</div>
					<div class="card-body border-0 p-5">
						<div class="row p-2">
							<div class="col-2">
								<span class="text-light" style="font-size:40px"><i
										class="fas fa-globe-americas"></i></span>
							</div>
							<div class="col-5 align-items-center  d-flex">
								<span class="h5 text-white">Site WiseMind</span>
							</div>
							<div class="col-5 align-items-center d-flex">
								<span class="h5 text-white align-middle">12 de nov de 2019 às 22:09</span>
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
						<label class="h3 text-font-calibri"><b>ENDEREÇO</b></label>
						<button class="btn btn-hover-white ml-auto"><i class="fas fa-pen"></i><b>
								ATUALIZAR</b></button>
					</div>
					<div class="card-body border-0 p-5">
						<div class="row p-2">
							<div class="col-3">
								<span class="text-clear">Rua</span>
							</div>
							<div class="col-9">
								<span class="h5 text-white"></span>
							</div>
						</div>
						<div class="row p-2">
							<div class="col-3">
								<span class="text-clear">Nº</span>
							</div>
							<div class="col-9">
								<span class="h5 text-white"></span>
							</div>
						</div>
						<div class="row p-2">
							<div class="col-3">
								<span class="text-clear">CEP</span>
							</div>
							<div class="col-9">
								<span class="h5 text-white"></span>
							</div>
						</div>
						<div class="row p-2">
							<div class="col-3">
								<span class="text-clear">Bairro</span>
							</div>
							<div class="col-9">
								<span class="h5 text-white"></span>
							</div>
						</div>
						<div class="row p-2">
							<div class="col-3">
								<span class="text-clear">Cidade</span>
							</div>
							<div class="col-9">
								<span class="h5 text-white"></span>
							</div>
						</div>
						<div class="row p-2">
							<div class="col-3">
								<span class="text-clear">Estado</span>
							</div>
							<div class="col-9">
								<span class="h5 text-white"></span>
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
						<label class="h3 text-font-calibri"><b>STATUS</b></label>
						<button class="btn btn-hover-white ml-auto d-none"><i class="fas fa-pen"></i><b>
								ATUALIZAR</b></button>
					</div>
					<div class="card-body border-0 p-5">
						<div class="row p-2">
							<div class="col-3">
								<span class="text-clear">Plano</span>
							</div>
							<div class="col-9">
								<span class="h5 text-white">Free</span>
							</div>
						</div>
						<div class="row p-2">
							<div class="col-3">
								<span class="text-clear">Status do pagamento</span>
							</div>
							<div class="col-9">
								<span class="h5 text-white"><i class="fas fa-check mr-2"></i> <i class="fas fa-times mr-2"></i> Não confirmado</span>
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
<script>
	var ativar = function (x) {
		for (let y = 1; y <= 5; y++)
			if (y == x) {
				var botao = document.getElementById("botao-conteudo-" + x)
				botao.setAttribute('class', 'nav-link h5 mb-0 px-3 pt-4 ativado')
			} else {
				var botao = document.getElementById("botao-conteudo-" + y)
				botao.setAttribute('class', 'nav-link h5 mb-0 px-3 pt-4')
			}
	}

	for (let x = 1; x <= 5; x++) {
		var link = document.getElementById("botao-conteudo-" + x)
		link.onclick = (e) => {
			e.preventDefault()
			ativar(x)
		}
	}
</script>
<?php
		}else{
			echo('<script>window.alert("Faça o login antes")
			window.location.href = "login.php";</script>');
		}
	
?>


</html>