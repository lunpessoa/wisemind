<html>

<head>
	<title> Suporte </title>
	<?php 
		include('assets/conexao.php');
		include('menu.php'); 
	?>
	
	<link rel="shortcut icon" href="img/ico.png" />
	<link rel="stylesheet" type="text/css" href="style/cssuporte.css" />
	<meta charset="UTF-8">

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

	<section id="formulario" class="container-fluid suporte-form">
		<section class="container">
			<p class="h3 text-light font-galada text-center pb-3">Não achou a solução? Envie-nos uma mensagem!</p>
			<form action="#" method="post" id="formulario">
				<div class="form-row">
					<div class="form-group col-sm-6">
						<label for="inputNome" class="text-light lbl-links">Nome</label>
						<input type="text" class="form-control text-light" name="nome" id="inputNome" placeholder="José">
					</div>
					<div class="form-group col-sm-6">
						<label for="inputSobrenome" class="text-light lbl-links">Sobrenome</label>
						<input type="text" class="form-control text-light" name="sobrenome" id="inputSobrenome" placeholder="Magalhães">
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-sm-10">
						<label for="inputEmail" class="text-light lbl-links">E-mail</label>
						<input type="text" class="form-control text-light" name="email" id="inputEmail"
							placeholder="email@email.com">
					</div>
					<div class="form-group col-sm-2">
						<label for="inputTelefone" class="text-light lbl-links">Telefone</label>
						<input type="text" class="form-control text-light phone_with_ddd" name="telefone" id="inputTelefone" placeholder="(00) 99999-9999">
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-sm-12">
						<label for="inputDescricao" class="text-light lbl-links">Descrição</label>
						<textarea class="form-control text-light" name="descricao" id="inputDescricao" rows="5"
							placeholder="Descrição..."></textarea>
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-sm-12 justify-content-center d-flex mt-5">
						<button type="submit" name="enviar" class="btn btn-light w-25">Enviar</button>
					</div>
				</div>
			</form>
		</section>
	</section>

	<?php

		if(isset($_POST['enviar'])){
			function limpar_texto($str){ 
				return preg_replace("/[^0-9]/", "", $str); 
			}

			$nome=$_POST['nome'];
			$sobrenome=$_POST['sobrenome'];
			$email=$_POST['email'];
			$telefone=$_POST['telefone'];
			$celular = limpar_texto($telefone);
			$descricao=$_POST['descricao'];

			$sql = ('insert into suporte(nome_sup, sobrenome_sup, email, telefone, descricao) values("'.$nome.'", "'.$sobrenome.'", "'.$email.'", "'.$celular.'", "'.$descricao.'");');
			$sql_resul  = mysqli_query($conexao, $sql);
			echo('<script>window.location.href = "suporte.php";</script>');
		}

	?>

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
					<h4>Se alguém enviou alguma palavra imprópria, ou houve alguma ofensa em alguma sala, experimente o
						seguinte:</h4>

					<h5><b>Tire um print e mande nós</b></h5>
					Salve uma imagem ou tire um print do ocorrido e envie para o e-mail de suporte,
					suporte@wisemind.com.
					<br> <br>
					<h5><b>Informe o ocorrido ao profissional responsável pela sala</b></h5>
					Informe o ocorrido ao profissional para que ele tome as devidas providencias
					<br><br>
					<h5><b>Denuncie o usuário que utilizou palavras impróprias.</b></h5>
					Denuncie o usuário à nossa plataforma para que possamos entrar em contato, e realizar o que for
					necessário.
					<br>Utilize do botão de denuncia ao clicar no perfil do usuario selecionado.
					<br><br>
					<b><em>Ainda não funciona?</em></b>
					<a href="#formulario" class="slide-section">clique aqui</a> <em>para nos informar sobre possíveis
						falhas</em>
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
					<h4>Se você deseja se tornar um Wiser, mas não está conseguindo efetuar o pagamento, experimente o
						seguinte:</h4>

					<h5><b>Recarregue a página</b></h5>
					De vez em quando, é preciso recarregar a pagina para sincronização entre as informações do seu
					dispositivo e do
					nosso sistema.
					<br> <br>
					<h5><b>Tente novamente realizar o pagamento na sua forma principal;</b></h5>
					Acesse a sua página de assinatura e tente realizar a compra, se não resolver, espere alguns minutos
					e tente novamente.
					<br><br>
					<h5><b>Atualize as informações de cobrança da sua forma de pagamento atual</b></h5>
					Atualize as suas informações na página de perfil, verifique as informações e preencha as que estão
					faltando.
					<br><br>
					<h5><b>Se o problema persistir relate o erro no e-mail suporte@wisemind.com</b></h5>
					Talvez seja necessário o intermédio de nossos serviços. Utilize do formulário para entrar em contato
					e relatar seu problema.
					<br><br>
					<b><em>Ainda não funciona?</em></b>
					<a href="#formulario" class="slide-section">clique aqui</a> <em>para nos informar sobre possíveis
						falhas</em>
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
					<h4>Se você está tentando alterar as informações do seu perfil, mas não consegue usar seus recursos,
						experimente o seguinte:</h4>

					<h5><b>Recarregue a página</b></h5>
					De vez em quando, é preciso recarregar a pagina para sincronização entre as informações do seu
					dispositivo e do
					nosso sistema.
					<br><br>
					<h5><b>Desconecte-se de sua conta e reconecte-se novamente</b></h5>
					É preciso recarregar as informações da pagina para sincronização entre as informações do perfil.
					<br><br>
					<h5><b>Apague seu histórico de navegação</b></h5>
					Apagar o histórico pode ser uma boa solução, os cookies armazenados serão zerados podendo atualizar
					as informações.
					<br><br>Para apagar o histórico de navegação entre em Configurações - Histórico (CTRL+H) - Limpar
					dados de navegação.
					<br><br>
					<h5><b>Se o problema persistir relate o erro no e-mail suporte@wisemind.com</b></h5>
					Talvez seja necessário o intermédio de nossos serviços. Utilize do formulário para entrar em contato
					e relatar seu problema.
					<br><br>
					<b><em>Ainda não funciona?</em></b>
					<a href="#formulario" class="slide-section">clique aqui</a> <em>para nos informar sobre possíveis
						falhas</em>
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
					<h4>Se você está tentando entrar em alguma sala, mas não está conseguindo, experimente o seguinte:
					</h4>

					<h5><b>Recarregue a página</b></h5>
					De vez em quando, é preciso recarregar a pagina para sincronização entre as informações do seu
					dispositivo e do
					nosso sistema.
					<br><br>
					<h5><b>Desconecte-se de sua conta e reconecte-se novamente</b></h5>
					É preciso recarregar as informações da pagina para sincronização entre as informações do perfil.
					<br><br>
					<h5><b>Verifique o status do seu pagamento</b></h5>
					<ul>
						<li>Clique no botão de configuração (botão dos três tracinhos no canto superior direito) na
							barra de ferramentas do navegador;</li>
						<li>Selecione Ferramentas;</li>
						<li>Selecione Limpar dados de navegação;</li>
						<li>o Na caixa de diálogo exibida, marque as caixas de seleção dos tipos de informações que
							deseja
							remover;</li>
						<li>o Use o menu na parte superior para selecionar a quantidade de dados que deseja excluir.
							Selecione o
							início do tempo para excluir tudo;</li>
						<li>Clique em Limpar dados de navegação.</li>
					</ul>
					<b><em>Ainda não funciona?</em></b>
					<a href="#formulario" class="slide-section">clique aqui</a> <em>para nos informar sobre possíveis
						falhas</em>
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

					<h5><b>Recarregue a página</b></h5>
					De vez em quando, é preciso recarregar a pagina para sincronização entre as informações do seu
					dispositivo e do
					nosso sistema.
					<br><br>
					<h5><b>Verifique seu provedor de internet</b></h5>
					A conexão com nossos servições pode estar sendo bloqueada por terceiros, entre em contato com o
					provedor da sua rede para verificar a situação
					<br><br>
					<h5><b>Apague seu histórico de navegação</b></h5>
					Apagar o histórico pode ser uma boa solução, os cookies armazenados serão zerados podendo atualizar
					as informações.
					<br><br>Para apagar o histórico de navegação entre em Configurações - Histórico (CTRL+H) - Limpar
					dados de navegação.
					<br><br>
					<h5><b>Feche e abra o navegador em que o site está aberto.</b></h5>
					Talvez o navegador esteje com problemas. Feche-o e tente entrar no site novamente.
					<br><br>
					<h5><b>Se o problema persistir relate o erro no e-mail suporte@wisemind.com</b></h5>
					Talvez seja necessário o intermédio de nossos serviços. Utilize do formulário para entrar em contato
					e relatar seu problema.
					<br><br>
					<b><em>Ainda não funciona?</em></b>
					<a href="#formulario" class="slide-section">clique aqui</a> <em>para nos informar sobre possíveis
						falhas</em>
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
					Talvez você esteja conectado à conta errada. É possível criar mais de uma conta na plataforma
					WiseMind, cada uma
					com
					seu próprio login, assinatura e informações salvas.
					<br><br>
					<b><em>Ainda não funciona?</em></b>
					<a href="#formulario" class="slide-section">clique aqui</a> <em>para nos informar sobre possíveis
						falhas</em>
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

					<h5><b>Verifique os chats disponíveis de cada profissão</b></h5>
					Acesse a pagina dos <a href="chats.php">chats<a> e verifique as profissões e areas que estejam sendo
							discutidas.
							<br> <br>
							<h5><b>Informe-nos sobre o ocorrido</b></h5>
							Se não houver encontrado nenhum profissonal da área desejada, envie-nos um e-mail
							(suporte@wisemind.com ) falando da área e profissão para que possamos inseri-la se possível.
							<br><br>
							<h5><b>Utilize do formulário acima</b></h5>
							Vá até o ínicio da pagina suporte e utilize do formulário disponivel, informe-nos sobre os problemas e faltas.
							<br><br>
							<b><em>Ainda não funciona?</em></b>
							<a href="#formulario" class="slide-section">clique aqui</a> <em>para nos informar sobre
								possíveis
								falhas</em>
							no
							serviço.
				</div>
			</div>
		</div>
	</section>

	<?php include('rodape.html'); ?>

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="node_modules/jquery/dist/jquery.js"></script>
	<script src="node_modules/popper.js/dist/umd/popper.js"></script>
	<script src="node_modules/bootstrap/dist/js/bootstrap.js"></script>
	<script src="https://igorescobar.github.io/jQuery-Mask-Plugin/js/jquery.mask.min.js"></script>
</body>
<script>
	$(document).ready(function () {
		$('.date').mask('99/99/9999');
		$('.phone_with_ddd').mask('(99) 99999-9999');
	});
</script>
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