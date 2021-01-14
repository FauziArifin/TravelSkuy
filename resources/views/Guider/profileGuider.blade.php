@extends('layout/mainUmumGuider')


@section('title', 'Profile')

@section('style_navbar')
    <link href="{{ asset('style/css/styles_others.css') }}" rel="stylesheet">
@endsection

@section('container')
    <br>
    <br>
    <br>
    <div class='container'>
        <br>
        <h4 class='judul'>Profile</h4>
        @if (session('status'))
            @if (session('status') == 'Profil gagal diupdate')
                <div class="alert alert-danger">
                    {{ session('status') }}
                </div>
            @else
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
        @endif
        <div class='container' style="width: 60%;">

            <form action='/profileGuider/update' method="POST">
                @csrf
                @method('patch')
                <div class="form-group row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="text" readonly class="form-control-plaintext" id="staticEmail"
                            value="{{ Auth::user()->email }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nama" name="name" value="{{ Auth::user()->name }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="phone" class="col-sm-2 col-form-label">Nomor Handphone</label>
                    <div class="col-sm-10">
                        <input type="tel" class="form-control" name="nohp" id="phone" value="{{ Auth::user()->nohp }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="password" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="password2" class="col-sm-2 col-form-label">Confirm Password</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" id="password2" name="password2" required>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary btn-block" name='edit'>Save changes</button>
                <button type="reset" class="btn btn-danger btn-block">Cancel</button>
            </form>
        </div>
    </div>

@endsection
