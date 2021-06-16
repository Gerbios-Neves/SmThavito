@extends('layouts.adminmaster')

@section('content')
<div class="main-content container-fluid">
         <form action="/alunos" method="">
              @csrf
          <div class="row">
            <div class="col-lg-12">
              <div class="card card-border-color card-border-color-primary">
                <div class="card-header card-header-divider">Previlegios<span class="card-subtitle"></span></div>
                <div class="card-body">
                  <div class="form-group">
                      <label for="inputdescricao">Descricao</label>
                      <input class="form-control" id="inputdescricao" type="text" placeholder="Descricao">
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