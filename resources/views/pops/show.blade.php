@extends('adminlte::page')

@section('title', 'Painel geral')

@section('content_header')
    <h1>Gerenciamento de POPs</h1>
@stop

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h4> Visualizar POP</h4>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary btn-sm" href="{{ route('users.index') }}"> Voltar</a>
        </div>
    </div>
</div>
<br>
<br>
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Nome:</strong>
            {{ $pop->tipo }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Email:</strong>
            {{ $pop->titulo }}
        </div>
    </div>
</div>
@endsection