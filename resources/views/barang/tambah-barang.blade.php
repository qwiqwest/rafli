@extends('layouts.menu')

@section('title')
    CashFlow | Tambah-Barang
@endsection

@section('main')

@section('page')
    Tambah Barang
@endsection
        <div class="single-pro-review-area mt-t-30 mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-payment-inner-st">
                            <ul id="myTabedu1" class="tab-review-design">
                                <li class="active"><a href="#reviews">Tambah Barang</a></li>
                            </ul>
                            <form method="post" action="/barang/tambah-barang/store">
                            @csrf
                                <div id="myTabContent" class="tab-content custom-product-edit">
                                    <div class="product-tab-list tab-pane fade active in" id="reviews">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="review-content-section">
                                                    <div class="row">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                            <div class="devit-card-custom">
                                                                <div class="form-group">
                                                                    <input type="text" class="form-control" placeholder="Nama Barang" id="nama_barang" name="nama_barang">
                                                                </div>
                                                                <div class="form-group">
                                                                    <input type="number" class="form-control" placeholder="Stock" id="stock" name="stock">
                                                                </div>
                                                                <div class="form-group">
                                                                    <input type="number" class="form-control" placeholder="Harga" id="harga" name="harga">
                                                                </div>
                                                                <button type="submit" class="btn btn-primary">Submit</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <form method="post" action="/dashboard/users">
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection