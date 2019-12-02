<?php
	ob_start();
	include('assets/conexao.php');
	session_start();
	if(isset($_SESSION["log_status"]) && $_SESSION["log_status"]==true || isset($_SESSION["adminlog_status"]) && $_SESSION["adminlog_status"]==true){
?>

<!DOCTYPE html>
<html>

<head>
	<title>Parcerias</title>
	<?php include('menu.php'); ?>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style/parcerias.css">

</head>

<body>
	<section class="container mb-5" style="margin-top:150px; min-height:500px">
		<hr>
		<section class="row mt-5">
			<?php
				$sqlmostrar=('select * from empresa');
                $resul=mysqli_query($conexao, $sqlmostrar);
                while($con_emp=mysqli_fetch_array($resul)){
					echo('
					<section class="col-12">
						<a class="btn" href="parcerias.php?vgs='.$con_emp['id_empresa'].'">
							<div class="card mb-3 w-100">
								<div class="row">
									<div class="col-md-4">
										<img src="img/parcerias/'.$con_emp['empresa_img'].'" class="card-img" alt="...">
									</div>
									<div class="col-md-8">
										<div class="card-body text-left">
											<h5 class="card-title h4 mt-4 font-italic">'.$con_emp['Nome_Fantasia'].'</h5>
											<p class="card-text mt-4">'.$con_emp['descricao'].'</p>
											<button class="btn p-0 d-block text-primary"
												href="https://'.$con_emp['link'].'">'.$con_emp['link'].'</button>
											<label
												class="w-100 text-right cursor-pointer text-dark font-roboto font-weight-bold">Verificar
												Vagas</label>
										</div>
									</div>
								</div>
							</div>
						</a>
					</section>
					');

					if(isset($_GET['vgs'])){
                        $_SESSION['vgs_emprego'] = $_GET['vgs'];
                        header('Location: vagas.php');  
                    }
				}
			?>

		</section>
	</section>

	<?php include('rodape.html'); ?>
	<script src="node_modules/jquery/dist/jquery.js"></script>
	<script src="node_modules/popper.js/dist/umd/popper.js"></script>
	<script src="node_modules/bootstrap/dist/js/bootstrap.js"></script>

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
</script>
<?php
		}else{
			$_SESSION["facaLog"]=true;
        	echo('<script>window.location.href = "login.php";</script>');
		}
	
?>

</html>