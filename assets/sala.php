<?php
    include('conexao.php');
    if (!isset($_SESSION)) {
        session_start();
    }

    if(isset($_POST['criar'])){
        $nome=$_POST['nome'];
        $area=$_POST['area'];
        $data =  date('d/m/Y');
        $data = explode("/",$data);
        $data = array_reverse($data);
        $data = implode ('-', $data);
        
                $sqlinserir = ('insert into chat(nome,area,num_participantes,data_criacao, id_profissional) values ("'.$nome.'","'.$area.'",0,"'.$data.'", '.$_SESSION["id_user"].');');
                $inserir=mysqli_query($conexao,$sqlinserir) or die (mysqli_error($conexao));

                if($inserir){ 
                    $sql=('select * from chat where id_profissional = '.$_SESSION["id_user"].';');
                    $resul=mysqli_query($conexao, $sql);
                    $con=mysqli_fetch_array($resul);
                    if($resul){
                        $_SESSION['sala'] = $sala;
                        header("Location: ../chat/public/chat.php");
                    } //cadastro com sucesso
                    
                }else {
                    echo('<script>alert("erro")
                    window.location.href = "../chats.php";</script>');
                    
                }



    }
?>