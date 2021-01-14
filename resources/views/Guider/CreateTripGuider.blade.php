@extends('layout/mainUmumGuider')


@section('title', 'Create Trip by Tour Guide')

@section('style_navbar')
    <link href="{{ asset('style/css/styles_others.css') }}" rel="stylesheet">
@endsection

@section('container')
    <br>
    <br>
    <br>

    <body>
        <div class="card-body text-center padding-top:60px;">

            <p>
            <h1>Customized Trip Plan </h1>
            </p>
            <p>Create awesome trip</p>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">

                            <div class="card-body">
                                <form action="/TravelListGuider" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <input type="text" class="form-control" name='nama' aria-describedby="emailHelp"
                                            placeholder="Place to trip">
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
                                        <label for="exampleFormControlTextarea1">Estimate Cost</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">Rp. </div>
                                            </div>
                                            <input type="number" class="form-control" name='price'>
                                        </div>
                                    
                                    {{-- <div class="form-group col-6">
                                        <label for="TourGuideName">Choose Your Tour Guide</label>                                        
                                        <select class='form-control' name='TourGuideName'>
                                            <option value="{{ $GuideTourName }}">{{ $GuideTourName }}</option>
                                        </select>
                                    </div> --}}
                                    <div class="form-group col-6">
                                        <label for="image">Image file input</label>
                                        <input type="file" class="form-control-file" id="image" name='image' required>
                                           
                                        {{-- <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="customFile">
                                            <label class="custom-file-label" for="customFile" name='image'>Choose
                                                file</label>
                                        </div> --}}
                                    </div>
                                    <input type="hidden" name="TourGuideName" value='{{ Auth::user()->name }}'>
                                    <button type="submit" class="btn btn-primary">Start Planning</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
@endsection
