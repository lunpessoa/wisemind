<?php
	include('assets/conexao.php');
	session_start();
	if(isset($_SESSION["log_status"]) && $_SESSION["log_status"]==true || isset($_SESSION["adminlog_status"]) && $_SESSION["adminlog_status"]==true){
	$sql=('select * from usuarios where id_usuario = '. $_SESSION["id_user"].';');
	$resul=mysqli_query($conexao, $sql);
    $con=mysqli_fetch_array($resul);
?>

<!DOCTYPE html>
<html>

<head>
	<title>Perfil</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="style/perfil-view.css">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="node_modules/bootstrap/compiler/bootstrap.css">
      <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.css">
      <link rel="stylesheet" href="style/style.css">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
      <link rel="icon" href="img/logo.png" type="image/x-icon" />
      <link rel="shortcut icon" href="img/logo.png" type="image/x-icon" />
    
      <!-- ScrollBar Stylesheets -->
      <link rel="stylesheet" href="node_modules/OverlayScrollbars/css/OverlayScrollbars.min.css">');

</head>

<body>
	<div class="container-fluid position-fixed" style="margin-top:130px">
		<div class="row">
			<div class="col-2 offset-1">
				<div class="card border border-0">
					<div class="card-header bg-warning border-0 pt-3 pb-0">
						<img class="img-fluid" src="img/Luan.jpeg" alt="">
						<label
							class="d-flex justify-content-center text-font-calibri h3 font-italic font-weight-bold mt-3">
							<p class="p-0">#<?php echo($con['Nome']);?></p>
						</label>
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
						<label class="h3 text-font-calibri"><b>INFORMAÇÕES</b></label>
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
								<span class="text-clear">Idade</span>
							</div>
							<div class="col-9">
								<span class="h5 text-white"></span>
							</div>
						</div>
						<div class="row p-2">
							<div class="col-3">
								<span class="text-clear">E-mail</span>
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
					</div>
				</div>
			</div>
		</div>

		<div class="row mb-5">
			<div class="col-7 offset-4">
				<div class="card border border-0 bg-transparent">
					<div class="card-header border-bottom-0 text-white p-4 d-flex">
						<label class="h3 text-font-calibri"><b>ESPECIALIZAÇÃO - Profissional</b></label>
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
	<script src="node_modules/jquery/dist/jquery.js"></script>
	<script src="node_modules/popper.js/dist/umd/popper.js"></script>
	<script src="node_modules/bootstrap/dist/js/bootstrap.js"></script>

	<!-- javascript SimpleBar -->
	<script src="node_modules/OverlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
	<script src="node_modules/OverlayScrollbars/js/OverlayScrollbars.min.js"></script>
	<script src="js/javinha.js"></script>

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
			$_SESSION["facaLog"]=true;
        	echo('<script>window.location.href = "login.php";</script>');
		}
	
?>


</html>