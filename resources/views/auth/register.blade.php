<!--
Para funcionar o background geral com o background do app.blade, tem que colocar o comando abaixo nas abas que quer modificar o backgroud,
e alterar o background no css também, só com os dois pra funcionar
-->
<!-- MELHOR AINDA, SÓ COLOCAR O BACKGROUND NO APP.BLADE E IMPORTAR EM TODAS AS ABAS, ECONOMIZA CÓDIGO -->
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Registrar') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="jumbotron">
                          <h3>Dados Pessoais</h3>
                          <form>
                              <div class="form-row">
                                <div class="form-group col-md-6">
                                  <label for="name">Nome</label>

                                  <input type="text" name="name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" id="name" value="{{ old('name') }}" placeholder="Exemplo 1 de Oliveira 4" required autofocus>
                                  @if ($errors->has('name'))
                                      <span class="invalid-feedback">
                                          <strong>{{ $errors->first('name') }}</strong>
                                      </span>
                                  @endif
                                </div>
                                <div class="form-group col-md-6">
                                  <label for="inputEmail4">E-mail</label>
                                  <input type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" id="email" placeholder="exemplo@exemplo.com" name="email" value="{{ old('email') }}" required>
                                  @if ($errors->has('email'))
                                      <span class="invalid-feedback">
                                          <strong>{{ $errors->first('email') }}</strong>
                                      </span>
                                  @endif
                                </div>
                                <!-- ################ Para modificar a parte da tabela que exibe a mensagem "o campo 'password' está errado", algo assim, mudar as palavras password para senha aqui, no código abaixo
                                no RegisterController e no 2014_10_12_0000000_create_users_table.php ################ -->
                                <div class="form-group col-md-6">
                                  <label for="inputPassword4">Senha</label>
                                  <input type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" id="password" placeholder="******" name="password" required>
                                  @if ($errors->has('password'))
                                      <span class="invalid-feedback">
                                          <strong>{{ $errors->first('password') }}</strong>
                                      </span>
                                  @endif
                                </div>
                                <div class="form-group col-md-6">
                                  <label for="password-confirm">Confirme sua Senha</label>
                                  <input type="password" class="form-control" id="password-confirm" placeholder="******" name="password_confirmation" required>
                                </div>
                                <div class="form-group col-md-6">
                                  <label for="inputEmail4">RG</label>
                                  <input type="email" class="form-control" id="rg" placeholder="Ex.: 000000000" name="rg" value="" required>
                                </div>
                                <div class="form-group col-md-6">
                                  <label for="inputEmail4">Órgão Expeditor</label>
                                  <input type="email" class="form-control" id="org_exp" placeholder="Ex.: SSP/MS" name="org_exp" value="" required>
                                </div>
                                <div class="form-group col-md-6">
                                  <label for="inputEmail4">CPF</label>
                                  <input type="email" class="form-control" id="cpf" placeholder="Ex.: 00000000000" name="cpf" value="" required>
                                </div>
                              </div>
                              <div class="form-group">
                                <label for="inputAddress">Endereço</label>
                                <input type="text" class="form-control" id="endereco" placeholder="Rua/Avenida Exemplo de Nome">
                              </div>
                              <div class="form-row">
                                <div class="form-group col-md-6">
                                  <label for="inputPassword4">Bairro</label>
                                  <input type="text" class="form-control" id="bairro" placeholder="Bairro 1 de Abril">
                                </div>
                                <div class="form-group col-md-6">
                                  <label for="inputPassword4">Número</label>
                                  <input type="text" class="form-control" id="numero" placeholder="1234">
                                </div>
                                <div class="form-group col-md-6">
                                  <label for="inputCity">Cidade</label>
                                  <input type="text" class="form-control" id="cidade" placeholder="Nome da Cidade">
                                </div>
                                <div class="form-group col-md-4">
                                  <label for="inputState">Estado</label>
                                  <select id="estado" class="form-control">
                                    <option selected>Escolha seu Estado</option>
                                    <option>...</option>
                                  </select>
                                </div>
                                <div class="form-group col-md-2">
                                  <label for="inputZip">CEP</label>
                                  <input type="text" class="form-control" id="cep" placeholder="XXXXXX-XX">
                                </div>
                                <div class="form-group col-md-6">
                                  <label for="inputEmail4">Telefone</label>
                                  <input type="email" class="form-control" id="telefone" placeholder="Ex.: DDD35000000" name="telefone" value="" required>
                                </div>
                                <div class="form-group col-md-6">
                                  <label for="inputEmail4">Celular</label>
                                  <input type="email" class="form-control" id="celular" placeholder="Ex.: DDD990000000" name="celular" value="" required>
                                </div>
                              </div>
                              <div class="form-group">
                                </br>
                                <hr>
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" id="gridCheck">
                                  <label class="form-check-label" for="gridCheck">
                                    Lembrar-me!
                                  </label>
                                </div>
                              </div>
                            </br>
                              <div class="form-group row mb-0">
                                  <div class="col-md-6 offset-md-5">
                                      <button type="submit" class="btn btn-primary">
                                          {{ __('Registrar') }}
                                      </button>
                                  </div>
                              </div>
                            </form>
                          </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
