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
</head>
<body>
    <a href="users.php">Usuarios</a>
    <a href="users.php">Usuarios</a>
    <a href="users.php">Usuarios</a>
</body>
<?php
   }else{
        echo('<script>window.alert("Voce não esta logado como admin")
        window.location.href = "../login.php";</script>');
   }
?>
</html>