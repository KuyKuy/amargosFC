@extends('layouts.app')
@section('css')
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/css/bootstrap-datepicker.css" rel="stylesheet">
@endsection
@section('header')
    <div class="page-header">
        <h1><i class="glyphicon glyphicon-plus"></i> Club / Crear </h1>
    </div>
@endsection

@section('content')
@include('error')

<div class="row">

    <div class="col-md-12">
        <div class="form-group @if($errors->has('imagen')) has-error @endif row">
            <div class="text-center">
                <img src="/Images/default_image.svg" width="200" class="img-thumbnail" />
            </div>
        </div>
    </div>

    <div class="col-md-12">

        <form action="{{ route('clubs.store') }}" method="POST" class="form">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <div class="form-group @if($errors->has('nombre')) has-error @endif row">
                <label for="nombre-field" class="col-form-label col-sm-2">Nombre</label>
                <div class="col-sm-10">
                    <input type="text" id="nombre-field" name="nombre" class="form-control" value="{{ old("nombre") }}"/>
                </div>
                @if($errors->has("nombre"))
                    <span class="help-block">{{ $errors->first("nombre") }}</span>
                @endif
            </div>

            <div class="form-group @if($errors->has('avatar')) has-error @endif row">
                <label for="avatar-field" class="col-form-label col-sm-2">Insignia</label>
                <div class="col-sm-10">
                    No implementado !
                    <input type="file" id="avatar-field" name="avatar" class="form-control" value="{{ old("avatar") }}"/> 
                </div>
                @if($errors->has("avatar"))
                    <span class="help-block">{{ $errors->first("avatar") }}</span>
                @endif
            </div>

            <div class="form-group @if($errors->has('categoria')) has-error @endif row">
                <label for="categoria-field" class="col-form-label col-sm-2">Division</label>
                <div class="col-sm-10">
                    <input type="text" id="categoria-field" name="categoria" class="form-control" value="{{ old("categoria") }}"/>
                </div>
                @if($errors->has("categoria"))
                    <span class="help-block">{{ $errors->first("categoria") }}</span>
                @endif
            </div>

            <div class="form-group @if($errors->has('ubicacion')) has-error @endif row">
                <label for="ubicacion-field" class="col-form-label col-sm-2">Ubicacion</label>
                <div class="col-sm-10">
                    <input type="text" id="ubicacion-field" name="ubicacion" class="form-control" value="{{ old("ubicacion") }}"/>
                </div>
                @if($errors->has("ubicacion"))
                    <span class="help-block">{{ $errors->first("ubicacion") }}</span>
                @endif
            </div>

            <div class="form-group @if($errors->has('URL')) has-error @endif row">
                <label for="URL-field" class="col-form-label col-sm-2">URL</label>
                <div class="col-sm-10">
                    <input type="text" id="URL-field" name="URL" class="form-control" value="{{ old("URL") }}"/>
                </div>
                @if($errors->has("URL"))
                    <span class="help-block">{{ $errors->first("URL") }}</span>
                @endif
            </div>

            <div class="form-group @if($errors->has('fechanacimiento')) has-error @endif row">
                <label for="fechanacimiento-field" class="col-sm-2">Fecha de formacion</label>
                <div class="col-sm-10">
                    <input type="date" id="fechanacimiento-field" name="fechanacimiento" class="form-control" value="{{ old("fechanacimiento") }}"/>
                </div>
                @if($errors->has("fechanacimiento"))
                    <span class="help-block">{{ $errors->first("fechanacimiento") }}</span>
                @endif
            </div>



            <div class="form-group @if($errors->has('biografia')) has-error @endif row">
                <label for="biografia-field" class="col-form-label col-sm-2">Biografia</label>
                <div class="col-sm-10">
                    <textarea id="biografia-field" name="biografia" class="form-control" value="{{ old("biografia") }}"></textarea>
                </div>
            </div>



            <div class="well well-sm">
                <button type="submit" class="btn btn-primary">Create</button>
                <a class="btn btn-link pull-right" href="{{ route('jugadores.index') }}"><i class="glyphicon glyphicon-backward"></i> Back</a>
            </div>
        </form>

    </div>
</div>
@endsection
@section('scripts')
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/js/bootstrap-datepicker.min.js"></script>
<script>
$('.date-picker').datepicker({
    });
</script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
<script type="text/javascript" src="https://github.com/markusslima/bootstrap-filestyle/blob/master/src/bootstrap-filestyle.min.js"> </script>
$(":file").filestyle({buttonName: "btn-primary", iconName: "glyphicon-inbox"});
@endsection
