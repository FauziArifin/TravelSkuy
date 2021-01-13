@extends('layout/main')


@section('title', 'Home')

@section('style_navbar')
<link href="{{asset('style/css/styles_others.css')}}" rel="stylesheet">
@endsection

@section('container')
<br>
<br>
<br>
<body>
    <div class="card-body text-center padding-top:60px;">

        <p>
            <h1> Own Customized Trip Plan </h1>
        </p>
        <p>Create your travel itinerary. Book your accommodation, tours and flights</p>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">

                        <div class="card-body">
                            <form action="#" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <input type="text" class="form-control" name='place' aria-describedby="emailHelp" placeholder="Where do you want to go?">
                                </div>

                                <div class="row">
                                    <div class="col">
                                        <label>Start date</label>
                                        <input type="date" class="form-control">
                                    </div>
                                    <div class="col">
                                        <label>End date</label>
                                        <input type="date" class="form-control">
                                    </div>
                                </div>
                                <label>How much people can join</label>
                                <div class="row">

                                    <div class="col">

                                        <input type="number" class="form-control" placeholder="Min">
                                    </div>
                                    <div class="col">

                                        <input type="number" class="form-control" placeholder="Max">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Description</label>
                                    <textarea class="form-control" name='description' rows="3"></textarea>
                                </div>

                                <div class="form-group col-6">
                                    <select id="inputState" class="form-control">
                                        <option selected>Choose Your Tour Guide</option>
                                        <option>...</option>
                                    </select>
                                </div>
                                <div class="form-group col-6">
                                    <label>Picture Your Trip</label>
                                    <div class="custom-file">

                                        <input type="file" class="custom-file-input" id="customFile">
                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                    </div>
                                </div>

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