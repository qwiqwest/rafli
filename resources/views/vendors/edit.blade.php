@extends('layouts.menu')

@section('title')
    CashFlow | Edit Vendor
@endsection

@section('main')

@section('page')
    Edit Vendor
@endsection
<div class="single-pro-review-area mt-t-30 mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="product-payment-inner-st">
                    <ul id="myTabedu1" class="tab-review-design">
                        <li class="active"><a href="#reviews">Edit Vendor</a></li>
                    </ul>
                    <form method="post" action="/vendors/edit/{{ $vendors->id }}/store">
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
                                                            <input type="text" class="form-control" placeholder="Name" id="name" name="name" value="{{ $vendors->name }}">
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" placeholder="Phone" id="phone" name="phone" value="{{ $vendors->phone }}">
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" placeholder="Email" id="email" name="email" value="{{ $vendors->email }}">
                                                        </div>   
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" placeholder="Address" id="address" name="address" value="{{ $vendors->address }}">
                                                        </div>
                                                        <button id="submitForm" class="btn btn-primary">Save Edit</button>
                                                        <a href="/vendors" class="btn btn-danger">Cancel</a>
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