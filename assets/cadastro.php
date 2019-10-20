<?php
    include('conexao.php');
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
        $datanasc = array_reverse($datanasc);
        $datanasc = implode ('-', $datanasc);

        $celular = limpar_texto($celular);
        $sql=('select * from usuarios where Email = "'.$email.'";');
        $resul=mysqli_query($conexao, $sql);
        $con=mysqli_fetch_array($resul);

        if($email== $con['Email']){
            echo('<script>alert("email ja cadastrado")</script>');
        } else if($senha==$confirme){

               
                $sqlinserir = ('insert into usuarios (nome, sobrenome, Data_Nasc, Email, Senha, Cell, id_privilegio) values ("'.$nome.'", "'.$sobrenome.'", "'.$datanasc.'", "'.$email.'", "'.sha1($senha.$email).'", "'.$celular.'", 1);');
                $inserir=mysqli_query($conexao,$sqlinserir);

                if($inserir){ 
                    
                    echo('<script>alert("Inserido com sucesso")
                    window.location.href = "../index.php";</script>');//cadastro com sucesso
                    
                    
                    }
                    else{
                        echo('<script>alert("Deu pt")</script>');//cadastro inc=valido 
                    }
            

                }else {
                    echo('<script>alert("senhas diferentes")
                    window.location.href = "../cad-estudy.php";</script>');
                    
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
        $datanasc = array_reverse($datanasc);
        $datanasc = implode ('-', $datanasc);
         
        $celular = limpar_texto($celular);

        $sql=('select * from usuarios where Email = "'.$email.'";');
        $resul=mysqli_query($conexao, $sql);
        $con=mysqli_fetch_array($resul);

        if($email== $con['Email']){
            echo('<script>alert("email ja cadastrado")</script>');
        } else if($senha==$confirme){

               
                $sqlinserir = ('insert into usuarios (Nome, Sobrenome, Data_Nasc, Email, Senha, Cell, Cidade, Rua, Estado, Numero, CEP, Bairro, CPF, id_privilegio) values ("'.$nome.'", "'.$sobrenome.'", "'.$datanasc.'", "'.$email.'", "'.sha1($senha.$email).'", "'.$celular.'","'.$cidade.'","'.$rua.'","'.$estado.'","'.$num.'","'.$cep.'","'.$bairro.'","'.$cpf.'", 3);');
                $inserir=mysqli_query($conexao,$sqlinserir);
                if($inserir){
                    echo('<script>alert("foi esse")</script>');
                }else{
                    echo('<script>alert("Deu pt aqui")</script>');
                }
                $sql=('select * from usuarios where Email = "'.$email.'";');
                $resul=mysqli_query($conexao, $sql);
                $con=mysqli_fetch_array($resul);

                $sqlinserir2 = ('insert into profissional (id_profissional, experiencia, certificado, id_especial) values('.$con['id_usuario'].',"'.$exp.'","'.$cert.'",32);');
                $inserir2=mysqli_query($conexao,$sqlinserir2);

                if($inserir2){ 
                    
                    echo('<script>alert("Inserido com sucesso")
                    window.location.href = "../index.php";</script>');//cadastro com sucesso
                    
                    
                    }
                    else{
                        echo('<script>alert("Deu pt")</script>');//cadastro inc=valido 
                    }
            

                }else {
                    echo('<script>alert("senhas diferentes")
                    window.location.href = "../cad-prof.php";</script>');
                    
                }



    }

?>