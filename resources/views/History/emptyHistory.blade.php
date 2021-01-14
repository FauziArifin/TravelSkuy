@extends('layout/mainUmum')


@section('title', 'History')

@section('style_navbar')
    <link href="{{ asset('style/css/styles_others.css') }}" rel="stylesheet">
@endsection

@section('container')
    <br>
    <br>
    <br>
    <div class='container text-center'>
        <h5 class="mt-4">There is no transactions..</h5>
        <a class="btn btn-dark mt-2" href="/TravelList" role="button">Booking now</a>
    </div>
@endsection