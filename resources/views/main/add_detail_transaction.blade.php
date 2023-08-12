<h3 class="page-title"><br>Add Detail Transaction</h3>
<h4 class="page-title">API ini digunakan untuk memnambahkan detail transaksi kedalam database. Endpoint <code>https://api.burga.web.id/api/detail-transaction/store</code>. Method yang digunakan adalah <code>POST</code></h4>
<div class="row">
    <div class="col-md-7">
        <!-- TABLE HOVER -->
        <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title">Request</h3>
            </div>
            <div class="panel-body">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Parameter</th>
                            <th>Type</th>
                            <th>Position</th>
                            <th>#</th>
                            <th>Description</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Authorization</td>
                            <td><code>string</code></td>
                            <td><code>Header</code></td>
                            <td><code>Required</code></td>
                            <td>Token bisa didapatkan dari halaman <a href="home"><code>home</code></a></td>
                        </tr>
                        <tr>
                            <td>id_transaction</td>
                            <td><code>foreign key from transaction</code></td>
                            <td><code>Body</code></td>
                            <td><code>required</code></td>
                            <td>Didapatkan dari transaksi yang sudah diinputkan terlebih dahulu, namun untuk tes boleh untuk tidak diisi atau boleh null</td>
                        </tr>
                        <tr>
                            <td>id_product</td>
                            <td><code>foreign key from product</code></td>
                            <td><code>Body</code></td>
                            <td><code>required</code></td>
                            <td>Didapatkan dari product yang ingin di beli, namun untuk tes boleh untuk tidak diisi atau boleh null</td>
                        </tr>
                        <tr>
                            <td>quantity</td>
                            <td><code>integer</code></td>
                            <td><code>Body</code></td>
                            <td><code>required</code></td>
                            <td>Jumlah dari setiap barangnya</td>
                        </tr>
                        <tr>
                            <td>unit_price</td>
                            <td><code>integer</code></td>
                            <td><code>Body</code></td>
                            <td><code>required</code></td>
                            <td>Harga setiap product</td>
                        </tr>
                        <tr>
                            <td>subtotal</td>
                            <td><code>integer</code></td>
                            <td><code>Body</code></td>
                            <td><code>required</code></td>
                            <td>Subtotal dari hasil penjumlahan antara <code>quantity</code> dan <code>unit_price</code></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- END TABLE HOVER -->
    </div>
    <div class="col-md-5">
        <!-- TABLE HOVER -->
        <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title">Response</h3>
            </div>
            <div class="panel-body">
<pre>{
    "status": true,
    "message": "Transaction successfully added"
}</pre>
            </div>
        </div>
        <!-- END TABLE HOVER -->
    </div>
</div>