<?php
	include('conexao.php');
	session_start();
	if(isset($_SESSION["log_status"]) && $_SESSION["log_status"]==true){
        $sql=('select * from usuarios where id_usuario = '. $_SESSION["id_user"].';');
        $resul=mysqli_query($conexao, $sql);
        $con=mysqli_fetch_array($resul);
        if($con['id_privilegio']==1){
            $sql2=('select * from estudantes where id_estudante = '. $_SESSION["id_user"].';');
            $resul2=mysqli_query($conexao, $sql2);
            $est=mysqli_fetch_array($resul2);
        }else if($con['id_privilegio']==2){
            $sql2=('select * from profissional where id_profissional = '. $_SESSION["id_user"].';');
            $resul2=mysqli_query($conexao, $sql2);
            $est=mysqli_fetch_array($resul2);
        }
    
        if(isset($_POST['Enviar-1'])){
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
        if(isset($_POST['Enviar-2'])){
            $descricao = $_POST['descricao'];
            
            $sqlinserir = ('update estudantes set Situacao = "'.$descricao.'" where id_estudante = '.$_SESSION['id_user'].';');
                    $inserir=mysqli_query($conexao,$sqlinserir) or die (mysqli_error($conexao));

                    if($inserir){ 
                        
                            echo('<script>window.location.href = "../painel-usu.php";</script>');
                        
                    }else{
                        echo("Não foi");
                    }


        }


        if(isset($_FILES['avatar']))
    {
        date_default_timezone_set("Brazil/East"); 

        $ext = strtolower(substr($_FILES['avatar']['name'],-4)); //Pegando extensão do arquivo
        $new_name =  $_SESSION['id_user']. $ext; //Definindo um novo nome para o arquivo
        $dir = '../img/perfil/'; //Diretório para uploads

        move_uploaded_file($_FILES['avatar']['tmp_name'], $dir.$new_name); //Fazer upload do arquivo

        echo('<script>window.location.href = "../painel-usu.php";</script>');

        $sqlinserir = ('update usuarios set perfil_img = "img/perfil/'.$new_name.'" where id_usuario = '.$_SESSION['id_user'].';');
                    $inserir=mysqli_query($conexao,$sqlinserir) or die (mysqli_error($conexao));

                    if($inserir){ 
                        
                            echo('<script>window.location.href = "../painel-usu.php";</script>');
                        
                    }else{
                        echo("Não foi");
                    }
    }
    }else{
        echo('<script>window.alert("Faça o login antes")
        window.location.href = "login.php";</script>');
    }


?>