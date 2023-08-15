<h3 class="page-title"><br>List Store</h3>
<h4 class="page-title">API list store adalah sebuah api yang digunakan untuk menampilkan semua list store yang telah diisi oleh admin di website. Endpoint <code>https://api.burga.web.id/api/store/list</code>. Method yang digunakan adalah <code>GET</code></h4>
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
    "message": "data ditemukan",
    "data_store": [
        {
            "id": 1,
            "name_store": "usama",
            "owner_store": "Taufiq",
            "address_store": "Jl. Kh Hasyim",
            "image_store": "1.jpg",
            "balance_store": 0,
            "created_at": "2023-08-15 11:49:00",
            "update_at": "2023-08-15 11:55:15"
        }
    ]
}</pre>
            </div>
        </div>
        <!-- END TABLE HOVER -->
    </div>
</div>