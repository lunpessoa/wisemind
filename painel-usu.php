<?php
	include('assets/conexao.php');
	session_start();
	if(isset($_SESSION["log_status"]) && $_SESSION["log_status"]==true){
		$sql=('select * from usuarios where id_usuario = '. $_SESSION["id_user"].';');
		$resul=mysqli_query($conexao, $sql);
		$con=mysqli_fetch_array($resul);
	if($con['id_privilegio']==1){
		$sql2=('select * from estudantes where id_estudante = '. $_SESSION["id_user"].';');
		$resul2=mysqli_query($conexao, $sql2);
		$est=mysqli_fetch_array($resul2);
	}else if($con['id_privilegio']==2){
		$sql2=('select * from profissional where id_profissional = '. $_SESSION["id_user"].';');
		$resul2=mysqli_query($conexao, $sql2);
		$est=mysqli_fetch_array($resul2);
	}
?>

<!DOCTYPE html>
<html>

<head>
	<title>Perfil</title>
	<?php include('menu.php'); ?>
	<meta charset="utf-8">
	<link rel="stylesheet" href="style/painel-usu.css">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

</head>

<body>
	<div class="container-fluid position-fixed" style="margin-top:130px">
		<div class="row">
			<div class="col-3 ml-5">
				<div class="card border border-0">
					<div class="card-header bg-warning border-0 pl-2 image-card">
						<button class="btn position-relative p-0 mr-3 btn-perfil-img overflow-hidden"
							data-toggle='modal' data-target='#modalExemplo' href="#">
							<img src="<?php echo($con['perfil_img']); ?>" alt="">
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
									<button class="btn nav-link h5 pt-4 mb-0 w-100 text-left rounded-0 btn-outline" name="btn-informacao"  id="botao-conteudo-1" href="#"><i
											class="fas fa-user-cog mr-3 h5" ></i>
										<label class="h5 cursor-pointer">Informações</label></button>
								</li>
								<hr class="w-75 bg-white my-1">
								<li class="nav-item config-item">
									<button class="btn nav-link h5 pt-4 mb-0 w-100 text-left rounded-0 btn-outline" name="btn-seguranca" id="botao-conteudo-2" href="#"><i
											class="fas fa-shield-alt mr-3 h5"></i> <label
											class="h5 cursor-pointer">Segurança</label></button>
								</li>
								<hr class="w-75 bg-white my-1">
								<li class="nav-item config-item">
									<button class="btn nav-link h5 pt-4 mb-0 w-100 text-left rounded-0 btn-outline" name="btn-endereco" id="botao-conteudo-3" href="#"><i
											class="fas fa-mail-bulk mr-3 h5"></i>
										<label class="h5 cursor-pointer">Endereço</label></button>
								</li>
								<?php 
									if($con['id_privilegio']==1){	
								?>
								<hr class="w-75 bg-white my-1">
								<li class="nav-item config-item">
									<button class="btn nav-link h5 pt-4 mb-0 w-100 text-left rounded-0 btn-outline " name="btn-informacao"  id="botao-conteudo-4" href="#"><i
											class="fas fa-credit-card mr-3 h5"></i> <label class="h5 cursor-pointer">Plano
											/
											Pagamento</label></button>
								</li>
								<?php
									}
								?>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="modal fade" id="modalExemplo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
		aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Alterar Imagem Perfil</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<form action="assets/alterar.php" method="POST" enctype="multipart/form-data">
					<div class="modal-body">

						<div class="custom-file">
							<input type="file" class="custom-file-input" accept="image/png, image/jpeg" name="avatar"
								id="avatar">
							<label class="custom-file-label" for="avatar">Escolha o arquivo..</label>
						</div>

					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
						<button type="submit" class="btn btn-primary" name="alter-img">Alterar imagem</button>
					</div>
				</form>
			</div>
		</div>
	</div>


	<div class="container-fluid" style="margin-top:130px">
		<div class="row mb-5" id="informacao">
			<div class="col-7 offset-4">
				<div class="card border border-0 bg-transparent">
					<div class="card-header border-bottom-0 text-white p-4 d-flex">
						<label class="h3 text-font-calibri"><b>INFORMAÇÕES PESSOAIS</b></label>
						<button class="btn btn-hover-white ml-auto" id="atualizar-1"><i class="fas fa-pen"></i><b>
								ATUALIZAR</b></button>
					</div>

					<!--sumir- alterar-->
					<div class="card-body border-0 p-5 d-none" id="informacoes-alter-1">
						<form name="cad" action="assets/alterar.php" method="POST" class="container was-validated"
							novalidate="" autocomplete="off">
							<div class="row p-2">
								<div class="col-3">
									<span class="text-clear">Nome</span>
								</div>
								<div class="col-9">
									<div class="input-group form-group w-50">
										<input type="text" class="form-control text-light"
											style="background-color:#282d30; border-color:#1f1f1f;"
											placeholder="<?php echo($con['Nome']);?>"
											value="<?php echo($con['Nome']);?>" name="nome" required>
									</div>
								</div>
							</div>
							<div class="row p-2">
								<div class="col-3">
									<span class="text-clear">Sobrenome</span>
								</div>
								<div class="col-9">
									<div class="input-group form-group w-50">
										<input type="text" class="form-control text-light"
											style="background-color:#282d30; border-color:#1f1f1f;"
											placeholder="<?php echo($con['Sobrenome']);?>"
											value="<?php echo($con['Sobrenome']);?>" name="sobrenome" required>
									</div>
								</div>
							</div>
							<div class="row p-2">
								<div class="col-3">
									<span class="text-clear">Data de Nascimento</span>
								</div>
								<div class="col-9">
									<div class="input-group form-group w-50">
										<input type="date" class="form-control text-light"
											style="background-color:#282d30; border-color:#1f1f1f;"
											placeholder="<?php echo($con['Data_Nasc']);?>"
											value="<?php echo($con['Data_Nasc']);?>" name="data" required>
									</div>
								</div>
							</div>
							<div class="row p-2">
								<div class="col-3">
									<span class="text-clear">CPF</span>
								</div>
								<div class="col-9">
									<div class="input-group form-group w-50">
										<input type="text" class="form-control text-light"
											style="background-color:#282d30; border-color:#1f1f1f;"
											placeholder="<?php if($con['CPF']==0){echo("Adicionar");}else{echo($con['CPF']);}?>"
											value="<?php echo($con['CPF']);?>"
											<?php if($con['CPF']!=0){echo("required");}?> name="cpf">
									</div>
								</div>
							</div>

							<button type="submit" class="btn btn-warning" name="Enviar-1"
								value="Enviar-1">Atualizar</button>
						</form>
					</div>
					<div class="card-body border-0 p-5 " id="informacoes-1">
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
								<span
									class="h5 text-white"><?php if($con['CPF']==0){echo("Adicionar");}else{echo($con['CPF']);}?></span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<?php 
		if($con['id_privilegio']==1){
			
		?>
		<div class="row mb-5 " id="informacao-1-1">
			<div class="col-7 offset-4">
				<div class="card border border-0 bg-transparent">
					<div class="card-header border-bottom-0 text-white p-4 d-flex">
						<label class="h3 text-font-calibri"><b>DESCRIÇÃO</b></label>
						<button class="btn btn-hover-white ml-auto" id="atualizar-2"><i class="fas fa-pen"></i><b>
								ATUALIZAR</b></button>
					</div>
					<div class="card-body border-0 p-5 d-none" id="informacoes-alter-2">
						<form name="cad" action="assets/alterar.php" method="POST" class="container was-validated"
							novalidate="" autocomplete="off">
							<div class="row p-2">
								<div class="col-3">
									<span class="text-clear">Descrição</span>
								</div>
								<div class="col-9">
									<div class="input-group form-group w-50">
										<input type="text" class="form-control text-light"
											style="background-color:#282d30; border-color:#1f1f1f;"
											placeholder="<?php if($est['Situacao']!=0){echo("Adicionar");}else{echo($est['Situacao']);}?>"
											value="<?php echo($est['Situacao']);?>" name="descricao"
											<?php if($est['Situacao']!=0){echo("required");}?>>
									</div>
								</div>
							</div>


							<button type="submit" class="btn btn-warning" name="Enviar-2"
								value="Enviar-2">Atualizar</button>
						</form>
					</div>
					<div class="card-body border-0 p-5" id="informacoes-2">
						<div class="row p-2">
							<div class="col-3">
								<span class="text-clear">Descrição</span>
							</div>
							<div class="col-9">
								<span
									class="h5 text-white"><?php if($est['Situacao']!=0){echo("Adicionar");}else{echo($est['Situacao']);}?></span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php
		}
		?>

		<?php 
			if($con['id_privilegio']==1){
		?>
		<div class="row mb-5" id="informacao-1-2">
			<div class="col-7 offset-4">
				<div class="card border border-0 bg-transparent">
					<div class="card-header border-bottom-0 text-white p-4 d-flex">
						<label class="h3 text-font-calibri"><b>SITUAÇÃO</b></label>
						<button class="btn btn-hover-white ml-auto" id="atualizar-3"><i class="fas fa-pen"></i><b>
								ATUALIZAR</b></button>
					</div>

					<div class="card-body border-0 p-5 d-none" id="informacoes-alter-3">
						<form name="cad" action="assets/alterar.php" method="POST" class="container was-validated"
							novalidate="" autocomplete="off">
							<div class="row p-2">
								<div class="col-3">
									<span class="text-clear">Tendência de área</span>
								</div>
								<div class="col-9">
									<div class="input-group form-group w-50">
										<input type="text" class="form-control text-light"
											style="background-color:#282d30; border-color:#1f1f1f;" placeholder="
											<?php
											if($est['Tendencia_de_area']!=null){
												echo($est['Tendencia_de_area']);
												
											}else{
												echo("Adicionar");
											}?>" value="<?php echo($est['Tendencia_de_area']);?>" name="tendencia"
											<?php if($est['Tendencia_de_area']!=null){echo("required");}?>>
									</div>
								</div>
							</div>

							<div class="row p-2">
								<div class="col-3">
									<span class="text-clear">Skills</span>
								</div>
								<div class="col-9">
									<div class="input-group form-group w-50">
										<input type="text" class="form-control text-light"
											style="background-color:#282d30; border-color:#1f1f1f;"
											placeholder="<?php if($est['Skills']==null){echo("Adicionar");}else{echo($est['Skills']);}?>"
											value="<?php echo($est['Skills']);?>" name="skill"
											<?php if($est['Skills']!=null){echo("required");}?>>
									</div>
								</div>
							</div>


							<button type="submit" class="btn btn-warning" name="Enviar-3"
								value="Enviar">Atualizar</button>
						</form>
					</div>
					<div class="card-body border-0 p-5" id="informacoes-3">
						<div class="row p-2">
							<div class="col-3">
								<span class="text-clear">Tendencia de área</span>
							</div>
							<div class="col-9">
								<span
									class="h5 text-white"><?php if($est['Tendencia_de_area']==null){echo("Adicionar");}else{echo($est['Tendencia_de_area']);}?></span>
							</div>
						</div>
						<div class="row p-2">
							<div class="col-3">
								<span class="text-clear">Skills</span>
							</div>
							<div class="col-9">
								<span
									class="h5 text-white"><?php if($est['Skills']==null){echo("Adicionar");}else{echo($est['Skills']);}?></span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<?php
			}
		?>

		<?php 
			if($con['id_privilegio']==2){	
		?>
		<div class="row mb-5" id="informacao-2-1">
			<div class="col-7 offset-4">
				<div class="card border border-0 bg-transparent">
					<div class="card-header border-bottom-0 text-white p-4 d-flex">
						<label class="h3 text-font-calibri"><b>SITUAÇÃO</b></label>
						<button class="btn btn-hover-white ml-auto" id="atualizar-7"><i class="fas fa-pen"></i><b>
								ATUALIZAR</b></button>
					</div>

					<div class="card-body border-0 p-5 d-none" id="informacoes-alter-7">
						<form name="cad" action="assets/alterar.php" method="POST" class="container was-validated"
							novalidate="" autocomplete="off">
							<div class="row p-2">
								<div class="col-3">
									<span class="text-clear">Experiência</span>
								</div>
								<div class="col-9">
									<div class="input-group form-group w-50">
										<input type="text" class="form-control text-light"
											style="background-color:#282d30; border-color:#1f1f1f;" placeholder="
											<?php
											if($est['experiencia']!=null){
												echo($est['experiencia']);
												
											}else{
												echo("Adicionar");
											}?>" value="<?php echo($est['experiencia']);?>" name="experiencia"
											<?php if($est['experiencia']!=null){echo("required");}?>>
									</div>
								</div>
							</div>

							<div class="row p-2">
								<div class="col-3">
									<span class="text-clear">Certificado</span>
								</div>
								<div class="col-9">
									<div class="input-group form-group w-50">
										<input type="text" class="form-control text-light"
											style="background-color:#282d30; border-color:#1f1f1f;"
											placeholder="<?php if($est['certificado']==null){echo("Adicionar");}else{echo($est['certificado']);}?>"
											value="<?php echo($est['certificado']);?>" name="certificado"
											<?php if($est['certificado']!=0){echo("required");}?>>
									</div>
								</div>
							</div>


							<button type="submit" class="btn btn-warning" name="Enviar-3"
								value="Enviar">Atualizar</button>
						</form>
					</div>

					<div class="card-body border-0 p-5" id="informacoes-7">
						<div class="row p-2">
							<div class="col-3">
								<span class="text-clear">Experiência</span>
							</div>
							<div class="col-9">
								<span class="h5 text-white"><?php echo($est['experiencia']); ?></span>
							</div>
						</div>
						<div class="row p-2">
							<div class="col-3">
								<span class="text-clear">Certificado</span>
							</div>
							<div class="col-9">
								<span class="h5 text-white"><?php echo($est['certificado']); ?></span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>


		<div class="row mb-5" id="informacao-2-2">
			<div class="col-7 offset-4">
				<div class="card border border-0 bg-transparent">
					<div class="card-header border-bottom-0 text-white p-4 d-flex">
						<label class="h3 text-font-calibri"><b>ESPECIALIZAÇÃO</b></label>
						<button class="btn btn-hover-white ml-auto" id="atualizar-8"><i class="fas fa-pen"></i><b>
								ATUALIZAR</b></button>
					</div>

					<div class="modal fade" id="modalProfissao" tabindex="-1" role="dialog"
						aria-labelledby="exampleModalLabel" aria-hidden="true">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" id="exampleModalLabel">Adicionar profissão</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<form action="assets/alterar.php" method="POST" class="container was-validated"
								novalidate="" autocomplete="off">
									<div class="modal-body">

										<div class="form-group">
											<label for="exampleInputNome1">Área</label>
											<input name="area" type="text" class="form-control" id="area"
												placeholder="Área da profissão" required>
											<label for="exampleInputNome1">Profissão</label>
											<input name="profissao" type="text" class="form-control" id="profissao"
												placeholder="Profissão" required>
										</div>

									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-secondary"
											data-dismiss="modal">Fechar</button>
										<button type="submit" class="btn btn-primary"
											name="adicionar-prof">Adicionar</button>
									</div>
								</form>
							</div>
						</div>
					</div>

					<div class="card-body border-0 p-5 d-none" id="informacoes-alter-8">
						<?php
						$sql_pesq=('select * from especializacao where id_prof = "'.$_SESSION["id_user"].'";');
						$sql_pesq_query = mysqli_query($conexao, $sql_pesq) or die (mysqli_error($conexao));
						$resul_pesq = mysqli_fetch_array($sql_pesq_query);
						$cont = mysqli_num_rows( $sql_pesq_query);
			
						if($cont==0){
							echo('<div class="row p-2">
								<div class="col-9">
									<span class="h5 text-white">Adicionar</span>
								</div>
							</div>');
						}else{
					?>
						<form name="cad" action="assets/alterar.php" method="POST" class="container was-validated"
							novalidate="" autocomplete="off">
							

							<table class="table table-borderless text-light w-50">
								<thead>
									<tr>
										<th scope="col">Área</th>
										<th scope="col">Profissão</th>
									</tr>
								</thead>
								<tbody>
								<?php
									$sqlmostrar=('select * from especializacao where id_prof = "'.$_SESSION["id_user"].'";');
									$resul3=mysqli_query($conexao, $sqlmostrar);
									while($con_prof=mysqli_fetch_array($resul3)){
										echo('
											<tr>
												<td><input type="text" class="form-control text-light w-75"
														style="background-color:#282d30; border-color:#1f1f1f;"
														value="'.$con_prof["Area"].'"
														placeholder="'.$con_prof["Area"].'"
														name="area'.$con_prof["id_espc"].'" required></td>
												<td><input type="text" class="form-control text-light w-75"
														style="background-color:#282d30; border-color:#1f1f1f;" 
														placeholder="'.$con_prof["Profissao"].'"
														value="'.$con_prof["Profissao"].'"
														name="profissao'.$con_prof["id_espc"].'" required></td>
											</tr>');
									}
								?>
								</tbody>
							</table>


							<button type="submit" class="btn btn-warning" name="Enviar-8"
								value="Enviar">Atualizar</button>
							<button type="submit" class="btn btn-dark" id="Fechar-8" value="Enviar">Fechar</button>
						</form>
						<?php
							}
						?>
						<div class="row justify-content-end d-flex">
							<button class="btn btn-warning" data-toggle="modal" data-target="#modalProfissao" href="#">
								Adicionar
							</button>
						</div>
					</div>
					<div class="card-body border-0 p-5" id="informacoes-8">
						<?php
							if($cont==0){
								echo('<div class="row p-2">
									<div class="col-9">
										<span class="h5 text-white">Adicionar</span>
									</div>
								</div>');
							}else{
						?>
						<table class="table table-borderless text-light">
							<thead>
								<tr>
									<th scope="col">Área</th>
									<th scope="col">Profissão</th>
								</tr>
							</thead>
							<tbody>
							<?php
								$sqlmostrar=('select * from especializacao where id_prof = "'.$_SESSION["id_user"].'";');
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
						<?php
							}
						?>
					</div>
				</div>
			</div>
		</div>
		<?php
			}
		?>

		<div class="row mb-5 d-none" id="seguranca-1">
			<div class="col-7 offset-4">
				<div class="card border border-0 bg-transparent">
					<div class="card-header border-bottom-0 text-white p-4 d-flex">
						<label class="h3 text-font-calibri"><b>NÚMERO DE CONTATO</b></label>
						<button class="btn btn-hover-white ml-auto" id="atualizar-4"><i class="fas fa-pen"></i><b>
								ATUALIZAR</b></button>
					</div>
					<div class="card-body border-0 p-5 d-none" id="informacoes-alter-4">
						<form name="cad" action="assets/alterar.php" method="POST" class="container was-validated"
							novalidate="" autocomplete="off">
							<div class="row p-2">
								<div class="col-3">
									<span class="text-clear">Número de celular</span>
								</div>
								<div class="col-9">
									<div class="input-group form-group w-50">
										<input type="text" class="form-control text-light"
											style="background-color:#282d30; border-color:#1f1f1f;"
											placeholder="<?php echo($con['Cell']);?>"
											value="<?php echo($con['Cell']);?>" name="celular" required>
									</div>
								</div>
							</div>


							<button type="submit" class="btn btn-warning" name="Enviar-4"
								value="Enviar">Atualizar</button>
						</form>
					</div>
					<div class="card-body border-0 p-5" id="informacoes-4">
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

		<div class="row mb-5 d-none" id="seguranca-2">
			<div class="col-7 offset-4">
				<div class="card border border-0 bg-transparent">
					<div class="card-header border-bottom-0 text-white p-4 d-flex">
						<label class="h3 text-font-calibri"><b>SENHA</b></label>
						<button class="btn btn-hover-white ml-auto" id="atualizar-6"><i class="fas fa-pen"></i><b>
								ATUALIZAR</b></button>
					</div>
					<div class="card-body border-0 p-5 d-none" id="informacoes-alter-6">
						<form name="cad" action="assets/alterar.php" method="POST" class="container was-validated"
							novalidate="" autocomplete="off">
							<div class="row p-2">
								<div class="col-3">
									<span class="text-clear">Senha atual</span>
								</div>
								<div class="col-9">
									<div class="input-group form-group w-50">
										<input type="password" class="form-control text-light"
											style="background-color:#282d30; border-color:#1f1f1f;"
											placeholder="Senha atual" name="senha" required>
									</div>
								</div>
							</div>

							<div class="row p-2">
								<div class="col-3">
									<span class="text-clear">Nova senha</span>
								</div>
								<div class="col-9">
									<div class="input-group form-group w-50">
										<input type="password" class="form-control text-light"
											style="background-color:#282d30; border-color:#1f1f1f;"
											placeholder="Senha nova" name="senha-nova" required>
									</div>
								</div>
							</div>

							<div class="row p-2">
								<div class="col-3">
									<span class="text-clear">Confirmar nova senha</span>
								</div>
								<div class="col-9">
									<div class="input-group form-group w-50">
										<input type="password" class="form-control text-light"
											style="background-color:#282d30; border-color:#1f1f1f;"
											placeholder="Senha nova" name="confirm-senha" required>
									</div>
								</div>
							</div>


							<button type="submit" class="btn btn-warning" name="Enviar-6"
								value="Enviar">Atualizar</button>
							<button type="submit" class="btn btn-dark" id="Fechar-6" value="Enviar">Fechar</button>
						</form>
					</div>
					<div class="card-body border-0 p-5" id="informacoes-6">
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

		<div class="row mb-5" id="informacao-reg">
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

		<div class="row mb-5 d-none" id="endereco">
			<div class="col-7 offset-4">
				<div class="card border border-0 bg-transparent">
					<div class="card-header border-bottom-0 text-white p-4 d-flex">
						<label class="h3 text-font-calibri"><b>ENDEREÇO</b></label>
						<button class="btn btn-hover-white ml-auto" id="atualizar-5"><i class="fas fa-pen"></i><b>
								ATUALIZAR</b></button>
					</div>


					<div class="card-body border-0 p-5 d-none" id="informacoes-alter-5">
						<form name="cad" action="assets/alterar.php" method="POST" class="container was-validated"
							novalidate="" autocomplete="off">
							<div class="row p-2">
								<div class="col-3">
									<span class="text-clear">Rua</span>
								</div>
								<div class="col-9">
									<div class="input-group form-group w-50">
										<input type="text" class="form-control text-light"
											style="background-color:#282d30; border-color:#1f1f1f;"
											placeholder="<?php if($con['Rua']==null){echo("Adicionar");}else{echo($con['Rua']);}?>"
											value="<?php echo($con['Rua']);?>" name="rua"
											<?php if($con['Rua']!=null){echo("required");}?>>
									</div>
								</div>
							</div>

							<div class="row p-2">
								<div class="col-3">
									<span class="text-clear">Numero</span>
								</div>
								<div class="col-9">
									<div class="input-group form-group w-50">
										<input type="text" class="form-control text-light"
											style="background-color:#282d30; border-color:#1f1f1f;"
											placeholder="<?php if($con['Numero']==null){echo("Adicionar");}else{echo($con['Numero']);}?>"
											value="<?php echo($con['Numero']);?>" name="numero"
											<?php if($con['Numero']!=null){echo("required");}?>>
									</div>
								</div>
							</div>

							<div class="row p-2">
								<div class="col-3">
									<span class="text-clear">CEP</span>
								</div>
								<div class="col-9">
									<div class="input-group form-group w-50">
										<input type="text" class="form-control text-light"
											style="background-color:#282d30; border-color:#1f1f1f;"
											placeholder="<?php if($con['CEP']==null){echo("Adicionar");}else{echo($con['CEP']);}?>"
											value="<?php echo($con['CEP']);?>" name="CEP"
											<?php if($con['CEP']!=null){echo("required");}?>>
									</div>
								</div>
							</div>

							<div class="row p-2">
								<div class="col-3">
									<span class="text-clear">Bairro</span>
								</div>
								<div class="col-9">
									<div class="input-group form-group w-50">
										<input type="text" class="form-control text-light"
											style="background-color:#282d30; border-color:#1f1f1f;"
											placeholder="<?php if($con['Bairro']==null){echo("Adicionar");}else{echo($con['Bairro']);}?>"
											value="<?php echo($con['Bairro']);?>" name="Bairro"
											<?php if($con['Bairro']!=null){echo("required");}?>>
									</div>
								</div>
							</div>

							<div class="row p-2">
								<div class="col-3">
									<span class="text-clear">Cidade</span>
								</div>
								<div class="col-9">
									<div class="input-group form-group w-50">
										<input type="text" class="form-control text-light"
											style="background-color:#282d30; border-color:#1f1f1f;"
											placeholder="<?php if($con['Cidade']==null){echo("Adicionar");}else{echo($con['Cidade']);}?>"
											value="<?php echo($con['Cidade']);?>" name="Cidade"
											<?php if($con['Cidade']!=null){echo("required");}?>>
									</div>
								</div>
							</div>

							<div class="row p-2">
								<div class="col-3">
									<span class="text-clear">Estado</span>
								</div>
								<div class="col-9">
									<div class="input-group form-group w-50">
										<input type="text" class="form-control text-light"
											style="background-color:#282d30; border-color:#1f1f1f;"
											placeholder="<?php if($con['Estado']==null){echo("Adicionar");}else{echo($con['Estado']);}?>"
											value="<?php echo($con['Estado']);?>" name="Estado"
											<?php if($con['Estado']!=null){echo("required");}?>>
									</div>
								</div>
							</div>


							<button type="submit" class="btn btn-warning" name="Enviar-5"
								value="Enviar">Atualizar</button>
						</form>
					</div>


					<div class="card-body border-0 p-5" id="informacoes-5">
						<div class="row p-2">
							<div class="col-3">
								<span class="text-clear">Rua</span>
							</div>
							<div class="col-9">
								<span
									class="h5 text-white"><?php if($con['Rua']==null){echo("Adicionar");}else{echo($con['Rua']);}?></span>
							</div>
						</div>
						<div class="row p-2">
							<div class="col-3">
								<span class="text-clear">Nº</span>
							</div>
							<div class="col-9">
								<span
									class="h5 text-white"><?php if($con['Numero']==null){echo("Adicionar");}else{echo($con['Numero']);}?></span>
							</div>
						</div>
						<div class="row p-2">
							<div class="col-3">
								<span class="text-clear">CEP</span>
							</div>
							<div class="col-9">
								<span
									class="h5 text-white"><?php if($con['CEP']==null){echo("Adicionar");}else{echo($con['CEP']);}?></span>
							</div>
						</div>
						<div class="row p-2">
							<div class="col-3">
								<span class="text-clear">Bairro</span>
							</div>
							<div class="col-9">
								<span
									class="h5 text-white"><?php if($con['Bairro']==null){echo("Adicionar");}else{echo($con['Bairro']);}?></span>
							</div>
						</div>
						<div class="row p-2">
							<div class="col-3">
								<span class="text-clear">Cidade</span>
							</div>
							<div class="col-9">
								<span
									class="h5 text-white"><?php if($con['Cidade']==null){echo("Adicionar");}else{echo($con['Cidade']);}?></span>
							</div>
						</div>
						<div class="row p-2">
							<div class="col-3">
								<span class="text-clear">Estado</span>
							</div>
							<div class="col-9">
								<span
									class="h5 text-white"><?php if($con['Estado']==null){echo("Adicionar");}else{echo($con['Estado']);}?></span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<?php
			if($con['id_privilegio']==1){
		?>
		<div class="row mb-5 d-none" id="plano">
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
								<span class="h5 text-white"><i class="fas fa-check mr-2"></i> <i
										class="fas fa-times mr-2"></i> Não confirmado</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php
			}
		?>


	</div>
	
</body>
<script src='assets/painel-usu.js'></script>
<?php
	if($con['id_privilegio']==1){
		echo("<script>estudante();</script>");
	}
	if($con['id_privilegio']==2){
		echo("<script>profissional();</script>");
	}
?>
<script>
	document.getElementById("Fechar-6").onclick = (e) => {
		e.preventDefault()
		document.getElementById("atualizar-6").setAttribute('class', 'btn btn-hover-white ml-auto')
		document.getElementById("informacoes-6").setAttribute('class', 'card-body border-0 p-5 ')
		document.getElementById("informacoes-alter-6").setAttribute('class', 'card-body border-0 p-5 d-none')
	}
	var atualizar = function (a) {
		for (let k = 1; k <= 8; k++)
			if (k == a) {
				document.getElementById("atualizar-" + a).setAttribute('class', 'd-none')
				document.getElementById("informacoes-" + a).setAttribute('class', 'card-body border-0 p-5 d-none')
				document.getElementById("informacoes-alter-" + a).setAttribute('class', 'card-body border-0 p-5')
			}
	}


	for (let a = 1; a <= 8; a++) {
		var link_alter = document.getElementById("atualizar-" + a)
		if (link_alter != null) {
			link_alter.onclick = (e) => {
				e.preventDefault()
				atualizar(a)
			}
		}
	}
</script>
<script>
	/*
	var ativar = function (x) {
		for (let y = 1; y <= 5; y++)
			if (y == x) {
				var botao = document.getElementById("botao-conteudo-" + x)
				if (botao != null) {
					botao.setAttribute('class', 'btn nav-link h5 pt-4 mb-0 w-100 text-left rounded-0 btn-outline ativado')
				}
			} else {
				var botao = document.getElementById("botao-conteudo-" + y)
				if (botao != null) {
					botao.setAttribute('class', 'btn nav-link h5 pt-4 mb-0 w-100 text-left rounded-0 btn-outline')
				}
			}
	}

	for (let x = 1; x <= 5; x++) {
		var link = document.getElementById("botao-conteudo-" + x)
		if (link != null) {
			link.onclick = (e) => {
				e.preventDefault()
				ativar(x)
			}
		}
	}*/
</script>
<script>
	// Add the following code if you want the name of the file appear on select
	$(".custom-file-input").on("change", function () {
		var fileName = $(this).val().split("\\").pop();
		$(this).siblings(".custom-file-label").addClass("selected").html(fileName);
	});
</script>
<?php
		}else{
			$_SESSION["facaLog"]=true;
        	echo('<script>window.location.href = "login.php";</script>');
		}

?>
<?php
	if (!isset($_SESSION["alterado"])) {
		$_SESSION["alterado"]=false;
	}

?>
<?php if( $_SESSION["alterado"]==true){ 
	include('toast.php');
	echo("<script src='assets/toast.js'></script>
	<script>alterado();</script>");

	$_SESSION["alterado"]=false;
	}

?>
<?php
	if(!isset($_SESSION["erroAlterado"])) {
		$_SESSION["erroAlterado"]=false;
	}

?>
<?php if($_SESSION["erroAlterado"]==true){ 
	include('toast.php');
	echo("<script src='assets/toast.js'></script>
	<script>erroAlterado();</script>");

	$_SESSION["erroAlterado"]=false;
	}

	
?>

<?php
	if (!isset( $_SESSION["senhas-difer"])) {
		$_SESSION["senhas-difer"]=false;
	}

?>
<?php if($_SESSION["senhas-difer"]==true){ 
	include('toast.php');
	echo("<script src='assets/toast.js'></script>
	<script>senhas();</script>");

	$_SESSION["senhas-difer"]=false;
	}

?>



</html>