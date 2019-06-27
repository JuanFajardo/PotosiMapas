@extends('maestro')


@section('title') Proyectos @endsection

@section('ventana') Proyectos
@endsection
@section('descripcion') Administracion de los proyectos @endsection
@section('titulo')
  <a href="{{asset('index.php')}}" style="color:#fff;" accesskey="i"></i> <u>I</u>nicio </a>
 @endsection

@section('menuProyecto')
 class="active-menu"
@endsection


@section('cuerpo')

      <div class=" panel-body">

        <h3> {{$dato->titulo}} </h3>
<br><br>
        {!! Form::open(['accept-charset'=>'UTF-8', 'route'=>['geolocalizar'], 'enctype'=>'multipart/form-data', 'method'=>'POST', 'files'=>true, 'autocomplete'=>'off', 'id'=>'form-insert'] ) !!}
        <div class="row">
          <div class="col-md-4">
            <label for="apertura_" > <b><i>latitud</i></b> </label>
            {!! Form::text('latitud', null, ['class'=>'form-control', 'placeholder'=>'Latitud', 'id'=>'latitud_', 'required']) !!}
          </div>
          <div class="col-md-8">
            <label for="longitud_" > <b><i>Longitud</i></b> </label>
            {!! Form::text('longitud', null, ['class'=>'form-control', 'placeholder'=>'Longitud', 'id'=>'longitud_', 'required']) !!}
          </div>
        </div>

        <hr>
        {!! Form::hidden('id_detalle', $dato->id) !!}
        {!! Form::hidden('id_user', '1') !!}
        {!! Form::submit('A&ntilde;adir', ['class'=>'agregar btn btn-primary']) !!}
        {!! Form::close() !!}
      </div>

@endsection
