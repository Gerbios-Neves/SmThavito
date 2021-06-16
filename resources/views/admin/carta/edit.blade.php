@extends('layouts.adminmaster')

@section('content')
<div class="main-content container-fluid">
         <form action="/carta/{{$carta->id}}" method="post">
              @csrf
              @method('put')
              <div class="row">
            <div class="col-lg-12">
              <div class="card card-border-color card-border-color-primary">
                <div class="card-header card-header-divider">Actualizacao dos dados da Carta<span class="card-subtitle"></span></div>
                <div class="card-body">
                    <div class="form-group pt-2">
                      <label for="inputcarta">Tipo de Cartas</label>
                      <input class="form-control" value="{{$carta->tipo_carta}}" name="tipo_carta" id="inputcarta" type="text" placeholder="Tipo de Cartas">
                    </div>
                    <div class="form-group pt-2">
                      <label for="inputpreco">Preco</label>
                      <input class="form-control" value="{{$carta->preco}}" name="preco" id="inputpreco" type="text" placeholder="Preco">
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