<?php
   include('../assets/conexao.php');
   session_start();
   if(isset($_SESSION["adminlog_status"]) && $_SESSION["adminlog_status"]==true){
        $sql=('select * from usuarios where id_usuario = '. $_SESSION["id_user"].';');
        $resul=mysqli_query($conexao, $sql);
        $con=mysqli_fetch_array($resul);
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Wise-Administrator</title>
    <link rel="stylesheet" href="../node_modules/bootstrap/compiler/bootstrap.css">
    <link rel="stylesheet" href="../node_modules/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
    <link rel="icon" href="../img/logo.png" type="image/x-icon" />
    <link rel="shortcut icon" href="../img/logo.png" type="image/x-icon" />
    
    <link rel="stylesheet" href="admin.css">

</head>

<body>
    <section id="logo" style="z-index:1;">
        <section class="svgLogo">
            <svg class="logoWiseMind" version="1.1" width="300px" height="300px" viewBox="0 0 4000 4000"
                style="position:absolute; margin:30px;">
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
                    <polygon class="fil0"
                        points="346,195 320,195 353,27 488,27 523,195 490,195 441,416 422,325 399,421 " />
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

    <?php include('../teste.svg'); ?>

    <div class="container d-flex align-items-center" style="height: 100vh;">
        <div class="card border border-0 p-2 bg-transparent" style="border-radius: 10px;">
            <div class="card-header border-bottom-0 bg-dark"
                style="border-top-left-radius: 10px; border-top-right-radius: 10px;">
                <div class="row">
                    <div class="col-12 text-center">
                        <h1 class="h1 text-warning"><b>WISE MIND</b></h1>
                    </div>
                    <div class="col-12 text-center">
                        <h6 class="text-light text-font h5">Boas-vindas <?php echo($con['Nome']); ?></h6>
                    </div>
                </div>
            </div>
            <div class="card-body border-0 p-0 bg-dark"
                style="border-bottom-left-radius: 10px; border-bottom-right-radius: 10px; overflow:hidden;">
                <div id="itens-nav" class="list-nav w-100">
                    <ul class="nav flex-column text-font-calibri text-center">
                        <li class="nav-item config-item ">
                            <a class="nav-link h5 mb-0 px-3 pt-4" href="users.php">
                                <i class="fas fa-user-cog mr-1"></i>
                                <label class="h5 cursor-pointer">Usuarios</label></a>
                        </li>
                        <hr class="w-75 bg-white my-1">
                        <li class="nav-item config-item">
                            <a class="nav-link h5 mb-0 px-3 pt-4" href="suporte.php">
                                <i class="fas fa-headset mr-1"></i>
                                <label class="h5 cursor-pointer">Suporte</label></a>
                        </li>
                        <hr class="w-75 bg-white my-1">
                        <li class="nav-item config-item">
                            <a class="nav-link h5 mb-0 px-3 pt-4" href="profissional.php">
                                <i class="fas fa-user-tie mr-1"></i>
                                <label class="h5 cursor-pointer">Profissional</label></a>
                        </li>
                        <hr class="w-75 bg-white my-1">
                        <li class="nav-item config-item">
                            <a class="nav-link h5 mb-0 px-3 pt-4" href="pagamentos.php">
                                <i class="fas fa-credit-card mr-1"></i>
                                <label class="h5 cursor-pointer">Pagamentos</label></a>
                        </li>
                        <hr class="w-75 bg-white my-1">
                        <li class="nav-item config-item">
                            <a class="nav-link h5 mb-0 px-3 pt-4" href="parceiros.php">
                            <i class="fas fa-users mr-1"></i>
                                <label class="h5 cursor-pointer">Parceiros</label></a>
                        </li>
                        <hr class="w-75 bg-white my-1">
                        <li class="nav-item config-item">
                            <a class="nav-link h5 mb-0 px-3 pt-4" href="../index.php">
                                <i class="fas fa-sign-out-alt"></i>
                                <label class="h5 cursor-pointer">Sair</label>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../node_modules/jquery/dist/jquery.js"></script>
    <script src="../node_modules/popper.js/dist/umd/popper.js"></script>
    <script src="../node_modules/bootstrap/dist/js/bootstrap.js"></script>

</body>
<?php
	if (!isset($_SESSION["adminchange"])) {
		$_SESSION["adminchange"]=false;
    }
    if( $_SESSION["adminchange"]==true){ 
        include('toast-admin.php');
        echo("<script src='../assets/toast.js'></script>
        <script>adminchange();</script>");
    
        $_SESSION["adminchange"]=false;
        }

?>
<?php
   }else{
        $_SESSION["facaLog"]=true;
        echo('<script>window.location.href = "../index.php";</script>');
   }
?>
<?php
	if (!isset( $_SESSION["admin"])) {
		$_SESSION["admin"]=false;
	}

?>
<?php if($_SESSION["admin"]==true){ 
	include('toast-admin.php');
	echo("<script src='../assets/toast.js'></script>
	<script>admin('".$con['Nome']."');</script>");

	$_SESSION["admin"]=false;
	}

?>


</html>