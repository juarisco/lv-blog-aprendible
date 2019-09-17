@extends('layout')

@section('content')
<section class="pages container">
    <div class="page page-about">
        <h1 class="text-capitalize">Página no encontrada</h1>
        <p>Regresar a <a href="{{ route('pages.home') }}">@lang('Home')</a></p>
    </div>
</section>
@endsection