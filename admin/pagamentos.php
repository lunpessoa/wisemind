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
                <h1 class="h1 font-lobster">Pagamentos</h1>

                <form action="pesquisar.php" method="get" name="formularioPesq">
                    <div class="input-group mb-3">
                        <input type="text" id="form-border-none" class="form-control border-right-0 search-place"
                            placeholder="Pesquisar" aria-label="Pesquisar" aria-describedby="basic-addon2">
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
                    <th scope="col">Nome</th>
                    <th scope="col">Sobrenome</th>
                    <th scope="col">Data_Compra</th>
                    <th scope="col" class="text-center">Validar</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $sqlmostrar=('select * from usuarios U, estudantes E, pedido P where U.id_usuario=id_estudante and E.id_estudante=P.id_estuda;');
                    $resul=mysqli_query($conexao, $sqlmostrar) or die (mysqli_error($conexao));
                    while($con_usu=mysqli_fetch_array($resul) or die (mysqli_error($conexao))){
                        echo('<tr class="text-clear">
                            <th scope="row">'.$con_usu["id_pedido"].' </th>
                            <th scope="row">'.$con_usu["id_usuario"].' </th>
                            <td> '.$con_usu["Nome"].' </td>
                            <td> '.$con_usu["Sobrenome"].' </td>
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
</body>
<?php
    }else{
            echo('<script>window.alert("Voce não esta logado como admin")
            window.location.href = "../login.php";</script>');
    }
    ?>

<script src="node_modules/jquery/dist/jquery.js"></script>
<script src="js/javinha.js"></script>
<script src="node_modules/popper.js/dist/umd/popper.js"></script>
<script src="node_modules/bootstrap/dist/js/bootstrap.js"></script>


</html>