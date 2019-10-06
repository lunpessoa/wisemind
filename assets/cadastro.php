<?php
    include('conexao.php');

    if(isset($_POST['criar'])){

        $nome=$_POST['nome'];
        $sobrenome=$_POST['sobrenome'];
        $datanasc=$_POST['datanasc'];
        $celular=$_POST['celular'];
        $email=$_POST['email'];
        $senha=$_POST['senha'];
        $confirme=$_POST['confirme'];

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

?>