@extends('layouts.adminmaster')

@section('content')
<div class="main-content container-fluid">
   <div class="card card-table">
                <div class="card-header">Listagem dos Usuarios
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
                        <th>Nome</th>
                        <th>Email</th>
                        <th>Tipo</th>
                        <th>Accoes</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach ($users as $user)
                      <tr class="odd gradeX">
                        <td>{{$user->id}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->tipo_previlegio}}</td>
                        <td class="row">
                          <div class="col">
                            <a class="btn btn-primary" href="/user/{{$user->id}}/edit">Editar</a>
                          </div>
                          <form class="col" action="{{route('user.destroy', $user->id)}}" method="post">
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
 <script type="text/javascript">
      $(document).ready(function(){
      	//-initialize the javascript
      	App.init();
      	App.dataTables();
      });
    </script>