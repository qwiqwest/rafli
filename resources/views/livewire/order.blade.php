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
                                            class="form-control qty" min="0">
                                        </td>
                                        <td>
                                            <input type="number" name="barcode[]" id="barcode" data-price="{{ $barang->harga }}" data-barcode="{{ $barang->barcode }}" data-nama="{{ $barang->nama_barang }}"
                                            class="form-control barcode" >
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
                                    <div class="btn-group">
                                        <button type="button" 
                                        onclick="PrintReceiptContent('print')" 
                                        class="btn-btn-dark"><i class="fa fa-print">Print</i></button>
                                        <button type="button" 
                                        onclick="PrintReceiptContent('print')" 
                                        class="btn-btn-dark"><i class="fa fa-history">History</i></button>
                                        <button type="button" 
                                        onclick="PrintReceiptContent('print')" 
                                        class="btn-btn-dark"><i class="fa fa-send">Report</i></button>
                                    </div>
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