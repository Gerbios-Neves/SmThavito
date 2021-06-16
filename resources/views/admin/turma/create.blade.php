@extends('layouts.adminmaster')

@section('content')
<div class="main-content container-fluid">
         <form action="/turma" method="post">
              @csrf
              <div class="row">
            <div class="col-lg-12">
              <div class="card card-border-color card-border-color-primary">
                <div class="card-header card-header-divider">Cadastro de Turmas<span class="card-subtitle"></span></div>
                <div class="card-body">
                    <div class="form-group pt-2">
                      <label for="inputhora">Horario</label>
                      <input class="form-control" name="horario" id="inputhora" type="time" placeholder="Horario">
                    </div>
                    <div class="form-group pt-2">
                      <label for="inputmorada">Ano</label>
                      <input class="form-control" name="ano" id="inputmorada" type="text" placeholder="Ano">
                    </div>
                    <div class="form-group pt-2">
                      <label class="">Professores</label>
                      <div class="">
                      <select name="professor_id" class="form-control">
                          @foreach ($professores as $professor)
                             
                              <option value="{{$professor->id}}"> {{$professor->nome}} </option>
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