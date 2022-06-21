@extends('adminlte::page')

@section('title', 'Painel geral')

@section('content_header')
    <h1>Painel geral</h1>
@stop

@section('content')
    <div>
        <p class="mb-0">Login realizado!</p>
        <p class="mb-0">Bem vindo ao SisGoa.</p>
        <p class="mb-0 text-bold text-success">Faça VOAR</p>
    </div>
    <br>
    <br>
    {{--  Exemplo de MODAL  --}}
    {{-- Custom --}}
<x-adminlte-modal id="modalCustom" title="Account Policy" size="lg" theme="teal"
icon="fas fa-bell" v-centered static-backdrop scrollable>
<div style="height:800px;">Read the account policies...</div>
<x-slot name="footerSlot">
    <x-adminlte-button class="mr-auto" theme="success" label="Aceitar"/>
    <x-adminlte-button theme="danger" label="Recusar" data-dismiss="modal"/>
</x-slot>
</x-adminlte-modal>
{{-- Example button to open modal --}}
<x-adminlte-button label="Exemplo de Modal" data-toggle="modal" data-target="#modalCustom" class="bg-success"/>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.warn('Hi!'); </script>
@stop