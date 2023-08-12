<h3 class="page-title"><br>List Product</h3>
<h4 class="page-title">API list product adalah sebuah api yang digunakan untuk menampilkan semua list-list product yang ada di kasir. Endpoint <code>https://api.burga.web.id/api/product/list</code>. Method yang digunakan adalah <code>GET</code></h4>
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
    "massage": "data ditemukan",
    "list_product": [
    {
        "id": 1,
        "code_barcode": "995070847",
        "name_product": "nabati",
        "price_product": 2000,
        "desc_product": "nabati nikmat dan lezat",
        "stok": 6,
        "image": "image/nabati.jpg",
        "created_at": "2023-07-16 23:11:15",
        "update_at": "2023-07-16 23:13:23"
    }
    ]
}</pre>
            </div>
        </div>
        <!-- END TABLE HOVER -->
    </div>
</div>