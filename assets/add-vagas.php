<?php
    include('conexao.php');
    session_start();

    if(isset($_POST['criar'])){
        $formacao = $_POST['formacao'];
        $atribuicao = $_POST['atribuicao'];
        $area = $_POST['area'];
        $skills = $_POST['skills'];
        $descricao=$_POST['descricao'];
        
        $sqlinserir = ('insert into vagas_emprego(Formacao, Descricao, Area, atribuicoes, skills, id_empresa) values ("'.$formacao.'", "'.$descricao.'", "'.$area.'", "'.$atribuicao.'", "'.$skills.'", '.$_SESSION['vgs'].');');
        $inserir=mysqli_query($conexao, $sqlinserir) or die (mysqli_error($conexao));
        header("location: ../admin/vagas.php");
    }
?>