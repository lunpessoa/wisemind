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
    <title>Admin-Usuarios</title>
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
                <h1 class="h1 font-lobster">Usuários</h1>

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
                    <th scope="col">Email</th>
                    <th scope="col">Privilegio</th>
                    <th scope="col" class="text-center">Excluir</th>
                </tr>
            </thead>
            <tbody id="result">
                <?php
                    $sqlmostrar=('select * from usuarios;');
                    $resul=mysqli_query($conexao, $sqlmostrar) or die (mysqli_error($conexao));
                    while($con_usu=mysqli_fetch_array($resul)){
                        echo('<tr class="text-clear">
                            <th scope="row">'.$con_usu["id_usuario"].' </th>
                            <td><a href="painel-usu-alter?us='.$con_usu['id_usuario'].'"> '.$con_usu["Nome"].' </td>
                            <td> '.$con_usu["Email"].' </td>
                            <td> ');if($con_usu["id_privilegio"]==1){
                                        echo("Estudante");
                                    }else if($con_usu["id_privilegio"]==2){
                                        echo("Profissional");
                                    }else if($con_usu["id_privilegio"]==3){
                                        echo("Administrador");
                                    }
                            echo('</td>');
                            if($con_usu["id_privilegio"]==3){
                                echo('<td class="justify-content-center d-flex"><a class="btn text-clear disabled" href="users.php?ex='.$con_usu['id_usuario'].'"><i class="fas fa-user-times"></i></a></td>');
                            } else{
                                echo('<td class="justify-content-center d-flex"><a class="btn text-clear" href="users.php?ex='.$con_usu['id_usuario'].'"><i class="fas fa-user-times"></i></a></td>');
                            }
                            echo('</tr>');

                    if(isset($_GET["ex"])){
                        $ex=$_GET["ex"];
                        $sql_ex=('delete from usuarios where id_usuario='.$ex.';');
                        if($con_usu["id_privilegio"]==1){
                            $sql_ex2=('delete from estudantes where id_estudante='.$ex.';');
                        }else{
                            $sql_ex2=('delete from profissional where id_profissional='.$ex.';');
                        }
                        $mostrar_sql=mysqli_query($conexao, $sql_ex);    
                        $mostrar_sql2=mysqli_query($conexao, $sql_ex2);
                        if($mostrar_sql){
                            if($mostrar_sql2){
                                include('toast-admin.php');
                                echo("<script>window.location.href = 'users.php';</script>
                                <script src='../assets/toast.js'></script>
	                            <script>apaga();</script>");
                                header('Location: users.php');
                            }else{
                                include('toast-admin.php');
                                echo("<script>window.location.href = 'users.php';</script>
                                <script src='../assets/toast.js'></script>
	                            <script>erroApaga();</script>");
                            }
                        }
                        header('Location: users.php');  
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
        $.post('../assets/pesquisar.php', {
            busca: busca
        }, function (data) {
            $("#result").html(data);
        });
    });
</script>

</html>