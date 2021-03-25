@extends('adminlte::page')

@section('title', 'Equipos')

@section('content_header')
    <h1>Clientes</h1>
    
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
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="card card-primary collapsed-card">
          <div class="card-header">
            <h3 class="card-title">Cargar Cliente</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fas fa-plus"></i></button>
            </div>
          </div>
          <div class="card-body" style="display: none;">
            <form action="/clientes/carga_cliente" id="formulario-form" method="post"  role="form">
              {{ csrf_field() }}
                <div class="justify-content-md-center">
                   <div class="form-group">
                    <label for="id_cliente">Ruc o Cedula</label>
                    <input type="text" class="form-control" id="id_cliente" name="id_cliente">
                  </div>
                  <div class="form-group">
                    <label for="cli_nombres">Nombres</label>
                    <input type="text" class="form-control" id="cli_nombres" name="cli_nombres">
                  </div>
                  <div class="form-group">
                    <label for="cli_apellido">Apellidos</label>
                    <input type="text" class="form-control" id="cli_apellido" name="cli_apellido">
                  </div>
                  <div class="form-group">
                    <label for="cli_email">Email</label>
                    <input type="text" class="form-control" id="cli_email" name="cli_email">
                  </div>
                  <div class="form-group">
                    <label for="cli_telefono">Telefono</label>
                    <input type="text" class="form-control" id="cli_telefono" name="cli_telefono">
                  </div>
                  <div class="form-group">
                    <label for="cli_direccion">Direccion</label>
                    <input type="text" class="form-control" id="cli_direccion" name="cli_direccion">
                  </div>
                  <div class="form-group">
                    <label for="serie">Nro. de Serie</label>
                    <input type="text" class="form-control" id="serie" name="serie">
                  </div> 
                  <div class="form-group">
                    <label for="modelo_equipo">Equipo</label>
                    <input type="text" class="form-control" id="modelo_equipo" name="modelo_equipo">
                  </div> 
                  <div class="form-group">
                    <label for="ciu_descripcion">Ciudad</label>
                    <input type="text" class="form-control" id="ciu_descripcion" name="ciu_descripcion">
                  </div> 
            
                </body> 
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Cargar</button>
                </div>
            
            </div>
            
              </form>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>

    </div>
  </section>
@stop

@section('css')
{{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
<link rel="stylesheet" type="text/css" href="{{asset('vendor/jqueryui/jquery-ui.min.css')}}">
</head>

@stop

@section('js')

<script src="{{asset('vendor/jqueryui/jquery-ui.min.js')}}" type="text/javascript"></script>


<script type="text/javascript">
  // CSRF Token
  var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
  $(document).ready(function(){

    $( "#ciu_descripcion" ).autocomplete({
      source: function( request, response ) {
        // Fetch data
        $.ajax({
          url:"{{route('Autocomplete.ciudad')}}",
          type: 'post',
          dataType: "json",
          data: {
             _token: CSRF_TOKEN,
             search: request.term
          },
          success: function( data ) {
             response( data );
          }
        });
      },
      select: function (event, ui) {
         // Set selection
         $('#ciu_descripcion').val(ui.item.label)
         $('#ciu_descripcion').val(ui.item.value); // display the selected text
         return false;
      }
    });

  });
  </script>
  <script type="text/javascript">
    // CSRF Token
    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
    $(document).ready(function(){
  
      $( "#serie" ).autocomplete({
        source: function( request, response ) {
          // Fetch data
          $.ajax({
            url:"{{route('Autocomplete.equipo')}}",
            type: 'post',
            dataType: "json",
            data: {
               _token: CSRF_TOKEN,
               search: request.term
            },
            success: function( data ) {
               response( data );
            }
          });
        },
        select: function (event, ui) {
           // Set selection
           $('#serie').val(ui.item.value)
           $('#modelo_equipo').val(ui.item.label); // display the selected text
             return false;
        }
      });
  
    });
    </script>

@stop