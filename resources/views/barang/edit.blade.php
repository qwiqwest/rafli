@extends('layouts.menu')

@section('title')
    CashFlow | Edit Barang
@endsection

@section('main')

@section('page')
    Edit Barang
@endsection
<div class="single-pro-review-area mt-t-30 mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="product-payment-inner-st">
                    <ul id="myTabedu1" class="tab-review-design">
                        <li class="active"><a href="#reviews">Edit Barang</a></li>
                    </ul>
                    <form method="post" action="/barang/edit/{{ $barang->id }}/store">
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
                                                        <input type="text" class="form-control" placeholder="Nama Barang" id="nama_barang" name="nama_barang" value="{{ $barang->nama_barang }}">
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="number" class="form-control" placeholder="Barcode" id="barcode" name="barcode" value="{{ $barang->barcode }}">
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="number" class="form-control" placeholder="Stock" id="stock" name="stock" value="{{ $barang->stock }}">
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="number" class="form-control" placeholder="Harga" id="harga" name="harga" value="{{ $barang->harga }}">
                                                    </div>
                                                    <div class="form-group col-md-3">
                                                        <label for="lFullName">Vendor</label>
                                                        <select class="form-control" name="vendor_id" required>
                                                        <option value="{{ $barang->id }}"></option>
                                                        @foreach ($vendors as $vendor)
                                                        <option value="{{ $vendor->id }}">{{ $vendor->name }}</option>
                                                        @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                            <a href="/barang" class="btn btn-danger">Cancel</a>
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