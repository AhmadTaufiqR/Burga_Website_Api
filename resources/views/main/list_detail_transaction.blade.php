<h3 class="page-title"><br>List Detail Transaction</h3>
<h4 class="page-title">API List Detail Transaction adalah sebuah api yang digunakan untuk menampilkan semua list-list detail dari setiap transaksi yang dilakukan. Endpoint <code>https://api.burga.web.id/api/detail-transaction/list</code>. Method yang digunakan adalah <code>GET</code></h4>
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
    "massage": "Transaksi ditemukan",
    "list_detail_transaction": [
        {
            "id": 1,
            "id_transactions": null,
            "id_product": null,
            "quantity": 2,
            "unit_price": 2000,
            "subtotal": 4000,
            "deleted_at": null,
            "created_at": "2023-08-12T00:57:26.000000Z",
            "updated_at": "2023-08-12T00:57:26.000000Z"
        }
    ]
}</pre>
            </div>
        </div>
        <!-- END TABLE HOVER -->
    </div>
</div>