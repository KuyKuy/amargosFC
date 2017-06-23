@extends('layouts.app')
@section('header')
<div class="page-header">
        <h1>Club / [#{{$club->id}}] {{$club->nombre}}</h1>
        <form action="{{ route('clubs.destroy', $club->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
<div class="row">
	    <div class="btn-group pull-right" role="group" aria-label="...">
                <a class="btn btn-warning btn-group" role="group" href="{{ route('clubs.edit', $club->id) }}"><i class="glyphicon glyphicon-edit"></i> Edit</a>
                <button type="submit" class="btn btn-danger">Delete <i class="glyphicon glyphicon-trash"></i></button>
            </div>
        </form>
    </div>
</div>
@endsection

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <a class="btn btn-link" href="{{ route('clubs.index') }}"><i class="glyphicon glyphicon-backward"></i>  Back</a>
        </div>
        <div class='row'>
            <div class="col-xs-8 col-sm-3">
                <div class="text-center">
                    <img src="/Images/default_image.svg" width="200" class="img-thumbnail" />
                </div>
            
                <form>
                    <div class="form-group">
                         <label for="fechanacimiento" class="col-sm-12" >FECHA DE FORMACION</label>
                         <p class="form-control-static col-sm-12">{{$club->fechaNacimiento}}</p>
                    </div>
                    <div class="form-group">
                         <label for="categoria" class="col-sm-12" >DIVISION</label>
                         <p class="form-control-static col-sm-12">{{$club->categoria}}</p>
                    </div>
                    <div class="form-group">
                         <label for="ubicacion" class="col-sm-12" >UBICACION</label>
                         <p class="form-control-static col-sm-12">{{$club->ubicacion}}</p>
                    </div>
                    <div class="form-group">
                         <label for="URL" class="col-sm-12">PAGINA WEB</label>
                         <p class="form-control-static col-sm-12">{{$club->url}}</p>
                    </div>
                </form>
            </div>

            <label for="biografia"class="col-sm-2">Biografia</label>
            <div class="col-xs-8 col-sm-9">
                    <div class="form-group row">
                         <p class="form-control-static col-sm-8">{{$club->biografia}}</p>
                    </div>


            </div>
        </div>
        <div class="col-md-12">
            <a class="btn btn-link" href="{{ route('clubs.index') }}"><i class="glyphicon glyphicon-backward"></i>  Back</a>
        </div>

    </div>

@endsection
