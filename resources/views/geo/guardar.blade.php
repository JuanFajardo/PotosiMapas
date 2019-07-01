@extends('maestro')


@section('title') Proyectos @endsection

@section('ventana') Proyectos
@endsection
@section('descripcion') Administracion de los proyectos @endsection
@section('titulo')
  <a href="{{asset('index.php')}}" style="color:#fff;" accesskey="i"></i> <u>I</u>nicio </a>
 @endsection

@section('menuGeo')
 class="active-menu"
@endsection


@section('cuerpo')

      <div class=" panel-body">

        <h3> {{$dato->titulo}} </h3>
        <br><br>
        {!! Form::open(['accept-charset'=>'UTF-8', 'route'=>['geolocalizar'], 'enctype'=>'multipart/form-data', 'method'=>'POST', 'files'=>true, 'autocomplete'=>'off', 'id'=>'form-insert'] ) !!}
        <div class="row">
          <div class="col-md-12">
            <label for="coordenadas_" > <b><i>Coordenadas</i></b> </label>
            {!! Form::textarea('coordenadas', null, ['class'=>'form-control', 'placeholder'=>'-19.55, -65.4545', 'id'=>'coordenadas_',  'required' ]) !!}
          </div>
        </div>

        <hr>
        {!! Form::hidden('id_detalle', $dato->id) !!}
        {!! Form::hidden('id_user', '1') !!}
        {!! Form::submit('A&ntilde;adir', ['class'=>'agregar btn btn-primary']) !!}
        {!! Form::close() !!}
      </div>

@endsection
