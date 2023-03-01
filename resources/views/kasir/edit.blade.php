@extends('layouts.menu')

@section('title')
    CashFlow | Edit Kasir
@endsection

@section('main')

@section('page')
    Edit Kasir
@endsection
<div class="single-pro-review-area mt-t-30 mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="product-payment-inner-st">
                    <ul id="myTabedu1" class="tab-review-design">
                        <li class="active"><a href="#reviews">Tambah Kasir</a></li>
                    </ul>
                    <form method="post" action="/kasir/edit/{{ $kasir->id }}/store">
                    @csrf
                    @method('put')
                        <div id="myTabContent" class="tab-content custom-product-edit">
                            <div class="product-tab-list tab-pane fade active in" id="reviews">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="review-content-section">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <div class="devit-card-custom">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" placeholder="Username" id="username" name="username" value="{{ $kasir->username }}">
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" placeholder="Nama Lengkap" id="name_lengkap" name="name_lengkap" value="{{ $kasir->name_lengkap }}">
                                                        </div>
                                                        <div class="form-group">
                                                            <select class="form-control" name="jk" required>
                                                                <option">-- Jenis Kelamin --</option>
                                                                <option value="L">L</option>
                                                                <option value="P">P</option>
                                                            </select>
                                                        </div>      
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" placeholder="Alamat" id="alamat" name="alamat" value="{{ $kasir->alamat }}">
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="number" class="form-control" placeholder="Nomor Telepon" id="nomor_telepon" name="nomor_telepon" value="{{ $kasir->nomor_telepon }}">
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="email" class="form-control" placeholder="Email" id="email" name="email" value="{{ $kasir->email }}">
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" placeholder="Password" id="password" name="password" value="{{ $kasir->password }}">   
                                                        </div> 
                                                        <button id="submitForm" class="btn btn-primary">Save Edit</button>
                                                        <a href="/kasir" class="btn btn-danger">Cancel</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection