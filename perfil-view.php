<?php
	include('assets/conexao.php');
	session_start();
	$perfil = true;
	if(isset($_SESSION["log_status"]) && $_SESSION["log_status"]==true || isset($_SESSION["adminlog_status"]) && $_SESSION["adminlog_status"]==true){
		
		if(isset($_GET["us"])){
			$usu = $_GET["us"];
			$sql=('select * from usuarios where id_usuario = '.$usu.';');
			$resul=mysqli_query($conexao, $sql);
			$con=mysqli_fetch_array($resul);

			$data2 = date("Y-m-d"); 
			$data1 = $con['Data_Nasc'];
			$data1 = new DateTime($data1);
			$data2 = new DateTime($data2);
			$intervalo = $data2->diff($data1);

			$idade = $intervalo->y;

			

			if($con['CPF']){
				$cpf_test = str_split($con['CPF'], 3);
				$cpf = $cpf_test[0].'.'.$cpf_test[1].'.'.$cpf_test[2].'-'.$cpf_test[3];
			}
			
			$c = str_split($con['Cell'], 1);
			$cell = '('.$c[0].$c[1].') '.$c[2].$c[3].$c[4].$c[5].$c[6].'-'.$c[7].$c[8].$c[9].$c[10];

			if($con['CEP']){
				$cep_text = str_split($con['CEP'], 5);
				$cep = $cep_text[0].'-'.$cep_text[1];
			}

			if($con['id_privilegio']==1){
				$sql2=('select * from estudantes where id_estudante = '. $usu.';');
				$resul2=mysqli_query($conexao, $sql2);
				$est=mysqli_fetch_array($resul2);
				$tipo = "Estudante";
				
			}else if($con['id_privilegio']==2){
				$sql2=('select * from profissional where id_profissional = '. $usu.';');
				$resul2=mysqli_query($conexao, $sql2);
				$est=mysqli_fetch_array($resul2);

				$tipo = "Profissional";
			}
?>

<!DOCTYPE html>
<html>

<head>
	<title>Perfil</title>
	<meta charset="utf-8">
	<?php include('menu.php'); ?>
	<link rel="stylesheet" href="style/perfil-view.css">
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
						<img class="img-fluid" src="<?php echo($con['perfil_img']); ?>" alt="">
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
								<span class="text-clear">Usuário</span>
							</div>
							<div class="col-9">
								<span class="h5 text-white"><?php echo($tipo);?></span>
							</div>
						</div>
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
								<span class="h5 text-white"><?php echo ($idade.' anos');?></span>
							</div>
						</div>
						<div class="row p-2">
							<div class="col-3">
								<span class="text-clear">E-mail</span>
							</div>
							<div class="col-9">
								<span class="h5 text-white"><?php echo($con['Email']);?></span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<?php 
			if($con['id_privilegio']==1){	
		?>

		<div class="row mb-5">
			<div class="col-7 offset-4">
				<div class="card border border-0 bg-transparent">
					<div class="card-header border-bottom-0 text-white p-4 d-flex">
						<label class="h3 text-font-calibri"><b>DESCRIÇÃO</b></label>
					</div>
					<div class="card-body border-0 p-5">
						<div class="row p-2">
							<div class="col-3">
								<span class="text-clear">Descrição</span>
							</div>
							<div class="col-9">
								<span class="h5 text-white"><?php echo($est['Situacao']); ?></span>
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
						<label class="h3 text-font-calibri"><b>SITUAÇÃO</b></label>
					</div>
					<div class="card-body border-0 p-5">
						<div class="row p-2">
							<div class="col-3">
								<span class="text-clear">Tendencia de área</span>
							</div>
							<div class="col-9">
								<span class="h5 text-white"><?php $est['Tendencia_de_area'] ?></span>
							</div>
						</div>
						<div class="row p-2">
							<div class="col-3">
								<span class="text-clear">Skills</span>
							</div>
							<div class="col-9">
								<span class="h5 text-white"><?php echo($est['Skills']); ?></span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<?php 
			}

			if($con['id_privilegio']==2){	
		?>

		<div class="row mb-5">
			<div class="col-7 offset-4">
				<div class="card border border-0 bg-transparent">
					<div class="card-header border-bottom-0 text-white p-4 d-flex">
						<label class="h3 text-font-calibri"><b>SITUAÇÃO</b></label>
					</div>
					<div class="card-body border-0 p-5">
						<div class="row p-2">
							<div class="col-3">
								<span class="text-clear">Experiência</span>
							</div>
							<div class="col-9">
								<span class="h5 text-white"><?php echo($est['experiencia']); ?></span>
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
						<label class="h3 text-font-calibri"><b>ESPECIALIZAÇÃO</b></label>
					</div>
					<div class="card-body border-0 p-5">
						<table class="table table-borderless text-light">
							<thead>
								<tr>
									<th scope="col">Área</th>
									<th scope="col">Profissão</th>
								</tr>
							</thead>
							<tbody>
								<?php
								$sqlmostrar=('select * from especializacao where id_prof = "'.$usu.'";');
								$resul3=mysqli_query($conexao, $sqlmostrar);
								while($con_prof=mysqli_fetch_array($resul3)){
									echo('
										<tr>
											<td>'.$con_prof["Area"].'</td>
											<td>'.$con_prof["Profissao"].'</td>
											</tr>');
									}
								?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>

		<?php 
			}
		?>

	</div>

	<script src="node_modules/jquery/dist/jquery.js"></script>
	<script src="node_modules/popper.js/dist/umd/popper.js"></script>
	<script src="node_modules/bootstrap/dist/js/bootstrap.js"></script>

	<!-- javascript SimpleBar -->
	<script src="node_modules/OverlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
	<script src="node_modules/OverlayScrollbars/js/OverlayScrollbars.min.js"></script>
	<script src="js/javinha.js"></script>

</body>

<?php
	
		}else{
        	echo('<script>window.close();</script>');
		}
	}else{
		$_SESSION["facaLog"]=true;
		echo('<script>window.location.href = "login.php";</script>');
	}

	
?>


</html>