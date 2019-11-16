<?php
    session_start();
    include('../assets/conexao.php');
    if(isset($_POST["Enviar"])){
        $sql =('select Nome, Sobrenome from usuarios where id_usuarios='.$_SESSION["id_user"].';');
        $sql_play=mysqli_query($conexao, $sql);
        while($con1=mysqli_fetch_array($sql_play)){
            $nome = $con1['Nome'];
            $sobrenome = $con1['Sobrenome'];
        }

        $sql2 =('select Preco from planos where id_plano=1;');
        $sql_show2=mysqli_query($conexao, $sql2);
        while($con2=mysqli_fetch_array($sql_show2)){
            $valor=$con2['Preco'];
        }

        $_SESSION['valor'] = $valor;
        $_SESSION['endereco'] = $rua = $_POST['rua'];
        $_SESSION['cep'] = $cep = $_POST['cep'];
        $_SESSION['complemento'] = $complemento = $_POST['complemento'];
        $_SESSION['cidade'] = $cidade = $_POST['cidade'];
        $_SESSION['estado'] = $estado = $_POST['estado'];
        $_SESSION['numero'] = $numero = $_POST['numero'];
        $_SESSION['nome_completo'] = $nome." ".$sobrenome;

        $dias_de_prazo = 5;
        $data_venc = date("Y-m-d", time() + ($dias_de_prazo * 86400));
        $data = date("Y-m-d");
        
        //$sql_inserir=('insert into pedido(Data_Compra, Data_Validade, Renovacao, id_estuda, id_plano) values("'.$data.'", "'.$data_venc.'", "N",'.$_SESSION['id_user'].', 1;');
        //$sql_query=mysqli_query($conexao, $sql_inserir) or die (mysqli_error($conexao));

        header("Location: ../compra/boleto/boleto_bb.php");
    }
?>