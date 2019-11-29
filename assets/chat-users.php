<?php
    include('conexao.php');
    session_start();
    
   
    if(isset($_POST['pag'])){
        $log = $_POST['pag'];
        $conta = count($log);


        
        for($x=0;$x<$conta;$x++){
        $dados = explode("-",$log[$x]);
        if($dados[0]!= $_SESSION["id_user"]){
        $sqlmostrar=('select * from usuarios where id_usuario = '.$dados[0].';');
         $resul=mysqli_query($conexao, $sqlmostrar);
            while($con_usu=mysqli_fetch_array($resul)){
                echo('<li class="list-user">
                <a href="../../perfil-view?us='.$con_usu['id_usuario'].'" class="users text-decoration-none" target="_blank">
                    <div class="position-relative p-0 ml-5 class-users">
                        <img class="class-img" src="../../'.$con_usu['perfil_img'].'" alt="">
                        <div class="status"></div>
                    </div>
                    <label class="user-name ml-3 mt-3 h6 font-weight-bold font-italic">'.$con_usu['Nome'].'<br><label
                            class="users-situacao font-weight-bold font-italic">#Online</label> </label>
                </a>
            </li>');
            }
        }
        
    }
}

    
?>