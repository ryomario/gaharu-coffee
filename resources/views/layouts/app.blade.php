@extends('adminlte::page')

@push('css')
    @include('includes.main-css')
@endpush

@push('js')
    @include('includes.main-js')
@endpush


@section('content_header')
    <div class="col-sm-6">
        <h1 class="m-0">@yield('title')</h1>
    </div>
    <div class=" col-sm-6">
        @stack('breadcrumb')
        @yield('breadcrumb')
    </div>
@endsection

@section('footer')
    <div class="float-right d-none d-sm-block">
        <b>Version</b> 3.1.0
    </div>
    <strong>Copyright &copy; 2014-2023 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights
    reserved.
@stop