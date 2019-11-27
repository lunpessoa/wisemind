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
        $sql = ('select * from usuarios, profissional where id_usuario = id_profissional and validacao = false and Email like "'.$prof.'%";');
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

    if(isset($_POST['chat'])){
        $chat = $_POST['chat'];
        $sql = ('select * from chat where Area like "'.$chat.'%";');
        $sql_query= mysqli_query($conexao, $sql);
        if(mysqli_num_rows($sql_query) > 0){
            while($row = mysqli_fetch_array($sql_query)){
                $sql2=('select Nome, Sobrenome from usuarios where id_usuario = '.$row['id_profissional'].' ;');
                $sql_query2=mysqli_query($conexao, $sql2);
                $con2=mysqli_fetch_array($sql_query2);

                echo('
                    <section class="col-12 col-md-4" id="sala'.$row["id_Chat"].'">
                        <a class="btn" href="assets/redmin_sala.php?sala='.$row['id_Chat'].'.">
                            <section class="card">
                                <img src="img/slide_amarelo.gif" class="card-img-top" alt="...">
                                <section class="card-body text-center pb-2">
                                    <h3 class="card-title h3"><b><em>'.$row["nome"].'</em></b></h3>
                                    <h3 class="text-left h5 mt-4 text-primary mb-0"><em>Prof. '.$con2["Nome"].' '.$con2["Sobrenome"].'</em></h3>
                                </section>
                                <section class="card-footer text-center">
                                    <h5 class="float-left text-muted">'.$row["Area"].'</h5>
                                    <h5 class="float-right text-muted"> '.$row["Num_Participantes"].'/20</h5>
                                </section>
                            </section>
                        </a>
                    </section>
                ');
            }
        }
    }

    if(isset($_POST['mostar'])){
        
		$sql2=('select * from chat;');
		$resul2=mysqli_query($conexao, $sql2);
		$num_salas = mysqli_num_rows($resul2);
		while($con=mysqli_fetch_array($resul2)){
			$sql3=('select Nome, Sobrenome from usuarios where id_usuario = '.$con['id_profissional'].' ;');
			$resul3=mysqli_query($conexao, $sql3);
			$con2=mysqli_fetch_array($resul3);

			echo('
				<section class="col-12 col-md-4" id="sala'.$con["id_Chat"].'">
					<a class="btn" href="assets/redmin_sala.php?sala='.$con['id_Chat'].'.">
						<section class="card">
							<img src="img/slide_amarelo.gif" class="card-img-top" alt="...">
							<section class="card-body text-center pb-2">
								<h3 class="card-title h3"><b><em>'.$con["nome"].'</em></b></h3>
								<h3 class="text-left h5 mt-4 text-primary mb-0"><em>Prof. '.$con2["Nome"].' '.$con2["Sobrenome"].'</em></h3>
							</section>
							<section class="card-footer text-center">
								<h5 class="float-left text-muted">'.$con["Area"].'</h5>
								<h5 class="float-right text-muted" id="users'.$con["id_Chat"].'"> '.$con["Num_Participantes"].'/20</h5>
							</section>
						</section>
					</a>
				</section>
			');
		}
		
	
    }
?>