<?php
if (!isset($_SESSION)) {
	session_start();
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <title>Wise Mind</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="icon" href="img/logo.png" type="image/x-icon" />
  <link rel="shortcut icon" href="img/logo.png" type="image/x-icon" />

</head>

<body>

  <?php include('menu.php');?>

  <section id="carouselSite" class="carousel slide" style="z-index: 0" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselSite" data-slide-to="0" class="active"></li>
      <li data-target="#carouselSite" data-slide-to="1"></li>
      <li data-target="#carouselSite" data-slide-to="2"></li>
    </ol>
    <section class="carousel-inner">
      <section class="carousel-item active">
        <img src="img/back.png" class="img-fluid d-block">
        <section class="carousel-caption d-none d-md-block text-light">
          <h3 id="test">Wise Mind</h3>
          <p>Aprenda, Dedique-se e Conquiste</p>
        </section>
      </section>
      <section class="carousel-item">
        <img src="img/back.png" class="img-fluid d-block">
        <section class="carousel-caption d-none d-md-block text-light">
          <h3>Wise Mind</h3>
          <p>Aprenda, Dedique-se e Conquiste</p>
        </section>
      </section>
      <section class="carousel-item">
        <img src="img/back.png" class="img-fluid d-block">
        <section class="carousel-caption d-none d-md-block text-light">
          <h3>Wise Mind</h3>
          <p>Aprenda, Dedique-se e Conquiste</p>
        </section>
      </section>
    </section>
    <a class="carousel-control-prev" href="#carouselSite" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon"></span>
      <span class="sr-only">Anterior</span>
    </a>
    <a class="carousel-control-next" href="#carouselSite" role="button" data-slide="next">
      <span class="carousel-control-next-icon"></span>
      <span class="sr-only">Avançar</span>
    </a>
  </section>


  <nav class="nav">
    <ul class="nav lista-area-links">
      <div class="container-fluid">
        <div class="row h-100">
          <div class="col-md-6 col-12 p-0 d-inline-flex" style="background-color:#fac215">
            <li class="nav-item areasLinks" data-toggle="tooltip" data-placement="top"
              title="Administração, Economia e Negócios" style="background-color:#b6151d">
              <a class="nav-link iconsArea" href="adm.php"><i class="fas fa-pencil-alt text-light"></i></a>
            </li>
            <li class="nav-item areasLinks" data-toggle="tooltip" data-placement="top" title="Ciências Sociais"
              style="background-color:#d21b3a">
              <a class="nav-link iconsArea" href="sociais.php"><i class="fas fa-brain text-light"></i></a>
            </li>
            <li class="nav-item areasLinks" data-toggle="tooltip" data-placement="top" title="Comunicação e Mídia"
              style="background-color:#f35b07">
              <a class="nav-link iconsArea" href="comunicacao.php"><i class="far fa-newspaper  text-light"></i></a>
            </li>
            <li class="nav-item areasLinks" data-toggle="tooltip" data-placement="top" title="Design e Arte"
              style="background-color:#fb762b">
              <a class="nav-link iconsArea" href="artistico.php"><i class="fas fa-paint-brush text-light"></i></a>
            </li>
            <li class="nav-item areasLinks" data-toggle="tooltip" data-placement="top" title="Direito"
              style="background-color:#fac215">
              <a class="nav-link iconsArea" href="direito.php"><i class="fas fa-balance-scale text-light"></i></a>
            </li>
          </div>
          <div class="col-md-6 col-12 p-0 d-inline-flex">
            <li class="nav-item areasLinks" data-toggle="tooltip" data-placement="top" title="Educação"
              style="background-color:#a8d12d">
              <a class="nav-link  iconsArea" href="educacao.php"><i
                  class="fas fa-chalkboard-teacher text-light"></i></a>
            </li>
            <li class="nav-item areasLinks" data-toggle="tooltip" data-placement="top" title="Engenharia e Arquitetura"
              style="background-color:#4aaf75">
              <a class="nav-link  iconsArea" href="engenharia.php"><i class="fas fa-pencil-ruler text-light"></i></a>
            </li>
            <li class="nav-item areasLinks" data-toggle="tooltip" data-placement="top" title="Informação e Tecnologia"
              style="background-color:#268cb4">
              <a class="nav-link  iconsArea" href="info.php"><i class="fas fa-laptop-code text-light"></i></a>
            </li>
            <li class="nav-item areasLinks" data-toggle="tooltip" data-placement="top" title="Saúde"
              style="background-color:#1469bc">
              <a class="nav-link  iconsArea" href="saude.php"><i class="fas fa-heartbeat text-light"></i></a>
            </li>
            <li class="nav-item areasLinks" data-toggle="tooltip" data-placement="top" title="Turismo e Gastronomia"
              style="background-color:#831168">
              <a class="nav-link iconsArea" href="turismo.php"><i class="fas fa-utensils text-light"></i></a>
            </li>
          </div>
        </div>
      </div>
    </ul>
  </nav>


  <section class="container-fluid p-0 mb-5" style="margin-top:100px">
    <div class="row mr-0 ml-0">
      <div class="col-md-6 col-12 text-left p-5">
        <h3 class="display-3 mt-5 font-lobster justify-content-center align-items-end d-flex">
          <p>Estudante</p>
          <i class="fas fa-user-graduate position-absolute text-warning icon-info"></i>
        </h3>
        <p class="lead mr-5 mt-3 text-justify" style="font-size:25px">Na plataforma WiseMind o estudante tem a
          oportunidade de se comunicar com
          profissionais ja consolidados no
          mercado de trabalho, descobrir novas profissões, ter acesso a materias de apoio, chances de ingressar no
          mercado e muito mais de forma rápida e tudo em um único lugar.</p>
      </div>
      <div class="col-md-6 col-12 p-0">
        <div class="student">
          <aside class="content_student">
          </aside>
        </div>
      </div>
    </div>
  </section>

  <section class="container-fluid justify-content-center d-flex align-items-center plataform-back">
    <h1 class="display-3 text-primary text-uppercase font-roboto"><b><em><i class="fas fa-cogs"></i> Plataforma
          WiseMind</em></b>
    </h1>
  </section>

  <section class="container-fluid p-0" style="margin-top:100px">
    <div class="row mr-0 ml-0">
      <div class="col-md-6 col-12 p-0">
        <div class="profissional">
          <aside class="content_profissional"></aside>
        </div>
      </div>
      <div class="col-md-6 col-12 text-right p-5">
        <h3 class="display-3 mt-5 font-lobster justify-content-center align-items-end d-flex">
          <p>Profissional</p>
          <i class="fas fa-user-tie position-absolute text-warning icon-info"></i>
        </h3>
        <p class="lead mr-5 mt-3 text-justify" style="font-size:25px">O profissional é muito valorizado em nossa
          plataforma, pois é ele o
          responsável por boa parte das realizações do nosso serviço, além de aumentar o seu horizonte de conhecimento
          com outros profissionais e com os jovens, o profisional tem a oportunidade e encontrar e ser indicado a vagas
          de emprego.</p>
      </div>
    </div>
  </section>

  <section class="container" style="margin-top:100px">
    <hr>
  </section>

  <section class="container-fluid p-0" style="margin-top:100px">
    <div class="row mr-0 ml-0">
      <div class="col-md-6 col-12 p-0">
        <div class="profissional">
          <aside class="content_profissional"></aside>
        </div>
      </div>
      <div class="col-md-6 col-12 text-right p-5">
        <h3 class="display-3 mt-5 font-lobster justify-content-center align-items-end d-flex">
          <p>Profissional</p>
          <i class="fas fa-user-tie position-absolute text-warning icon-info"></i>
        </h3>
        <p class="lead mr-5 mt-3 text-justify" style="font-size:25px">O profissional é muito valorizado em nossa
          plataforma, pois é ele o
          responsável por boa parte das realizações do nosso serviço, além de aumentar o seu horizonte de conhecimento
          com outros profissionais e com os jovens, o profisional tem a oportunidade e encontrar e ser indicado a vagas
          de emprego.</p>
      </div>
    </div>
  </section>

  <section class="container" style="margin-top:100px">
    <hr>
  </section>

  <section class="container text-center" style="margin-top:100px">
    <section class="row mb-5">
      <section class="col-12">
        <h1 class="display-1 font-lobster">
          <i class="fas fa-users text-dark"></i>
          Sobre Nós
        </h1>
        <p class="font-italic font-roboto h5">Aprenda, dedique-se e Conquiste</p>
      </section>
    </section>
  </section>

  <section class="container-fluid sobre-back">
    <section class="container  d-flex">
      <p class="h4 text-center text-light mt-5" style="line-height: 50px;">A plataforma Wise Mind surgiu a partir da
        análise de necessidades atuais, existe uma crise que complica a vida de quem quer
        ingressar no mercado de trabalho, tudo tem que ser levado em conta na escolha da profissão e a Wise Mind foi
        criada exatamente para ajudar a solucionar essa problemática.</p>
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
<?php
if (!isset($_SESSION["cadastrado"])) {
	$_SESSION["cadastrado"]=false;
}
if (!isset( $_SESSION["logado"])) {
	$_SESSION["logado"]=false;
}
?>
<?php if( $_SESSION["cadastrado"]==true){ 
  include('toast.php');
  echo("<script src='assets/toast.js'></script>
  <script>criado()</script>");

$_SESSION["cadastrado"]=false;
}

?>
<?php if( $_SESSION["logado"]==true){ 
  include('toast.php');
  echo("<script src='assets/toast.js'></script>
  <script>logado()</script>");

$_SESSION["logado"]=false;
}

?>


</html>