<?php
   include('../assets/conexao.php');
   session_start();
   if(isset($_SESSION["adminlog_status"]) && $_SESSION["adminlog_status"]=true){
        $sql=('select * from usuarios where id_usuario = '. $_SESSION["id_user"].';');
        $resul=mysqli_query($conexao, $sql);
        $con=mysqli_fetch_array($resul);

        $date = date("Y-m-d");
        $sql_pedido=('select * from pedido;');
        $resul_pedido=mysqli_query($conexao, $sql_pedido);
        while($ped=mysqli_fetch_array($resul_pedido)){
            if($date==$ped["Data_Validade"]){
                $sql_apagar = ('delete from pedido where id_pedido='.$ped['id_pedido'].';');
                $sql_del = mysqli_query($conexao, $sql_apagar);
            }
        }

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Admin-Pagamentos</title>
    <meta charset="utf-8">

    <link rel="stylesheet" href="../node_modules/bootstrap/compiler/bootstrap.css">
    <link rel="stylesheet" href="../node_modules/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="usersadmin.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
    <link rel="icon" href="../img/logo.png" type="image/x-icon" />
    <link rel="shortcut icon" href="../img/logo.png" type="image/x-icon" />

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
                <h1 class="h1 font-lobster">Pagamentos</h1>

                <form action="#" method="get" name="formularioPesq">
                    <div class="input-group mb-3">
                        <input type="text" id="busca" class="form-control border-right-0 search-place"
                            placeholder="Pesquisar Email" aria-label="Pesquisar" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <span class="input-group-text bg-transparent border-left-0" id="basic-addon2"><i
                                    class="fas fa-search"></i></span>
                        </div>
                    </div>
                </form>
            </div>

        </div>

    </section>

    <section class="container">

        <table class="table table-borderless mt-3">
            <thead>
                <tr class="text-light">
                    <th scope="col">Código Pedido</th>
                    <th scope="col">Id Usuário</th>
                    <th scope="col">Email</th>
                    <th scope="col">Data_Compra</th>
                    <th scope="col" class="text-center">Validar</th>
                </tr>
            </thead>
            <tbody id="result">
                <?php
                    $sqlmostrar=('select * from usuarios U, estudantes E, pedido P where U.id_usuario=id_estudante and E.id_estudante=P.id_estuda;');
                    $resul=mysqli_query($conexao, $sqlmostrar) or die (mysqli_error($conexao));
                    while($con_usu=mysqli_fetch_array($resul)){
                        echo('<tr class="text-clear">
                            <th scope="row">'.$con_usu["id_pedido"].' </th>
                            <th scope="row">'.$con_usu["id_usuario"].' </th>
                            <td> '.$con_usu["Email"].' </td>
                            <td> '.$con_usu['Data_Compra'].' </td>');
                            echo('<td class="justify-content-center d-flex"><a class="btn text-clear" href="pagamentos.php?val='.$con_usu['id_usuario'].'"><i class="fas fa-check-square h5"></i></a></td>');
                            echo('</tr>');

                        if(isset($_GET["val"])){
                            $val=$_GET["val"];
                            $sql_val=('update estudantes set Plano=true where id_estudante='.$val.';');
                            $sql_del=('delete from pedido where id_estuda='.$val.';');
                            $mostrar_sql=mysqli_query($conexao, $sql_val);    
                            $mostrar_sql=mysqli_query($conexao, $sql_del);    
                            header('Location: pagamentos.php');  
                        }   
                    }          
                ?>
            </tbody>
        </table>
    </section>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../node_modules/jquery/dist/jquery.js"></script>
    <script src="../node_modules/popper.js/dist/umd/popper.js"></script>
    <script src="../node_modules/bootstrap/dist/js/bootstrap.js"></script>

    <!-- javascript SimpleBar -->
    <script src="../node_modules/OverlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <script src="../node_modules/OverlayScrollbars/js/OverlayScrollbars.min.js"></script>

</body>
<script>
    var instance = OverlayScrollbars(document.getElementsByTagName("body"), {
        className: "os-theme-dark",
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
        scrollbars: {
            visibility: "auto",
            autoHide: "move",
            autoHideDelay: 500,
            dragScrolling: true,
            clickScrolling: false,
            touchSupport: true,
            snapHandle: true
        }
    });
</script>
<?php
    }else{
        $_SESSION["facaLog"]=true;
        echo('<script>window.location.href = "../login.php";</script>');
    }
?>
<script>
    $("#busca").keyup(function () {
        var busca = $("#busca").val();
        $.post('../assets/pesquisar.php', {
            pag: busca
        }, function (data) {
            $("#result").html(data);
        });
    });
</script>


</html>