@extends('adminlte::page')

@section('title', 'Painel geral')

@section('content_header')
    <h1>Gerenciamento de POPs</h1>
@stop

@section('content')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('pops.index') }}"> Voltar</a>
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
<form action=" {{ route('pops.store') }} " class="form form-control col-md-12 p-0" method="post" enctype="multipart/form-data">
    @csrf
    @section('plugins.BsCustomFileInput', true)
    <label for="formTipo" class="form-label p-1">Tipo:</label>
        <select class="form-select" aria-label="Selecione tipo" name="tipo" id="tipo">
            <option selected value="">Selecione o tipo de POP</option>
            <option value="Aeroaquatico">Aeroaquático</option>
            <option value="Aeroterrestre">Aeroterrestre</option>
            <option value="Ambiental">Ambiental</option>
        </select>
        <br>
        <br>

    <div class="form-group">
        {{--  INSERIR título do POP  --}}
        <label for="formTitulo" class="form-label">Título:</label>
        <input class="form-control" type="text" placeholder="Digite título do POP" aria-label="inserir título do pop" name="titulo" id="titulo">
        <br>
    </div>

    <div class="form-group">
        {{--  INSERIR/SELECIONAR arquivo para uoload  --}}
        <label for="formFile" class="form-label">Selecionar arquivo PDF:</label>
        <input class="form-control p-1" type="file" name="cover" id="cover" accept="application/pdf">
    </div>
    
        
    <button type= "submit" class="btn btn-primary">Enviar</button>
</form>

   
@endsection
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> </script>
@stop


