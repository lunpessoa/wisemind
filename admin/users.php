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
    <title>Login</title>
    <meta charset="utf-8">

    <link rel="stylesheet" href="node_modules/bootstrap/compiler/bootstrap.css">
    <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="style/login.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">

</head>

<body>
    <h1>Usuarios</h1>
    <table border=1>
        <tr>
            <td>Id</td>
            <td>Nome</td>
            <td>Email</td>
            <td colspan=2>Privilegio</td>
        </tr>
        <form action="pesquisar.php" method="get" name="formularioPesq">
            <input type="text" name="email-pesq" id="pesq" placeholder="Digite um email">
            <button type="submit" name="Enviar" value="Pesquisar" id="Pesquisar">Pesquisar</button>
        </form>
        <?php

            $sqlmostrar=('select * from usuarios;');
            $resul=mysqli_query($conexao, $sqlmostrar) or die (mysqli_error($conexao));
            while($con_usu=mysqli_fetch_array($resul) or die (mysqli_error($conexao))){
                echo('<tr>
                    <td>'.$con_usu["id_usuario"].' </td>
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
                    if($con_usu["id_privilegio"]!=3){
                        echo('<td><a href="excluir_quest.php?ex='.$con_usu['Nome'].'">apagar</a></td>');
                    }
                    echo('</tr>');
            }
   
    ?>
    </table>

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