@extends('layout/main')


@section('title', 'Home')


@section('style_navbar')
<style>
    .card {
        max-width: 800px;
        margin: 20px auto;
        display: flex;
        padding: 20px;
    }
</style>
<link href="{{asset('style/css/styles_others.css')}}" rel="stylesheet">
@endsection

@section('container')
<br>
<br>
<br>

<h4 style='text-align: center; color:blue;'>Detail Event!</h4>
    <div class="card">
        <div class="card-header">
            <img src=" " class="card-img-top mx-auto d-block" alt="Logo EAD" style="width:300px;">
        </div>
        <div class="card-body">
            <p class="card-title" style="font-size: 25px;"> Name Place</p>
            <h6 class="card-text"><b>Deskripsi</b></h6>
            <p class="card-text">lorem....</p>
            <div class="row">
                <div class="col">
                    <h6 class="card-text"><b>Informasi Rencana Perjalanan</b></h6>
                    <p class="card-text"><i class="lni lni-calendar"></i>Start Date : </p>
                    <p class="card-text"><i class="lni lni-calendar"></i>End Date : </p>
                    <p class="card-text">Sudah terdaftar : </p>
                    <p class="card-text">Sisa Slot Max : </p>
                    <p class="card-text"><b>Tour Guide&emsp;</b> Nama Tour Guide </p>
                    <h6 class="card-text"><b>Sharing cost Rp. </b></h6>
                </div>

            </div>
            <br>
            <div class='text-center'>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#yesModal" style="width:8rem;">Yes</button>
                <a href="" class="btn btn-danger" style="width:8rem;">Cancel</a>
            </div>
        </div>
    </div>


    <!-- Modal -->


    <div class="modal fade" id="yesModal" tabindex="-1" role="dialog" aria-labelledby="yesModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Keterangan Traveller</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="" method="post" enctype="multipart/form-data">
                        <input type="hidden" name='id' value=">">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <div style='background-color:#d9534f'>
                                    <br>
                                </div>
                                <div>
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input type="text" class="form-control" id="nama" name='nama' placeholder="input nama event" value=" " required>
                                    </div>
                                   
                                </div>
                            </div>
                        </div>                                     
                    </form>
                </div>
            </div>
        </div>
@endsection