@extends('layouts.menu')

@section('title')
    CashFlow | Barang
@endsection

@section('main')

@section('page')
    Barang
@endsection

@section('customcss')
    <!-- x-editor CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('assets/css/editor/select2.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/editor/datetimepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/editor/bootstrap-editable.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/editor/x-editor-style.css') }}">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('assets/css/data-table/bootstrap-table.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/data-table/bootstrap-editable.css') }}">
@endsection

        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="logo-pro">
                        <a href="index.html"><img class="main-logo" src="img/logo/logo.png" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Static Table Start -->
        <div class="data-table-area mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sparkline13-list">
                            <div class="sparkline13-hd">
                                <div class="main-sparkline13-hd">
                                    <h1>Projects <span class="table-project-n">Data</span> Table</h1>
                                </div>
                            </div>
                            <div class="sparkline13-graph">
                                <div class="datatable-dashv1-list custom-datatable-overright">
                                <div class="add-product">
                                    <a href="/barang/tambah-barang">Add Barang</a>
                                </div>
                                    <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
                                        data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                        <thead>
                                            <tr>
                                                <th data-field="state" data-checkbox="true"></th>
                                                <th data-field="id">ID</th>
                                                <th data-field="name" >Nama Barang</th>
                                                <th data-field="email" >Status</th>
                                                <th data-field="phone" >Harga</th>
                                                <th data-field="task" >Stock</th>
                                                <th data-field="date" >Barcode</th>
                                                <th data-field="price" >Vendor</th>
                                                <th data-field="action" >Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($data as $barang)
                                            <tr>
                                                <td></td>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $barang->nama_barang }}</td>
                                                <td>Tersedia</td>
                                                <td>Rp.{{ $barang->harga }}</td>
                                                <td>{{ $barang->stock }}</td>
                                                <td>{{ $barang->barcode }}</td>
                                                <td>{{ $barang->vendor_id }}</td>
                                                <td>
                                                    <button data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                                    <form action="/barang/delete/{{ $barang->id }}" method="post" class="d-inline">
                                                        @method('delete')
                                                        @csrf
                                                        <button data-toggle="tooltip" title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                                    </form>    
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    @section('customscript')
    <!-- data table JS
		============================================ -->
    <script src="{{ asset('assets/js/data-table/bootstrap-table.js') }}"></script>
    <script src="{{ asset('assets/js/data-table/tableExport.js') }}"></script>
    <script src="{{ asset('assets/js/data-table/data-table-active.js') }}"></script>
    <script src="{{ asset('assets/js/data-table/bootstrap-table-editable.js') }}"></script>
    <script src="{{ asset('assets/js/data-table/bootstrap-editable.js') }}"></script>
    <script src="{{ asset('assets/js/data-table/bootstrap-table-resizable.js') }}"></script>
    <script src="{{ asset('assets/js/data-table/colResizable-1.5.source.js') }}"></script>
    <script src="{{ asset('assets/js/data-table/bootstrap-table-export.js') }}"></script>
    <!--  editable JS
		============================================ -->
    <script src="{{ asset('assets/js/editable/jquery.mockjax.js') }}"></script>
    <script src="{{ asset('assets/js/editable/mock-active.js') }}"></script>
    <script src="{{ asset('assets/js/editable/select2.js') }}"></script>
    <script src="{{ asset('assets/js/editable/moment.min.js') }}"></script>
    <script src="{{ asset('assets/js/editable/bootstrap-datetimepicker.js') }}"></script>
    <script src="{{ asset('assets/js/editable/bootstrap-editable.js') }}"></script>
    <script src="{{ asset('assets/js/editable/xediable-active.js') }}"></script>
    <!-- Chart JS
		============================================ -->
    <script src="{{ asset('assets/js/chart/jquery.peity.min.js') }}"></script>
    <script src="{{ asset('assets/js/peity/peity-active.js') }}"></script>
    <!-- tab JS
		============================================ -->
    <script src="{{ asset('assets/js/tab.js') }}"></script>
    @endsection
    @endsection