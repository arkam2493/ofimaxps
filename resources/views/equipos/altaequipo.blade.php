@extends('adminlte::page')

@section('title', 'Equipos')

@section('content_header')
    <h1>Equipos</h1>
@stop

@section('content')
{{-- MENSAJE --}}
@isset($msj)
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
      <strong>{{ $msj }}</strong>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
    </div>
  @endisset
<form action="/equipos/carga_equipo" id="formulario-form" method="post"  role="form">
  {{ csrf_field() }}
    <div class="justify-content-md-center">
     
      <div class="form-group">
        <label for="nro_serie">Numero de Serie</label>
        <input type="text" class="form-control" id="nro_serie" name="nro_serie">
      </div>
      <div class="form-group">
        <label for="marca">Marca</label>
        <input type="text" class="form-control" id="marca" name="marca">
      </div>
      <div class="form-group">
        <label for="modelo">Modelo</label>
        <input type="text" class="form-control" id="modelo" name="modelo">
      </div>
    </div>
    <!-- /.card-body -->

    <div class="card-footer">
      <button type="submit" class="btn btn-primary">Cargar</button>
    </div>

</div>
  </form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop