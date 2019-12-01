<?php
    include('conexao.php');
    session_start();
    
   
    if(isset($_POST['pag'])){
        $log = $_POST['pag'];
        $conta = count($log);


        $sql_sala=('select * from chat where id_Chat = '. $_SESSION['sala'].';');
        $resul_sala=mysqli_query($conexao, $sql_sala);
        $con_sala=mysqli_fetch_array($resul_sala);
        

        for($x=0;$x<$conta;$x++){
        $dados = explode("-",$log[$x]);
        if($dados[0]!= $_SESSION["id_user"]){
        $sqlmostrar=('select * from usuarios where id_usuario = '.$dados[0].';');
         $resul=mysqli_query($conexao, $sqlmostrar);
            while($con_usu=mysqli_fetch_array($resul)){
                if($con_sala['id_profissional']==$con_usu['id_usuario']){
                    $color="#ffcf29";
                }else{
                    $color="#949799";
                }
                echo('<li class="list-user">
                
                <a href="../../perfil-view?us='.$con_usu['id_usuario'].'" class="users text-decoration-none" target="_blank">
                    <div class="position-relative p-0 ml-5 class-users">
                    
                        <img class="class-img" src="../../'.$con_usu['perfil_img'].'" alt="">
                        <div class="status"></div>
                    </div>
                    <label style="color: '.$color.';" class="user-name ml-3 mt-3 h6 font-weight-bold font-italic">'.$con_usu['Nome'].'<br><label
                            class="users-situacao font-weight-bold font-italic">#Online</label> </label>
                </a>');
                if($con_sala['id_profissional']==$_SESSION["id_user"]){
                    echo('<button class="exc-btn btn nav-link h5 pt-4 mb-0 " onclick="apagar('.$con_usu['id_usuario'].')"  name="'.$con_usu['id_usuario'].'"><i class="fas fa-user-slash"></i></button>');
                }
            echo('</li>');
            }
        }
        
    }
}

    if(isset($_POST['his'])){
        $sql_men=('select * from mensagens where id_sala = '.$_SESSION['sala'].';');
        $resul_men=mysqli_query($conexao, $sql_men);
        while($con_men=mysqli_fetch_array($resul_men)){
            $hora = explode(":",$con_men["hora_envio"]);

            if($con_men['id_usuario']==$_SESSION["id_user"]){
                echo('<li class="d-flex justify-content-end text-break">
                <div id="self">'.$con_men["mensagem"].
                '<label id="data-self" class="float-right ml-2 mb-0">'.$hora[0].':'.$hora[1].'</label>
                </div>
                </li>');
            }else{
                $sql_use=('select * from usuarios where id_usuario = '.$con_men["id_usuario"].';');
                $resul_use=mysqli_query($conexao, $sql_use);
                $con_use=mysqli_fetch_array($resul_use);
                echo('<li class="text-break">
                <div id="fild">
                <a href="../../perfil-view?us='.$con_use['id_usuario'].'"
                id="link-user" class="text-decoration-none float-left p-0" >
                '.$con_use['Nome'].'</a>
                <label id="data-fild" class="float-right ml-2 mb-0">'.$hora[0].':'.$hora[1].'</label><br/>
                '.$con_men["mensagem"].
                '
                </div>
                </li>');
                
            }
        }
    
    }

    if(isset($_POST['sair'])){
        $sair = $_POST['sair'];

        if($sair==$_SESSION["id_user"]){
            echo(true);
        }
    
    }

    
?>