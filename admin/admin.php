<?php
   include('../assets/conexao.php');
   session_start();
   if(isset($_SESSION["adminlog_status"]) && $_SESSION["adminlog_status"]=true){
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
    <link rel="stylesheet" href="admin.css">

</head>

<body>
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
                        <h6 class="text-light text-font h5">Boas-vindas de volta!</h6>
                    </div>
                </div>
            </div>
            <div class="card-body border-0 p-0 bg-dark" style="border-bottom-left-radius: 10px; border-bottom-right-radius: 10px; overflow:hidden;">
                <div id="itens-nav" class="list-nav w-100">
                    <ul class="nav flex-column text-font-calibri text-center">
                        <li class="nav-item config-item ">
                            <a class="nav-link h5 mb-0 px-3 pt-4" href="users.php"><i class="fas fa-user-cog mr-1"></i>
                                <label class="h5 cursor-pointer">Usuarios</label></a>
                        </li>
                        <hr class="w-75 bg-white my-1">
                        <li class="nav-item config-item">
                            <a class="nav-link h5 mb-0 px-3 pt-4" href="suporte.php"><i
                                    class="fas fa-shield-alt mr-1"></i> <label
                                    class="h5 cursor-pointer">Suporte</label></a>
                        </li>
                        <hr class="w-75 bg-white my-1">
                        <li class="nav-item config-item">
                            <a class="nav-link h5 mb-0 px-3 pt-4" href="ped-pag.php"><i
                                    class="fas fa-mail-bulk mr-1"></i>
                                <label class="h5 cursor-pointer">Pagamentos</label></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</body>
<?php
   }else{
        echo('<script>window.alert("Voce não esta logado como admin")
        window.location.href = "../login.php";</script>');
   }
?>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="node_modules/jquery/dist/jquery.js"></script>
<script src="js/javinha.js"></script>
<script src="node_modules/popper.js/dist/umd/popper.js"></script>
<script src="node_modules/bootstrap/dist/js/bootstrap.js"></script>

</html>