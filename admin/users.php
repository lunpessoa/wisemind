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
    <title>Admin Usuarios</title>
    <meta charset="utf-8">

    <link rel="stylesheet" href="../node_modules/bootstrap/compiler/bootstrap.css">
    <link rel="stylesheet" href="../node_modules/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="usersadmin.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">

</head>

<body>


    <section class="container-fluid header-title d-flex align-items-end">
        <nav class="button-back">
            <a href="admin.php" class="btn p-0 text-dark bg-warning"><i class="fas fa-chevron-left"></i></a>
        </nav>

        <div class="w-100 d-flex justify-content-center position-absolute" style="margin-top:-150px">
            <div class="w-25 text-center">
                <h1 class="h1 font-lobster">Usuários</h1>

                <form action="pesquisar.php" method="get" name="formularioPesq">
                    <div class="input-group mb-3">
                        <input type="text" id="form-border-none" class="form-control border-right-0 search-place"
                            placeholder="Digite email do usuarios" name="email-pesq" aria-label="Pesquisar" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <button type="submit" class="btn btn-primary" name="Enviar"><i class="fas fa-search"></i></button>
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
            <tbody>
                <?php
                    $sqlmostrar=('select * from usuarios;');
                    $resul=mysqli_query($conexao, $sqlmostrar) or die (mysqli_error($conexao));
                    while($con_usu=mysqli_fetch_array($resul) or die (mysqli_error($conexao))){
                        echo('<tr class="text-clear">
                            <th scope="row">'.$con_usu["id_usuario"].' </th>
                            <td> '.$con_usu["Nome"].' </td>
                            <td> '.$con_usu["Email"].' </td>
                            <td> ');if($con_usu["id_privilegio"]==1){
                                        echo("Usuario");
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
                        header('Location: users.php');  
                    }   
                }          
                ?>
            </tbody>
        </table>
    </section>
</body>
<?php
    }else{
        $_SESSION["facaLog"]=true;
        echo('<script>window.location.href = "../login.php";</script>');
    }
    ?>

<script src="node_modules/jquery/dist/jquery.js"></script>
<script src="js/javinha.js"></script>
<script src="node_modules/popper.js/dist/umd/popper.js"></script>
<script src="node_modules/bootstrap/dist/js/bootstrap.js"></script>


</html>