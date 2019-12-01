<?php
	include('assets/conexao.php');
	session_start();
	if(isset($_SESSION["log_status"]) && $_SESSION["log_status"]==true || isset($_SESSION["adminlog_status"]) && $_SESSION["adminlog_status"]==true){
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
			<input type="text" id="busca" class="form-control border-right-0 search-place"
				placeholder="Pesquisar por áreas" aria-label="Pesquisar" aria-describedby="basic-addon2">
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
		<section id="result" class="row mt-5">

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

	<!-- javascript SimpleBar -->
	<script src="node_modules/OverlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
	<script src="node_modules/OverlayScrollbars/js/OverlayScrollbars.min.js"></script>
	<script src="js/javinha.js"></script>

</body>



<?php
	if (!isset( $_SESSION["note"])) {
		$_SESSION["note"]=false;
	}

?>
<?php if($_SESSION["note"]==true){ 
	include('toast.php');
	echo("<script src='assets/toast.js'></script>
	<script>salaCheia();</script>");

	$_SESSION["note"]=false;
	}

?>


<script>
	var tempo = 1000
	$(document).ready(function () {
		$.post('assets/pesquisar.php', {
			mostar: true,
		}, function (data) {
			$("#result").html(data);
		});



		setInterval(function () {

			$("#busca").keyup(function () {
				var busca = $("#busca").val();
				$.post('assets/pesquisar.php', {
					chat: busca
				}, function (data) {

					$("#result").html(data);

				});

			})


			$.post('assets/pesquisar.php', {
				mostar: true,
			}, function (data) {
				$("#result").html(data);
			});
		}, tempo);



	});

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