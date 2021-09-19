@extends('layouts.adminmaster')

@section('content')
<div class="main-content container-fluid">
         <form action="/pagamento" method="post">
              @csrf
          <div class="row">
            <div class="col-lg-12">
              <div class="card card-border-color card-border-color-primary">
                <div class="card-header card-header-divider">Registro de Pagamentos<span class="card-subtitle"></span></div>
                <div class="card-body">
                  
                  <div class="form-row">
                  <div class="form-group col-md-6">
                      <label for="inputvalor_pago">Valor Pago</label>
                      <input class="form-control" name="valor_pago" id="inputvalor_pago" type="text" placeholder="Valor Pago">
                  </div>

                 
                    <div class="form-group col-md-6">
                      <label class="">Descricao</label>
                      <div class="">
                        <select name="tipo_pagamento" class="form-control">
                          <option value="Selecione" selected>Selecione</option>
                          <option value="Carta">Carta</option>
                          <option value="Taxa Teorico">Taxa do Exame Teorico</option>
                          <option value="Taxa Pratica">Taxa do Exame Practico</option>
                          <option value="Processo do Aluno">Processo do Aluno</option>
                        </select>
                      </div>
                    </div>
                

                  <!-- <div class="form-group col-md-6">
                      <label for="inputdescricao">Descricao</label>
                      <input class="form-control" name="tipo_pagamento" id="inputdescriacao" type="text" placeholder="Descricao">
                  </div> -->
                    <!--<div class="form-group col-md-6">
                      <label class="">Tipo de Pagamento</label>
                      <div class="">
                        <select class="form-control" name="tipo_pagamento" >
                          <option value="Selecione" selected>Selecione o tipo de pagamento</option>
                          <option value="A">A</option>
                          <option value="B">B</option>
                        </select>
                      </div>
                    </div>-->
                  </div> 
                    <div class="form-group pt-2">
                      <label class="">Nome do Aluno</label>
                      <div class="">
                      <select name="aluno_id" class="form-control">
                          @foreach ($alunos as $aluno)
                            <option value="{{$aluno->id}}"> {{$aluno->nome}} </option>
                          @endforeach
                      </select>
                      </div>
                    </div>
                    <!-- <div class="form-group pt-2">
                      <label class="">Nome do Usuario</label>
                      <div class="">
                        <select name="user_id" class="form-control">
                          @foreach ($users as $user)
                          <option value="{{$user->id}}"> {{$user->name}} </option>
                          @endforeach
                        </select>
                      </div>
                    </div> -->
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