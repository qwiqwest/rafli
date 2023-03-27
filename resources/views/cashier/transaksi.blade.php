@extends('cashier.cashier')

@section('main')

    <div class="contiainer-fluid">
        <div class="col-lg-12">
            <div class="row">
                <div class="col-md-9">
                    <div class="card">
                        <div class="card-header">
                            <h4 style="float: left">Transaksi</h4>
                            <a href="#" style="float: right" class="btn btn-dark" data-toggle="modal" data-target='#addproduct'></a>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered table-left">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>Nama Barang</th>
                                        <th>Harga</th>
                                        <th>Qty</th>
                                        <th>Barcode</th>
                                        <th>Total</th>
                                        <th><a href="#" class="btn btn-sm btn-success add_more"><i class="fa fa-plus-circle"></i></a></th>
                                    </tr>
                                </thead>
                                <tbody class="addMoreProduct">
                                    <tr>
                                        <td>1</td>
                                        <td>
                                            <select name="id[]" id="id" class="form-control id">
                                                <option value="">Pilih Barang</option>
                                                    @foreach ($data as $barang)
                                                        <option data-price="{{ $barang->harga }}" 
                                                            value="{{ $barang->id }}">
                                                            {{ $barang->nama_barang }}
                                                    @endforeach
                                            </select>
                                        </td>
                                        <td>
                                            <input type="number" name="harga[]" id="harga" 
                                            class="form-control harga">
                                        </td>
                                        <td>
                                            <input type="number" name="qty[]" id="qty" 
                                            class="form-control qty">
                                        </td>
                                        <td>
                                            <input type="number" name="barcode[]" id="barcode" 
                                            class="form-control barcode">
                                        </td>
                                        <td>
                                            <input type="number" name="total_amount[]" id="total_amount" 
                                            class="form-control total_amount">
                                        </td>
                                        <td><a href="#" class="btn btn-sm btn-danger"><i class="fa fa-times"></i></a></td>

                                    </tr>
                                </tbody>
                            </table>
                        </div> 
                        </div> 
                        </div> 
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Total <b class="total"> 0.00 </b></h4>
                                </div>
                                <div class="card-body">
                                    ..............
                                </div>
                            </div>
                        </div>
                        </div>
                        </div>
                        </div>


@endsection
@section('customscript')

<script>
    // $(document).ready(function(){
    //     alert(1);
    // })

    //add more product
    $('.add_more').on('click', function(){
        var product = $('.id').html(); 
        var numberofrow = ($('.addMoreProduct tr').length - 0) + 1;
        var tr = '<tr><td class"no"">' + numberofrow + '</td>' +
                 '<td><select class="form-control id" name="id[]"> ' + product + 
                 ' </select></td>' + 
                 '<td> <input type="number" name="harga[]" class="form-control harga"></td>'+ 
                 '<td> <input type="number" name="qty[]" class="form-control qty"></td>'+ 
                 '<td> <input type="number" name="barcode[]" class="form-control barcode"></td>'+ 
                 '<td> <input type="number" name="total_amount[]" class="form-control total_amount"></td>'+ 
                 '<td> <a class="btn btn-danger btn-sm delete rounded-circle"><i class="fa fa-times-circle"></i></td>';
                 $('.addMoreProduct').append(tr);
    });

    //delete total product
    $('.addMoreProduct').delegate('.delete', 'click', function(){
        $(this).parent().parent().remove();
    })

    function TotalAmount(){
        var total = 0;
        $('.total_amount').each(function(i,e){
            var amount = $(this).val()  - 0;
            total += amount;
        });

        $('.total').html(total);
    }


    $('.addMoreProduct').delegate('.id', 'change', function(){
        var tr = $(this).parent().parent();
        var harga = tr.find('.id option:selected').attr('data-price');
        tr.find('.harga').val(harga);
        var qty = tr.find('.qty').val() - 0;
        var barcode = tr.find('.barcode').val() - 0;
        var harga = tr.find('.harga').val() - 0;
        var total_amount = (qty * harga);
        tr.find('.total_amount').val(total_amount);
        TotalAmount();
    })

    $('.addMoreProduct').delegate('.qty', 'keyup', function(){
        var tr = $(this).parent().parent();
        var qty = tr.find('.qty').val() - 0;
        var barcode = tr.find('.barcode').val() - 0;
        var harga = tr.find('.harga').val() - 0;
        var total_amount = (qty * harga);
        tr.find('.total_amount').val(total_amount);
        TotalAmount();
    })
</script>
@endsection