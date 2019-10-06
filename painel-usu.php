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
	<?php include('menu.html'); ?>
	<meta charset="utf-8">
	<link rel="stylesheet" href="style/painel-usu.css">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

</head>

<body>
	<div class="container-fluid position-fixed" style="margin-top:130px">
		<div class="row">
			<div class="col-2 offset-1">
				<div class="card border border-0">
					<div class="card-header bg-warning pb-0 border-0 d-inline">
						<div class="img-usu w-50 h-50 float-left mr-3">
							<img src="img/Luan.jpeg" class="img-fluid rounded-circle">
							<!-- <button class="btn btn-link alter-image position-absolute"><i class="fas fa-pen"></i> Alterar</button> -->
						</div>
						<label class="d-flex text-font-calibri h4 font-italic font-weight-bold mt-4"><?php echo($con['Nome']);?></label>
					</div>
					<div class="card-body border-0 p-0" style="background-color:#26282E;">
						<div id="itens-nav" class="list-nav w-100">
							<ul class="nav flex-column text-font-calibri">
								<li class="nav-item">
									<a class="nav-link h5 mb-0 px-3 pt-4" href="#"><i class="fas fa-user-cog mr-3"></i>
										<label class="h5 cursor-pointer">Informações</label></a>
								</li>
								<hr class="w-75 bg-white my-1">
								<li class="nav-item">
									<a class="nav-link h5 mb-0 px-3 pt-4" href="#"><i
											class="fas fa-shield-alt mr-3"></i> <label
											class="h5 cursor-pointer">Segurança</label></a>
								</li>
								<hr class="w-75 bg-white my-1">
								<li class="nav-item">
									<a class="nav-link h5 mb-0 px-3 pt-4" href="#"><i class="fas fa-mail-bulk mr-3"></i>
										<label class="h5 cursor-pointer">Endereço</label></a>
								</li>
								<hr class="w-75 bg-white my-1">
								<li class="nav-item">
									<a class="nav-link h5 mb-0 px-3 pt-4" href="#"><i
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
						<button class="btn btn-hover-white ml-auto"><i class="fas fa-pen"></i><b> ATUALIZAR</b></button>
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
								<span class="h5 text-white">xxx.xxx.xxx-xx</span>
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
						<label class="h3 text-font-calibri"><b>DESCRIÇÃO DO USUÁRIO</b></label>
						<button class="btn btn-hover-white ml-auto"><i class="fas fa-pen"></i><b> ATUALIZAR</b></button>
					</div>
					<div class="card-body border-0 p-5">
						<div class="row p-2">
							<div class="col-3">
								<span class="text-clear">Descrição</span>
							</div>
							<div class="col-9">
								<span class="h5 text-white">Silvio Santos Ipsum wellintaaammmmmmmmm. Eu não queria
									perguntar isso publicamenteam, ma vou perguntar. Carla, você tem o ensino
									fundamentauam? Você veio da caravana de ondeammm? É dinheiro ou não é? Ma você, topa
									ou no topamm. Mah ooooee vem pra cá. Vem pra cá. Mah é a porta da esperçamm. Boca
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
						<button class="btn btn-hover-white ml-auto"><i class="fas fa-pen"></i><b> ATUALIZAR</b></button>
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
<?php
		}else{
			echo('<script>window.alert("Faça o login antes")
			window.location.href = "login.php";</script>');
		}
	
?>


</html>