@extends('layouts.admin')

@section('subtitle', 'Welcome')
@section('content_header_title', 'Home')
@section('content_header_subtitle', 'Welcome')

@section('content_body')
    <p>Welcome to AdminLTE + React!</p>

    <div id="react-app"></div>
@stop

@push('js')
    @vite(['resources/css/app.css', 'resources/js/app.jsx'])

    <script>
        console.log("AdminLTE + React loaded");
    </script>
@endpush
@push('css')
    <style>
        /* Custom styles for home page */
    </style>
@endpush
