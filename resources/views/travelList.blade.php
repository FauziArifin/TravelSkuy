@extends('layout/mainUmum')


@section('title', 'Travel List')

@section('style_navbar')
    <link href="{{ asset('style/css/styles_others.css') }}" rel="stylesheet">
@endsection

@section('container')
    <br>
    <br>
    <br>
    <div class='container'>
        <h4 class="mt-3 text-center">Travel List</h4>
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        <a class="btn btn-dark mt-3" href="/createTrip" role="button">Add Trip</a>
        <div class="mt-5 card-deck">
            @foreach ($trips as $trip)
                <div class='col-md-4 col-sm-6 mb-3'>
                    <div class="card" style="width: 18rem;">
                        <img src="img/{{ $trip->img_path }}" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">{{ $trip->nama }}</h5>
                            <p class="card-text">{{ $trip->description }}</p>
                            <p>Slot Tersisa : <b>{{ $trip->maksimal }} orang</b></p>
                            <p class="card-text">Sharing Cost <b>Rp{{ number_format($trip->price,2)}}</b></p>
                            
                        </div>
                        <div class="card-footer">
                            <a class="btn-solid-reg popup-with-move-anim" href="#{{ $trip->nama }}">DETAILS</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    @foreach ($trips as $trip)
        <!-- Lightbox -->
        <div id="{{ $trip->nama }}" class="lightbox-basic zoom-anim-dialog mfp-hide">
            <div class="row">
                <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
                <div class="col-lg-8">
                    <img class="img-fluid" src="img/{{ $trip->img_path }}" alt="alternative">
                </div> <!-- end of col -->
                <div class="col-lg-4">
                    <h3>Detail trip to {{ $trip->nama }}</h3>
                    <hr class="line-heading">
                    <p>Start Date: {{ date('F j, Y',strtotime($trip->StartDate)) }}</p>
                    <p>End Date: {{ date('F j, Y',strtotime($trip->EndDate)) }}</p>
                    <p>Min traveller: {{ $trip->minimal }} orang</p>
                    <p>Slot Tersisa: {{ $trip->maksimal }} orang</p>
                    <p>Tour Guide Name: {{ $trip->TourGuideName }}</p>
                    <p>Sharing cost: Rp{{ number_format($trip->price,2)}}</p>

                    {{-- FORM --}}
                    <form action="/TravelList/booking/{{ $trip->id }}" method="post">
                        @csrf
                        <input type="hidden" name="trip_id" value='{{ $trip->id }}'>
                        <input type="hidden" name="user_id" value='{{ Auth::user()->id }}'>
                        <input type="hidden" name="TourGuideName" value='{{ $trip->TourGuideName }}'>
                        <input type="hidden" name="maksimal" value='{{ $trip->maksimal }}'>
                        
                        <button type="submit" class="btn-solid-reg">JOIN TRIP</button>
                        <a class="btn-outline-reg mfp-close as-button" href="#package">BACK</a>
                    </form>
                    
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of lightbox-basic -->
        <!-- end of lightbox -->
        <!-- end of Popup Trips -->
    @endforeach
    <br>
    <br>
    <br>
    <br>

@endsection
