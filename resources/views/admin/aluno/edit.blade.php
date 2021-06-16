@extends('layouts.adminmaster')

@section('content')
<div class="main-content container-fluid">
         <form action="/aluno/{{$aluno->id}}" method="post">
              @csrf
              @method('put')
              <div class="row">
            <div class="col-lg-12">
              <div class="card card-border-color card-border-color-primary">
                <div class="card-header card-header-divider">Cadastro de Alunos<span class="card-subtitle"></span></div>
                <div class="card-body">
                    <div class="form-group pt-2">
                      <label for="inputnumero">Numero do Processo</label>
                      <input class="form-control"  value="{{$aluno->numero_processo}}" name="numero_processo" id="inputnumero" type="text" placeholder="Numero do Processo">
                    </div>
                    <div class="form-group pt-2">
                      <label for="inputnome_aluno">Nome do Aluno</label>
                      <input class="form-control" value="{{$aluno->nome}}" name="nome" id="inputnome_aluno" type="text" placeholder="Nome do Aluno">
                    </div>
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="inputnome_pai">Nome do Pai</label>
                      <input class="form-control" value="{{$aluno->nome_pai}}" name="nome_pai" id="inputnome_pai" type="text" placeholder="Nome do Pai">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="inputnome_mae">Nome da Mae</label>
                      <input class="form-control" value="{{$aluno->nome_mae}}" name="nome_mae" id="inputnome_mae" type="text" placeholder="Nome da Mae">
                    </div>
                   </div> 
                   <div class="form-row">
                    <div class="form-group col-md-6">
                      <label class="">Estado Civil</label>
                      <div class="">
                        <select name="estado_civil" class="form-control">
                          <option value="{{$aluno->estado_civil}}" selected>{{$aluno->estado_civil}}</option>
                          <option value="Solteiro">Solteiro</option>
                          <option value="Casado">Casado</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group col-md-6">
                      <label for="inputnaturalidade">Naturalidade</label>
                      <input class="form-control" value="{{$aluno->naturalidade}}" name="naturalidade" id="inputnaturalidade" type="text" placeholder="Naturalidade">
                    </div>
                    </div> 
                    <div class="form-group">
                      <label class=""> Data de Nascimento </label>
                      <div class="">
                        <div class="input-group date datetimepicker" data-min-view="2" data-date-format="yyyy-mm-dd">
                          <input class="form-control" name="data_nascimento" size="16" type="date" value="{{$aluno->data_nascimento}}">
                          <!-- <div class="input-group-append">
                            <button class="btn btn-primary"><i class="icon-th mdi mdi-calendar"></i></button>
                          </div> -->
                        </div>
                      </div>
                    </div>
                    <div class="form-group pt-2">
                      <label for="inputbilhete">Bilhete de Identidade</label>
                      <input class="form-control" value="{{$aluno->bilhete}}" name="bilhete" id="inputbilhete" type="text" placeholder="Bilhete de Identidade">
                    </div>
                    <div class="form-group pt-2">
                      <label for="inputlocal">Local de Emissao</label>
                      <input class="form-control" value="{{$aluno->local_emissao}}" name="local_emissao" id="inputlocal" type="text" placeholder="Local de Emissao">
                    </div>
                    <div class="form-group pt-2">
                      <label for="inputcontacto">Contacto</label>
                      <input class="form-control"  value="{{$aluno->contacto}}" name="contacto" id="inputcontacto" type="text" placeholder="Cantacto">
                    </div>
                    <div class="form-row">
                    <div class="form-group col-md-6">
                      <label class="">Tipo de Carta</label>
                      <div class="">
                      <select name="carta_id" class="form-control">
                      
                      <option value="{{$aluno->carta_id}}"> {{$aluno->carta->tipo_carta}} </option>

                          @foreach ($cartas as $carta)
                              <option value="{{$carta->id}}"> {{$carta->tipo_carta}} </option>
                          @endforeach
                      </select>
                      </div>
                    </div>
                    <div class="form-group col-md-6">
                      <label class="">Turma</label>
                      <div class="">
                      <select name="turma_id" class="form-control">
                      <option value="{{$aluno->turma_id}}"> {{$aluno->turma->horario}} </option>

                          @foreach ($turmas as $turma)
                              <option value="{{$turma->id}}"> {{$turma->horario}} </option>
                          @endforeach
                      </select>
                      </div>
                    </div>
                    </div>
                    <div class="form-group pt-2">
                      <label class="">Tipo de Pagamento</label>
                      <div class="">
                        <select name="tipo_pagamento" class="form-control">
                        <option value="{{$aluno->tipo_pagamento}}" selected>{{$aluno->tipo_pagamento}}</option>
                          <option value="Pagamento Total">Pagamento Total</option>
                          <option value="Prestacoes">Prestacoes</option>
                        </select>
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