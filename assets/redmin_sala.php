<?php
    include('conexao.php');
    session_start();
    if(isset($_GET["sala"])){
        $sala=$_GET["sala"];
        echo($sala);
        $sql=('select * from chat where id_Chat = '.$sala.';');
		$resul=mysqli_query($conexao, $sql);
        $con=mysqli_fetch_array($resul);
        if($resul){
            $_SESSION['sala'] = $sala;
            header("Location: ../chat/public/chat.php");
        } 
    }

    if(isset($_POST['note'])){
       $_SESSION['note']=true;
       header("Location: ../chats.php");
    }

?>           
                    