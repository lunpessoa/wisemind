<?php
  include('assets/conexao.php');
  session_start();
  if(isset($_SESSION["log_status"]) && $_SESSION["log_status"]==true){
    $sql=('select * from usuarios where id_usuario = '. $_SESSION["id_user"].';');
    $resul=mysqli_query($conexao, $sql);
    $con=mysqli_fetch_array($resul);
  
    $sql2=('select * from estudantes where id_estudante ='. $_SESSION["id_user"].';');
    $resul2=mysqli_query($conexao, $sql);
    $con2=mysqli_fetch_array($resul2);
    if($con2['plano']==true){
?>

<!DOCTYPE html>
<html>

<head>
  <?php include('menu.php'); ?>

  <title>Conteúdo Pago</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="style/cpago.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
</head>

<body>
  <br><br><br><br><br>
  <div id="accordion" class="container-fluid acordtodos">
    <div class="card">
      <div class="card-header" id="headingOne">
        <h5 class="mb-0">
          <button class="btn btn-link text-decoration-none" data-toggle="collapse" data-target="#collapseOne"
            aria-expanded="true" aria-controls="collapseOne">
            <h3>Medicina <i class="fas fa-plus"></i></h3>
          </button>
        </h5>
      </div>

      <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
        <div class="row">
          <div class="col-sm-6">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Vídeo - A Medicina no futuro</h5>
                <p class="card-text">Os principais rumos que a Medicina irá tomar para se adadptar a tecnologia.</p>
                <a href="#" class="btn btn-primary">Assistir</a>
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Vídeo - Principais dúvidas sobre Medicina</h5>
                <p class="card-text">Dúvidas frequentes relacionadas a Medicina respondidas.</p>
                <a href="#" class="btn btn-primary">Assistir</a>
              </div>
            </div><br>
          </div>
        </div>
      </div>

      <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
        <div class="row">
          <div class="col-sm-6">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Documento - Questões que envolvem Medicina, resolvidas e comentadas.</h5>
                <p class="card-text">Questões de diversos temas relacionados à Medicina, abordadas em vestibulares,
                  resolvidas e comentadas.</p>
                <button type="button" class="btn btn-primary" data-toggle="modal"
                  data-target="#ModalQuestMed">Ler</button>
                <div class="modal fade" id="ModalQuestMed" tabindex="-1" role="dialog" aria-labelledby="ModalQuestMed"
                  aria-hidden="true">
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
            <div class="card">
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
            </div><br>
          </div>
        </div>
      </div>

      <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
        <div class="row">
          <div class="col-sm-6">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Podcast - Como é a rotina de um médico.</h5>
                <p class="card-text">Discussão sobre como é o dia a dia de um profissional em Medicina.</p>
                <a href="#" class="btn btn-primary">Ouvir</a>
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Podcast - Por que escolher medicina?</h5>
                <p class="card-text">Principais motivos e razões para seguir a carreira de Medicina.</p>
                <a href="#" class="btn btn-primary">Ouvir</a>
              </div>
            </div>
          </div>
        </div>
      </div>


      <div class="card">
        <div class="card-header" id="headingTwo">
          <h5 class="mb-0">
            <button class="btn btn-link text-decoration-none" data-toggle="collapse" data-target="#collapseTwo"
              aria-expanded="true" aria-controls="collapseTwo">
              <h3>Direito <i class="fas fa-plus"></i></h3>
            </button>
          </h5>
        </div>

        <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordion">
          <div class="row">
            <div class="col-sm-6">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Vídeo - O Direito no futuro</h5>
                  <p class="card-text">Os principais rumos que o Direito irá tomar para se adadptar a tecnologia.</p>
                  <a href="#" class="btn btn-primary">Assistir</a>
                </div>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Vídeo - Principais dúvidas sobre Direito</h5>
                  <p class="card-text">Dúvidas frequentes relacionadas a Direito respondidas.</p>
                  <a href="#" class="btn btn-primary">Assistir</a>
                </div>
              </div><br>
            </div>
          </div>
        </div>

        <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordion">
          <div class="row">
            <div class="col-sm-6">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Documento - Questões que envolvem Direito, resolvidas e comentadas.</h5>
                  <p class="card-text">Questões de diversos temas relacionados ao Direito, abordadas em vestibulares,
                    resolvidas e comentadas.</p>
                  <button type="button" class="btn btn-primary" data-toggle="modal"
                    data-target="#ModalQuestDir">Ler</button>
                  <div class="modal fade" id="ModalQuestDir" tabindex="-1" role="dialog" aria-labelledby="ModalQuestDir"
                    aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="ModalQuestDirT">Questões que envolvem Direito, resolvidas e
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
                  <h5 class="card-title">Documento - A participação das mulheres na área do Direito.</h5>
                  <p class="card-text">A conquista das mulheres e a sua crescente atuação em Direito.</p>
                  <button type="button" class="btn btn-primary" data-toggle="modal"
                    data-target="#ModalConqDir">Ler</button>
                  <div class="modal fade" id="ModalConqDir" tabindex="-1" role="dialog" aria-labelledby="ModalConqDir"
                    aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="ModalConqDirT">A participação das mulheres na área do Direito.
                          </h5>
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
              </div><br>
            </div>
          </div>
        </div>

        <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordion">
          <div class="row">
            <div class="col-sm-6">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Podcast - Como é a rotina de um profissional em Direito.</h5>
                  <p class="card-text">Discussão sobre como é o dia a dia de um profissional em Direito.</p>
                  <a href="#" class="btn btn-primary">Ouvir</a>
                </div>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Podcast - Por que escolher Direito?</h5>
                  <p class="card-text">Principais motivos e razões para seguir a carreira de Direito.</p>
                  <a href="#" class="btn btn-primary">Ouvir</a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="card">
          <div class="card-header" id="headingThree">
            <h5 class="mb-0">
              <button class="btn btn-link text-decoration-none" data-toggle="collapse" data-target="#collapseThree"
                aria-expanded="true" aria-controls="collapseThree">
                <h3>Engenharia <i class="fas fa-plus"></i></h3>
              </button>
            </h5>
          </div>

          <div id="collapseThree" class="collapse show" aria-labelledby="headingThree" data-parent="#accordion">
            <div class="row">
              <div class="col-sm-6">
                <div class="card">
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
                    <p class="card-text">Dúvidas frequentes relacionadas à Engenharia respondidas.</p>
                    <a href="#" class="btn btn-primary">Assistir</a>
                  </div>
                </div><br>
              </div>
            </div>
          </div>

          <div id="collapseThree" class="collapse show" aria-labelledby="headingThree" data-parent="#accordion">
            <div class="row">
              <div class="col-sm-6">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title">Documento - Questões que envolvem Engenharia, resolvidas e comentadas.</h5>
                    <p class="card-text">Questões de diversos temas relacionados à Engenharia, abordadas em
                      vestibulares, resolvidas e comentadas.</p>
                    <button type="button" class="btn btn-primary" data-toggle="modal"
                      data-target="#ModalQuestEng">Ler</button>
                    <div class="modal fade" id="ModalQuestEng" tabindex="-1" role="dialog"
                      aria-labelledby="ModalQuestEng" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="ModalQuestEngT">Questões que envolvem Medicina, resolvidas e
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
                      data-target="#ModalConqEng">Ler</button>
                    <div class="modal fade" id="ModalConqEng" tabindex="-1" role="dialog" aria-labelledby="ModalConqEng"
                      aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="ModalConqEngT">A participação das mulheres na Engenharia.</h5>
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
                </div><br>
              </div>
            </div>
          </div>

          <div id="collapseThree" class="collapse show" aria-labelledby="headingThree" data-parent="#accordion">
            <div class="row">
              <div class="col-sm-6">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title">Podcast - Como é a rotina de um engenheiro.</h5>
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

          <div class="card">
            <div class="card-header" id="headingFour">
              <h5 class="mb-0">
                <button class="btn btn-link text-decoration-none" data-toggle="collapse" data-target="#collapseFour"
                  aria-expanded="true" aria-controls="collapseFour">
                  <h3>Biologia <i class="fas fa-plus"></i></h3>
                </button>
              </h5>
            </div>

            <div id="collapseFour" class="collapse show" aria-labelledby="headingFour" data-parent="#accordion">
              <div class="row">
                <div class="col-sm-6">
                  <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">Vídeo - A Biologia no futuro</h5>
                      <p class="card-text">Os principais rumos que a Biologia irá tomar para se adadptar a tecnologia.
                      </p>
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
                  </div><br>
                </div>
              </div>
            </div>

            <div id="collapseFour" class="collapse show" aria-labelledby="headingFour" data-parent="#accordion">
              <div class="row">
                <div class="col-sm-6">
                  <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">Documento - Questões que envolvem Biologia, resolvidas e comentadas.</h5>
                      <p class="card-text">Questões de diversos temas relacionados à Biologia, abordadas em
                        vestibulares, resolvidas e comentadas.</p>
                      <button type="button" class="btn btn-primary" data-toggle="modal"
                        data-target="#ModalQuestBio">Ler</button>
                      <div class="modal fade" id="ModalQuestBio" tabindex="-1" role="dialog"
                        aria-labelledby="ModalQuestBio" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="ModalQuestBioT">Questões que envolvem Biologia, resolvidas e
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
                        data-target="#ModalConqBio">Ler</button>
                      <div class="modal fade" id="ModalConqBio" tabindex="-1" role="dialog"
                        aria-labelledby="ModalConqBio" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="ModalConqBioT">A participação das mulheres na Biologia.</h5>
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
                  </div><br>
                </div>
              </div>
            </div>

            <div id="collapseFour" class="collapse show" aria-labelledby="headingFour" data-parent="#accordion">
              <div class="row">
                <div class="col-sm-6">
                  <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">Podcast - Como é a rotina de um biólogo.</h5>
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

          <div class="card">
            <div class="card-header" id="headingFive">
              <h5 class="mb-0">
                <button class="btn btn-link text-decoration-none" data-toggle="collapse" data-target="#collapseFive"
                  aria-expanded="true" aria-controls="collapseFive">
                  <h3 class="h3 teste">Psicologia <i class="fas fa-plus"></i></h3>
                </button>
              </h5>
            </div>

            <div id="collapseFive" class="collapse show" aria-labelledby="headingFive" data-parent="#accordion">
              <div class="row">
                <div class="col-sm-6">
                  <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">Vídeo - A Psicologia no futuro</h5>
                      <p class="card-text">Os principais rumos que a Psicologia irá tomar para se adadptar a
                        tecnologia.
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
                  </div><br>
                </div>
              </div>
            </div>

            <div id="collapseFive" class="collapse show" aria-labelledby="headingFive" data-parent="#accordion">
              <div class="row">
                <div class="col-sm-6">
                  <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">Documento - Questões que envolvem Psicologia, resolvidas e comentadas.
                      </h5>
                      <p class="card-text">Questões de diversos temas relacionados à Psicologia, abordadas em
                        vestibulares, resolvidas e comentadas.
                      </p>
                      <button type="button" class="btn btn-primary" data-toggle="modal"
                        data-target="#ModalQuestPsi">Ler</button>
                      <div class="modal fade" id="ModalQuestPsi" tabindex="-1" role="dialog"
                        aria-labelledby="ModalQuestPsi" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="ModalQuestPsiT">Questões que envolvem Psicologia, resolvidas e
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
                        data-target="#ModalQuestMed">Ler</button>
                      <div class="modal fade" id="ModalConqPsi" tabindex="-1" role="dialog"
                        aria-labelledby="ModalConqPsi" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="ModalConqPsiT">A participação das mulheres na Psicologia.</h5>
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
                  </div><br>
                </div>
              </div>
            </div>


            <div id="collapseFive" class="collapse show" aria-labelledby="headingFive" data-parent="#accordion">
              <div class="row">
                <div class="col-sm-6">
                  <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">Podcast - Como é a rotina de um psicólogo.</h5>
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
        </div>
      </div>
    </div>
  </div>
  <br>
  <?php include('rodape.html'); ?>
</body>
<?php
    }else{
      echo('<script>window.alert("Faça a assinatura do nosso plano")
			window.location.href = "compra1.php";</script>');
    }
		}else{
			echo('<script>window.alert("Faça o login antes")
			window.location.href = "login.php";</script>');
		}
	
?>

</html>