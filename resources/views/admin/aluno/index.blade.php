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
                <table id="" class="display" style="width:100%">
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
                        <td class="row"> 
                          <div class="col">
                          <a class="btn btn-warning" href="/aluno/{{$aluno->id}}"><i class="fas fa-eye">Ver</i></a>
                          </div>  
                          <div class="col"> 
                          <a class="btn btn-primary col"  href="/aluno/{{$aluno->id}}/edit"><i class="far fa-edit"></i>Editar</a>
                          </div>
                          <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">
                             Deletar
                          </button>
                          <form class="col" action="{{route('aluno.destroy', $aluno->id)}}" method="post">
                              @method('delete')
                              @csrf
                              <!-- <button class="btn btn-danger" type="submit"><i class="far fa-trash-alt"></i>Deletar</button> -->

                              <!-- Button trigger modal -->

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                  <div class="modal-header bg-danger text-white">
                                    <h5 class="modal-title" id="exampleModalLabel">Atencao</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <div class="modal-body">
                                    Tem a certeza que deseja eliminar?
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                    <button type="submit" class="btn btn-danger">Eliminar</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </form>
                        </td>
                      </tr>
                    @endforeach 
                    </tbody>
                </table>
                </div>
          </div>
</div>

@endsection


