@extends('cashier.cashier')

@section('main')

    <div class="contiainer-fluid">
        <div class="col-lg-12">
            <div class="row">
                <div class="col-md-8">
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
                                                        <option data-price="{{ $barang->harga }}" data-barcode="{{ $barang->barcode }}"
                                                            value="{{ $barang->id }}">
                                                            {{ $barang->nama_barang }}
                                                    @endforeach
                                            </select>
                                        </td>
                                        <td>
                                            <input type="number" name="harga[]" id="harga" 
                                            class="form-control harga" readonly>
                                        </td>
                                        <td>
                                            <input type="number" name="qty[]" id="qty" 
                                            class="form-control qty" value="> 0">
                                        </td>
                                        <td>
                                            <input type="number" name="barcode[]" id="barcode" 
                                            class="form-control barcode">
                                        </td>
                                        <td>
                                            <input type="number" name="total_amount[]" id="total_amount" 
                                            class="form-control total_amount" readonly>
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
                                    <div class="panel">
                                        <div class="row">
                                            <table class="table table-striped">
                                                <tr>
                                                    <td>
                                                        <label for="">Customer Name</label>
                                                        <input type="text" name="customer_name" id="" class="form-control">
                                                    </td>
                                                </tr>
                                            </table>

                                            <td> Payment Method <br>

                                            <span class="radio-item">
                                                <input type="radio" name="payment_method" id="payment_method"
                                                class="true" value="cash" checked="checked">
                                                <label for="payment_method"> <i class="fa fa-money text-success"></i> Cash</label>
                                            </span>

                                            <span class="radio-item">
                                                <input type="radio" name="payment_method" id="payment_method"
                                                class="true" value="bank transfer">
                                                <label for="payment_method"> <i class="fa fa-bank text-danger"></i> Bank Transfer</label>
                                            </span>

                                            <span class="radio-item">
                                                <input type="radio" name="payment_method" id="payment_method"
                                                class="true" value="credit card">
                                                <label for="payment_method"> <i class="fa fa-credit-card text-info"></i> Credit Card</label>
                                            </span>

                                            </td><br>

                                            <td>
                                                Payment 
                                                <input type="number" name="paid_amount" id="paid_amount" class="form-control">
                                            </td>

                                            <td>
                                                Returning Change 
                                                <input type="number" readonly name="balance" id="balance" class="form-control">
                                            </td>

                                            <td>
                                                <button class="btn-primary btn-lg btn-block mt-5">Save</button>
                                            </td>
                                            <td>
                                                <button class="btn-danger btn-lg btn-block mt-2">Calculator</button>
                                            </td>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                        </div>
                        </div>


<style>
    
    .radio-item input[type="radio"]{
        visibility: hidden;
        width: 20px;
        height: 20px;
        margin: 0 5px 0 5px;
        padding: 0;
        cursor: pointer;
    }

    /* Before */
    .radio-item input[type="radio"]:before{
        position: relative;
        margin: 4px -25px -4px 0;
        display: inline-block;
        border-radius: 6px;
        visibility: visible;
        width: 20px;
        height: 20px;
        border-radius: 10px;
        border: 2px inset rgb(150, 150, 150, 0.75);
        background: radial-gradient(ellipse at top left, rgb(255, 255, 255)0%, rgb(250, 250, 250) 5%, rgb(230, 230, 230) 95%, rgb(225, 225, 225) 100%);
        content: '';
        cursor: pointer;
    }

    /* After */
    .radio-item input[type="radio"]:checked:after{
        position: relative;
        top: 0;
        left: 9px;
        display: inline-block;
        visibility: visible;
        width: 12px;
        height: 12px;
        background: radial-gradient(ellipse at top left, rgb(240, 255, 220)0%, rgb(225, 250, 100) 5%, rgb(75, 75, 0) 95%, rgb(25, 100, 0) 100%);
        content: '';
        cursor: pointer;
    }

    /* After Checked */
    .radio-item input[type="radio"].true:checked:after{
        background: radial-gradient(ellipse at top left, rgb(240, 255, 220)0%, rgb(225, 250, 100) 5%, rgb(75, 75, 0) 95%, rgb(25, 100, 0) 100%);
    }
    .radio-item input[type="radio"].false:checked:after{
        background: radial-gradient(ellipse at top left, rgb(255, 255, 255)0%, rgb(250, 250, 250) 5%, rgb(230, 230, 230) 95%, rgb(225, 225, 225) 100%);
    }

    .radio-item label{
        display: inline-block;
        margin: 0;
        padding: 0;
        line-height: 25px;
        height: 25px;
        cursor: pointer;
    }

</style>

@endsection
@section('customscript')

<script>

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
        var barcode = tr.find('.id option:selected').attr('data-barcode');
        tr.find('.harga').val(harga);
        tr.find('.barcode').val(barcode);
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

    $('#paid_amount').keyup(function(){
        //alert(1)
        var total = $('.total').html();
        var paid_amount = $(this).val();
        var tot = paid_amount - total;
        $('#balance').val(tot).toFixed(2);
    })

    $('.qty').delegated('.qty')
</script>
@endsection