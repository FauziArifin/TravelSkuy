@extends('layout/main')


@section('title', 'Home')

@section('style_navbar')
<link href="{{asset('style/css/styles_others.css')}}" rel="stylesheet">
@endsection

@section('container')
<br>
<br>
<br>
    <div class='container'>
        <br>
        <h4 class='judul'>Profile</h4>
        <div class='container' style="width: 60%;">

            <form action='' , method="POST">
                <div class="form-group row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nama" name="nama" value="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="phone" class="col-sm-2 col-form-label">Nomor Handphone</label>
                        <div class="col-sm-10">
                            <input type="tel" class="form-control" name="phone" id="phone" value="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="password" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="password" name="password">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="password2" class="col-sm-2 col-form-label">Confirm Password</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="password2" name="password2">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block" name='edit'>Save changes</button>
                    <button type="reset" class="btn btn-danger btn-block">Cancel</button>
                </form>
            </div>
        </div>

@endsection
