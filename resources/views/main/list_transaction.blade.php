<h3 class="page-title"><br>List Transaction</h3>
<h4 class="page-title">API List Transaction adalah sebuah api yang digunakan untuk menampilkan semua list-list transaksi yang sudah dilakukan kasir. Endpoint <code>https://api.burga.web.id/api/transaction/list</code>. Method yang digunakan adalah <code>GET</code></h4>
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
    "list_transaction": [
        {
            "id": 2,
            "id_user": null,
            "id_kasir": null,
            "id_store": 1,
            "date": "2023-08-12",
            "quantity": 1,
            "total": 5,
            "deleted_at": null,
            "created_at": "2023-08-12T00:34:49.000000Z",
            "updated_at": "2023-08-12T00:34:49.000000Z"
        }
    ]
}</pre>
            </div>
        </div>
        <!-- END TABLE HOVER -->
    </div>
</div>