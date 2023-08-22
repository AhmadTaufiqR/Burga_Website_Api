<h3 class="page-title"><br>Add Transaction</h3>
<h4 class="page-title">API ini digunakan untuk memnambahkan transaksi kedalam database. Endpoint <code>https://api.burga.web.id/api/transaction/store</code>. Method yang digunakan adalah <code>POST</code></h4>
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
                            <td>id_user</td>
                            <td><code>foreign key from user</code></td>
                            <td><code>Body</code></td>
                            <td><code>required</code></td>
                            <td>Didapatkan dari id user</td>
                        </tr>
                        <tr>
                            <td>id_kasir</td>
                            <td><code>foreign key from user</code></td>
                            <td><code>Body</code></td>
                            <td><code>required</code></td>
                            <td>Didapatkan dari id kasir yang menjaga tok</td>
                        </tr>
                        <tr>
                            <td>id_store</td>
                            <td><code>foreign key from store</code></td>
                            <td><code>Body</code></td>
                            <td><code>required</code></td>
                            <td>Didapatkan dari toko yang terdaftar oleh web admin</td>
                        </tr>
                        <tr>
                            <td>id_transaction</td>
                            <td><code>String</code></td>
                            <td><code>Body</code></td>
                            <td><code>required</code></td>
                            <td>Bisa custom sendiri berdasarkan di mobile</td>
                        </tr>
                        <tr>
                            <td>date</td>
                            <td><code>date</code></td>
                            <td><code>Body</code></td>
                            <td><code>required</code></td>
                            <td>Tanggal dilakukannya transaksi</td>
                        </tr>
                        <tr>
                            <td>quantity</td>
                            <td><code>integer</code></td>
                            <td><code>Body</code></td>
                            <td><code>required</code></td>
                            <td>Jumlah dari barang yang dibeli</td>
                        </tr>
                        <tr>
                            <td>total</td>
                            <td><code>integer</code></td>
                            <td><code>Body</code></td>
                            <td><code>required</code></td>
                            <td>total uang yang harus dibayarkan</td>
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