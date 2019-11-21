<?php
	include('assets/conexao.php');
	session_start();
	if(isset($_SESSION["log_status"]) && $_SESSION["log_status"]==true){
	$sql=('select * from usuarios where id_usuario = '. $_SESSION["id_user"].';');
	$resul=mysqli_query($conexao, $sql);
	$con=mysqli_fetch_array($resul);

	$sql2=('select validacao from profissional where id_profissional ='. $_SESSION["id_user"].';');
    $resul2=mysqli_query($conexao, $sql2);
    $con2=mysqli_fetch_array($resul2);
?>

<!DOCTYPE html>
<html>

<head>
	<title>Chats</title>
	<?php include('menu.php'); ?>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style/chats.css">

</head>

<body>
	<section class="img-fluid backimage text-center" alt="Responsive image">
		<img src='img/wiserenjoychat.png' class="position-relative wiserelement" alt="">
	</section>

	<section class="w-100 position-absolute overflow-hidden" style="margin-top:-130px">
		<img src="img/ondinha3.png">
	</section>

	<section class="container text-center mb-4" style="margin-top:100px;">
		<h3 class="display-3"><i class="fas fa-comments "></i> <b><em>WiseChat</em></b></h3>
		<h3 class="h5"><em>Faça parte desta comunidade<em></h3>
	</section>
	
	<section class="container d-flex justify-content-center">
		<div class="input-group mb-3 w-50">
			<input type="text" id="form-border-none" class="form-control border-right-0 search-place"
				placeholder="Pesquisar" aria-label="Pesquisar" aria-describedby="basic-addon2">
			<div class="input-group-append">
				<span class="input-group-text bg-transparent border-left-0" id="basic-addon2"><i
						class="fas fa-search"></i></span>
			</div>
		</div>
	</section>

	<?php
		if($con['id_privilegio']==2 && $con2['validacao']==true){
			echo('<div class="container d-flex justify-content-center">
			<button type="button" data-toggle="modal" data-target="#modalExemplo" class="btn btn-warning">Criar Sala</button>
		</div>');
		}
	?>
	<section class="container mb-5">
		<hr>
		<section class="row mt-5">
			<?php
		$sql2=('select * from chat;');
		$resul2=mysqli_query($conexao, $sql2);
		$num_salas = mysqli_num_rows($resul2);
		while($con=mysqli_fetch_array($resul2)){
			$sql3=('select Nome, Sobrenome from usuarios where id_usuario = '.$con['id_profissional'].' ;');
			$resul3=mysqli_query($conexao, $sql3);
			$con2=mysqli_fetch_array($resul3);

	echo('
			<section class="col-12 col-md-4" id="sala'.$con["id_Chat"].'">
				<a class="btn" href="assets/redmin_sala.php?sala='.$con['id_Chat'].'.">
					<section class="card">
						<img src="img/slide_amarelo.gif" class="card-img-top" alt="...">
						<section class="card-body text-center pb-2">
							<h3 class="card-title h3"><b><em>'.$con["nome"].'</em></b></h3>
							<h3 class="text-left h5 mt-4 text-primary mb-0"><em>Prof. '.$con2["Nome"].' '.$con2["Sobrenome"].'</em></h3>
						</section>
						<section class="card-footer text-center">
							<h5 class="float-left text-muted">'.$con["Area"].'</h5>
							<h5 class="float-right text-muted"> '.$con["Num_Participantes"].'/20</h5>
						</section>
					</section>
				</a>
			</section>
		');
		}
		
	?>
		</section>
	</section>

	<div class="modal fade" id="modalExemplo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
		aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Criar sala</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<form action="assets/sala.php" method="POST">
					<div class="modal-body">

						<div class="form-group">
							<label for="exampleInputNome1">Nome</label>
							<input name="nome" type="text" class="form-control" id="exampleInputEmail1"
								placeholder="Nome da sala">
							<small id="emailHelp" class="form-text text-muted">Crie um nome sugestivo</small>
							<label for="exampleInputNome1">Área</label>
							<input name="area" type="text" class="form-control" id="exampleInputEmail1"
								placeholder="Área do conhecimento">
						</div>

					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
						<button type="submit" class="btn btn-primary" name="criar">Criar sala</button>
					</div>
				</form>
			</div>
		</div>
	</div>

	<?php include('rodape.html'); ?>
	<script src="node_modules/jquery/dist/jquery.js"></script>
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
		$('.date').mask('99/99/9999');
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

</html>