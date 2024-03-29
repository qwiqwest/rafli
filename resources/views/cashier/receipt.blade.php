<div id="invoice-POS">

        <!-- {{-- Print Section --}} -->

<div id="printed_content">

    <center id="logo">
        <div class="logo">BarberShop</div>
        <div class="info"></div>
            <h2>CashFlow_</h2>
    </center>
</div>

<div class="mid">
    <div class="info">
        <h2>Contact Us</h2>
        <p>
            Address :   Gg.Tegallega No.31
            Email   :   ming@gmail.com
            Phone   :   085721077423
        </p>
    </div>
</div>

<!-- End of Recipt Mid -->

<div class="bot">
    <div id="table">
        <table>
            <tr class="tabletitle">
                <td class="item"><h2>Item</h2></td>
                <td class="Hours"><h2>QTY</h2></td>
                <td class="Rate"><h2>Unit</h2></td>
                <td class="Rate"><h2>Sub Total</h2></td>
            </tr>

            @foreach ($order_receipt as $receipt)
            <tr class="service">
                <td class="tableitem"><p class="itemtext"> {{ $receipt->nama_barang }}</p></td>
                <td class="tableitem"><p class="itemtext"> {{ $receipt->stock }}</p></td>
                <td class="tableitem"><p class="itemtext"> {{ $receipt->barcode }}</p></td>
                <td class="tableitem"><p class="itemtext"> {{ $receipt->harga }}</p></td>
            </tr>
            @endforeach

            <tr class="tabletitle">
                <td></td>
                <td></td>
                <td class="Rate"><p class="itemtext"> Pajak</p></td>
                <td class="Payment"><p class="itemtext"> Rp.360.000</p></td>
            </tr>

            <tr class="tabletitle">
                <td></td>
                <td></td>
                <td class="Rate"> Total</td>
                <td class="Payment"> <h2>Rp.360.000</h2> </td>
            </tr>

        </table>

        <div class="legalcopy">
            <p class="legal">
                <strong> ** Terimakasih telah membeli ** </strong><br>
                Harga pembayaran dari pembelian sudah termasuk pajak 
            </p>
        </div>

        <div class="serial-number">
            Serial : <span class="serial">
                1234567891011
            </span>
            <span>
                30/3/2023 &nbsp; &nbsp; 09:25
            </span>
        </div>

    </div>
</div>

</div>

<style>

    #invoice-POS{
        box-shadow: 0 0 1in -0.25in rgb(0, 0, 0.5);
        padding: 2mm;
        margin: 0 auto;
        width: 58mm;
        background: #fff;
    }

    #invoice-POS::selection{
        background: blue;
        color: white;
    }

    #invoice-POS::-moz-selection{
        background: blue;
        color: white;
    }

    #invoice-POS h1{
        font-size: 1.5em;
        color: #222;
    }

    #invoice-POS h2{
        font-size: 0.5em;
    }

    #invoice-POS h3{
        font-size: 1.2em;
        font-weight: 300;
        line-height: 2em;
    }

    #invoice-POS p{
        font-size: 0.7em;
        line-height: 1.2em;
        color: #666;
    }

    #invoice-POS #top, #invoice-POS #mid, #invoice-POS #bot{
        border-bottom: 1px solid #eee;
    }

    #invoice-POS #top{
        min-height: 100px;
    }

    #invoice-POS #mid{
        min-height: 80px;
    }

    #invoice-POS #bot{
        min-height: 50px;
    }

    #invoice-POS #top .logo{
        height: 60px;
        width: 60px;
        background-image: url() no-repeat;
        background-size: 60px 60px;
        border-radius: 50px;
    }

    #invoice-POS  .info{
        display: block;
        margin-left: 0;
        text-align: center;
    }

    #invoice-POS  .title{
        float: right;
    }

    #invoice-POS  .title p{
        text-align: right;
    }

    #invoice-POS table{
        width: 100%;
        border-collapse: collapse;
    }

    #invoice-POS .tabletitle{
        font-size: 0,5em;
        background: #eee;
    }

    #invoice-POS .service{
        border-bottom: 1px solid #eee;
    }

    #invoice-POS .item{
        width: 24mm;
    }

    #invoice-POS .itemtext{
        font-size: 0.5em;
    }

    #invoice-POS #legalcopy{
        margin-top: 5mm;
        text-align: center;
    }

    .serial-number{
        margin-top: 5mm;
        margin-bottom: 2mm;
        text-align: center;
        font-size: 12px;
    }

    .serial{
        font-size: 10px !important;
    }

</style>