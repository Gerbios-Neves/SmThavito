@extends('layouts.adminmaster')

@section('content')
<div class="main-content container-fluid">
         <form action="/user" method="post">
              @csrf
              <div class="row">
            <div class="col-lg-12">
              <div class="card card-border-color card-border-color-primary">
                <div class="card-header card-header-divider">Cadastro de Usuarios<span class="card-subtitle"></span></div>
                <div class="card-body">
                    <div class="form-group pt-2">
                      <label for="inputusuario">Nome do Usuario</label>
                      <input class="form-control" name='name' id="inputusuario" type="text" placeholder="Nome do Usuario">
                    </div>
                    <div class="form-group pt-2">
                      <label for="inputemail">Email</label>
                      <input class="form-control" name="email" id="inputemail" type="email" placeholder="Email">
                    </div>
                    <div class="form-group pt-2">
                      <label for="password">Senha</label>
                      <input class="form-control" name="password" id="password" type="password" placeholder="Senha">
                    </div>
                    <div class="form-row">
                  <!--  <div class="form-group col-md-6">
                      <label class="">Tipo de Usuario</label>
                      <div class="">
                        <select class="form-control">
                          <option value="Selecione" selected>Selecione o tipo de usuario</option>
                          <option value="A">A</option>
                          <option value="B">B</option>
                        </select>
                      </div>
                    </div>-->
                    <div class="form-group col-md-12">
                      <label class="">Previlegios</label>
                      <div class="">
                        <select name="tipo_previlegio" class="form-control">
                          <option value="Selecione" selected>Selecione</option>
                          <option value="director administrativo">Director Administrativo</option>
                          <option value="secretaria">Secretaria/o</option>
                        </select>
                      </div>
                    </div>
                    </div>
                        <p class="text-right">
                          <button class="btn btn-space btn-secondary">Cancel</button>
                          <button class="btn btn-space btn-primary" type="submit">Submit</button>
                        </p>
                      </div>
                    </div>
                </div>
              </div>
            </div>
         </form>
</div>
@endsection