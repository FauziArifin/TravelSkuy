@extends('layouts.app')

@section('content')

<div class="container" align="center">
    <div class="card card0 border-0" style="background-image: url('assets/style/images/about.jpg');">
        <div class="row py-5 mt-4 align-items-center">
            <!-- Login Form -->
            <div class="col-md-7 col-lg-6 ml-auto">

                <div class="card">

                    <h3 class="form-title"><b>{{ __('Register') }}</b></h3>


                    <div class="signup-form">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="nohp" class="col-md-4 col-form-label text-md-right">{{ __('No. Handphone') }}</label>
                                <div class="col-md-6">
                                    <input id="nohp" type="text" class="form-control @error('username') is-invalid @enderror" name="nohp" value="{{ old('nohp') }}" required autocomplete="username">
                                    @error('nohp')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row{{ $errors->has('role')? 'has-error' : null }}">
                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Role') }}</label>

                                <div class="col-md-6">
                                    <select name="role" id="role" class="form-control">
                                        <option value="" hidden selected>--Pilih Role--</option>
                                        <!-- <option value="admin">admin</option> -->
                                        <option value="traveler">Traveler</option>
                                        <option value="tourguide">Tour Guide</option>
                                    </select>

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="signup-images">
                    <img class="card-image" src="{{ asset('style/images/signup-image.jpg') }}" alt="alternative" class="img-fluid mb-3 d-none d-md-block">
                    <h1>Create an Account</h1>
                    <p class="font-italic text-muted mb-0">TravelSkuy merupakan platform yang dapat mempertemukan para traveller di seluruh Indonesia</p>
                </div>
            </div>
            <div class="bg-blue py-4">
                <div class="row px-3"> <small class="ml-4 ml-sm-5 mb-2">Copyright &copy; 2020. All rights reserved.</small>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection