@extends('layouts.adminmaster')

@section('content')
<div class="main-content container-fluid">
   <div class="card card-table">
                <div class="card-header">Listagem das Turmas
                  <div class="tools dropdown"><span class="icon mdi mdi-download"></span><a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown"><span class="icon mdi mdi-more-vert"></span></a>
                    <div class="dropdown-menu" role="menu"><a class="dropdown-item" href="#">Action</a><a class="dropdown-item" href="#">Another action</a><a class="dropdown-item" href="#">Something else here</a>
                      <div class="dropdown-divider"></div><a class="dropdown-item" href="#">Separated link</a>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  <table id="" class="display" style="width:100%">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Horario</th>
                        <th>Ano</th>
                        <th>Professor</th>
                        <th>Accoes</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach ($turmas as $turma)
                      <tr class="odd gradeX">
                        <td>{{$turma->id}}</td>
                        <td>{{$turma->horario}}</td>
                        <td>{{$turma->ano}}</td>
                        <td>{{$turma->professor->nome}}</td>
                        <td class="row">
                          <div class="col">
                           <a class="btn btn-primary" href="/turma/{{$turma->id}}/edit">Editar</a>
                          </div>
                          <form class="col" action="{{route('turma.destroy', $turma->id)}}" method="post">
                            @method('delete')
                            @csrf
                            <button class="btn btn-danger" type="submit">Deletar</button>
                          </form>
                      </tr>
                    @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
</div>

@endsection
