<html>

<head>
	<?php include('menu.php'); ?>
	<link rel="shortcut icon" href="img/ico.png" />
	<link rel="stylesheet" type="text/css" href="style/cssuporte.css" />
	<meta charset="UTF-8">
	<title> Wise Mind </title>
</head>

<body id="body">
	<nav class="nav position-fixed button-back text-center align-items-center d-flex">
		<a href="#inicio" class="slide-section text-dark bg-warning"><i class="fas fa-angle-up"></i></a>
	</nav>

	<section id="inicio" class="img-fluid backimage" alt="Responsive image">
		<img src="img/wiserhelp.png" class="position-relative wiserelement" alt="">
	</section>

	<section class="container-fluid mb-5">
		<div class="row justify-content-center text-center">
			<div class="col-3 mb-5">
				<a href="#problema1" class="slide-section text-decoration-none text-dark" data-toggle="tooltip"
					data-placement="top" title="Palavras imprópias no meu chat">
					<i class="fas fa-comment-slash font-icon d-block"></i>
					<label class="lbl-links">Palavras imprópias</label>
				</a>
			</div>
			<div class="col-3 mb-5">
				<a href="#problema2" class="slide-section text-decoration-none text-dark" data-toggle="tooltip"
					data-placement="top" title="Não estou conseguindo efetuar o pagamento">
					<i class="fas fa-money-bill-wave font-icon d-block"></i>
					<label class="lbl-links">Pagamento</label>
				</a>
			</div>
			<div class="col-3 mb-5">
				<a href="#problema3" class="slide-section text-decoration-none text-dark" data-toggle="tooltip"
					data-placement="top" title="Não consigo modificar as informações do meu perfil">
					<i class="fas fa-user-edit font-icon d-block"></i>
					<label class="lbl-links">Perfil</label>
				</a>
			</div>
			<div class="col-3 mb-5">
				<a href="#problema4" class="slide-section text-decoration-none text-dark" data-toggle="tooltip"
					data-placement="top" title="Meu chat não funciona">
					<i class="fas fa-comments font-icon d-block"></i>
					<label class="lbl-links">Chat</label>
				</a>
			</div>
			<div class="col-3 mb-5">
				<a href="#problema5" class="slide-section text-decoration-none text-dark" data-toggle="tooltip"
					data-placement="top" title="Não consigo mexer no site">
					<i class="fas fa-desktop font-icon d-block"></i>
					<label class="lbl-links">Funcionamento Site</label>
				</a>
			</div>
			<div class="col-3 mb-5">
				<a href="#problema6" class="slide-section text-decoration-none text-dark" data-toggle="tooltip"
					data-placement="top" title="Não consigo cancelar a minha conta">
					<i class="fas fa-user-times font-icon d-block"></i>
					<label class="lbl-links">Cancelar Conta</label>
				</a>
			</div>
			<div class="col-3 mb-5">
				<a href="#problema7" class="slide-section text-decoration-none text-dark" data-toggle="tooltip"
					data-placement="top" title="Dificuldade em achar Profissionais">
					<i class="fas fa-user-tie font-icon d-block"></i>
					<label class="lbl-links">Encontrar Profissionais</label>
				</a>
			</div>
		</div>
	</section>

	<section class="w-100 position-absolute overflow-hidden" style="margin-top:30px">
		<img src="img/ondinha2.png">
	</section>

	<section class="container-fluid suporte-form">
		<section class="container">
		<p class="h3 text-light font-galada text-center pb-3">Não achou a solução? Envie-nos uma mensagem!</p>
			<form>
				<div class="form-row">
					<div class="form-group col-sm-6">
						<label for="inputNome" class="text-light lbl-links">Nome</label>
						<input type="text" class="form-control" id="inputNome" placeholder="José">
					</div>
					<div class="form-group col-sm-6">
						<label for="inputSobrenome" class="text-light lbl-links">Sobrenome</label>
						<input type="text" class="form-control" id="inputSobrenome" placeholder="Magalhães">
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-sm-8">
						<label for="inputEmail" class="text-light lbl-links">E-mail</label>
						<input type="text" class="form-control" id="inputEmail" placeholder="email@email.com">
					</div>
					<div class="form-group col-sm-2">
						<label for="inputDDD" class="text-light lbl-links">DDD</label>
						<input type="text" class="form-control" id="inputDDD" placeholder="DDD">
					</div>
					<div class="form-group col-sm-2">
						<label for="inputTelefone" class="text-light lbl-links">Telefone</label>
						<input type="text" class="form-control" id="inputTelefone" placeholder="99999-9999">
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-sm-12">
						<label for="inputDescricao" class="text-light lbl-links">Descrição</label>
						<textarea class="form-control" id="inputDescricao" rows="5"
							placeholder="Descrição..."></textarea>
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-sm-12 justify-content-center d-flex mt-5">
						<button type="submit" class="btn btn-light">Enviar</button>
						<a tabindex="0" class="btn btn-dark ml-2" role="button" data-toggle="popover"
							data-placement="right" data-trigger="focus" title="Me ajuda"
							data-content="Preencha com suas informações">Ajuda</a>
					</div>
				</div>
			</form>
		</section>
	</section>

	<section class="w-100 position-absolute overflow-hidden" style="margin-top:-120px;">
		<img src="img/ondinha3.png">
	</section>


	<section id="problema1" class="container-fluid" style="padding-top:5em">
		<div class="container p-5">
			<div class="row">
				<div class="col-4 text-center align-items-center d-flex">
					<label>
						<i class="fas fa-comment-slash font-icon d-block"></i>
						<h2 class="d-block mt-3">Palavras imprópias no chat</h2>
					</label>
				</div>
				<div class="col-8 text-justify">
					<h4>Se você paga pelo Plano Wiser, mas não consegue usar seus recursos, experimente o seguinte:</h4>

					<h5><b>Saia e entre novamente na sua conta</b></h5>
					De vez em quando, é preciso forçar a sincronização entre as informações do seu dispositivo e do
					nosso
					sistema de contas.
					<br> <br>
					<h5><b>Confira o status da sua assinatura</b></h5>
					Acesse a sua página de assinatura e verifique se a sua assinatura Wiser ainda está ativa.
					<br><br>
					<h5><b>Verifique o status do seu pagamento</b></h5>
					Se ele aparecer como pendente no seu extrato bancário, talvez não tenha sido efetuado com sucesso.
					<br>Para saber mais, confira este artigo sobre solução de problemas com pagamentos.
					<br><br>
					A cobrança pendente é parte do processo de autorização do seu banco ou da sua operadora de cartão de
					crédito.s Quando você agenda um pagamento, é feita uma autorização temporária do valor. No entanto,
					se a
					transação não for concluída, nenhum valor será debitado da sua conta e a cobrança desaparecerá. O
					tempo
					que esse processo leva pode variar dependendo do seu banco ou da sua operadora de cartão de crédito.
					Para mais informações, entre em contato diretamente com o seu banco ou sua operadora de cartão de
					crédito.
					<br><br>
					<h5><b>Verifique se o Premium não está associado a outra conta</b></h5>
					Talvez você esteja conectado à conta errada. É possível criar mais de uma conta no Spotify, cada uma
					com
					seu próprio login, assinatura, informações e músicas salvas.
					<br>
					Ainda não funciona?
					<a href="#formulario" class="scrollSuave">clique aqui</a> para nos informar sobre possíveis falhas
					no
					serviço.
				</div>
			</div>
	</section>

	<section class="w-100 position-absolute overflow-hidden" style="margin-top:50px">
		<img src="img/ondinha2.png">
	</section>

	<section id="problema2" class="container-fluid inform-suport" style="background-color:#F0F3F6;">
		<div class="container p-5">
			<div class="row">
				<div class="col-8 text-justify">
					<h4>Se você paga pelo Plano Wiser, mas não consegue usar seus recursos, experimente o seguinte:</h4>

					<h5><b>Saia e entre novamente na sua conta</b></h5>
					De vez em quando, é preciso forçar a sincronização entre as informações do seu dispositivo e do
					nosso
					sistema de contas.
					<br> <br>
					<h5><b>Confira o status da sua assinatura</b></h5>
					Acesse a sua página de assinatura e verifique se a sua assinatura Wiser ainda está ativa.
					<br><br>
					<h5><b>Verifique o status do seu pagamento</b></h5>
					Se ele aparecer como pendente no seu extrato bancário, talvez não tenha sido efetuado com sucesso.
					<br>Para saber mais, confira este artigo sobre solução de problemas com pagamentos.
					<br><br>
					A cobrança pendente é parte do processo de autorização do seu banco ou da sua operadora de cartão de
					crédito.s Quando você agenda um pagamento, é feita uma autorização temporária do valor. No entanto,
					se a
					transação não for concluída, nenhum valor será debitado da sua conta e a cobrança desaparecerá. O
					tempo
					que esse processo leva pode variar dependendo do seu banco ou da sua operadora de cartão de crédito.
					Para mais informações, entre em contato diretamente com o seu banco ou sua operadora de cartão de
					crédito.
					<br><br>
					<h5><b>Verifique se o Premium não está associado a outra conta</b></h5>
					Talvez você esteja conectado à conta errada. É possível criar mais de uma conta no Spotify, cada uma
					com
					seu próprio login, assinatura, informações e músicas salvas.
					<br>
					Ainda não funciona?
					<a href="#formulario" class="scrollSuave">clique aqui</a> para nos informar sobre possíveis falhas
					no
					serviço.
				</div>
				<div class="col-4 text-center align-items-center d-flex">
					<label>
						<i class="fas fa-money-bill-wave font-icon d-block"></i>
						<h2 class="d-block mt-3">Não estou conseguindo efetuar o pagamento</h2>
					</label>
				</div>
			</div>
		</div>
	</section>

	<section class="w-100 position-absolute overflow-hidden">
		<img src="img/ondinha_gray.png">
	</section>

	<section id="problema3" class="container-fluid inform-suport" style="margin-top:5em">
		<div class="container p-5">
			<div class="row">
				<div class="col-4 text-center align-items-center d-flex">
					<label>
						<i class="fas fa-user-edit font-icon d-block"></i>
						<h2 class="d-block mt-3">Não consigo modificar as informações do meu perfil</h2>
					</label>
				</div>
				<div class="col-8 text-justify">
					<h4>Se você paga pelo Plano Wiser, mas não consegue usar seus recursos, experimente o seguinte:</h4>

					<h5><b>Saia e entre novamente na sua conta</b></h5>
					De vez em quando, é preciso forçar a sincronização entre as informações do seu dispositivo e do
					nosso
					sistema de contas.
					<br> <br>
					<h5><b>Confira o status da sua assinatura</b></h5>
					Acesse a sua página de assinatura e verifique se a sua assinatura Wiser ainda está ativa.
					<br><br>
					<h5><b>Verifique o status do seu pagamento</b></h5>
					Se ele aparecer como pendente no seu extrato bancário, talvez não tenha sido efetuado com sucesso.
					<br>Para saber mais, confira este artigo sobre solução de problemas com pagamentos.
					<br><br>
					A cobrança pendente é parte do processo de autorização do seu banco ou da sua operadora de cartão de
					crédito.s Quando você agenda um pagamento, é feita uma autorização temporária do valor. No entanto,
					se a
					transação não for concluída, nenhum valor será debitado da sua conta e a cobrança desaparecerá. O
					tempo
					que esse processo leva pode variar dependendo do seu banco ou da sua operadora de cartão de crédito.
					Para mais informações, entre em contato diretamente com o seu banco ou sua operadora de cartão de
					crédito.
					<br><br>
					<h5><b>Verifique se o Premium não está associado a outra conta</b></h5>
					Talvez você esteja conectado à conta errada. É possível criar mais de uma conta no Spotify, cada uma
					com
					seu próprio login, assinatura, informações e músicas salvas.
					<br>
					Ainda não funciona?
					<a href="#formulario" class="scrollSuave">clique aqui</a> para nos informar sobre possíveis falhas
					no
					serviço.
				</div>
			</div>
		</div>
	</section>

	<section class="w-100 position-absolute overflow-hidden" style="margin-top:50px">
		<img src="img/ondinha2.png">
	</section>

	<section id="problema4" class="container-fluid inform-suport" style="background-color:#F0F3F6;">
		<div class="container p-5">
			<div class="row">
				<div class="col-8 text-justify">
					<h4>Se você paga pelo Plano Wiser, mas não consegue usar seus recursos, experimente o seguinte:</h4>

					<h5><b>Saia e entre novamente na sua conta</b></h5>
					De vez em quando, é preciso forçar a sincronização entre as informações do seu dispositivo e do
					nosso
					sistema de contas.
					<br> <br>
					<h5><b>Confira o status da sua assinatura</b></h5>
					Acesse a sua página de assinatura e verifique se a sua assinatura Wiser ainda está ativa.
					<br><br>
					<h5><b>Verifique o status do seu pagamento</b></h5>
					Se ele aparecer como pendente no seu extrato bancário, talvez não tenha sido efetuado com sucesso.
					<br>Para saber mais, confira este artigo sobre solução de problemas com pagamentos.
					<br><br>
					A cobrança pendente é parte do processo de autorização do seu banco ou da sua operadora de cartão de
					crédito.s Quando você agenda um pagamento, é feita uma autorização temporária do valor. No entanto,
					se a
					transação não for concluída, nenhum valor será debitado da sua conta e a cobrança desaparecerá. O
					tempo
					que esse processo leva pode variar dependendo do seu banco ou da sua operadora de cartão de crédito.
					Para mais informações, entre em contato diretamente com o seu banco ou sua operadora de cartão de
					crédito.
					<br><br>
					<h5><b>Verifique se o Premium não está associado a outra conta</b></h5>
					Talvez você esteja conectado à conta errada. É possível criar mais de uma conta no Spotify, cada uma
					com
					seu próprio login, assinatura, informações e músicas salvas.
					<br>
					Ainda não funciona?
					<a href="#formulario" class="scrollSuave">clique aqui</a> para nos informar sobre possíveis falhas
					no
					serviço.
				</div>
				<div class="col-4 text-center align-items-center d-flex">
					<label>
						<i class="fas fa-comments font-icon d-block"></i>
						<h2 class="d-block mt-3">Meu chat não funciona</h2>
					</label>
				</div>
			</div>
		</div>
	</section>

	<section class="w-100 position-absolute overflow-hidden">
		<img src="img/ondinha_gray.png">
	</section>

	<section id="problema5" class="container-fluid inform-suport" style="margin-top:5em">
		<div class="container p-5">
			<div class="row">
				<div class="col-4 text-center align-items-center d-flex">
					<label>
						<i class="fas fa-desktop font-icon d-block"></i>
						<h2 class="d-block mt-3">Não consigo mexer no site</h2>
					</label>
				</div>
				<div class="col-8 text-justify">
					<h4>Se você paga pelo Plano Wiser, mas não consegue usar seus recursos, experimente o seguinte:</h4>

					<h5><b>Saia e entre novamente na sua conta</b></h5>
					De vez em quando, é preciso forçar a sincronização entre as informações do seu dispositivo e do
					nosso
					sistema de contas.
					<br> <br>
					<h5><b>Confira o status da sua assinatura</b></h5>
					Acesse a sua página de assinatura e verifique se a sua assinatura Wiser ainda está ativa.
					<br><br>
					<h5><b>Verifique o status do seu pagamento</b></h5>
					Se ele aparecer como pendente no seu extrato bancário, talvez não tenha sido efetuado com sucesso.
					<br>Para saber mais, confira este artigo sobre solução de problemas com pagamentos.
					<br><br>
					A cobrança pendente é parte do processo de autorização do seu banco ou da sua operadora de cartão de
					crédito.s Quando você agenda um pagamento, é feita uma autorização temporária do valor. No entanto,
					se a
					transação não for concluída, nenhum valor será debitado da sua conta e a cobrança desaparecerá. O
					tempo
					que esse processo leva pode variar dependendo do seu banco ou da sua operadora de cartão de crédito.
					Para mais informações, entre em contato diretamente com o seu banco ou sua operadora de cartão de
					crédito.
					<br><br>
					<h5><b>Verifique se o Premium não está associado a outra conta</b></h5>
					Talvez você esteja conectado à conta errada. É possível criar mais de uma conta no Spotify, cada uma
					com
					seu próprio login, assinatura, informações e músicas salvas.
					<br>
					Ainda não funciona?
					<a href="#formulario" class="scrollSuave">clique aqui</a> para nos informar sobre possíveis falhas
					no
					serviço.
				</div>
			</div>
		</div>
	</section>

	<section class="w-100 position-absolute overflow-hidden" style="margin-top:50px">
		<img src="img/ondinha2.png">
	</section>

	<section id="problema6" class="container-fluid inform-suport" style="background-color:#F0F3F6;">
		<div class="container p-5">
			<div class="row">
				<div class="col-8 text-justify">
					<h4>Se você paga pelo Plano Wiser, mas não consegue usar seus recursos, experimente o seguinte:</h4>

					<h5><b>Saia e entre novamente na sua conta</b></h5>
					De vez em quando, é preciso forçar a sincronização entre as informações do seu dispositivo e do
					nosso
					sistema de contas.
					<br> <br>
					<h5><b>Confira o status da sua assinatura</b></h5>
					Acesse a sua página de assinatura e verifique se a sua assinatura Wiser ainda está ativa.
					<br><br>
					<h5><b>Verifique o status do seu pagamento</b></h5>
					Se ele aparecer como pendente no seu extrato bancário, talvez não tenha sido efetuado com sucesso.
					<br>Para saber mais, confira este artigo sobre solução de problemas com pagamentos.
					<br><br>
					A cobrança pendente é parte do processo de autorização do seu banco ou da sua operadora de cartão de
					crédito.s Quando você agenda um pagamento, é feita uma autorização temporária do valor. No entanto,
					se a
					transação não for concluída, nenhum valor será debitado da sua conta e a cobrança desaparecerá. O
					tempo
					que esse processo leva pode variar dependendo do seu banco ou da sua operadora de cartão de crédito.
					Para mais informações, entre em contato diretamente com o seu banco ou sua operadora de cartão de
					crédito.
					<br><br>
					<h5><b>Verifique se o Premium não está associado a outra conta</b></h5>
					Talvez você esteja conectado à conta errada. É possível criar mais de uma conta no Spotify, cada uma
					com
					seu próprio login, assinatura, informações e músicas salvas.
					<br>
					Ainda não funciona?
					<a href="#formulario" class="scrollSuave">clique aqui</a> para nos informar sobre possíveis falhas
					no
					serviço.
				</div>
				<div class="col-4 text-center align-items-center d-flex">
					<label>
						<i class="fas fa-user-times font-icon d-block"></i>
						<h2 class="d-block mt-3">Estou com problemas na minha assinatura</h2>
					</label>
				</div>
			</div>
		</div>
	</section>

	<section class="w-100 position-absolute overflow-hidden">
		<img src="img/ondinha_gray.png">
	</section>

	<section id="problema7" class="container-fluid inform-suport" style="margin-top:5em">
		<div class="container p-5">
			<div class="row">
				<div class="col-4 text-center align-items-center d-flex">
					<label>
						<i class="fas fa-user-tie font-icon d-block"></i>
						<h2 class="d-block mt-3">Dificuldade em achar Profissionais</h2>
					</label>
				</div>
				<div class="col-8 text-justify">
					<h4>Se você paga pelo Plano Wiser, mas não consegue usar seus recursos, experimente o seguinte:</h4>

					<h5><b>Saia e entre novamente na sua conta</b></h5>
					De vez em quando, é preciso forçar a sincronização entre as informações do seu dispositivo e do
					nosso
					sistema de contas.
					<br> <br>
					<h5><b>Confira o status da sua assinatura</b></h5>
					Acesse a sua página de assinatura e verifique se a sua assinatura Wiser ainda está ativa.
					<br><br>
					<h5><b>Verifique o status do seu pagamento</b></h5>
					Se ele aparecer como pendente no seu extrato bancário, talvez não tenha sido efetuado com sucesso.
					<br>Para saber mais, confira este artigo sobre solução de problemas com pagamentos.
					<br><br>
					A cobrança pendente é parte do processo de autorização do seu banco ou da sua operadora de cartão de
					crédito.s Quando você agenda um pagamento, é feita uma autorização temporária do valor. No entanto,
					se a
					transação não for concluída, nenhum valor será debitado da sua conta e a cobrança desaparecerá. O
					tempo
					que esse processo leva pode variar dependendo do seu banco ou da sua operadora de cartão de crédito.
					Para mais informações, entre em contato diretamente com o seu banco ou sua operadora de cartão de
					crédito.
					<br><br>
					<h5><b>Verifique se o Premium não está associado a outra conta</b></h5>
					Talvez você esteja conectado à conta errada. É possível criar mais de uma conta no Spotify, cada uma
					com
					seu próprio login, assinatura, informações e músicas salvas.
					<br>
					Ainda não funciona?
					<a href="#formulario" class="scrollSuave">clique aqui</a> para nos informar sobre possíveis falhas
					no
					serviço.
				</div>
			</div>
		</div>
	</section>

	<?php include('rodape.html'); ?>
</body>
<script>
	$(document).ready(function () {
		$('.slide-section').click(function (e) {
			var linkHref = $(this).attr('href');

			$('html, body').animate({
				scrollTop: $(linkHref).offset().top
			});

			e.preventDefault();
		});
	});
</script>

</html>