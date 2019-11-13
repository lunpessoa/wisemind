<?php
	include('conexao.php');
	session_start();
	if(isset($_SESSION["log_status"]) && $_SESSION["log_status"]==true){
	$sql=('select * from usuarios where id_usuario = '. $_SESSION["id_user"].';');
	$resul=mysqli_query($conexao, $sql);
    $con=mysqli_fetch_array($resul);
    
    if(isset($_POST['Enviar'])){
        $nome=$_POST['nome'];
        $sobrenome=$_POST['sobrenome'];
        $data=$_POST['data'];
        $cpf=$_POST['cpf'];
        
        $sqlinserir = ('update usuarios set Nome = "'.$nome.'",Sobrenome ="'.$sobrenome.'", Data_Nasc = "'.$data.'" where id_usuario = '.$_SESSION['id_user'].';');
                $inserir=mysqli_query($conexao,$sqlinserir) or die (mysqli_error($conexao));

                if($inserir){ 
                    
                    if($cpf!=0){
                        $sqlinserir = ('update usuarios set CPF = "'.$cpf.'" where id_usuario = '.$_SESSION['id_user'].';');
                        $inserir=mysqli_query($conexao,$sqlinserir) or die (mysqli_error($conexao));
                        if($sqlinserir){
                            echo('<script>window.location.href = "../painel-usu.php";</script>');
                        }
                    }else{
                        echo('<script>window.location.href = "../painel-usu.php";</script>');
                    }
                    
                }else{
                     echo("Não foi");
                }

        




    }
}else{
    echo('<script>window.alert("Faça o login antes")
    window.location.href = "login.php";</script>');
}


?>