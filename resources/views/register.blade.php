@extends('layout.master');


@section('content')

<div class="container" align="center">
    <div class="card card0 border-0">
        <div class="row py-5 mt-4 align-items-center">
            <!-- For Demo Purpose -->
            <!-- <div class="col-md-5 pr-lg-5 mb-5 mb-md-0"> -->
            <div class="col-lg-6">
                <div class="card1 pb-5">
                    <img src="https://res.cloudinary.com/mhmd/image/upload/v1569543678/form_d9sh6m.svg" alt="" class="img-fluid mb-3 d-none d-md-block">
                    <h1>Create an Account</h1>
                    <p class="font-italic text-muted mb-0">TravelSkuy merupakan platform yang dapat mempertemukan para traveller di seluruh Indonesia</p>
                </div>
            </div>

            <!-- Login Form -->
            <div class="col-md-7 col-lg-6 ml-auto">
                <form action="" method="POST" class="well well-lg" style="-webkit-box-shadow: 0px 5px 30px #788788;">
                    <div class="card">
                        <div class="card-body">
                            <h3 align="center"><span class="glyphicon glyphicon-home"></span> Register</h3>
                            <div class="form-group" align="left">
                                <label for="nama">Nama</label>
                                <input class="form-control" type="text" name="nama" id="nama" placeholder="Masukkan Nama Lengkap" required>
                            </div>
                            <div class="form-group" align="left">
                                <label for="email">E-mail</label>
                                <input class="form-control" type="email" name="email" id="email" placeholder="Masukkan Alamat E-mail" required>
                            </div>
                            <div class="form-group" align="left">
                                <label for="nohp">No. Handphone</label>
                                <input class="form-control" type="text" name="no_hp" id="no_hp" placeholder="Masukkan Nomor Handphone" required>
                            </div>
                            <div class="form-group" align="left">
                                <label for="password">Kata Sandi</label>
                                <input class="form-control" type="password" name="password" id="password" placeholder="Buat Kata Sandi" required>
                            </div>
                            <div class=form-group align="left">
                                <label for="password2">Konfirmasi Kata Sandi</label>
                                <input class="form-control" type="password" name="password2" id="password2" placeholder="Konfirmasi Kata Sandi" required>
                            </div>
                            <button type="submit" class="btn btn-primary" name="register"> Submit</button>
                            <p>Sudah punya akun? <a href='/login'>Login</a></p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="bg-blue py-4">
            <div class="row px-3"> <small class="ml-4 ml-sm-5 mb-2">Copyright &copy; 2020. All rights reserved.</small>
            </div>
        </div>

    </div>
</div>


@endsection