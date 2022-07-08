@extends('adminlte::page')

@section('title', 'Painel geral')

@section('content_header')
    <h1>Gestão de Permissões</h1>
@stop

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">   
        <div class="pull-right">
        @can('role-create')
            <a class="btn btn-success btn-sm" href="{{ route('roles.create') }}">Incluir permissão</a>
        @endcan
        </div>
        <br>
    </div>
</div>


@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif


<table class="table table-bordered">
  <tr>
     <th>No</th>
     <th>Nome</th>
     <th width="280px">Ação</th>
  </tr>
    @foreach ($roles as $key => $role)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $role->name }}</td>
        <td>
            @can('role-list')
            <a class="btn btn-primary btn-sm" href="{{ route('roles.show',$role->id) }}">Visualizar</a>
            @endcan
            @can('role-edit')
                <a class="btn btn-primary btn-sm" href="{{ route('roles.edit',$role->id) }}">Editar</a>
            @endcan
            @can('role-delete')
                {!! Form::open(['method' => 'DELETE','route' => ['roles.destroy', $role->id],'style'=>'display:inline']) !!}
                    {!! Form::submit('Apagar', ['class' => 'btn btn-secondary btn-sm']) !!}
                {!! Form::close() !!}
            @endcan
        </td>
    </tr>
    @endforeach
</table>

{!! $roles->render() !!}

@endsection