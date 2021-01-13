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
                    <h2>Choose Your Travel Packages</h2>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-12">

                    <!-- Card -->
                    <div class="card">
                        <div class="card-image">
                            <img class="img-fluid" src="{{ asset('style/images/bandung.jpg') }}" alt="alternative">
                        </div>
                        <div class="card-body">
                            <h3 class="card-title">Bandung</h3>
                            <p>List of trips to the city of Bandung.</p>

                            <p class="price">Trip to Bandung <br><span>Check the list</span></p>
                        </div>
                        <div class="button-container">
                            <a class="btn-solid-reg popup-with-move-anim" href="#bandung">DETAILS</a>
                        </div> <!-- end of button-container -->
                    </div>
                    <!-- end of card -->

                    <!-- Card -->
                    <div class="card">
                        <div class="card-image">
                            <img class="img-fluid" src="{{ asset('style/images/bali.jpg') }}" alt="alternative">
                        </div>
                        <div class="card-body">
                            <h3 class="card-title">Bali</h3>
                            <p>List of trips to the city of Bali.</p>
                            <p class="price">Trip to Bali <br><span>Check the list</span></p>
                        </div>
                        <div class="button-container">
                            <a class="btn-solid-reg popup-with-move-anim" href="#bali">DETAILS</a>
                        </div> <!-- end of button-container -->
                    </div>
                    <!-- end of card -->

                    <!-- Card -->
                    <div class="card">
                        <div class="card-image">
                            <img class="img-fluid" src="{{ asset('style/images/kebumen.jpg') }}" alt="alternative">
                        </div>
                        <div class="card-body">
                            <h3 class="card-title">Kebumen</h3>
                            <p>List of trips to the city of Kebumen.</p>
                            <p class="price">Trip to Kebumen <br><span>Check the list</span></p>
                        </div>
                        <div class="button-container">
                            <a class="btn-solid-reg popup-with-move-anim" href="#kebumen">DETAILS</a>
                        </div> <!-- end of button-container -->
                    </div>
                    <!-- end of card -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of cards-2 -->
    <!-- end of services -->

@endsection
