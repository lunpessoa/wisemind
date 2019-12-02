<?php
   ob_start();
   include('../assets/conexao.php');
   session_start();
   if(isset($_SESSION["adminlog_status"]) && $_SESSION["adminlog_status"]==true){
        $sql=('select * from usuarios where id_usuario = '. $_SESSION["id_user"].';');
        $resul=mysqli_query($conexao, $sql);
        $con=mysqli_fetch_array($resul);
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Admin-Parcerias</title>
    <meta charset="utf-8">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
    <link rel="stylesheet" href="../node_modules/bootstrap/compiler/bootstrap.css">

    <!-- Style -->
    <link rel="stylesheet" href="usersadmin.css">
    <!-- <link rel="stylesheet" href="../node_modules/OwlCarousel/dist/assets/docs.theme.min.css"> -->

    <!-- Icons -->
    <link rel="icon" href="../img/logo.png" type="image/x-icon" />
    <link rel="shortcut icon" href="../img/logo.png" type="image/x-icon" />

    <!-- Owl Stylesheets -->
    <link rel="stylesheet" href="../node_modules/OwlCarousel/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="../node_modules/OwlCarousel/dist/assets/owl.theme.default.min.css">

    <!-- ScrollBar Stylesheets -->
    <link rel="stylesheet" href="../node_modules/OverlayScrollbars/css/OverlayScrollbars.min.css">

</head>

<body>
    <section class="container-fluid header-title d-flex align-items-end">
        <nav class="button-back">
            <a href="admin.php" class="btn p-0 text-dark bg-warning"><i class="fas fa-chevron-left"></i></a>
        </nav>

        <div class="w-100 d-flex justify-content-center position-absolute" style="margin-top:-150px">
            <div class="text-center">
                <h1 class="display-4 font-lobster">Parceiros</h1>
                <div class="input-group my-3">
                    <button type="text" data-target="#modalAdicionar" data-toggle="modal"
                        class="btn btn-warning shadow font-italic w-100">
                        Adicionar Parceiro
                    </button>
                </div>
            </div>
        </div>

    </section>

    <div class="modal fade" id="modalAdicionar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Adicionar Parceiro</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="../assets/add-parceiros.php" method="POST" enctype="multipart/form-data">
                    <div class="modal-body">

                        <div class="form-group">
                            <label class="mt-2" for="nome">Nome Fantasia</label>
                            <input name="nome" type="text" class="form-control" id="nome" placeholder="Nome da sala">
                            <label class="mt-2" for="nome">Email</label>
                            <input name="email" type="text" class="form-control" id="nome" placeholder="Email">
                            <label class="mt-2" for="razao">Razão Social</label>
                            <input name="razao" type="text" class="form-control" id="razao" placeholder="Razão Social">
                            <label class="mt-2" for="area">Área de Atuação</label>
                            <input name="area" type="text" class="form-control" id="area" placeholder="Área">
                            <label class="mt-2" for="cnpj">CNPJ</label>
                            <input name="cnpj" type="text" class="form-control cnpj" id="cnpj" placeholder="CNPJ">
                            <label class="mt-2" for="logo">Logotipo</label>
                            <div class="custom-file" id="logo">
                                <input type="file" class="custom-file-input" accept="image/png, image/jpeg" name="logo"
                                    id="logo">
                                <label class="custom-file-label" for="logo">Escolha o arquivo..</label>
                            </div>
                            <label class="mt-2" for="link">Link Externo</label>
                            <input name="link-externo" type="text" class="form-control" id="link" placeholder="Link">
                            <label for="descricao" class="mt-2">Descrição</label>
                            <textarea class="form-control resize" name="descricao" id="descricao" rows="5"
                                placeholder="Descrição..."></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                        <button type="submit" class="btn btn-warning" name="criar">Criar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <section class="container-fluid p-5 overflow-hidden">
        <div class="row position-relative overflow-hidden">
            <div class="owl-carousel">
                
                    <?php
                $sqlmostrar=('select * from empresa');
                $resul=mysqli_query($conexao, $sqlmostrar) or die (mysqli_error($conexao));
                while($con_emp=mysqli_fetch_array($resul)){
                    $cnpj_test = str_split($con_emp['CNPJ'], 1);
			        $cnpj = $cnpj_test[0].$cnpj_test[1].'.'.$cnpj_test[2].$cnpj_test[3].$cnpj_test[4].'.'.$cnpj_test[5].$cnpj_test[6].$cnpj_test[7].'/'.$cnpj_test[8].$cnpj_test[9].$cnpj_test[10].$cnpj_test[11].'-'.$cnpj_test[12].$cnpj_test[13];
                    echo(
                        '
                        <div class="item">
                            <div class="card w-75 bg-transparent">
                                <h4 class="card-header text-light align-content-center">'.$con_emp['Nome_Fantasia'].'</h4>
                                <div class="card-body text-center">
                                    <img src="../img/parcerias/'.$con_emp['empresa_img'].'" style="height:300px">
                                    <hr class="bg-light w-50">
                                    <h5 class="card-title text-clear">'.$con_emp['Razao_Social'].'</h5>
                                    <h5 class="card-title text-clear">'.$cnpj.'</h5>
                                    <h6 class="card-title text-clear">'.$con_emp['email'].'</h6>
                                    <h6 class="card-title text-clear">'.$con_emp['link'].'</h6>
                                    <p class="text-clear">'.$con_emp['Area_de_Atuacao'].'</p>
                                    <hr class="bg-light w-50">
                                    <div id="corpo" class="card-text text-justify overflow-auto text-clear px-3" style="height:170px">'.$con_emp['descricao'].'</div>
                                    <div class="w-100 justify-content-center d-flex mt-3">
                                        <a href="parceiros.php?vgs='.$con_emp['id_empresa'].'" class="btn text-warning border-0"><i class="fas fa-plus-circle" style="font-size:25px;"></i></a>
                                        <a href="parceiros.php?emp='.$con_emp['id_empresa'].'" class="btn text-warning border-0"><i class="fas fa-times-circle" style="font-size:25px;"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>'
                    );

                    if(isset($_GET['vgs'])){
                        $_SESSION['vgs'] = $_GET['vgs'];
                        header('Location: vagas.php');  
                    }

                    if(isset($_GET['emp'])){
                        $emp = $_GET['emp'];

                        $sql_emp=('select empresa_img from empresa where id_empresa='.$emp.';');
                        $resul_emp = mysqli_query($conexao, $sql_emp);
                        $img_emp = mysqli_fetch_array($resul_emp);
                        unlink('../img/parcerias/'.$img_emp['empresa_img']); //Apaga imagem!

                        $sql_del1=('delete from vagas_emprego where id_empresa='.$emp.';');   
                        $sql_del2=('delete from empresa where id_empresa='.$emp.';');   
                        $del_sql1=mysqli_query($conexao, $sql_del1);    
                        $del_sql2=mysqli_query($conexao, $sql_del2);    
                        header('Location: parceiros.php');  
                    }
                }
                
            ?>

                </div>
            </div>
    </section>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../node_modules/jquery/dist/jquery.js"></script>
    <script src="../node_modules/popper.js/dist/umd/popper.js"></script>
    <script src="../node_modules/bootstrap/dist/js/bootstrap.js"></script>
    <script src="https://igorescobar.github.io/jQuery-Mask-Plugin/js/jquery.mask.min.js"></script>

    <!-- javascript -->
    <script src="../node_modules/OwlCarousel/dist/owl.carousel.min.js"></script>
    <script src="../node_modules/OverlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <script src="../node_modules/OverlayScrollbars/js/OverlayScrollbars.min.js"></script>
    <script src="../js/javinha.js"></script>

</body>
<?php
    }else{
        $_SESSION["facaLog"]=true;
        echo('<script>window.location.href = "../index.php";</script>');
    }
?>
<script>
    $(document).ready(function () {
        $('.cnpj').mask('00.000.000/0000-00');
    });

    OverlayScrollbars(document.querySelectorAll(' #corpo '), {
        className: "os-theme-light",
        resize: "none",
        sizeAutoCapable: true,
        clipAlways: true,
        normalizeRTL: true,
        paddingAbsolute: false,
        autoUpdate: null,
        autoUpdateInterval: 33,
        nativeScrollbarsOverlaid: {
            showNativeScrollbars: false,
            initialize: true
        },
        scrollbars: {
            visibility: "auto",
            autoHide: "move",
            autoHideDelay: 500,
            dragScrolling: true,
            clickScrolling: false,
            touchSupport: true,
            snapHandle: true
        }
    });
    var owl = $('.owl-carousel');
    owl.owlCarousel({
        margin: 10,
        loop: false,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            1000: {
                items: 3
            }
        }
    })
</script>

</html>