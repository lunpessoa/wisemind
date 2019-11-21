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
    <title>Admin-Suporte</title>
    <meta charset="utf-8">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
    <link rel="stylesheet" href="../node_modules/bootstrap/compiler/bootstrap.css">

    <!-- Style -->
    <link rel="stylesheet" href="usersadmin.css">
    <!-- <link rel="stylesheet" href="../node_modules/OwlCarousel/dist/assets/docs.theme.min.css"> -->

    <!-- Icons -->
    <link rel="icon" href="../img/logo.png" type="image/x-icon" />
    <link rel="shortcut icon" href="../img/logo.png" type="image/x-icon" />

    <!-- Owl Stylesheets -->
    <link rel="stylesheet" href="../node_modules/OwlCarousel/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="../node_modules/OwlCarousel/dist/assets/owl.theme.default.min.css">

    <!-- ScrollBar Stylesheets -->
    <link rel="stylesheet" href="../node_modules/OverlayScrollbars/css/OverlayScrollbars.min.css">

</head>

<body>
    <section class="container-fluid header-title d-flex align-items-end">
        <nav class="button-back">
            <a href="admin.php" class="btn p-0 text-dark bg-warning"><i class="fas fa-chevron-left"></i></a>
        </nav>

        <div class="w-100 d-flex justify-content-center position-absolute" style="margin-top:-150px">
            <div class="w-25 text-center">
                <h1 class="display-4 font-lobster">Suporte</h1>

            </div>
        </div>

    </section>

    <section class="container-fluid p-5 overflow-hidden">
        <div class="row position-relative overflow-hidden">
            <div class="owl-carousel">
                <?php
                $sqlmostrar=('select * from suporte');
                $resul=mysqli_query($conexao, $sqlmostrar) or die (mysqli_error($conexao));
                while($con_sup=mysqli_fetch_array($resul)){
                    $c = str_split($con_sup['telefone'], 1);
		            $cell = '('.$c[0].$c[1].') '.$c[2].$c[3].$c[4].$c[5].$c[6].'-'.$c[7].$c[8].$c[9].$c[10];
                    echo(
                        '<div class="item">
                            <div class="card w-75 bg-transparent" style="height:400px">
                                <h4 class="card-header text-light">'.$con_sup['nome_sup'].' '.$con_sup['sobrenome_sup'].'</h4>
                                <div class="card-body text-center">
                                    <h5 class="card-title text-clear">'.$con_sup['email'].'</h5>
                                    <p class="text-clear">'.$cell.'</p>
                                    <hr class="bg-light w-50">
                                    <div id="corpo" class="card-text text-justify overflow-auto text-clear px-3" style="height:170px">'.$con_sup['descricao'].'</div>
                                    <div class="w-100 justify-content-center d-flex mt-3">
                                        <a href="suporte.php?sup='.$con_sup['id_suporte'].'" class="btn text-warning border-0"><i class="fas fa-check-square" style="font-size:25px"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>'
                    );

                    if(isset($_GET['sup'])){
                        $sup = $_GET['sup'];
                        $sql_del=('delete from suporte where id_suporte='.$sup.';');   
                        $del_sql=mysqli_query($conexao, $sql_del);    
                        header('Location: suporte.php');  
                    }
                }
                
            ?>

            </div>
        </div>
    </section>

    <script src="../node_modules/jquery/dist/jquery.js"></script>
    <script src="../node_modules/popper.js/dist/umd/popper.js"></script>
    <script src="../node_modules/bootstrap/dist/js/bootstrap.js"></script>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../node_modules/jquery/dist/jquery.js"></script>
    <script src="../node_modules/popper.js/dist/umd/popper.js"></script>
    <script src="../node_modules/bootstrap/dist/js/bootstrap.js"></script>

    <!-- javascript -->
    <script src="../node_modules/OwlCarousel/dist/owl.carousel.min.js"></script>
    <script src="../node_modules/OverlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <script src="../node_modules/OverlayScrollbars/js/OverlayScrollbars.min.js"></script>

</body>
<?php
    }else{
        $_SESSION["facaLog"]=true;
        echo('<script>window.location.href = "../login.php";</script>');
    }
?>
<script>
    OverlayScrollbars(document.querySelectorAll(' #corpo '), {
        className: "os-theme-light",
        resize: "none",
        sizeAutoCapable: true,
        clipAlways: true,
        normalizeRTL: true,
        paddingAbsolute: false,
        autoUpdate: null,
        autoUpdateInterval: 33,
        nativeScrollbarsOverlaid: {
        showNativeScrollbars: false,
        initialize: true
        },
        scrollbars : {
		visibility       : "auto",
		autoHide         : "move",
		autoHideDelay    : 500,
		dragScrolling    : true,
		clickScrolling   : false,
		touchSupport     : true,
		snapHandle       : true
        }
    });
    var owl = $('.owl-carousel');
    owl.owlCarousel({
        margin: 10,
        loop: false,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            1000: {
                items: 3
            }
        }
    })
</script>
</html>