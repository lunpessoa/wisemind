<?php
    include('conexao.php');
    session_start();
    
   
    if(isset($_POST['pag'])){
        $log = $_POST['pag'];
        $conta = count($log);
        echo('<div>'.$log[0].'</div>');
        /*for($x=0;$x<$conta;$x){
        $dados = explode("-",$log[$x]);
        echo('<div>'.$dados[0].'<div>');
        $sqlmostrar=('select * from usuarios where id_usuario = '.$dados[0].';');
         $resul=mysqli_query($conexao, $sqlmostrar);
            while($con_usu=mysqli_fetch_array($resul)){
                echo('<li class="list-user">
                <a href="#" class="users text-decoration-none">
                    <div class="position-relative p-0 ml-5 class-users">
                        <img class="class-img" src="../../'.$con_usu['perfil_img'].'" alt="">
                        <div class="status"></div>
                    </div>
                    <label class="user-name ml-3 mt-3 h6 font-weight-bold font-italic">'.$con_usu['Nome'].'<br><label
                            class="users-situacao font-weight-bold font-italic">#Online</label> </label>
                </a>
            </li>');
        }
        
    }*/
}

    
?>