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

        function tirarAcentos($string){
            return preg_replace(array("/(á|à|ã|â|ä)/","/(Á|À|Ã|Â|Ä)/","/(é|è|ê|ë)/","/(É|È|Ê|Ë)/","/(í|ì|î|ï)/","/(Í|Ì|Î|Ï)/","/(ó|ò|õ|ô|ö)/","/(Ó|Ò|Õ|Ô|Ö)/","/(ú|ù|û|ü)/","/(Ú|Ù|Û|Ü)/","/(ñ)/","/(Ñ)/", "/(ç)/", "/(Ç)/", "/(~)/"),explode(" ","a A e E i I o O u U n N c C z"),$string);
        }

        $file_name = tirarAcentos($nome);
        $file_name = explode(" ", $file_name);

        function limpar_texto($str){ 
            return preg_replace("/[^0-9]/", "", $str); 
        }

        $cnpj = limpar_texto($cnpj);

        date_default_timezone_set("Brazil/East"); 
        $ext = strtolower(substr($_FILES['logo']['name'],-4)); //Pegando extensão do arquivo
        $new_name =  $file_name[0]. $ext; //Definindo um novo nome para o arquivo
        $dir = '../img/parcerias/'; //Diretório para uploads

        move_uploaded_file($_FILES['logo']['tmp_name'], $dir.$new_name); 
        
        $sqlinserir = ('insert into empresa(email ,Nome_Fantasia, CNPJ, Razao_Social, Area_de_Atuacao, link, empresa_img, descricao) values ("'.$email.'", "'.$nome.'", "'.$cnpj.'", "'.$razao.'", "'.$area.'", "'.$link.'", "'.$new_name.'", "'.$descricao.'");');
        $inserir=mysqli_query($conexao, $sqlinserir) or die (mysqli_error($conexao));
        header("location: ../admin/parceiros.php");
    }
?>