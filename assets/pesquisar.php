<?php
    include('conexao.php');
    session_start();
    
    if(isset($_POST['busca'])){
        $buscar = $_POST['busca'];
        $sql = ('select * from usuarios where Email like "'.$buscar.'%";');
        $sql_query= mysqli_query($conexao, $sql);
        if(mysqli_num_rows($sql_query) > 0){
            while($row = mysqli_fetch_array($sql_query)){
                echo ('<tr class="text-clear">
                <th scope="row">'.$row["id_usuario"].' </th>
                <td> '.$row["Nome"].' </td>
                <td> '.$row["Email"].' </td>
                <td> ');if($row["id_privilegio"]==1){
                            echo("Usuario");
                        }else if($row["id_privilegio"]==2){
                            echo("Profissional");
                        }else if($row["id_privilegio"]==3){
                            echo("Administrador");
                        }
                echo('</td>');
                if($row["id_privilegio"]==3){
                    echo('<td class="justify-content-center d-flex"><a class="btn text-clear disabled" href="users.php?ex='.$row['id_usuario'].'"><i class="fas fa-user-times"></i></a></td>');
                } else{
                    echo('<td class="justify-content-center d-flex"><a class="btn text-clear" href="users.php?ex='.$row['id_usuario'].'"><i class="fas fa-user-times"></i></a></td>');
                }
                echo('</tr>');
            }
        } 
    }
    
    if(isset($_POST['pag'])){
        $pag = $_POST['pag'];
        $sql = ('select * from usuarios U, estudantes E, pedido P where U.id_usuario=id_estudante and E.id_estudante=P.id_estuda and Email like "'.$pag.'%";');
        $sql_query= mysqli_query($conexao, $sql);
        if(mysqli_num_rows($sql_query) > 0){
            while($row = mysqli_fetch_array($sql_query)){
                echo('<tr class="text-clear">
                    <th scope="row">'.$row["id_pedido"].' </th>
                    <th scope="row">'.$row["id_usuario"].' </th>
                    <td> '.$row["Email"].' </td>
                    <td> '.$row['Data_Compra'].' </td>');
                    echo('<td class="justify-content-center d-flex"><a class="btn text-clear" href="pagamentos.php?val='.$row['id_usuario'].'"><i class="fas fa-check-square h5"></i></a></td>');
                    echo('</tr>');
            }
        }
    }

    if(isset($_POST['prof'])){
        $prof = $_POST['prof'];
        $sql = ('select * from usuarios, profissional where id_usuario = id_profissional and validacao = false and Email like "'.$prof.'%";;');
        $sql_query= mysqli_query($conexao, $sql);
        if(mysqli_num_rows($sql_query) > 0){
            while($row = mysqli_fetch_array($sql_query)){
                echo('<tr class="text-clear">
                    <th scope="row">'.$row["id_profissional"].' </th>
                    <td> '.$row["Nome"].' </td>
                    <td> '.$row["Sobrenome"].' </td>
                    <td> '.$row["Email"].'</td>'
                );
                echo('<td class="justify-content-center d-flex"><a class="btn text-clear" href="profissional.php?val='.$row['id_profissional'].'"><i class="fas fa-check-square h5"></i></a></td>');
                echo('</tr>');
            }
        }
    }
?>