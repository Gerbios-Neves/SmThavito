@extends('layouts.adminmaster')

@section('content')
<div class="main-content container-fluid">
         <form action="/aluno" method="post">
              @csrf
              <div class="row">
            <div class="col-lg-12">
              <div class="card card-border-color card-border-color-primary">
                <div class="card-header card-header-divider">Cadastro de Alunos<span class="card-subtitle"></span></div>
                <div class="card-body">
                    <div class="form-group pt-2">
                      <label for="inputnumero">Numero do Processo*</label>
                      <input class="form-control" name="numero_processo" required="" data-parsley-max="4" id="inputnumero" type="text" placeholder="Numero do Processo">
                    </div>
                    <div class="form-group pt-2">
                      <label for="inputnome_aluno">Nome do Aluno*</label>
                      <input class="form-control" name="nome" required="" id="inputnome_aluno" type="text" placeholder="Nome do Aluno">
                    </div>
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="inputnome_pai">Nome do Pai</label>
                      <input class="form-control" name="nome_pai" id="inputnome_pai" type="text" placeholder="Nome do Pai">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="inputnome_mae">Nome da Mae</label>
                      <input class="form-control" name="nome_mae" id="inputnome_mae" type="text" placeholder="Nome da Mae">
                    </div>
                   </div> 
                   <div class="form-row">
                    <div class="form-group col-md-6">
                      <label class="">Estado Civil</label>
                      <div class="">
                        <select name="estado_civil" class="form-control">
                          <option value="Selecione" selected>Selecione</option>
                          <option value="Solteiro">Solteiro</option>
                          <option value="Casado">Casado</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group col-md-6">
                      <label for="inputnaturalidade">Naturalidade</label>
                      <input class="form-control" name="naturalidade" id="inputnaturalidade" type="text" placeholder="Naturalidade">
                    </div>
                    </div> 
                    <div class="form-group">
                      <label class=""> Data de Nascimento</label>
                      <div class="">
                        <div class="input-group date datetimepicker" data-min-view="2" data-date-format="yyyy-mm-dd">
                          <input class="form-control" name="data_nascimento" size="16" type="date" value="">
                          <!-- <div class="input-group-append">
                            <button class="btn btn-primary"><i class="icon-th mdi mdi-calendar"></i></button>
                          </div> -->
                        </div>
                      </div>
                    </div>
                    <div class="form-group pt-2">
                      <label for="inputbilhete">Bilhete de Identidade*</label>
                      <input class="form-control" name="bilhete" required="" data-parsley-max="13" id="inputbilhete" type="text" placeholder="Bilhete de Identidade">
                    </div>
                    <div class="form-group pt-2">
                      <label for="inputlocal">Local de Emissao</label>
                      <input class="form-control" name="local_emissao" id="inputlocal" type="text" placeholder="Local de Emissao">
                    </div>
                    <div class="form-group pt-2">
                      <label for="inputcontacto">Contacto*</label>
                      <input class="form-control" name="contacto" required="" data-parsley-max="9" id="inputcontacto" type="text" placeholder="Cantacto">
                    </div>
                    <div class="form-row">
                    <div class="form-group col-md-6">
                      <label class="">Tipo de Carta*</label>
                      <div class="">
                      <select name="carta_id" required="" class="form-control">
                          @foreach ($cartas as $carta)
                             
                              <option value="{{$carta->id}}"> {{$carta->tipo_carta}} </option>
                          @endforeach
                      </select>
                      </div>
                    </div>
                    <div class="form-group col-md-6">
                      <label class="">Turma*</label>
                      <div class="">
                      <select name="turma_id" required="" class="form-control">
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
                          <option value="Selecione" selected>Selecione</option>
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