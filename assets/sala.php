<?php
    include('conexao.php');

    if(isset($_POST['criar'])){
        $nome=$_POST['nome'];
        $area=$_POST['area'];
        $data =  date('d/m/Y');
        $data = explode("/",$data);
        $data = array_reverse($data);
        $data = implode ('-', $data);
        
                $sqlinserir = ('insert into chat(area,num_participantes,data_criacao) values ("'.$nome.'",0,"'.$data.'")');
                $inserir=mysqli_query($conexao,$sqlinserir) or die (mysqli_error($conexao));

                if($inserir){ 
                    
                    echo('<script>alert("Inserido com sucesso")
                    window.location.href = "../index.php";</script>');//cadastro com sucesso
                    
                }else {
                    echo('<script>alert("erro")
                    window.location.href = "../cad-estudy.php";</script>');
                    
                }



    }
?>