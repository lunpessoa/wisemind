<?php
    session_start();
    if(isset($_POST["Enviar"])){
        $nome = $_POST['nome'];
        $sobrenome = $_POST['sobrenome'];
        $_SESSION['endereco'] = $rua = $_POST['rua'];
        $_SESSION['cep'] = $cep = $_POST['cep'];
        $_SESSION['complemento'] = $complemento = $_POST['complemento'];
        $_SESSION['cidade'] = $cidade = $_POST['cidade'];
        $_SESSION['estado'] = $estado = $_POST['estado'];
        $_SESSION['numero'] = $numero = $_POST['numero'];
        $_SESSION['valor'] = 39.99;
        $_SESSION['nome_completo'] = $nome." ".$sobrenome;
        header("Location: ../compra/boleto/boleto_bb.php");
    }
?>