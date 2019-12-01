<?php
    include('conexao.php');
    session_start();
    setlocale( LC_ALL , 'pt_BR' );
	date_default_timezone_set('America/Bahia');
    //funcao limpar caracteres nao numericos 
    function limpar_texto($str){ 
        return preg_replace("/[^0-9]/", "", $str); 
    }

    if(isset($_POST['criar'])){
        $nome=$_POST['nome'];
        $sobrenome=$_POST['sobrenome'];
        $datanasc=$_POST['datanasc'];
        $celular=$_POST['celular'];
        $email=$_POST['email'];
        $senha=$_POST['senha'];
        $confirme=$_POST['confirme'];

        //formatando data
        $datanasc = explode("/",$datanasc);
        $date_check = checkdate($datanasc[1], $datanasc[0], $datanasc[2]);
        $datanasc = array_reverse($datanasc);
        $datanasc = implode ('-', $datanasc);

        $date_temp = strtotime($datanasc);
        $today = strtotime(date("Y-m-d"));

        $celular = limpar_texto($celular);
        $sql=('select * from usuarios where Email = "'.$email.'";');
        $resul=mysqli_query($conexao, $sql);
        $con=mysqli_fetch_array($resul);

        if($date_check == true && $today > $date_temp){
            if($email== $con['Email']){
                $_SESSION["email"] = true;
                echo('<script>window.location.href = "../cad-estudy.php";</script>');
            } else if($senha == $confirme){   
                $sqlinserir = ('insert into usuarios (nome, sobrenome, Data_Nasc, Email, Senha, Cell, id_privilegio, perfil_img) values ("'.$nome.'", "'.$sobrenome.'", "'.$datanasc.'", "'.$email.'", "'.sha1($senha.$email).'", "'.$celular.'", 1, "img/perfil/sem-foto.png");');
                $inserir=mysqli_query($conexao,$sqlinserir) or die (mysqli_error($conexao));
    
                $sql=('select * from usuarios where Email = "'.$email.'";');
                $resul=mysqli_query($conexao, $sql);
                $con=mysqli_fetch_array($resul);
    
                $sqlinserir2 = ('insert into date_login (pri_login, ultimo_login, id_usu) values("'.date('Y-m-d').'", "'.date('Y-m-d H:i:s', time()).'", '.$con['id_usuario'].');');
                $inserir2=mysqli_query($conexao,$sqlinserir2) or die (mysqli_error($conexao));
    
                $sqlinserir3 = ('insert into estudantes (id_estudante, situacao, plano) values('.$con['id_usuario'].',"Estudando",false);');
                $inserir3=mysqli_query($conexao,$sqlinserir3) or die (mysqli_error($conexao));
    
                if($inserir3){ 
                    $_SESSION["cadastrado"] = true;
                    echo('<script>window.location.href = "../index.php";</script>');//cadastro com sucesso
                }
    
            }else {
                $_SESSION["senhas"] = true;
                echo('<script>window.location.href = "../cad-estudy.php";</script>');
            }

        }else{
            $_SESSION["datas"] = true;
            echo('<script>window.location.href = "../cad-estudy.php";</script>');
        } 
    }

    if(isset($_POST['Criar-prof'])){
        $nome=$_POST['nome'];
        $sobrenome=$_POST['sobrenome'];
        $datanasc=$_POST['datanasc'];
        $celular=$_POST['celular'];
        $email=$_POST['email'];
        $senha=$_POST['senha'];
        $confirme=$_POST['confirme'];
        $estado=$_POST['estado'];
        $num=$_POST['numero'];
        $cidade=$_POST['cidade'];
        $rua=$_POST['rua'];
        $cep=$_POST['cep'];
        $cpf=$_POST['cpf'];
        $cert=$_POST['certificado'];
        $exp=$_POST['experiencia'];
        $bairro=$_POST['bairro'];

        //formatando data
        $datanasc = explode("/",$datanasc);
        $date_check = checkdate($datanasc[1], $datanasc[0], $datanasc[2]);
        $datanasc = array_reverse($datanasc);
        $datanasc = implode ('-', $datanasc);

        $date_temp = strtotime($datanasc);
        $today = strtotime(date("Y-m-d"));
         
        $celular = limpar_texto($celular);
        $cpf = limpar_texto($cpf);
        $cep = limpar_texto($cep);

        $sql=('select * from usuarios where Email = "'.$email.'";');
        $resul=mysqli_query($conexao, $sql);
        $con=mysqli_fetch_array($resul);

        if($date_check == true && $today > $date_temp){
            if($email== $con['Email']){
                $_SESSION["email"] = true;
                echo('<script>window.location.href = "../cad-prof.php";</script>');
    
            } else if($senha == $confirme ){
                $sqlinserir = ('insert into usuarios (Nome, Sobrenome, Data_Nasc, Email, Senha, Cell, Cidade, Rua, Estado, Numero, CEP, Bairro, CPF, id_privilegio, perfil_img) values 
                ("'.$nome.'", "'.$sobrenome.'", "'.$datanasc.'", "'.$email.'", "'.sha1($senha.$email).'", "'.$celular.'","'.$cidade.'","'.$rua.'","'.$estado.'","'.$num.'","'.$cep.'","'.$bairro.'","'.$cpf.'", 2, "img/perfil/sem-foto.png");');
                $inserir=mysqli_query($conexao,$sqlinserir) or die (mysqli_error($conexao));
                $sql=('select * from usuarios where Email = "'.$email.'";');
                $resul=mysqli_query($conexao, $sql);
                $con=mysqli_fetch_array($resul);
    
                $sqlinserir2 = ('insert into date_login (pri_login, ultimo_login, id_usu) values("'.date('Y-m-d').'", "'.date('Y-m-d H:i:s', time()).'", '.$con['id_usuario'].');');
                $inserir2=mysqli_query($conexao,$sqlinserir2) or die (mysqli_error($conexao));
    
                $sqlinserir3 = ('insert into profissional (id_profissional, experiencia, certificado, validacao) values('.$con['id_usuario'].',"'.$exp.'","'.$cert.'",0);');
                $inserir3=mysqli_query($conexao,$sqlinserir3) or die (mysqli_error($conexao));
    
                if($inserir3){ 
                    $_SESSION["cadastrado"] = true;
                    echo('<script>window.location.href = "../index.php";</script>');//cadastro com sucesso
                }
    
            }else {
                $_SESSION["senhas"] = true;
                echo('<script>window.location.href = "../cad-prof.php";</script>');
            }

        }else{
            $_SESSION["datas"] = true;
            echo('<script>window.location.href = "../cad-prof.php";</script>');
        }
    }


    if(isset($_POST['tudo'])){
      
        $tudo = $_POST['tudo'];
        if($tudo==true){ 
        include('../toast.php');
        echo("
        <script src='assets/toast.js'></script>
        <script>preencha()</script>");

        $tudo=false;
        }


    
    }

    if(isset($_POST['cep'])){
      
        $cep = $_POST['cep'];
        if($cep==true){ 
        include('../toast.php');
        echo("
        <script src='assets/toast.js'></script>
        <script>cep()</script>");

        $cep=false;
        }


    
    }

?>