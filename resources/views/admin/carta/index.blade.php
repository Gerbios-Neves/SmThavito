@extends('layouts.adminmaster')

@section('content')
<div class="main-content container-fluid">
<div class="card card-table">
                <div class="card-header">Listagem das Cartas
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
                        <th>Tipos de Carta</th>
                        <th>Precos</th>
                        <th>Accoes</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach ($cartas as $carta)
                      <tr class="odd gradeX">
                        <td>{{$carta->id}}</td>
                        <td>{{$carta->tipo_carta}}</td>
                        <td>{{$carta->preco}}</td>
                        <td><a class="btn btn-warning" href="/carta/{{$carta->id}}/edit" style="color: blue">Editar</a></td>
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