<?php
  include('assets/conexao.php');
  session_start();
  if(isset($_SESSION["log_status"]) && $_SESSION["log_status"]==true || isset($_SESSION["adminlog_status"]) && $_SESSION["adminlog_status"]==true){
    $sql2=('select Plano from estudantes where id_estudante ='. $_SESSION["id_user"].';');
    $resul2=mysqli_query($conexao, $sql2);
    $con2=mysqli_fetch_array($resul2);

    $sql3=('select validacao from profissional where id_profissional ='. $_SESSION["id_user"].';');
    $resul3=mysqli_query($conexao, $sql3);
    $con3=mysqli_fetch_array($resul3);

    $sql4=('select id_privilegio from usuarios where id_usuario ='. $_SESSION["id_user"].';');
    $resul4=mysqli_query($conexao, $sql4);
    $con4=mysqli_fetch_array($resul4);
    if($con2['Plano']==true || $con3['validacao']==true || $con4['id_privilegio']==3){
?>

<!DOCTYPE html>
<html>

<head>
  <?php include('menu.php'); ?>

  <title>Conteúdo</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="style/cpago.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
</head>

<body>
  <section class="container-fluid acordtodos" style="margin-top:150px; margin-bottom:100px;">
    <div class="accordion" id="accordionExample">
      <section class="card border border-0 bg-transparent">
        <div class="card-header gradheader config-item p-0" id="headingOne">
          <button class="btn btn-link text-decoration-none p-4 " id="botao-conteudo-1" data-toggle="collapse"
            data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            <h3>Medicina <i class="fas fa-plus"></i></h3>
          </button>
        </div>

        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
          <div class="card-body">
            <div class="row">
              <div class="col-sm-6">
                <div class="card border border-0 bg-white">
                  <div class="card-body">
                    <h5 class="card-title">Vídeo - A Medicina no futuro</h5>
                    <p class="card-text">Os principais rumos que a Medicina irá tomar para se adadptar a tecnologia.</p>
                    <a href="#" class="btn btn-primary">Assistir</a>
                  </div>
                </div>
              </div>

              <div class="col-sm-6">
                <div class="card border border-0 bg-white">
                  <div class="card-body">
                    <h5 class="card-title">Vídeo - Principais dúvidas sobre Medicina</h5>
                    <p class="card-text">Dúvidas frequentes relacionadas a Medicina respondidas.</p>
                    <a href="#" class="btn btn-primary">Assistir</a>
                  </div>
                </div>
              </div>
            </div>

            <div class="row mt-3">
              <div class="col-sm-6">
                <div class="card border-0 bg-white">
                  <div class="card-body">
                    <h5 class="card-title">Documento - Questões que envolvem Medicina, resolvidas e comentadas.</h5>
                    <p class="card-text">Questões de diversos temas relacionados à Medicina, abordadas em vestibulares,
                      resolvidas e comentadas.</p>
                    <button type="button" class="btn btn-primary" data-toggle="modal"
                      data-target="#ModalQuestMed">Ler</button>
                    <div class="modal fade" id="ModalQuestMed" tabindex="-1" role="dialog"
                      aria-labelledby="ModalQuestMed" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="ModalQuestMedT">Questões que envolvem Medicina, resolvidas e
                              comentadas.</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            ...<br>...<br>...<br>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-sm-6">
                <div class="card border-0 bg-white">
                  <div class="card-body">
                    <h5 class="card-title">Documento - A participação das mulheres na Medicina.</h5>
                    <p class="card-text">A conquista das mulheres e a sua crescente atuação na Medicina.</p>
                    <button type="button" class="btn btn-primary" data-toggle="modal"
                      data-target="#ModalConqMed">Ler</button>
                    <div class="modal fade" id="ModalConqMed" tabindex="-1" role="dialog" aria-labelledby="ModalConqMed"
                      aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="ModalConqMedT">A participação das mulheres na Medicina.</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            ...<br>...<br>...<br>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="row mt-3">
              <div class="col-sm-6">
                <div class="card border-0 bg-white">
                  <div class="card-body">
                    <h5 class="card-title">Podcast - Como é a rotina de um médico.</h5>
                    <p class="card-text">Discussão sobre como é o dia a dia de um profissional em Medicina.</p>
                    <a href="#" class="btn btn-primary">Ouvir</a>
                  </div>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="card border-0 bg-white">
                  <div class="card-body">
                    <h5 class="card-title">Podcast - Por que escolher medicina?</h5>
                    <p class="card-text">Principais motivos e razões para seguir a carreira de Medicina.</p>
                    <a href="#" class="btn btn-primary">Ouvir</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>


      <section class="card border border-0 bg-transparent">
        <div class="card-header gradheader config-item p-0" id="headingTwo">
          <h5 class="mb-0">
            <button class="btn btn-link text-decoration-none p-4" id="botao-conteudo-2" data-toggle="collapse"
              data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
              <h3>Direito <i class="fas fa-plus"></i></h3>
            </button>
          </h5>
        </div>

        <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordionExample">
          <div class="card-body">
            <div class="row">
              <div class="col-sm-6">
                <div class="card border-0 bg-white">
                  <div class="card-body">
                    <h5 class="card-title">Vídeo - A Direito no futuro</h5>
                    <p class="card-text">Os principais rumos que o Direito irá tomar para se adadptar a tecnologia.</p>
                    <a href="#" class="btn btn-primary">Assistir</a>
                  </div>
                </div>
              </div>

              <div class="col-sm-6">
                <div class="card border-0 bg-white">
                  <div class="card-body">
                    <h5 class="card-title">Vídeo - Principais dúvidas sobre Direito</h5>
                    <p class="card-text">Dúvidas frequentes relacionadas a Direito respondidas.</p>
                    <a href="#" class="btn btn-primary">Assistir</a>
                  </div>
                </div>
              </div>
            </div>

            <div class="row mt-3">
              <div class="col-sm-6">
                <div class="card border-0 bg-white">
                  <div class="card-body">
                    <h5 class="card-title">Documento - Questões que envolvem Direito, resolvidas e comentadas.</h5>
                    <p class="card-text">Questões de diversos temas relacionados à Direito, abordadas em vestibulares,
                      resolvidas e comentadas.</p>
                    <button type="button" class="btn btn-primary" data-toggle="modal"
                      data-target="#ModalQuestMed">Ler</button>
                    <div class="modal fade" id="ModalQuestMed" tabindex="-1" role="dialog"
                      aria-labelledby="ModalQuestMed" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="ModalQuestMedT">Questões que envolvem Direito, resolvidas e
                              comentadas.</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            ...<br>...<br>...<br>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-sm-6">
                <div class="card border-0 bg-white">
                  <div class="card-body">
                    <h5 class="card-title">Documento - A participação das mulheres na Direito.</h5>
                    <p class="card-text">A conquista das mulheres e a sua crescente atuação na Direito.</p>
                    <button type="button" class="btn btn-primary" data-toggle="modal"
                      data-target="#ModalConqMed">Ler</button>
                    <div class="modal fade" id="ModalConqMed" tabindex="-1" role="dialog" aria-labelledby="ModalConqMed"
                      aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="ModalConqMedT">A participação das mulheres na Direito.</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            ...<br>...<br>...<br>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="row mt-3">
              <div class="col-sm-6">
                <div class="card border-0 bg-white">
                  <div class="card-body">
                    <h5 class="card-title">Podcast - Como é a rotina de um profissional de direito.</h5>
                    <p class="card-text">Discussão sobre como é o dia a dia de um profissional em Direito.</p>
                    <a href="#" class="btn btn-primary">Ouvir</a>
                  </div>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="card border-0 bg-white">
                  <div class="card-body">
                    <h5 class="card-title">Podcast - Por que escolher direito?</h5>
                    <p class="card-text">Principais motivos e razões para seguir a carreira de Direito.</p>
                    <a href="#" class="btn btn-primary">Ouvir</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="card border border-0 bg-transparent">
        <div class="card-header gradheader config-item p-0" id="headingThree">
          <h5 class="mb-0">
            <button class="btn btn-link text-decoration-none p-4" id="botao-conteudo-3" data-toggle="collapse"
              data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
              <h3>Engenharia <i class="fas fa-plus"></i></h3>
            </button>
          </h5>
        </div>

        <div id="collapseThree" class="collapse show" aria-labelledby="headingThree" data-parent="#accordionExample">
          <div class="card-body">
            <div class="row">
              <div class="col-sm-6">
                <div class="card bg-white">
                  <div class="card-body">
                    <h5 class="card-title">Vídeo - A Engenharia no futuro</h5>
                    <p class="card-text">Os principais rumos que a Engenharia irá tomar para se adadptar a tecnologia.
                    </p>
                    <a href="#" class="btn btn-primary">Assistir</a>
                  </div>
                </div>
              </div>

              <div class="col-sm-6">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title">Vídeo - Principais dúvidas sobre Engenharia</h5>
                    <p class="card-text">Dúvidas frequentes relacionadas a Engenharia respondidas.</p>
                    <a href="#" class="btn btn-primary">Assistir</a>
                  </div>
                </div>
              </div>
            </div>

            <div class="row mt-3">
              <div class="col-sm-6">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title">Documento - Questões que envolvem Engenharia, resolvidas e comentadas.</h5>
                    <p class="card-text">Questões de diversos temas relacionados à Engenharia, abordadas em
                      vestibulares,
                      resolvidas e comentadas.</p>
                    <button type="button" class="btn btn-primary" data-toggle="modal"
                      data-target="#ModalQuestMed">Ler</button>
                    <div class="modal fade" id="ModalQuestMed" tabindex="-1" role="dialog"
                      aria-labelledby="ModalQuestMed" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="ModalQuestMedT">Questões que envolvem Engenharia, resolvidas e
                              comentadas.</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            ...<br>...<br>...<br>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-sm-6">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title">Documento - A participação das mulheres na Engenharia.</h5>
                    <p class="card-text">A conquista das mulheres e a sua crescente atuação na Engenharia.</p>
                    <button type="button" class="btn btn-primary" data-toggle="modal"
                      data-target="#ModalConqMed">Ler</button>
                    <div class="modal fade" id="ModalConqMed" tabindex="-1" role="dialog" aria-labelledby="ModalConqMed"
                      aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="ModalConqMedT">A participação das mulheres na Engenharia.</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            ...<br>...<br>...<br>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="row mt-3">
              <div class="col-sm-6">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title">Podcast - Como é a rotina de um médico.</h5>
                    <p class="card-text">Discussão sobre como é o dia a dia de um profissional em Engenharia.</p>
                    <a href="#" class="btn btn-primary">Ouvir</a>
                  </div>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title">Podcast - Por que escolher Engenharia?</h5>
                    <p class="card-text">Principais motivos e razões para seguir a carreira de Engenharia.</p>
                    <a href="#" class="btn btn-primary">Ouvir</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="card border border-0 bg-transparent">
        <div class="card-header gradheader config-item p-0" id="headingFour">
          <h5 class="mb-0">
            <button class="btn btn-link text-decoration-none p-4" id="botao-conteudo-4" data-toggle="collapse"
              data-target="#collapseFour" aria-expanded="true" aria-controls="collapseThree">
              <h3>Biologia <i class="fas fa-plus"></i></h3>
            </button>
          </h5>
        </div>

        <div id="collapseFour" class="collapse show" aria-labelledby="headingFour" data-parent="#accordionExample">
          <div class="card-body">
            <div class="row">
              <div class="col-sm-6">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title">Vídeo - A Biologia no futuro</h5>
                    <p class="card-text">Os principais rumos que a Biologia irá tomar para se adadptar a tecnologia.</p>
                    <a href="#" class="btn btn-primary">Assistir</a>
                  </div>
                </div>
              </div>

              <div class="col-sm-6">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title">Vídeo - Principais dúvidas sobre Biologia</h5>
                    <p class="card-text">Dúvidas frequentes relacionadas a Biologia respondidas.</p>
                    <a href="#" class="btn btn-primary">Assistir</a>
                  </div>
                </div>
              </div>
            </div>

            <div class="row mt-3">
              <div class="col-sm-6">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title">Documento - Questões que envolvem Biologia, resolvidas e comentadas.</h5>
                    <p class="card-text">Questões de diversos temas relacionados à Biologia, abordadas em vestibulares,
                      resolvidas e comentadas.</p>
                    <button type="button" class="btn btn-primary" data-toggle="modal"
                      data-target="#ModalQuestMed">Ler</button>
                    <div class="modal fade" id="ModalQuestMed" tabindex="-1" role="dialog"
                      aria-labelledby="ModalQuestMed" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="ModalQuestMedT">Questões que envolvem Biologia, resolvidas e
                              comentadas.</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            ...<br>...<br>...<br>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-sm-6">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title">Documento - A participação das mulheres na Biologia.</h5>
                    <p class="card-text">A conquista das mulheres e a sua crescente atuação na Biologia.</p>
                    <button type="button" class="btn btn-primary" data-toggle="modal"
                      data-target="#ModalConqMed">Ler</button>
                    <div class="modal fade" id="ModalConqMed" tabindex="-1" role="dialog" aria-labelledby="ModalConqMed"
                      aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="ModalConqMedT">A participação das mulheres na Biologia.</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            ...<br>...<br>...<br>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="row mt-3">
              <div class="col-sm-6">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title">Podcast - Como é a rotina de um médico.</h5>
                    <p class="card-text">Discussão sobre como é o dia a dia de um profissional em Biologia.</p>
                    <a href="#" class="btn btn-primary">Ouvir</a>
                  </div>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title">Podcast - Por que escolher Biologia?</h5>
                    <p class="card-text">Principais motivos e razões para seguir a carreira de Biologia.</p>
                    <a href="#" class="btn btn-primary">Ouvir</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="card border border-0 bg-transparent">
        <div class="card-header gradheader config-item p-0" id="headingFive">
          <h5 class="mb-0">
            <button class="btn btn-link text-decoration-none p-4" id="botao-conteudo-5" data-toggle="collapse"
              data-target="#collapseFive" aria-expanded="true" aria-controls="collapseThree">
              <h3>Psicologia <i class="fas fa-plus"></i></h3>
            </button>
          </h5>
        </div>

        <div id="collapseFive" class="collapse show" aria-labelledby="headingFive" data-parent="#accordionExample">
          <div class="card-body">
            <div class="row">
              <div class="col-sm-6">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title">Vídeo - A Psicologia no futuro</h5>
                    <p class="card-text">Os principais rumos que a Psicologia irá tomar para se adadptar a tecnologia.
                    </p>
                    <a href="#" class="btn btn-primary">Assistir</a>
                  </div>
                </div>
              </div>

              <div class="col-sm-6">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title">Vídeo - Principais dúvidas sobre Psicologia</h5>
                    <p class="card-text">Dúvidas frequentes relacionadas a Psicologia respondidas.</p>
                    <a href="#" class="btn btn-primary">Assistir</a>
                  </div>
                </div>
              </div>
            </div>

            <div class="row mt-3">
              <div class="col-sm-6">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title">Documento - Questões que envolvem Psicologia, resolvidas e comentadas.</h5>
                    <p class="card-text">Questões de diversos temas relacionados à Psicologia, abordadas em
                      vestibulares,
                      resolvidas e comentadas.</p>
                    <button type="button" class="btn btn-primary" data-toggle="modal"
                      data-target="#ModalQuestMed">Ler</button>
                    <div class="modal fade" id="ModalQuestMed" tabindex="-1" role="dialog"
                      aria-labelledby="ModalQuestMed" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="ModalQuestMedT">Questões que envolvem Psicologia, resolvidas e
                              comentadas.</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            ...<br>...<br>...<br>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-sm-6">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title">Documento - A participação das mulheres na Psicologia.</h5>
                    <p class="card-text">A conquista das mulheres e a sua crescente atuação na Psicologia.</p>
                    <button type="button" class="btn btn-primary" data-toggle="modal"
                      data-target="#ModalConqMed">Ler</button>
                    <div class="modal fade" id="ModalConqMed" tabindex="-1" role="dialog" aria-labelledby="ModalConqMed"
                      aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="ModalConqMedT">A participação das mulheres na Psicologia.</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            ...<br>...<br>...<br>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="row mt-3">
              <div class="col-sm-6">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title">Podcast - Como é a rotina de um médico.</h5>
                    <p class="card-text">Discussão sobre como é o dia a dia de um profissional em Psicologia.</p>
                    <a href="#" class="btn btn-primary">Ouvir</a>
                  </div>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title">Podcast - Por que escolher Psicologia?</h5>
                    <p class="card-text">Principais motivos e razões para seguir a carreira de Psicologia.</p>
                    <a href="#" class="btn btn-primary">Ouvir</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
  </section>

  <?php include('rodape.html'); ?>
  <script src="node_modules/jquery/dist/jquery.js"></script>
  <script src="node_modules/popper.js/dist/umd/popper.js"></script>
  <script src="node_modules/bootstrap/dist/js/bootstrap.js"></script>

  <!-- javascript SimpleBar -->
  <script src="node_modules/OverlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
  <script src="node_modules/OverlayScrollbars/js/OverlayScrollbars.min.js"></script>
  <script src="js/javinha.js"></script>

  <script>
    var ativar = function (x) {
      for (let y = 1; y <= 5; y++)
        if (y == x) {
          var botao = document.getElementById("botao-conteudo-" + x)
          botao.setAttribute('class', 'btn btn-link text-decoration-none p-4 ativado')
        } else {
          var botao = document.getElementById("botao-conteudo-" + y)
          botao.setAttribute('class', 'btn btn-link text-decoration-none p-4')
        }
    }

    for (let x = 1; x <= 5; x++) {
      var link = document.getElementById("botao-conteudo-" + x)
      link.onclick = (e) => {
        e.preventDefault()
        ativar(x)
      }
    }
  </script>
</body>
<?php
    }else{
      $_SESSION["assinatura"]=true;
      echo('<script>window.location.href = "compra1.php";</script>');
    }
		}else{
			$_SESSION["facaLog"]=true;
      echo('<script>window.location.href = "login.php";</script>');
		}
	
?>

</html>