@extends('adminlte::page')

@section('title', 'Painel geral')

@section('content_header')
    <h1>Gestão de Permissões</h1>
@stop

@section('content')

@section('content')
@extends('adminlte::components.form.input-group-component')

@section('input_group_item')

    {{-- Select --}}
    <select id="{{ $id }}" name="{{ $name }}"
        {{ $attributes->merge(['class' => $makeItemClass()]) }}>
        {{ $slot }}
    </select>

@overwrite

{{-- Support to auto select the old submitted values --}}

@if($errors->any() && $enableOldSupport)
@push('js')
<script>

    $(() => {

        let oldOptions = @json(collect($getOldValue($errorKey)));

        $('#{{ $id }} option').each(function()
        {
            let value = $(this).val() || $(this).text();
            $(this).prop('selected', oldOptions.includes(value));
        });
    });

</script>
@endpush
@endif


@endsection
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> </script>
@stop