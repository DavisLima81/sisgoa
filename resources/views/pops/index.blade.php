@extends('adminlte::page')

@section('title', 'Painel geral')

@section('content_header')
    <h1>Gestão de POPs</h1>
    <small>Procedimentos Operacionais Padrão</small>
@stop

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">   
        <div class="pull-right">
            @can('pop-create')
            <a class="btn btn-success btn-sm" href="{{ route('pops.create') }}"> Incluir Novo</a>
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
     <th>Tipo</th>
     <th>Título</th>
     <th>Arquivo</th>
     <th width="280px">Ação</th>
  </tr>
    @foreach ($pops as $key => $pop)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $pop->tipo }}</td>
        <td>{{ $pop->titulo }}</td>
        <td>
            <a href=" {{ route('pops.showfile',$pop->id) }} " target="_blank" class="d-flex justify-content-center p-2">
                <i class="fas fa-lg fa-file-pdf"></i>
            </a>
        </td>
        <td>
            @can('pop-list')
            <a class="btn btn-primary btn-sm" href=" {{ route('pops.show',$pop->id) }} " >Detalhes</a>
            @endcan
            @can('pop-edit')
                <a class="btn btn-primary btn-sm" href="{{ route('pops.edit',$pop->id) }}">Editar</a>
            @endcan
            @can('pop-delete')
                {!! Form::open(['method' => 'DELETE','route' => ['pops.destroy', $pop->id],'style'=>'display:inline']) !!}
                    {!! Form::submit('Apagar', ['class' => 'btn btn-secondary btn-sm']) !!}
                {!! Form::close() !!}
            @endcan
        </td>
    </tr>
    @endforeach
</table>

{!! $pops->render() !!}

@endsection