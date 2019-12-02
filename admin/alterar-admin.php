<?php
	include('../assets/conexao.php');
	session_start();
	if(isset($_SESSION["adminlog_status"]) && $_SESSION["adminlog_status"]==true){
        $sql=('select * from usuarios where id_usuario = '.$_SESSION["user"].';');
        $resul=mysqli_query($conexao, $sql);
        $con=mysqli_fetch_array($resul);

        function limpar_texto($str){ 
            return preg_replace("/[^0-9]/", "", $str); 
        }
        if($con['id_privilegio']==1){
            $sql2=('select * from estudantes where id_estudante = '. $_SESSION["user"].';');
            $resul2=mysqli_query($conexao, $sql2);
            $est=mysqli_fetch_array($resul2);
        }else if($con['id_privilegio']==2){
            $sql2=('select * from profissional where id_profissional = '. $_SESSION["user"].';');
            $resul2=mysqli_query($conexao, $sql2);
            $est=mysqli_fetch_array($resul2);
        }
    
        if(isset($_POST['Enviar-1'])){
            $nome=$_POST['nome'];
            $sobrenome=$_POST['sobrenome'];
            $data=$_POST['data'];
            $cpf=$_POST['cpf'];

            $cpf = limpar_texto($cpf);

            $datanasc = explode("/",$data);
            
            $date_check = checkdate($datanasc[1], $datanasc[0], $datanasc[2]);

            $datanasc = array_reverse($datanasc);
            $datanasc = implode ('-', $datanasc);

            $date_temp = strtotime($datanasc);
            $today = strtotime(date("Y-m-d"));
            
            if($date_check == true && $today > $date_temp){
                $sqlinserir = ('update usuarios set Nome = "'.$nome.'",Sobrenome ="'.$sobrenome.'", Data_Nasc = "'.$datanasc.'" where id_usuario = '.$_SESSION["user"].';');
                $inserir=mysqli_query($conexao,$sqlinserir) or die (mysqli_error($conexao));

                if($inserir){ 
                    
                    if($cpf!=0){
                        $sqlinserir = ('update usuarios set CPF = "'.$cpf.'" where id_usuario = '.$_SESSION["user"].';');
                        $inserir=mysqli_query($conexao,$sqlinserir) or die (mysqli_error($conexao));
                        if($sqlinserir){
                            $_SESSION["alterado"]=true;
                            echo('<script>window.location.href = "./painel-usu-alter.php?us='.$_SESSION["user"].'";</script>');
                        }
                    }else{
                        $_SESSION["erroAlterado"]=true;
                        echo('<script>window.location.href ="./painel-usu-alter.php?us='.$_SESSION["user"].'";</script>');
                    }
                    
                }else{
                    $_SESSION["erroAlterado"]=true;
                    echo('<script>window.location.href = "./painel-usu-alter.php?us='.$_SESSION["user"].'";</script>');
                }
                
            }else{
                $_SESSION["erroAlterado"]=true;
                echo('<script>window.location.href = "./painel-usu-alter.php?us='.$_SESSION["user"].'";</script>');
            }
        }
        if(isset($_POST['Enviar-2'])){
            $descricao = $_POST['descricao'];
            
            $sqlinserir = ('update estudantes set Situacao = "'.$descricao.'" where id_estudante = '.$_SESSION["user"].';');
                    $inserir=mysqli_query($conexao,$sqlinserir) or die (mysqli_error($conexao));

                    if($inserir){ 
                        $_SESSION["alterado"]=true;
                        echo('<script>window.location.href = "./painel-usu-alter.php?us='.$_SESSION["user"].'";</script>');
                        
                    }else{
                        $_SESSION["erroAlterado"]=true;
                        echo('<script>window.location.href = "./painel-usu-alter.php?us='.$_SESSION["user"].'";</script>');
                    }


        }

        if(isset($_POST['Enviar-3'])){
            $tendencia = $_POST['tendencia'];
            $skill = $_POST['skill'];
            
            if($tendencia!=null){
            
                $sqlinserir = ('update estudantes set Tendencia_de_area =
                "'.$tendencia.'" where id_estudante = '.$_SESSION["user"].';');
                $inserir=mysqli_query($conexao,$sqlinserir) or die (mysqli_error($conexao));

                    if($inserir){ 
                        $_SESSION["alterado"]=true;
                    }else{
                        $_SESSION["erroAlterado"]=true;
                    }
            }

            if($skill!=null){
            
                $sqlinserir = ('update estudantes set Skills ="'.$skill.'" where id_estudante = '.$_SESSION["user"].';');
                $inserir=mysqli_query($conexao,$sqlinserir) or die (mysqli_error($conexao));

                    if($inserir){ 
                        $_SESSION["alterado"]=true;
                    }else{
                        $_SESSION["erroAlterado"]=true;
                    }
            }

            echo('<script>window.location.href = "./painel-usu-alter.php?us='.$_SESSION["user"].'";</script>');
            


        }

        if(isset($_POST['Enviar-4'])){
            $celular = $_POST['celular'];
            $celular = limpar_texto($celular);
            
                    $sqlinserir = ('update usuarios set Cell = "'.$celular.'" where id_usuario = '.$_SESSION["user"].';');
                    $inserir=mysqli_query($conexao,$sqlinserir) or die (mysqli_error($conexao));

                    if($inserir){ 
                            $_SESSION["alterado"]=true;
                            echo('<script>window.location.href = "./painel-usu-alter.php?us='.$_SESSION["user"].'";</script>');
                        
                    }else{
                        $_SESSION["erroAlterado"]=true;
                        echo('<script>window.location.href = "./painel-usu-alter.php?us='.$_SESSION["user"].'";</script>');
                    }


        }
        
        if(isset($_POST['Enviar-5'])){
            $rua = $_POST['rua'];
            $numero = $_POST['numero'];
            $CEP = $_POST['CEP'];
            $Bairro = $_POST['Bairro'];
            $Cidade = $_POST['Cidade'];
            $Estado = $_POST['Estado'];

            $CEP = limpar_texto($CEP);
            
            
            if($rua!=null){
            
                $sqlinserir = ('update usuarios set Rua =
                "'.$rua.'" where id_usuario = '.$_SESSION["user"].';');
                $inserir=mysqli_query($conexao,$sqlinserir) or die (mysqli_error($conexao));

                    if($inserir){ 
                        $_SESSION["alterado"]=true;
                    }else{
                        $_SESSION["erroAlterado"]=true;
                    }
            }

            if($numero!=null){
            
                $sqlinserir = ('update usuarios set Numero =
                '.$numero.' where id_usuario = '.$_SESSION["user"].';');
                $inserir=mysqli_query($conexao,$sqlinserir) or die (mysqli_error($conexao));

                    if($inserir){ 
                        $_SESSION["alterado"]=true;
                    }else{
                        $_SESSION["erroAlterado"]=true;
                    }
            }

            if($CEP!=null){
            
                $sqlinserir = ('update usuarios set CEP =
                "'.$CEP.'" where id_usuario = '.$_SESSION["user"].';');
                $inserir=mysqli_query($conexao,$sqlinserir) or die (mysqli_error($conexao));

                    if($inserir){ 
                        $_SESSION["alterado"]=true;
                    }else{
                        $_SESSION["erroAlterado"]=true;
                    }
            }

            if($Bairro!=null){
            
                $sqlinserir = ('update usuarios set Bairro =
                "'.$Bairro.'" where id_usuario = '.$_SESSION["user"].';');
                $inserir=mysqli_query($conexao,$sqlinserir) or die (mysqli_error($conexao));

                    if($inserir){ 
                        $_SESSION["alterado"]=true;
                    }else{
                        $_SESSION["erroAlterado"]=true;
                    }
            }

            if($Cidade!=null){
            
                $sqlinserir = ('update usuarios set Cidade =
                "'.$Cidade.'" where id_usuario = '.$_SESSION["user"].';');
                $inserir=mysqli_query($conexao,$sqlinserir) or die (mysqli_error($conexao));

                    if($inserir){ 
                        $_SESSION["alterado"]=true;
                    }else{
                        $_SESSION["erroAlterado"]=true;
                    }
            }

            if($Estado!=null){
            
                $sqlinserir = ('update usuarios set Estado =
                "'.$Estado.'" where id_usuario = '.$_SESSION["user"].';');
                $inserir=mysqli_query($conexao,$sqlinserir) or die (mysqli_error($conexao));

                    if($inserir){ 
                        $_SESSION["alterado"]=true;
                    }else{
                        $_SESSION["erroAlterado"]=true;
                    }
            }

            echo('<script>window.location.href ="./painel-usu-alter.php?us='.$_SESSION["user"].'";</script>');
            


        }

        
        //senha
        if(isset($_POST['Enviar-6'])){
            $senha_nova = $_POST['senha-nova'];
            $confirm_senha = $_POST['confirm-senha'];
            
            if($senha_nova==$confirm_senha){

                $sqlinserir = ('update usuarios set Senha = "'.sha1($senha_nova.$con['Email']).'" where id_usuario = '.$_SESSION["user"].';');
                $inserir=mysqli_query($conexao,$sqlinserir) or die (mysqli_error($conexao));


                if($inserir){
                    $_SESSION["alterado"]=true;
                    echo('<script>window.location.href = "./painel-usu-alter.php?us='.$_SESSION["user"].'";</script>');
                }else{
                    $_SESSION["erroAlterado"]=true;
                    echo('<script>window.location.href = "./painel-usu-alter.php?us='.$_SESSION["user"].'";</script>');
                }
            
            }else{
                $_SESSION["senhas-difer"]=true;
                echo('<script>window.location.href = "./painel-usu-alter.php?us='.$_SESSION["user"].'";</script>');
            }
        }

        if(isset($_POST['Enviar-8'])){
            $sqlmostrar=('select * from especializacao where id_prof = "'.$_SESSION["user"].'";');
            $resul3=mysqli_query($conexao, $sqlmostrar);
			while($con_prof=mysqli_fetch_array($resul3)){
                $area[$con_prof['id_espc']]=$_POST['area'.$con_prof['id_espc']];
                $profissao[$con_prof['id_espc']]=$_POST['profissao'.$con_prof['id_espc']];						
            }

            $sqlmostrar=('select * from especializacao where id_prof = "'.$_SESSION["user"].'";');
            $resul3=mysqli_query($conexao, $sqlmostrar);
            while($con_prof=mysqli_fetch_array($resul3)){
                $sqlinserir = ('update especializacao set Area = "'.$area[$con_prof['id_espc']].'"
                where id_espc = '.$con_prof['id_espc'].';');
                $inserir=mysqli_query($conexao,$sqlinserir) or die (mysqli_error($conexao));
                $sqlinserir = ('update especializacao set Profissao = "'.$profissao[$con_prof['id_espc']].'"
                where id_espc = '.$con_prof['id_espc'].';');
                $inserir=mysqli_query($conexao,$sqlinserir) or die (mysqli_error($conexao));						
            }
                    $inserir=mysqli_query($conexao,$sqlinserir) or die (mysqli_error($conexao));

                    if($inserir){ 
                        $_SESSION["alterado"]=true;
                        echo('<script>window.location.href = "./painel-usu-alter.php?us='.$_SESSION["user"].'";</script>');
                        
                    }else{
                        $_SESSION["erroAlterado"]=true;
                        echo('<script>window.location.href = "./painel-usu-alter.php?us='.$_SESSION["user"].'";</script>');
                    }


        }


        //Adicionar profissao
        if(isset($_POST['adicionar-prof'])){
            $area = $_POST['area'];
            $profissao = $_POST['profissao'];
            
            $sqlinserir = ('insert into especializacao (Area, Profissao, id_prof) values ("'.$area.'", "'.$profissao.'", '.$_SESSION["user"].');');
                    $inserir=mysqli_query($conexao,$sqlinserir) or die (mysqli_error($conexao));

                    if($inserir){ 
                        $_SESSION["alterado"]=true;
                        echo('<script>window.location.href = "./painel-usu-alter.php?us='.$_SESSION["user"].'";</script>');
                        
                    }else{
                        $_SESSION["erroAlterado"]=true;
                        echo('<script>window.location.href = "./painel-usu-alter.php?us='.$_SESSION["user"].'";</script>');
                    }


        }

        //Alterar iamgem usuario
        if(isset($_FILES['avatar'])){

        date_default_timezone_set("Brazil/East"); 

        $ext = strtolower(substr($_FILES['avatar']['name'],-4)); //Pegando extensão do arquivo
        $new_name = $_SESSION["user"]. $ext; //Definindo um novo nome para o arquivo
        $dir = '../img/perfil/'; //Diretório para uploads

        move_uploaded_file($_FILES['avatar']['tmp_name'], $dir.$new_name); //Fazer upload do arquivo

        echo('<script>window.location.href = "./painel-usu-alter.php?us='.$_SESSION["user"].'";</script>');

        $sqlinserir = ('update usuarios set perfil_img = "img/perfil/'.$new_name.'" where id_usuario = '.$_SESSION["user"].';');
                    $inserir=mysqli_query($conexao,$sqlinserir) or die (mysqli_error($conexao));

                    if($inserir){ 
                            $_SESSION["alterado"]=true;
                            echo('<script>window.location.href = "./painel-usu-alter.php?us='.$_SESSION["user"].'";</script>');
                        
                    }else{
                        $_SESSION["erroAlterado"]=true;
                        echo('<script>window.location.href = "./painel-usu-alter.php?us='.$_SESSION["user"].'";</script>');
                    }
        }
    }else{
        $_SESSION["facaLog"]=true;
        echo('<script>window.location.href = "../login.php";</script>');
    }


?>