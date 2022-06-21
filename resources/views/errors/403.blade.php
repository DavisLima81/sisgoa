@extends('adminlte::page')

@section('title', 'Painel geral')

@section('content_header')
    <h1>Erro</h1>
@stop

@section('content')
@section('content')
<div class="card-primary col-6">
    <div class="card-header">
      <h3 class="card-title">Conteúdo inacessível</h3>
      <div class="card-tools">
        
        <span class="badge badge-primary"></span>
      </div>
      <!-- /.card-tools -->
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <p>Aparemente não há permissão para acessar este recurso com as credenciais em uso.</p>
    </div>
    <div class="card-footer">
        <a class="btn btn-primary" href="{{ route('home') }}"> Voltar</a>
    </div>
    <!-- /.card-footer -->
</div>
  <!-- /.card -->
  

@endsection
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> </script>
@stop







{{--  @extends('errors::minimal')

@section('title', __('Forbidden'))
@section('code', '403')
@section('message', __($exception->getMessage() ?: 'Forbidden'))
  --}}