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
    <title>Admin-Profissional</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../node_modules/bootstrap/compiler/bootstrap.css">
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
                <h1 class="h1 font-lobster">Profissionais Validação</h1>

                <form>
                    <div class="input-group mb-3">
                        <input type="text" id="busca" class="phone_with_ddd form-control border-right-0 search-place"
                            placeholder="Pesquisar E-mail" aria-describedby="basic-addon2">
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
                    <th scope="col">Id</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Sobrenome</th>
                    <th scope="col">Email</th>
                    <th scope="col">Certificado</th>
                    <th scope="col" class="text-center">Validar</th>
                </tr>
            </thead>
            <tbody id="result">
                <?php
                    $sqlmostrar=('select * from usuarios, profissional where id_usuario = id_profissional and validacao = false;');
                    $resul=mysqli_query($conexao, $sqlmostrar) or die (mysqli_error($conexao));
                    while($con_usu=mysqli_fetch_array($resul)){
                        echo('<tr class="text-clear">
                            <th scope="row">'.$con_usu["id_profissional"].' </th>
                            <td> '.$con_usu["Nome"].' </td>
                            <td> '.$con_usu["Sobrenome"].' </td>
                            <td> '.$con_usu["Email"].'</td>
                            <td> '.$con_usu["certificado"].'</td>'
                        );
                        echo('<td class="justify-content-center d-flex"><a class="btn text-clear" href="profissional.php?val='.$con_usu['id_profissional'].'"><i class="fas fa-check-square h5"></i></a></td>');
                        echo('</tr>');

                        if(isset($_GET["val"])){
                            $val=$_GET["val"];
                            $sql_val=('update profissional set validacao=true where id_profissional='.$val.';');
                            $mostrar_sql=mysqli_query($conexao, $sql_val);      
                            header('Location: profissional.php');  
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
    <script src="../js/javinha.js"></script>

</body>
<?php
    }else{
        $_SESSION["facaLog"]=true;
        echo('<script>window.location.href = "../index.php";</script>');
    }
?>

<script>
    $("#busca").keyup(function () {
        var busca = $("#busca").val();
        $.post('../assets/pesquisar.php', {prof: busca},function(data){
            $("#result").html(data);
        });
    });
</script>

</html>