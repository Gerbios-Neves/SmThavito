@extends('layouts.adminmaster')

@section('content')
<div class="main-content container-fluid">
   <div class="card card-table">
                <div class="card-header">Listagem dos Alunos
                  <div class="tools dropdown"><span class="icon mdi mdi-download"></span><a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown"><span class="icon mdi mdi-more-vert"></span></a>
                    <div class="dropdown-menu" role="menu"><a class="dropdown-item" href="#">Action</a><a class="dropdown-item" href="#">Another action</a><a class="dropdown-item" href="#">Something else here</a>
                      <div class="dropdown-divider"></div><a class="dropdown-item" href="#">Separated link</a>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  <table class="table table-striped table-hover table-fw-widget" id="table1">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Numero de processo</th>
                        <th>Nome</th>
                        <th>Tipo Carta</th>
                        <th>Turma</th>
                        <th>Tipo de Pagamento</th>
                        <th>Accoes</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach ($alunos as $aluno)
                      <tr class="odd gradeX">
                        <td>{{$aluno->id}}</td>
                        <td>{{$aluno->numero_processo}}</td>
                        <td>{{$aluno->nome}}</td>
                        <td>{{$aluno->carta->tipo_carta}}</td>
                        <td>{{$aluno->turma->horario}}</td>
                        <td>{{$aluno->tipo_pagamento}}</td>
                        <td><a class="btn btn-warning" href="/aluno/{{$aluno->id}}" style="color: white">Ver</a></td>
                        <td><a class="btn btn-warning" href="/aluno/{{$aluno->id}}/edit" style="color: blue">Editar</a></td>
                        <td><a class="btn btn-warning" href="" style="color: red">Deletar</a></td>
                      </tr>
                    @endforeach 
                    </tbody>
                  </table>
                </div>
              </div>
</div>

@endsection
<script type="text/javascript">
      $(document).ready(function(){
      	//-initialize the javascript
      	App.init();
      	App.dataTables();
      });
    </script>