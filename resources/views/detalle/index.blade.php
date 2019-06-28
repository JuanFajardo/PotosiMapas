@extends('maestro')


@section('title') Detalles @endsection

@section('ventana') Detalles
@endsection
@section('descripcion') Administracion de los Detalles @endsection
@section('titulo')
  <a href="{{asset('index.php')}}" style="color:#fff;" accesskey="i"></i> <u>I</u>nicio </a>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <a  style="color:#fff;" href="#modalAgregar"   data-toggle="modal" class="nuevo" data-target="" accesskey="n"> <li class="fa fa-plus"></li> <u>N</u>uevo </a>
 @endsection

@section('menuProyecto')
 class="active-menu"
@endsection



@section('modal1')
<div id="modalAgregar" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">
    <div class="modal-content panel panel-primary">
      <div class="modal-header panel-heading">
        <b>Nuevo</b>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body panel-body">
        {!! Form::open(['accept-charset'=>'UTF-8', 'enctype'=>'multipart/form-data', 'method'=>'POST', 'files'=>true, 'autocomplete'=>'off', 'id'=>'form-insert'] ) !!}




        <div class="row">
          <div class="col-md-4">
            <label for="titulo_" > <b><i>Titulo Proyecto</i></b> </label>
            {!! Form::text('titulo', null, ['class'=>'form-control', 'placeholder'=>'Escuela..', 'id'=>'titulo_', 'required']) !!}
          </div>
          <div class="col-md-4">
            <label for="id_boton_" > <b><i>Titulo Menu</i></b> </label>
            {!! Form::select('id_boton', \App\Boton::pluck('boton', 'id'), null, ['class'=>'form-control', 'id'=>'id_boton_', 'required']) !!}
          </div>
          <div class="col-md-4">
            <label for="imagen_" > <b><i>Imagen</i></b> </label>
            {!! Form::file('imagen', null, ['class'=>'form-control', 'placeholder'=>'imagen', 'id'=>'imagen_', 'required']) !!}
          </div>
        </div>


        <div class="row">
          <div class="col-md-3">
            <label for="descripcion_" > <b><i>descripcion</i></b> </label>
            {!! Form::textarea('descripcion',  null, ['class'=>'form-control', 'placeholder'=>'Resumen ', 'id'=>'descripcion_', 'required']) !!}
          </div>

          <div class="col-md-2">
            <label for="color_" > <b><i>Color</i></b> </label>
            {!! Form::color('color', null, ['class'=>'form-control', 'placeholder'=>'black', 'id'=>'color_', 'required']) !!}
          </div>
        </div>


        <hr>
        {!! Form::hidden('id_user', '1') !!}
        {!! Form::submit('A&ntilde;adir', ['class'=>'agregar btn btn-primary']) !!}
        {!! Form::close() !!}
      </div>
    </div>
  </div>
</div>
@endsection

@section('modal2')
    <div id="modalModifiar" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content panel panel-warning ">
                <div class="modal-header panel-heading">
                    <b>Actualizar </b>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body panel-body">
                    {!! Form::open(['route'=>['Detalle.update', ':DATO_ID'], 'method'=>'PATCH', 'id'=>'form-update' ])!!}

                            <div class="row">
                              <div class="col-md-4">
                                <label for="titulo_" > <b><i>Titulo Proyecto</i></b> </label>
                                {!! Form::text('titulo', null, ['class'=>'form-control', 'placeholder'=>'Escuela..', 'id'=>'titulo', 'required']) !!}
                              </div>
                              <div class="col-md-4">
                                <label for="id_boton_" > <b><i>Titulo Menu</i></b> </label>
                                {!! Form::select('id_boton', \App\Boton::pluck('boton', 'id'), null, ['class'=>'form-control', 'id'=>'id_boton', 'required']) !!}
                              </div>
                              <div class="col-md-4">
                                <label for="imagen_" > <b><i>Imagen</i></b> </label>
                                {!! Form::file('imagen', null, ['class'=>'form-control', 'placeholder'=>'imagen', 'id'=>'imagen', 'required']) !!}
                              </div>
                            </div>


                            <div class="row">
                              <div class="col-md-3">
                                <label for="descripcion_" > <b><i>descripcion</i></b> </label>
                                {!! Form::textarea('descripcion',  null, ['class'=>'form-control', 'placeholder'=>'Resumen ', 'id'=>'descripcion', 'required']) !!}
                              </div>

                              <div class="col-md-2">
                                <label for="color_" > <b><i>Color</i></b> </label>
                                {!! Form::color('color', null, ['class'=>'form-control', 'placeholder'=>'black', 'id'=>'color', 'required']) !!}
                              </div>
                            </div>

                    <hr>
                    {!! Form::hidden('id_user', '1') !!}
                    {!! Form::submit('Actualizar ', ['class'=>'btn btn-warning']) !!}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection


