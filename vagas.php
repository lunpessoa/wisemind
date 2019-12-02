<?php
	include('assets/conexao.php');
	session_start();
	if(isset($_SESSION["log_status"]) && $_SESSION["log_status"]==true || isset($_SESSION["adminlog_status"]) && $_SESSION["adminlog_status"]==true){
		$sql2=('select Plano from estudantes where id_estudante ='. $_SESSION["id_user"].';');
		$resul2=mysqli_query($conexao, $sql2);
		$con2=mysqli_fetch_array($resul2);
	
		$sql3=('select validacao from profissional where id_profissional ='. $_SESSION["id_user"].';');
		$resul3=mysqli_query($conexao, $sql3);
		$con3=mysqli_fetch_array($resul3);
	
		$sql4=('select id_privilegio from usuarios where id_usuario ='. $_SESSION["id_user"].';');
		$resul4=mysqli_query($conexao, $sql4);
		$con4=mysqli_fetch_array($resul4);
		if($con2['Plano']==true || $con3['validacao']==true || $con4['id_privilegio']==3){
?>

<!DOCTYPE html>
<html>

<head>
	<title>Vagas</title>
	<?php include('menu.php'); ?>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style/parcerias.css">

</head>

<body>
	<section class="container mb-5" style="margin-top:150px; min-height:500px">
		<hr>
		<section class="row">

		<?php
			$sql_empresa = ('select * from empresa where id_empresa = '.$_SESSION['vgs_emprego'].';');
			$resul_empresa = mysqli_query($conexao, $sql_empresa);
			$con_emp=mysqli_fetch_array($resul_empresa);
			$sql = ('select * from vagas_emprego where id_empresa = '.$_SESSION['vgs_emprego'].';');
			$resul = mysqli_query($conexao, $sql);
			while($con_vgs=mysqli_fetch_array($resul)){
				echo('
				<section class="col-6 mt-5">
					<div class="card">
						<h5 class="card-header">Formação: '.$con_vgs['Formacao'].'</h5>
						<div class="card-body text-center">
							<h5 class="card-title">Área: '.$con_vgs['Area'].'</h5>
							<h6 class="card-title">Atribuições: '.$con_vgs['atribuicoes'].'</h6>
							<h6 class="card-title">Skills: '.$con_vgs['skills'].'</h6>
							<p class="card-text">'.$con_vgs['Descricao'].'</p>
							<a href="mailto:'.$con_emp['email'].'" class="btn btn-primary">Enviar</a>
						</div>
					</div>
				</section>
				');
			}
		?>
			

		</section>
	</section>

	<?php include('rodape.html'); ?>
	<script src="node_modules/jquery/dist/jquery.js"></script>
	<script src="js/cadastro.js"></script>
	<script src="node_modules/popper.js/dist/umd/popper.js"></script>
	<script src="node_modules/bootstrap/dist/js/bootstrap.js"></script>
	<script src="https://igorescobar.github.io/jQuery-Mask-Plugin/js/jquery.mask.min.js"></script>

	<!-- javascript SimpleBar -->
	<script src="node_modules/OverlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
	<script src="node_modules/OverlayScrollbars/js/OverlayScrollbars.min.js"></script>
	<script src="js/javinha.js"></script>

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
		$_SESSION["assinatura"]=true;
		echo('<script>window.location.href = "compra1.php";</script>');
		}
	}else{
		$_SESSION["facaLog"]=true;
		echo('<script>window.location.href = "login.php";</script>');
	}
?>

</html>