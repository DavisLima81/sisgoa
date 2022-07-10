@extends('adminlte::page')

@section('title', 'Painel geral')

@section('content_header')
    <h1>Gestão de POPs</h1>
    <small>Procedimentos Operacionais Padrão</small>
@stop

@section('content')

@section('plugins.DatatablesPlugin', true)

@php
$heads = [
    'Nº.',
    'Tipo',
    'Título',
    'PDF',
    ['label' => 'Ações', 'no-export' => true, 'width' => 17],
];

$btnEdit = '<button class="btn btn-xs btn-default text-primary mx-1 shadow" id="modalEdit" title="Edit">
                <i class="fa fa-lg fa-fw fa-pen"></i>
            </button>';
$btnDelete = '<button class="btn btn-xs btn-default text-danger mx-1 shadow" id="btnDelete" title="Delete">
                  <i class="fa fa-lg fa-fw fa-trash"></i>
              </button>';
$btnDetails = '<button class="btn btn-xs btn-default text-teal mx-1 shadow" id="btnDetails" title="Details">
                   <i class="fa fa-lg fa-fw fa-eye"></i>
               </button>';

               
$config = [
    'order' => [[1, 'asc']],
    'columns' => [null, null, null, ['orderable' => false]],
];


@endphp

<div class="row">
    <div class="col-lg-12 margin-tb">   
        <div class="pull-right">
            @can('pop-create')
            
            <x-adminlte-button label="Inlcuir novo" data-toggle="modal" data-target="#modalCreate" class="btn bg-success btn-sm"/>
            @endcan
        </div>
        <br>
    </div>
</div>

{{-- Minimal example / fill data using the component slot --}}
<x-adminlte-datatable id="table1" :heads="$heads" head-theme="light">
    @foreach($pops as $key => $pop)
        <td>{{ ++$i }}</td>
        <td>{{ $pop->tipo }}</td>
        <td>{{ $pop->titulo }}</td>
        <td>
            <a href=" {{ route('pops.showfile',$pop->id) }} " target="_blank" class="d-flex justify-content-center p-2">
                <i class="fas fa-lg fa-file-pdf"></i>
            </a>
        </td>
        <td>
            {{--  BOTÃO -> MODAL FORM EDIT  --}}
            <x-adminlte-button 
                label=""
                onclick="Editar"
                icon="fa fa-lg fa-fw fa-pen" 
                data-toggle="modal" 
                data-target="#modalEdit" 
                class="btn btn-xs btn-default text-primary mx-1 shadow"/>
            {{--  /BOTÃO -> MODAL FORM EDIT  --}}

            {{--  BOTÃO -> MODAL CONFIRMAR EXCLUSÃO  --}}
            <x-adminlte-button 
                label="" 
                icon="fa fa-lg fa-fw fa-trash" 
                data-toggle="modal" 
                data-target="#modalDelete" 
                class="btn btn-xs btn-default text-danger mx-1 shadow"/>
            {{--  BOTÃO -> MODAL CONFIRMAR EXCLUSÃO  --}}

            {{--  BOTÃO -> MODAL EXIBIR DETALHES  --}}
            <x-adminlte-button 
                label="" 
                icon="fa fa-lg fa-fw fa-eye" 
                data-toggle="modal" 
                data-target="#modalDetalhes" 
                class="btn btn-xs btn-default text-primary mx-1 shadow"/>
            {{--  BOTÃO -> MODAL EXIBIR DETALHES  --}}

        </td>
    @endforeach
</x-adminlte-datatable>

{{--  MODAL CREATE  --}}
<x-adminlte-modal id="modalCreate" title="Novo" size="lg" theme="primary"
    icon="fa fa-lg fa-fw fa-pen" v-centered static-backdrop scrollable>
    <div style="height:800px;">
        <br>
            AQUI O CONTEÚDO DO FORM DE CADASTRO DE NOVO REGISTRO
    </div>
    <x-slot name="footerSlot">
        <x-adminlte-button class="mr-auto btn-sm" theme="success" label="Enviar"/>
        <x-adminlte-button theme="danger" class="btn-sm" label="Cancelar" data-dismiss="modal"/>
    </x-slot>
</x-adminlte-modal>

{{--  MODAL EDITAR  --}}
<x-adminlte-modal id="modalEdit" title="Editar" size="lg" theme="primary"
    icon="fa fa-lg fa-fw fa-pen" v-centered static-backdrop scrollable>
    <div style="height:800px;">
        <br>
            AQUI O CONTEÚDO DO FORM DE EDIÇÃO
    </div>
    <x-slot name="footerSlot">
        <x-adminlte-button class="mr-auto btn-sm" theme="success" label="Enviar"/>
        <x-adminlte-button theme="danger" class="btn-sm" label="Cancelar" data-dismiss="modal"/>
    </x-slot>
</x-adminlte-modal>

{{--  MODAL DELETE  --}}
<x-adminlte-modal id="modalDelete" title="Apagar" size="sm" theme="primary"
    icon="fa fa-lg fa-fw fa-trash" v-centered static-backdrop scrollable>
    <div style="height:80px;">
            Tem certeza que deseja apagar o registro?
            <br>
            A ação não poderá ser desfeita!
    </div>
    <x-slot name="footerSlot">
        <x-adminlte-button class="mr-auto btn-sm" theme="danger" label="Apagar"/>
        <x-adminlte-button theme="primary" class="btn-sm" label="Cancelar" data-dismiss="modal"/>
    </x-slot>
</x-adminlte-modal>

{{--  MODAL DETALHES  --}}
<x-adminlte-modal id="modalDetalhes" title="Detalhes" size="md" theme="primary"
    icon="fa fa-lg fa-fw fa-trash" v-centered static-backdrop scrollable>
    <div style="height:100px;">
            Conteúdo do registro aqui.
    </div>
    <x-slot name="footerSlot">
        <x-adminlte-button theme="primary" class="btn-sm" label="Voltar" data-dismiss="modal"/>
    </x-slot>
</x-adminlte-modal>



{{--  ////////////////////////////////////
<br>
<br>



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
  --}}
{!! $pops->render() !!}

@endsection