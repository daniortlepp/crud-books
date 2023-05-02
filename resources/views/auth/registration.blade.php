@extends('layout')
  
@section('content')
<main class="login-form">
  <div class="cotainer">
      <div class="row justify-content-center">
          <div class="col-sm-12 col-md-12 col-lg-8">
              <div class="card">
                  <div class="card-header">Cadastrar</div>
                  <div class="card-body">
  
                      <form action="{{ route('register.post') }}" method="POST">
                          @csrf
                          <div class="form-group row">
                              <label for="name" class="col-sm-12 col-md-12 col-lg-2  col-form-label">Nome</label>
                              <div class="col-sm-12 col-md-12 col-lg-8 ">
                                  <input type="text" id="name" class="form-control" name="name" required autofocus>
                                  @if ($errors->has('name'))
                                      <span class="text-danger">{{ $errors->first('name') }}</span>
                                  @endif
                              </div>
                          </div>
  
                          <div class="form-group row">
                              <label for="email_address" class="col-sm-12 col-md-12 col-lg-2  col-form-label">E-Mail</label>
                              <div class="col-sm-12 col-md-12 col-lg-8 ">
                                  <input type="text" id="email_address" class="form-control" name="email" required autofocus>
                                  @if ($errors->has('email'))
                                      <span class="text-danger">{{ $errors->first('email') }}</span>
                                  @endif
                              </div>
                          </div>
  
                          <div class="form-group row">
                              <label for="password" class="col-sm-12 col-md-12 col-lg-2  col-form-label">Senha</label>
                              <div class="col-sm-12 col-md-12 col-lg-8 ">
                                  <input type="password" id="password" class="form-control" name="password" required>
                                  @if ($errors->has('password'))
                                      <span class="text-danger">{{ $errors->first('password') }}</span>
                                  @endif
                              </div>
                          </div>
  
                          <div class="col-sm-12 col-md-12 col-lg-10">
                              <button type="submit" class="btn btn-primary float-right">
                                  Salvar
                              </button>
                          </div>
                      </form>
                        
                  </div>
              </div>
          </div>
      </div>
  </div>
</main>
@endsection