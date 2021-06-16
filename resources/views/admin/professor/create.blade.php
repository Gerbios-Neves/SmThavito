@extends('layouts.adminmaster')

@section('content')
<div class="main-content container-fluid">
         <form action="/professor" method="post">
              @csrf
              <div class="row">
            <div class="col-lg-12">
              <div class="card card-border-color card-border-color-primary">
                <div class="card-header card-header-divider">Cadastro de Professores<span class="card-subtitle"></span></div>
                <div class="card-body">
                    <div class="form-group pt-2">
                      <label for="inputnome">Nome do Professor*</label>
                      <input class="form-control" name="nome" required="" id="inputnome" type="text" placeholder="Nome do Professor">
                    </div>
                    <div class="form-group pt-2">
                      <label for="inputmorada">Morada</label>
                      <input class="form-control" name="morada" id="inputmorada" type="text" placeholder="Morada">
                    </div>
                    <div class="form-group pt-2">
                      <label for="inputcontacto">Contacto*</label>
                      <input class="form-control" name="contacto" required="" id="inputcontacto" type="text" placeholder="contacto">
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