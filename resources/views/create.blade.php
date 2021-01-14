@extends('layout/mainUmum')


@section('title', 'Create Trip')

@section('style_navbar')
    <link href="{{ asset('style/css/styles_others.css') }}" rel="stylesheet">
@endsection

@section('container')
    <br>
    <br>
    <br>

        <div class="card-body text-center padding-top:60px;">

            <p>
            <h1> Own Customized Trip Plan </h1>
            </p>
            <p>Create your travel itinerary.</p>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-body">
                                <form method="POST" action="/TravelList" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <input type="text" class="form-control" name='nama' aria-describedby="emailHelp"
                                            placeholder="Where do you want to go?">
                                    </div>

                                    <div class="row">
                                        <div class="col">
                                            <label for='startDate'>Start date</label>
                                            <input type="date" class="form-control" name='startDate'>
                                        </div>
                                        <div class="col">
                                            <label for="endDate">End date</label>
                                            <input type="date" class="form-control" name='endDate'>
                                        </div>
                                    </div>
                                    <label>How much people can join</label>
                                    <div class="row">
                                        <div class="col">
                                            <input type="number" class="form-control" placeholder="Min" name='minimal'
                                                min="1">
                                        </div>
                                        <div class="col">
                                            <input type="number" class="form-control" placeholder="Max" name='maksimal'
                                                min="1">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="description">Description</label>
                                        <textarea class="form-control" name='description' rows="3"
                                            name='description'></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea1">Sharing Cost</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">Rp. </div>
                                            </div>
                                            <input type="number" class="form-control" name='price'>
                                        </div>

                                    </div>
                                    <div class="form-group col-6">
                                        <label for="TourGuideName">Choose Your Tour Guide</label>
                                        <!-- <input type="time" class="form-control" name='mulai' id="mulai" required> -->
                                        <select class='form-control' name='TourGuideName'>
                                            @foreach ($GuideTours as $GuideTour)
                                                <option value="{{ $GuideTour->name }}">{{ $GuideTour->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group col-6">
                                        {{-- <label>Picture Your Trip</label>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="customFile">
                                            <label class="custom-file-label" for="customFile" name='image'>Choose
                                                file</label>
                                        </div> --}}
                                        
                                        <label for="image">Image file input</label>
                                        <input type="file" class="form-control-file" id="image" name='image' required>
                                           
                                    </div>
                                    <button type="submit" class="btn btn-primary">Start Planning</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
