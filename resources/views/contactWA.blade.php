@extends('layout/mainUmum')


@section('title', 'Contact Guider')

@section('style_navbar')
    <link href="{{ asset('style/css/styles_others.css') }}" rel="stylesheet">
@endsection

@section('container')
    <br>
    <br>
    <br>
    <div class='container text-center'>
        {{-- @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif --}}
        <div class="alert alert-success">
            Selamat berhasil booking
        </div>
        <br>
        <h3 class="mt-4">Contact Tour Guide</h3>
        <h5>{{$contactWA}}</h3>
    </div>

@endsection
