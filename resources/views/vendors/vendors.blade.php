@extends('layouts.menu')

@section('title')
    CashFlow | Vendors
@endsection

@section('main')

@section('page')
    Vendors
@endsection
<div class="product-status ">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="product-status-wrap" data-search="true">
                    <h4>List Vendors</h4>
                    <div class="add-product">
                        <a href="/vendors/add">Add Vendors</a>
                    </div>
                    <div class="asset-inner">
                        <table data-search="true" id="table" data-pagination="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
                        data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                        <thead>
                        <tr>
                                <th data-field="id">No</th>
                                <th data-field="image" data-editable="true">Nama Vendor</th>
                                <th data-field="name" data-editable="true">Nomor Telepon</th>
                                <th data-field="name" data-editable="true">Email</th>
                                <th data-field="status" data-editable="true">Alamat</th>
                                <th data-field="aksi" data-editable="true">Setting</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($vendors as $vendor)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $vendor->name }}</td>
                                <td>{{ $vendor->phone }}</td>
                                <td>{{ $vendor->email }}</td>
                                <td>{{ $vendor->address }}</td>
                                <td>
                                    <button data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                    <form action="/vendors/delete/{{ $vendor->id }}" method="post" class="d-inline">
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
                    <div class="custom-pagination">
                        <ul class="pagination">
                            <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">Next</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- sweetalert --}}
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@if(Session::has("error"))
<script>
    Swal.fire({
          position: 'top-center',
          icon: 'error',
          title: '{{Session::get('error')}}',
          showConfirmButton: false,
          timer: 1500 
    })
 </script>
@endif
@if(Session::has("success"))
<script>
    Swal.fire({
          position: 'top-center',
          icon: 'success',
          title: '{{Session::get('success')}}',
          showConfirmButton: false,
          timer: 1500 
    })
 </script>
@endif
{{-- sweetalert end --}}

@endsection
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
        <!-- Chart JS
            ============================================ -->
        <script src="{{ asset('assets/js/chart/jquery.peity.min.js') }}"></script>
        <script src="{{ asset('assets/js/peity/peity-active.js') }}"></script>
        <!-- tab JS
            ============================================ -->
        <script src="{{ asset('assets/js/tab.js') }}"></script>
 @endsection