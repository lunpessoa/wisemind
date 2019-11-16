<?php
    date_default_timezone_set('America/Sao_Paulo');
    session_start();
    include('../assets/conexao.php');
    if(isset($_POST["Enviar"])){
        $sql=('select * from usuarios where id_usuario = '. $_SESSION["id_user"].';');
		$resul=mysqli_query($conexao, $sql);
        $con1=mysqli_fetch_array($resul);
        $nome = $con1['Nome'];
        $sobrenome = $con1['Sobrenome'];

        $sql2 =('select * from planos where id_plano=1;');
        $sql_show2=mysqli_query($conexao, $sql2);
        $con2=mysqli_fetch_array($sql_show2);
        $valor=$con2['Preco'];
        

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

        echo($data_venc.'<br>');
        echo($data.'<br>');
        
        $sqlinserir = ('insert into pedido (Data_Compra, Data_Validade, Renovacao, id_estuda, id_plano) values
         ("'.$data.'", "'.$data_venc.'", "N",'.$_SESSION["id_user"].', 1);');
        $inserir=mysqli_query($conexao,$sqlinserir) or die (mysqli_error($conexao));

        if($inserir){
            $_SESSION['pedido']=true;
            header("Location: ../compra/boleto/boleto_bb.php");
        }
    }
?>