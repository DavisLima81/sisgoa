@extends('adminlte::page')

@section('title', 'Painel geral')

@section('content_header')
    <h1>Gestão de Usuários</h1>
@stop

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('users.create') }}">Incluir Novo</a>
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
   <th>Email</th>
   <th>Permissões</th>
   <th width="280px">Ações</th>
 </tr>
 @foreach ($data as $key => $user)
  <tr>
    <td>{{ ++$i }}</td>
    <td>{{ $user->name }}</td>
    <td>{{ $user->email }}</td>
    <td>
      @if(!empty($user->getRoleNames()))
        @foreach($user->getRoleNames() as $v)
           <label class="badge badge-success">{{ $v }}</label>
        @endforeach
      @endif
    </td>
    <td>
        @can('user-list')
        <a class="btn btn-primary" href="{{ route('users.show',$user->id) }}">Visualizar</a>
        @endcan
        @can('user-edit')
        <a class="btn btn-primary" href="{{ route('users.edit',$user->id) }}">Editar</a>
        @endcan
        @can('user-delete')
        {!! Form::open(['method' => 'DELETE','route' => ['users.destroy', $user->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Apagar', ['class' => 'btn btn-secondary']) !!}
        {!! Form::close() !!}
        @endcan
    </td>
  </tr>
 @endforeach
</table>


{!! $data->render() !!}

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> </script>
@stop