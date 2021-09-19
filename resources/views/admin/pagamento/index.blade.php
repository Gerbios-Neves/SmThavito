@extends('layouts.adminmaster')

@section('content')
<div class="main-content container-fluid">
   <div class="card card-table">
                <div class="card-header">Listagem dos Pagamentos
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
                        <th>Valor Pago</th>
                        <th>Descricao</th>
                        <th>Nome do Aluno</th>
                        <th>Nome do Usuario</th>
                        <th>Hora do Pagamento</th>
                        <th>Accoes</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach ($pagamentos as $pagamento)
                      <tr class="odd gradeX">
                        <td>{{$pagamento->id}}</td>
                        <td>{{$pagamento->valor_pago}}</td>
                        <td>{{$pagamento->tipo_pagamento}}</td>
                        <td>{{$pagamento->aluno->nome}}</td>
                        <td>{{$pagamento->user->name}}</td>
                        <td>{{$pagamento->created_at}}</td>
                        <td class="row">
                          <div class="col">
                            <a class="btn btn-primary" href="/pagamento/{{$pagamento->id}}/edit">Editar</a>
                          </div>
                          <form class="col" action="{{route('pagamento.destroy', $pagamento->id)}}" method="post">
                              @method('delete')
                              @csrf
                              <button class="btn btn-danger" type="submit">Deletar</button>
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
