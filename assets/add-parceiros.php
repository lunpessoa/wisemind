<?php
    include('conexao.php');

    if(isset($_POST['criar'])){
        $email=$_POST['email'];
        $nome=$_POST['nome'];
        $razao=$_POST['razao'];
        $cnpj=$_POST['cnpj'];
        $link=$_POST['link-externo'];
        $descricao=$_POST['descricao'];
        $area=$_POST['area'];

        function limpar_texto($str){ 
            return preg_replace("/[^0-9]/", "", $str); 
        }

        $cnpj = limpar_texto($cnpj);

        date_default_timezone_set("Brazil/East"); 
        $ext = strtolower(substr($_FILES['logo']['name'],-4)); //Pegando extensão do arquivo
        $new_name =  $nome. $ext; //Definindo um novo nome para o arquivo
        $dir = '../img/parcerias/'; //Diretório para uploads

        move_uploaded_file($_FILES['logo']['tmp_name'], $dir.$new_name); 
        
        $sqlinserir = ('insert into empresa(email ,Nome_Fantasia, CNPJ, Razao_Social, Area_de_Atuacao, link, empresa_img, descricao) values ("'.$email.'", "'.$nome.'", "'.$cnpj.'", "'.$razao.'", "'.$area.'", "'.$link.'", "'.$new_name.'", "'.$descricao.'");');
        $inserir=mysqli_query($conexao, $sqlinserir) or die (mysqli_error($conexao));
        header("location: ../admin/parceiros.php");
    }
?>