<?php
   include('../assets/conexao.php');
   session_start();
   if(isset($_SESSION["adminlog_status"]) && $_SESSION["adminlog_status"]=true){
        $sql=('select * from usuarios where id_usuario = '. $_SESSION["id_user"].';');
        $resul=mysqli_query($conexao, $sql);
        $con=mysqli_fetch_array($resul);
        $pesq_status=false;
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
        <form action="pesquisar.php" method="get" name="formularioPesq" id="formularioPesq">
            <input type="text" name="email-pesq" id="pesq" placeholder="Digite um email">
            <button type="submit" name="Enviar" value="Pesquisar" id="Pesquisar">Pesquisar</button>
        </form>
        <button id="mostrar-todos">Mostrar Todos</button>
        <?php
        if(isset($_GET['Enviar'])){
            $email = $_GET['email-pesq'];
            $sql_pesq=('select * from usuarios where email = "'.$email.'";');
            $sql_pesq_query = mysqli_query($conexao, $sql_pesq) or die (mysqli_error($conexao));
            $resul_pesq = mysqli_fetch_array($sql_pesq_query) or die (mysqli_error($conexao));
            $cont = mysqli_num_rows( $sql_pesq_query);

            if($cont==0){
                echo('<script>alert("Email de usuario não encontrado!")
                window.location.href = "../users.php"</script>)');
            }else{
                echo('<tr>
                    <td>'.$resul_pesq["id_usuario"].' </td>
                    <td> '.$resul_pesq["Nome"].' </td>
                    <td> '.$resul_pesq["Email"].' </td>
                    <td> ');if($resul_pesq["id_privilegio"]==1){
                                echo("Usuario");
                            }else if($resul_pesq["id_privilegio"]==2){
                                echo("Profissional");
                            }else if($resul_pesq["id_privilegio"]==3){
                                echo("Administrador");
                            }
                    echo('</td>');
                    if($resul_pesq["id_privilegio"]!=3){
                        echo('<td><a href="excluir_quest.php?ex='.$resul_pesq['Nome'].'">apagar</a></td>');
                    }
                    echo('</tr>');

            }
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
<script>
    document.getElementById("mostrar-todos").onclick = (e)=>{
        e.preventDefault()
        window.location.href= "users.php"
    }
</script>

</html>