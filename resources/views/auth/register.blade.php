@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card border-dark mb-3">
                <div class="card-header">Registrar</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
                        @csrf

                        <div class="jumbotron">
                          <h3>Dados Pessoais</h3>
                          <br>
                          <form>
                              <div class="form-row">
                                <div class="form-group col-md-6">
                                  <label for="name">Nome: </label>

                                  <input type="text" name="name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" id="name" value="{{ old('name') }}" placeholder="Exemplo 1 de Oliveira 4" required autofocus>
                                  @if ($errors->has('name'))
                                      <span class="invalid-feedback">
                                          <strong>{{ $errors->first('name') }}</strong>
                                      </span>
                                  @endif
                                </div>
                                  <div class="form-group col-md-6">
                                    <label for="name">CPF: </label>
                                      <input type="number" class="form-control" name="cpf" id="cpf" value="" placeholder="" required autofocus>
                                  </div>
                                  <div class="form-group col-md-6">
                                    <label for="name">RG: </label>
                                      <input type="number" class="form-control" name="rg" id="rg" value="" placeholder="" required autofocus>
                                  </div>
                                  <div class="form-group col-md-6">
                                    <label for="name">Órgão Expeditor: </label>
                                      <input type="text" class="form-control" name="oe" id="oe" value="" placeholder="" required autofocus>
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label for="inputEmail4">E-mail: </label>
                                  <input type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" id="email" placeholder="exemplo@exemplo.com" name="email" value="{{ old('email') }}" required>
                                  @if ($errors->has('email'))
                                      <span class="invalid-feedback">
                                          <strong>{{ $errors->first('email') }}</strong>
                                      </span>
                                  @endif
                                </div>
                                <div class="form-row">
                                <div class="form-group col-md-6">
                                  <label for="inputPassword4">Senha: </label>
                                  <input type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" id="password" placeholder="******" name="password" required>
                                  @if ($errors->has('password'))
                                      <span class="invalid-feedback">
                                          <strong>{{ $errors->first('password') }}</strong>
                                      </span>
                                  @endif
                                </div>
                                <div class="form-group col-md-6">
                                  <label for="password-confirm">Confirme sua Senha: </label>
                                  <input type="password" class="form-control" id="password-confirm" placeholder="******" name="password_confirmation" required>
                                </div>
                              </div>
                              <div class="form-row">
                                <div class="form-group col-md-6">
                                  <label for="inputAddress">Endereço: </label>
                                  <input type="text" class="form-control" id="endereco" name="endereco" placeholder="Rua/Avenida Exemplo de Nome">
                                </div>
                                <div class="form-group col-md-6">
                                  <label for="inputZip">CEP: </label>
                                  <input type="text" class="form-control" id="cep" name="cep" placeholder="XXXXXX-XX">
                                </div>
                              </div>
                              <div class="form-row">
                                <div class="form-group col-md-6">
                                  <label for="inputPassword4">Bairro: </label>
                                  <input type="text" class="form-control" id="bairro" name="bairro" placeholder="Bairro 1 de Abril">
                                </div>
                                <div class="form-group col-md-6">
                                  <label for="inputPassword4">Número: </label>
                                  <input type="text" class="form-control" id="numero" name="numero" placeholder="1234">
                                </div>
                                <div class="form-group col-md-6">
                                  <label for="inputCity">Cidade: </label>
                                  <input type="text" class="form-control" id="cidade" name="cidade" placeholder="Nome da Cidade">
                                </div>
                                <div class="form-group col-md-6">
                                  <label for="inputState">Estado: </label>
                                  <select id="estado" name="estado" class="form-control">
                                    <option selected>Escolha seu Estado</option>
                                    <option>AC</option>
                                    <option>AL</option>
                                    <option>AP</option>
                                    <option>AM</option>
                                    <option>BA</option>
                                    <option>CE</option>
                                    <option>DF</option>
                                    <option>ES</option>
                                    <option>GO</option>
                                    <option>MA</option>
                                    <option>MT</option>
                                    <option>MS</option>
                                    <option>MG</option>
                                    <option>PA</option>
                                    <option>PB</option>
                                    <option>PR</option>
                                    <option>PE</option>
                                    <option>PI</option>
                                    <option>RJ</option>
                                    <option>RN</option>
                                    <option>RS</option>
                                    <option>RO</option>
                                    <option>RR</option>
                                    <option>SC</option>
                                    <option>SP</option>
                                    <option>SE</option>
                                    <option>TO</option>
                                  </select>
                                </div>
                                <div class="form-group col-md-6">
                                  <label for="name">Telefone: </label>
                                    <input type="text" class="form-control" name="telefone" id="telefone" value="" placeholder="(XXX) XXXX XXXX" required autofocus>
                                </div>
                                <div class="form-group col-md-6">
                                  <label for="name">Celular: </label>
                                    <input type="text" class="form-control" name="celular" id="celular" value="" placeholder="(XXX) X XXXX XXXX" required autofocus>
                                </div>
                              </div>
                              <br>
                                <div class="row justify-content-center">
                                    <div class="col-2">
                                        <button type="submit" class="btn btn-dark">
                                            Registrar
                                        </button>
                                    </div>
                                </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
