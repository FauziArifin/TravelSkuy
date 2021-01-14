@extends('layout/mainGuider')


@section('title', 'Home Tour Guide')
@section('style_navbar')
    <link href="{{ asset('style/css/styleGuider.css') }}" rel="stylesheet">
@endsection
@section('container')


    <!-- Header -->
    <header id="header" class="header">
        <div class="header-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-container">
                            <h1>DISCOVER NEW <span id="js-rotating">PLACES, FRIENDS, EXPERIENCES</span></h1>
                            <p class="p-heading p-large">Travel with us, find new friends and whole new holiday experiences
                                you've never felt.</p>
                            <a class="btn-solid-lg page-scroll" href="/TravelListGuider">LIST TRIPS</a>
                            <a class="btn btn-primary" href="/createTripGuider">CREATE TRIP</a>
                        </div>
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div> <!-- end of header-content -->
    </header> <!-- end of header -->
    <!-- end of header -->


    <!-- Services -->
    <div id="package" class="cards-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">TRAVEL LIST</div>
                    <h2>List of your trips as Tour Guide</h2>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-12">

                    @foreach ($trips as $trip)
                        <!-- Card -->
                        <div class="card">
                            <div class="card-image">
                                <img class="img-fluid" src="img/{{ $trip->img_path }}" alt="alternative">
                            </div>
                            <div class="card-body">
                                <h3 class="card-title">{{ $trip->nama }}</h3>
                                <p>{{ $trip->description }}</p>
                                <p>Slot Tersisa : <b>{{ $trip->maksimal }} orang</b></p>
                                <p class="price">Sharing Cost<br><span>Rp{{ number_format($trip->price,2)}}</span></p>
                            </div>
                            <div class="button-container">
                                <a class="btn-solid-reg popup-with-move-anim" href="#{{ $trip->nama }}">DETAILS</a>
                            </div> <!-- end of button-container -->
                        </div>
                        <!-- end of card -->
                    @endforeach
                    {{-- <div class='text-center'>
                        <h5>More List</h5>
                        <a class="btn btn-primary" href="/TravelListGuider">SHOW ALL TRIPS</a>
                    </div> --}}

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of cards-2 -->
    <!-- end of services -->

    
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
                    <p>Start Date: {{ $trip->StartDate }}</p>
                    <p>End Date: {{ $trip->EndDate }}</p>
                    <p>Slot Tersisa: {{ $trip->maksimal }} orang</p>
                    <p>Sharing cost: Rp{{ number_format($trip->price,2)}}</p>
                    <a class="btn-outline-reg mfp-close as-button" href="#package">BACK</a>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of lightbox-basic -->
        <!-- end of lightbox -->
        <!-- end of Popup Trips -->
    @endforeach

@endsection
