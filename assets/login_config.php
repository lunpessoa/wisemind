<?php
    include('conexao.php');
    session_start();
    if(isset($_POST['Entrar'])){

        $email=$_POST['email'];
        $senha=$_POST['senha'];

        $sql=('select * from usuarios where Email = "'.$email.'";');
        $resul=mysqli_query($conexao, $sql);
        $con=mysqli_fetch_array($resul);
        $cont = mysqli_num_rows($resul);

        if($cont == 0){
            $_SESSION["senha-usuario"]=true;
            echo"<script>window.location.href='../login.php';</script>";

        }else{
                $sql_final=('select * from usuarios where Email = "'.$email.'" and Senha = "'.sha1($senha.$email).'";')
                or die("Erro ao selecionar");
                $res_final=mysqli_query($conexao, $sql_final) or die (mysqli_error($conexao));
                
                if (mysqli_num_rows($res_final)<=0){
                    $_SESSION["senha-usuario"]=true;
                    echo"<script language='javascript' type='text/javascript'>
                    window.location.href='../login.php';</script>";
                    die();
                }else{
                    
                    $_SESSION["id_user"]=$con['id_usuario'];
                    if($con['id_privilegio']==1 || $con['id_privilegio']==2){
                        $_SESSION["log_status"]=true;
                        $_SESSION["logado"]=true;
                        echo"<script>window.location.href='../index.php';</script>";
                        //setcookie("login",$login);
                    }else if($con['id_privilegio']==3){
                        $_SESSION["adminlog_status"]=true;
                        $_SESSION["admin"]=true;
                        echo"<script>window.location.href='../index.php';</script>";
                    }
            }
        }

        



    }

?>