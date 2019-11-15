<?php
if (!isset($_SESSION)) {
	session_start();
}
?>
<!doctype html>
<html lang="pt-br">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="node_modules/bootstrap/compiler/bootstrap.css">
    <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
  </head>
  <body>

    <nav class="navbar navbar-light menu-color">
        <section class="ml-auto" id="botoes-entrada">
          <?php
            if(isset($_SESSION["log_status"]) && $_SESSION["log_status"]==true){
              echo('<a class="btn btn-outline-dark btn-sm" href="painel-usu.php">Perfil <i class="fa fa-user-circle" aria-hidden="true"></i></a>
              <a class="btn btn-outline-dark btn-sm" href="assets/destroy-log.php">Sair <i class="fas fa-sign-in-alt"></i></a>');
            }else{
              echo('<a class="btn btn-outline-dark btn-sm" href="login.php">Entrar <i class="fas fa-sign-in-alt"></i></a>
              <a class="btn btn-outline-dark btn-sm" href="op-cad.php">Registre-se <i class="fa fa-user-circle" aria-hidden="true"></i></a>');
            }
          ?>
        </section>
    </nav>

    <section id="logo">
        <section class="fundoLogo">
          <section class="svgLogo">
          <svg class="logoWiseMind" version="1.1" viewBox="0 0 847 847">
          <defs>
            <style type="text/css">
              .fil0 {fill:#003C6E}
              .fil2 {fill:#FFD109}
              .fil3 {fill:#373435;fill-opacity:0.290196}
              .fil1 {fill:#373435;fill-opacity:0.400000}
            </style>
          </defs>
          <g id="Camada_x0020_1">
            <metadata id="CorelCorpID_0Corel-Layer"/>
            <polygon class="fil0" points="346,195 320,195 353,27 488,27 523,195 490,195 441,416 422,325 399,421 "/>
            <polygon class="fil1" points="525,206 520,182 480,182 435,389 446,437 "/>
            <polygon class="fil1" points="318,205 323,182 356,182 406,393 395,437 "/>
            <polygon class="fil2" points="231,807 48,807 187,195 346,195 420,510 490,195 651,195 791,807 607,807 554,422 485,807 355,807 286,432 "/>
            <polygon class="fil3" points="582,631 585,652 666,652 710,457 698,402 "/>
            <polygon class="fil0" points="653,639 515,639 625,27 791,27 "/>
            <polygon class="fil3" points="257,631 254,652 173,652 129,457 141,402 "/>
            <polygon class="fil0" points="210,27 48,27 189,643 325,643 "/>
          </g>
          </svg>
        </section>
        </section>
      </section>

    <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-dark navbarMenuItens">
        <button class="navbar-toggler border-0" data-toggle="collapse" data-target="#navbarSite">
          <i class="fa fa-bars text-warning" aria-hidden="true"></i>  
        </button>

        <section class="collapse navbar-collapse" id="navbarSite">
        <section class="container-fluid">
          <section class="row justify-content-center">
            <section class="col-lg-5">
              <ul class="navbar-nav d-flex justify-content-end mandarparadireita">
                  <li class="nav-item text-uppercase">
                    <a class="nav-link text-warning mr-4" href="index.php">Home</a>
                  </li>
                  <li class="nav-item text-uppercase">
                    <a class="nav-link text-warning mr-4" href="chats.php">Chat</a>
                  </li>
                  <li class="nav-item text-uppercase">
                    <a class="nav-link text-warning" href="conteudo_pago.php">Conteúdo Adicional</a>
                  </li>
              </ul>
             </section>
            <section class="col-lg-2"></section>
            <section class="col-lg-5">
              <ul class="navbar-nav">
                <li class="nav-item text-uppercase">
                  <a class="nav-link text-warning mr-4" href="#">Parcerias</a>
                </li>
                <li class="nav-item text-uppercase">
                  <a class="nav-link text-warning mr-4" href="compra1.php">TORNE-SE WISER</a>
                </li>
                <li class="nav-item text-uppercase">
                  <a class="nav-link text-warning" href="suporte.php">Suporte</a>
                </li>
              </ul>
            </section>
           </section>
        </section>
      </section>
    </nav>
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="node_modules/jquery/dist/jquery.js"></script>
    <script src="js/javinha.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.js"></script>
  </body>
</html>