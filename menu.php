<?php
if (!isset($_SESSION)) {
  session_start();
}

if(isset($_SESSION["log_status"]) && $_SESSION["log_status"]==true){ // ATUALIZAR STATUS PAGAMENTO
  if(isset($_SESSION["adminlog_status"]) && $_SESSION["adminlog_status"]==true){
    include('../assets/conexao.php');
  }else{
    include('assets/conexao.php');
  }
  
  
  setlocale( LC_ALL , 'pt_BR' );
  date_default_timezone_set('America/Bahia');

  $sql = ('select * from estudantes where id_estudante = '.$_SESSION["id_user"].';');
  $date_query = mysqli_query($conexao, $sql);
  $date_val = mysqli_fetch_array($date_query);
  
  $date = strtotime($date_val["Plano_val"]);
  $today = strtotime(date("Y-m-d H:i:s"));

  if($date <= $today){
      $update = ('update estudantes set Plano = false, Plano_val = null where id_estudante = '.$_SESSION["id_user"].';');
      $up_val = mysqli_query($conexao, $update);
  }
}
  
  $endereco = $_SERVER['REQUEST_URI'];
  $endereco = explode("/",$endereco);
  $endereco = end($endereco);

  if (strpos($endereco, 'painel-usu-alter?us') !== false) {
    $url_status = false;
    $url_sair = '../assets/destroy-log.php';
    $url_pag = '../';
  }else{
    $url_status = true;
    $url_sair = 'assets/destroy-log.php';
    $url_pag = './';
  }
  if($endereco =='index.php'){
    $url = './admin/admin.php';
    
    $url_status = true;
  }else{
    
    
    $url = './admin.php';
    
  }

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <title>Wise Mind</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <?php
  if(isset($_SESSION["adminlog_status"]) && $_SESSION["adminlog_status"]==true && $url_status==false){
    echo('
      <link rel="stylesheet" href="../node_modules/bootstrap/compiler/bootstrap.css">
      <link rel="stylesheet" href="../node_modules/font-awesome/css/font-awesome.css">
      <link rel="stylesheet" href="../style/style.css">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
      <link rel="icon" href="../img/logo.png" type="image/x-icon" />
      <link rel="shortcut icon" href="../img/logo.png" type="image/x-icon" />
    
      <!-- ScrollBar Stylesheets -->
      <link rel="stylesheet" href="../node_modules/OverlayScrollbars/css/OverlayScrollbars.min.css">');
  }else{
    echo('
      <link rel="stylesheet" href="node_modules/bootstrap/compiler/bootstrap.css">
      <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.css">
      <link rel="stylesheet" href="style/style.css">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
      <link rel="icon" href="img/logo.png" type="image/x-icon" />
      <link rel="shortcut icon" href="img/logo.png" type="image/x-icon" />
    
      <!-- ScrollBar Stylesheets -->
      <link rel="stylesheet" href="node_modules/OverlayScrollbars/css/OverlayScrollbars.min.css">');
  }
  ?>

</head>

<body>

  <nav class="navbar navbar-light bg-warning">
    <section class="ml-auto" id="botoes-entrada">
      <?php
            
            if(isset($_SESSION["log_status"]) && $_SESSION["log_status"]==true){
              echo('<a class="btn btn-outline-dark btn-sm" href="painel-usu.php">Perfil <i class="fa fa-user-circle" aria-hidden="true"></i></a>
              <a class="btn btn-outline-dark btn-sm" href="assets/destroy-log.php">Sair <i class="fas fa-sign-in-alt"></i></a>');
            }else if(isset($_SESSION["adminlog_status"]) && $_SESSION["adminlog_status"]==true){
              echo('<a class="btn btn-outline-dark btn-sm" href="'.$url.'">Admin <i class="fas fa-lock aria-hidden="true"></i></a>
              <a class="btn btn-outline-dark btn-sm" href="'.$url_sair.'">Sair <i class="fas fa-sign-in-alt"></i></a>');
            }else{
              echo('<a class="btn btn-outline-dark btn-sm" href="login.php">Entrar <i class="fas fa-sign-in-alt"></i></a>
              <button class="btn btn-outline-dark btn-sm"  data-toggle="modal" data-target="#Cadastro">Registre-se <i class="fa fa-user-circle" aria-hidden="true"></i></button>');
            }
          ?>
    </section>
  </nav>

  <div class="modal fade" id="Cadastro" tabindex="-1" role="dialog" aria-labelledby="Cadastro" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content bg-transparent border-0">
        <div class="modal-header border-dark" style="background-color:#161a20;">
          <h5 class="modal-title text-white font-roboto">COMO VOCÊ DESEJA SE CADASTRAR?</h5>
          <button type="button" class="btn text-white" data-dismiss="modal" aria-label="Fechar">
            <i class="fas fa-times"></i>
          </button>
        </div>
        <div class="modal-body justify-content-center d-flex rounded-bottom" style="background-color:#161a20;">
          <a class="btn btn-outline-warning mr-3" href="cad-estudy.php"><i class="fas fa-user-graduate"></i>
            Estudante</a>
          <a class="btn btn-outline-warning" href="cad-prof.php"><i class="fas fa-user-tie"></i> Profissional</i></a>
        </div>
      </div>
    </div>
  </div>

  <section id="logo">
    <section class="fundoLogo" id="fundo">
      <section class="svgLogo" id="logosvg">
        <svg class="logoWiseMind" version="1.1" viewBox="0 0 847 847">
          <defs>
            <style type="text/css">
              .fil0 {
                fill: #003C6E
              }

              .fil2 {
                fill: #FFD109
              }

              .fil3 {
                fill: #373435;
                fill-opacity: 0.290196
              }

              .fil1 {
                fill: #373435;
                fill-opacity: 0.400000
              }
            </style>
          </defs>
          <g id="Camada_x0020_1">
            <metadata id="CorelCorpID_0Corel-Layer" />
            <polygon class="fil0" points="346,195 320,195 353,27 488,27 523,195 490,195 441,416 422,325 399,421 " />
            <polygon class="fil1" points="525,206 520,182 480,182 435,389 446,437 " />
            <polygon class="fil1" points="318,205 323,182 356,182 406,393 395,437 " />
            <polygon class="fil2"
              points="231,807 48,807 187,195 346,195 420,510 490,195 651,195 791,807 607,807 554,422 485,807 355,807 286,432 " />
            <polygon class="fil3" points="582,631 585,652 666,652 710,457 698,402 " />
            <polygon class="fil0" points="653,639 515,639 625,27 791,27 " />
            <polygon class="fil3" points="257,631 254,652 173,652 129,457 141,402 " />
            <polygon class="fil0" points="210,27 48,27 189,643 325,643 " />
          </g>
        </svg>
      </section>
    </section>
  </section>

  <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-dark navbarMenuItens" id="nav">
    <button class="navbar-toggler border-0" data-toggle="collapse" data-target="#navbarSite">
      <i class="fa fa-bars text-warning" aria-hidden="true"></i>
    </button>

    <section class="collapse navbar-collapse" id="navbarSite">
      <section class="container-fluid">
        <section class="row justify-content-center">
          <section class="col-lg-5">
            <ul class="navbar-nav d-flex justify-content-end mandarparadireita">
              <li class="nav-item text-uppercase">
                <a class="nav-link text-warning mr-4" href="<?php echo($url_pag); ?>index.php">Home</a>
              </li>
              <li class="nav-item text-uppercase">
                <a class="nav-link text-warning mr-4" href="<?php echo($url_pag); ?>chats.php">Chat</a>
              </li>
              <li class="nav-item text-uppercase">
                <a class="nav-link text-warning" href="<?php echo($url_pag); ?>conteudo_pago.php">Conteúdo Adicional</a>
              </li>
            </ul>
          </section>
          <section class="col-lg-2"></section>
          <section class="col-lg-5">
            <ul class="navbar-nav">
              <li class="nav-item text-uppercase">
                <a class="nav-link text-warning mr-4" href="<?php echo($url_pag); ?>parcerias.php">Parcerias</a>
              </li>
              <li class="nav-item text-uppercase">
                <a class="nav-link text-warning mr-4" href="<?php echo($url_pag); ?>compra1.php">TORNE-SE WISER</a>
              </li>
              <li class="nav-item text-uppercase">
                <a class="nav-link text-warning" href="<?php echo($url_pag); ?>suporte.php">Suporte</a>
              </li>
            </ul>
          </section>
        </section>
      </section>
    </section>
  </nav>

</body>

</html>