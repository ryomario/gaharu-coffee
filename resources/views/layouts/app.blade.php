@extends('adminlte::page')

@push('css')
    @include('includes.main-css')
@endpush

@push('js')
    @include('includes.main-js')
@endpush


@section('content_header')
    @stack('breadcrumb')
    @yield('breadcrumb')
@endsection