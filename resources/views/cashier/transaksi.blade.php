@extends('cashier.cashier')

@section('main')

    <div class="contiainer-fluid">
    
    @livewire('order')
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
        var nama_barang = tr.find('.id option:selected').attr('data-nama');
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

    //print section
    function PrintReceiptContent(el){
        var data = '<input type="button" id="printPageButton class="printPageButton" style="display: block; width:100%; border: none; background-color: #008B8B; color: #fff; padding: 14px 28px; font-size: 16px; cursor:pointer; text-align: center" value="Print Receipt" onClick="window.print()">';

            data += document.getElementById(el).innerHTML;
            myReceipt = window.open("","myWin","left=150, top=130, width=400, height=400");
                myReceipt.screnX = 0;
                myReceipt.screnY = 0;
                myReceipt.document.write(data);
                myReceipt.document.title = "Print Receipt";
            myReceipt.focus();
            setTimeout(() => {
                myReceipt.close();  
            }, 8000 
            );

    }
</script>
@endsection