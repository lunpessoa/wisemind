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

</head>

<body>
    <div class="container-fluid p-5 overflow-hidden">
        <div class="row position-relative overflow-hidden">
            <div class="">
                <h3>Texto</h3>
                <div class="owl-carousel">
                    <div class="item">
                        <h2>Swipe</h2>
                    </div>
                    <div class="item">
                        <h2>Drag</h2>
                    </div>
                    <div class="item">
                        <h2>Responsive</h2>
                    </div>
                    <div class="item">
                        <h2>CSS3</h2>
                    </div>
                    <div class="item">
                        <h2>Fast</h2>
                    </div>
                    <div class="item">
                        <h2>Easy</h2>
                    </div>
                    <div class="item">
                        <h2>Free</h2>
                    </div>
                    <div class="item">
                        <h2>Upgradable</h2>
                    </div>
                    <div class="item">
                        <h2>Tons of options</h2>
                    </div>
                    <div class="item">
                        <h2>Infinity</h2>
                    </div>
                    <div class="item">
                        <h2>Auto Width</h2>
                    </div>
                    <div class="item">
                        <h2>Antonio</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="../node_modules/jquery/dist/jquery.js"></script>
    <script src="../node_modules/popper.js/dist/umd/popper.js"></script>
    <script src="../node_modules/bootstrap/dist/js/bootstrap.js"></script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../node_modules/jquery/dist/jquery.js"></script>
    <script src="../node_modules/popper.js/dist/umd/popper.js"></script>
    <script src="../node_modules/bootstrap/dist/js/bootstrap.js"></script>

    <!-- javascript -->
    <script src="../node_modules/OwlCarousel/dist/owl.carousel.min.js"></script>

</body>
<?php
    }else{
        $_SESSION["facaLog"]=true;
        echo('<script>window.location.href = "../login.php";</script>');
    }
?>
<script>
    var owl = $('.owl-carousel');
    owl.owlCarousel({
        margin: 10,
        loop: true,
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
<script>
    $("#busca").keyup(function () {
        var busca = $("#busca").val();
        $.post('../assets/pesquisar.php', {
            busca: busca
        }, function (data) {
            $("#result").html(data);
        });
    });
</script>

</html>