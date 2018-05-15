@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css" integrity="sha384-G0fIWCsCzJIMAVNQPfjH08cyYaUtMwjJwqiRKxxE/rx96Uroj1BtIQ6MLJuheaO9" crossorigin="anonymous">


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Agendamento</div><nav>
                  <!-- ### AQUI PODE SER UTILIZADO NO LUGAR DE ABAS FIXAS(TABELAS) NO PÁGINA, UTILIZAR ABAS COMO LINK, PARA TODA VEZ QUE CLICAR NAS OPÇÕES (EM DEFERIDO, INDEFERIDO, ETC)
                  ATUALIAR A PÁGINA E CARREGAR O CONTEÚDO ### -->
                  <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <a class="nav-item nav-link active" id="nav-solicitacoes-tab" data-toggle="tab" href="#nav-solicitacoes" role="tab" aria-controls="nav-solicitacoes" aria-selected="true">Solicitações</a>
                    <a class="nav-item nav-link" id="nav-deferidos-tab" data-toggle="tab" href="#nav-deferidos" role="tab" aria-controls="nav-deferidos" aria-selected="false">Deferidos</a>
                    <a class="nav-item nav-link" id="nav-indeferidos-tab" data-toggle="tab" href="#nav-indeferidos" role="tab" aria-controls="nav-indeferidos" aria-selected="false">Indeferidos</a>
                    <a class="nav-item nav-link" id="nav-parc_deferidos-tab" data-toggle="tab" href="#nav-parc_deferidos" role="tab" aria-controls="nav-parc_deferidos" aria-selected="false">Parcialmente Deferidos</a>
                  </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                  <div class="tab-pane fade show active" id="nav-solicitacoes" role="tabpanel" aria-labelledby="nav-solicitacoes-tab">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th scope="col"></th>
                          <th scope="col">Nome</th>
                          <th scope="col">Comentário</th>
                          <th scope="col">Status</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row">1</th>
                          <td>Recebe_Nome_1</td>
                          <td>Comentário 1</td>
                          <td><button type="button" class="btn btn-success">✓</button> <button type="button" class="btn btn-danger">X</button> <button type="button" class="btn btn-warning">?</button></td>
                        </tr>
                        <tr>
                          <th scope="row">2</th>
                          <td>Recebe_Nome_2</td>
                          <td>Comentário 2</td>
                          <td><button type="button" class="btn btn-success">✓</button> <button type="button" class="btn btn-danger">X</button> <button type="button" class="btn btn-warning">?</button></td>
                        </tr>
                        <tr>
                          <th scope="row">3</th>
                          <td>Recebe_Nome_3</td>
                          <td>Comentário 3</td>
                          <td><button type="button" class="btn btn-success">✓</button> <button type="button" class="btn btn-danger">X</button> <button type="button" class="btn btn-warning">?</button></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <div class="tab-pane fade" id="nav-deferidos" role="tabpanel" aria-labelledby="nav-deferidos-tab">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th scope="col"></th>
                          <th scope="col">Nome</th>
                          <th scope="col">Comentário</th>
                          <th scope="col">Equipamentos</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row">1</th>
                          <td>Recebe_Nome_1</td>
                          <td>Comentário 1</td>
                          <td><i class="fas fa-print"></i> Impressora 1</td>
                        </tr>
                        <tr>
                          <th scope="row">2</th>
                          <td>Recebe_Nome_2</td>
                          <td>Comentário 2</td>
                          <td>
                            <!-- <div style="color:Blue"> -->
                              <i class="fas fa-print"></i> Impressora 2
                            <!-- </div> -->
                          </td>
                        </tr>
                        <tr>
                          <th scope="row">3</th>
                          <td>Recebe_Nome_3</td>
                          <td>Comentário 3</td>
                          <td><i class="fas fa-print"></i> Impressora 3</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <div class="tab-pane fade" id="nav-indeferidos" role="tabpanel" aria-labelledby="nav-indeferidos-tab">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th scope="col"></th>
                          <th scope="col">Nome</th>
                          <th scope="col">Comentário</th>
                          <th scope="col">Causa</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row">1</th>
                          <td>Recebe_Nome_1</td>
                          <td>Comentário 1</td>
                          <td>Causa 1</td>
                        </tr>
                        <tr>
                          <th scope="row">2</th>
                          <td>Recebe_Nome_2</td>
                          <td>Comentário 2</td>
                          <td>Causa 2</td>
                        </tr>
                        <tr>
                          <th scope="row">3</th>
                          <td>Recebe_Nome_3</td>
                          <td>Comentário 3</td>
                          <td>Causa 3</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <div class="tab-pane fade" id="nav-parc_deferidos" role="tabpanel" aria-labelledby="nav-parc_deferidos-tab">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th scope="col"></th>
                          <th scope="col">Nome</th>
                          <th scope="col">Comentário</th>
                          <th scope="col">Sugestão</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row">1</th>
                          <td>Recebe_Nome_1</td>
                          <td>Comentário 1</td>
                          <td>Sugestão 1</td>
                        </tr>
                        <tr>
                          <th scope="row">2</th>
                          <td>Recebe_Nome_2</td>
                          <td>Comentário 2</td>
                          <td>Sugestão 2</td>
                        </tr>
                        <tr>
                          <th scope="row">3</th>
                          <td>Recebe_Nome_3</td>
                          <td>Comentário 3</td>
                          <td>Sugestão 3</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
