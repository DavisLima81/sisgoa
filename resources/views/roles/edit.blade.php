@extends('adminlte::page')

@section('title', 'Painel geral')

@section('content_header')
    <h1>Gestão de Permissões</h1>
@stop

@section('content')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <p>Editar</p>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('roles.index') }}"> Voltar</a>
        </div>
        <br>
    </div>
</div>


@if (count($errors) > 0)
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
        </ul>
    </div>
@endif


{!! Form::model($role, ['method' => 'PATCH','route' => ['roles.update', $role->id]]) !!}
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Name:</strong>
            {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Permissões:</strong>
            <br/>
            <div class="d-flex flex-wrap">
                @foreach($permission as $value)
                    <div class="p-2">
                        <label>{{ Form::checkbox('permission[]', $value->id, in_array($value->id, $rolePermissions) ? true : false, array('class' => 'name')) }}
                        {{ $value->name }}</label>
                    </div>
                <br/>
                @endforeach
            </div>
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</div>
{!! Form::close() !!}


@endsection
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> </script>
@stop