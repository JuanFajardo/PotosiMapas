@extends('maestro')


@section('title') Botones @endsection

@section('ventana') Botones
@endsection
@section('descripcion') Administracion de los proyectos @endsection
@section('titulo')
  <a href="{{asset('index.php')}}" style="color:#fff;" accesskey="i"></i> <u>I</u>nicio </a>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <a  style="color:#fff;" href="#modalAgregar"   data-toggle="modal" class="nuevo" data-target="" accesskey="n"> <li class="fa fa-plus"></li> <u>N</u>uevo Boton </a>
 @endsection

@section('menuBoton')
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
            <label for="boton_" > <b><i>Nombre del Boton</i></b> </label>
            {!! Form::text('boton', null, ['class'=>'form-control', 'placeholder'=>'Boton', 'id'=>'boton_', 'required']) !!}
          </div>

          <div class="col-md-2">
            <label for="tipo_" > <b><i>Menu</i></b> </label>
            {!! Form::select('tipo', \App\Menu::pluck('menu', 'id'), null, ['class'=>'form-control', 'placeholder'=>'', 'id'=>'tipo_', 'required']) !!}
          </div>
          <div class="col-md-2">
            <label for="icono_" > <b><i>Posicion </i></b> </label>
            {!! Form::number('icono', null, ['class'=>'form-control', 'placeholder'=>'1', 'id'=>'icono_', 'required']) !!}
          </div>
          <div class="col-md-4">
            <label for="imagen_" > <b><i>Imagen</i></b> </label>
            {!! Form::file('imagen', null, ['class'=>'form-control', 'placeholder'=>'Imagen', 'id'=>'imagen_', 'required']) !!}
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
                    {!! Form::open(['route'=>['Boton.update', ':DATO_ID'], 'method'=>'PATCH', 'files'=>true, 'autocomplete'=>'off', 'id'=>'form-update' ])!!}

                    <div class="row">
                      <div class="col-md-4">
                        <label for="boton" > <b><i>Nombre del Boton</i></b> </label>
                        {!! Form::text('boton', null, ['class'=>'form-control', 'placeholder'=>'Boton', 'id'=>'boton', 'required']) !!}
                      </div>

                      <div class="col-md-2">
                        <label for="tipo" > <b><i>Menu</i></b> </label>
                        {!! Form::select('tipo', \App\Menu::pluck('menu', 'id'), null, ['class'=>'form-control', 'placeholder'=>'', 'id'=>'tipo', 'required']) !!}
                      </div>
                      <div class="col-md-2">
                        <label for="icono" > <b><i>Posicion </i></b> </label>
                        {!! Form::number('icono', null, ['class'=>'form-control', 'placeholder'=>'1', 'id'=>'icono', 'required']) !!}
                      </div>
                      <div class="col-md-4">
                        <label for="imagen" > <b><i>Imagen</i></b> </label>
                        {!! Form::file('imagen', null, ['class'=>'form-control', 'placeholder'=>'Imagen', 'id'=>'imagen', 'required']) !!}
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
<table id="tablaGamp" class="display table table-striped table-bordered table-hover" cellspacing="0" width="100%">
  <thead>
    <tr>
      <th>Id</th>
      <th>Boton</th>

      <th>Menu</th>
      <th>Posicion</th>
      <th>Imagen</th>
      <th>Acciones</th>
    </tr>
  </thead>
  <tbody>
    @foreach($datos as $dato)
      <tr data-id="{{ $dato->id }}">
        <td>{{ $dato->id }}</td>
        <td>{{ $dato->boton }}</td>

        <td>@foreach($menus as $menu)
              @if($menu->id == $dato->tipo)
                {{ $menu->menu }}
              @endif
            @endforeach
        </td>

        <td> {{ $dato->icono }} </td>
        <td> <img src="{{asset('RughHXvNTFm9zzBett0zzPpFGaE2r7mjB9/'.$dato->imagen)}}" alt="" width="50"></td>
        <td>
          <a href="#modalModifiar"  data-toggle="modal" data-target="" class="actualizar" style="color: #B8823B;"> <li class="fa fa-edit"></li>Editar</a> &nbsp;&nbsp;&nbsp;
          <a href="#"  data-toggle="modal" data-target="" style="color: #ff0000;" class="eliminar"> <li class="fa fa-trash"></li>Eliminar</a>
        </td>
      </tr>
    @endforeach
  </tbody>
</table>

{!! Form::open(['route'=>['Boton.destroy', ':DATO_ID'], 'method'=>'DELETE', 'id'=>'form-delete']) !!}
{!! Form::close() !!}
@endsection

@section('js')
<script type="text/javascript">
  $(document).ready(function(){
    $('#tablaGamp').DataTable({
      "order": [[ 2, 'desc']],
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
    link  = '{{ asset("/index.php/Boton/")}}/'+id;
    $.getJSON(link, function(data, textStatus) {
      if(data.length > 0){
        $.each(data, function(index, el) {
          $('#boton').val(el.boton);
          $('#tipo').val(el.tipo);
          $('#icono').val(el.icono);
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
    if(confirm('Esta seguro de eliminar el Boton')){
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
