@extends('layouts.adminmaster')

@section('content')
<div class="main-content container-fluid">
         <form action="/turma/{{$turma->id}}" method="post">
              @csrf
              @method('put')
              <div class="row">
            <div class="col-lg-12">
              <div class="card card-border-color card-border-color-primary">
                <div class="card-header card-header-divider">Actualizacao dos dados da Turmas<span class="card-subtitle"></span></div>
                <div class="card-body">
                    <div class="form-group pt-2">
                      <label for="inputhora">Horario</label>
                      <input class="form-control" value="{{$turma->horario}}" name="horario" id="inputhora" type="time" placeholder="Horario">
                    </div>
                    <div class="form-group pt-2">
                      <label for="inputmorada">Ano</label>
                      <input class="form-control" value="{{$turma->ano}}" name="ano" id="inputmorada" type="text" placeholder="Ano">
                    </div>
                    <div class="form-group pt-2">
                      <label class="">Professores</label>
                      <div class="">
                      <select name="professor_id" class="form-control">

                      <option value="{{$turma->professor_id}}">{{$turma->professor->nome}}</option> 
                          
                          @foreach ($professores as $professor)
                            <option value="{{$professor->id}}">{{$professor->nome}}</option>
                          @endforeach
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