@section('cuerpo')
@if( \Session::get('clave') == "OK" )
  <script type="text/javascript">
    alert("La contraseña se actualizo correctamente");
  </script>
@endif
<table id="tablaGamp" class="display table table-striped table-bordered table-hover" cellspacing="0" width="100%">
  <thead>
    <tr>

      <th>Boton</th>
      <th>Titulo</th>
      <th>Distrito/Zona</th>
      <th>Superficie</th>
      <th>Monto Total</th>
      <th>Estado</th>
      <th>Beneficiario</th>
      <th>Imagen</th>
      <th>Acciones</th>
    </tr>
  </thead>
  <tbody>
    @foreach($datos as $dato)
      <tr data-id="{{ $dato->id }}">
        <td>  <b>{{ $dato->boton }}</b></td>
        <td>{{ $dato->titulo }}</td>
        <td>{{ $dato->distrito }} / {{ $dato->zona }}</td>
        <td>{{ $dato->superficie_construida }}</td>
        <td>{{ $dato->monto_total }}</td>
        <td>{{ $dato->estado }}</td>
        <td>{{ $dato->beneficiario_estudiante }}</td>
        <td> <img src="{{ asset('RughHXvNTFm9zzBett0zzPpFGaE2r7mjB9/'.$dato->imagen) }}" alt="" width="70"></td>
        <td>
          <a href="#modalModifiar"  data-toggle="modal" data-target="" class="actualizar" style="color: #B8823B;"> <li class="fa fa-edit"></li>Editar</a> &nbsp;&nbsp;
          <a href="Geolocalizar/{{$dato->id}}"  style="color: #B8823B;"> <li class="fa fa-geo"></li>Geolocalizar</a> &nbsp;&nbsp;&nbsp;
          <a href="#"  data-toggle="modal" data-target="" style="color: #ff0000;" class="eliminar"> <li class="fa fa-trash"></li>Eliminar</a>
        </td>
      </tr>
    @endforeach
  </tbody>
</table>

{!! Form::open(['route'=>['Detalle.destroy', ':DATO_ID'], 'method'=>'DELETE', 'id'=>'form-delete']) !!}
{!! Form::close() !!}
@endsection

@section('js')
<script type="text/javascript">
  $(document).ready(function(){
    $('#tablaGamp').DataTable({
      "order": [[ 7, 'asc']],
      "language": {
        "bDeferRender": true,
        "sEmtpyTable": "No ay registros",
        "decimal": ",",
        "thousands": ".",
        "lengthMenu": "Mostrar _MENU_ datos por registros",
        "zeroRecords": "No se encontro nada,  lo siento",
        "info": "Mostrar paginas [_PAGE_] de [_PAGES_]",
        "infoEmpty": "No ay entradas permitidas",
        "search": "Buscar ",
        "infoFiltered": "(Busqueda de _MAX_ registros en total)",
        "oPaginate":{
          "sLast":"Final",
          "sFirst":"Principio",
          "sNext":"Siguiente",
          "sPrevious":"Anterior"
        }
      }
    });
  });

  $('.actualizar').click(function(event){
    event.preventDefault();
    var fila = $(this).parents('tr');
    var id = fila.data('id');
    var form = $('#form-update')
    var url = form.attr('action').replace(':DATO_ID', id);
    form.get(0).setAttribute('action', url);
    link  = '{{ asset("/index.php/Detalle/")}}/'+id;
    $.getJSON(link, function(data, textStatus) {
      if(data.length > 0){
        $.each(data, function(index, el) {
          $('#imagen').val(el.imagen);
          $('#titulo').val(el.titulo);
          $('#color').val(el.color);
          $('#descripcion').val(el.descripcion);
          $('#id_boton').val(el.id_boton);
        });
      }
    });
  });

  $('.eliminar').click(function(event) {
    event.preventDefault();
    var fila = $(this).parents('tr');
    var id = fila.data('id');
    var form = $('#form-delete');
    var url = form.attr('action').replace(':DATO_ID',id);
    var data = form.serialize();
    if(confirm('Esta seguro de eliminar el Proyecto')){
      $.post(url, data, function(result, textStatus, xhr) {
        alert(result);
        fila.fadeOut();
      }).fail(function(esp){
        fila.show();
      });
    }
  });
</script>
@endsection
