@extends('layouts.menu')

@section('title')
    CashFlow | Tambah Vendor
@endsection

@section('main')

@section('page')
    Tambah Vendor
@endsection
        <div class="single-pro-review-area mt-t-30 mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-payment-inner-st">
                            <ul id="myTabedu1" class="tab-review-design">
                                <li class="active"><a href="#reviews">Tambah Vendor</a></li>
                            </ul>
                            <form method="post" action="/vendors/add/store">
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
                                                                    <input type="text" class="form-control" placeholder="Nama Vendor" id="name" name="name">
                                                                </div>
                                                                <div class="form-group">
                                                                    <input type="phone" class="form-control" placeholder="Nomor Telepon" id="phone" name="phone">
                                                                </div>
                                                                <div class="form-group">
                                                                    <input type="email" class="form-control" placeholder="Email" id="email" name="email">
                                                                </div>
                                                                <div class="form-group">
                                                                    <input type="address" class="form-control" placeholder="Alamat" id="address" name="address">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <button type="submit" class="btn btn-primary">Submit</button>
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