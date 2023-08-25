<h3 class="page-title"><br>List Product</h3>
<h4 class="page-title">API list product adalah sebuah api yang digunakan untuk menampilkan semua list-list product yang ada di kasir sesuai dengan tokonya. Endpoint <code>https://api.burga.web.id/api/product/show/{id}</code>. Method yang digunakan adalah <code>GET</code></h4>
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
                            <td>{id}</td>
                            <td><code>-</code></td>
                            <td><code>url</code></td>
                            <td><code>Required</code></td>
                            <td>Dimasukkan kedalam url untuk menampilkan data data dari setiap storenya</td>
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
    "message": "data berhasil ditemukan",
    "list_product": [
        {
            "id": 18,
            "id_store": 1,
            "code_barcode": "1203938132",
            "name_product": "Sabun Giv",
            "price_product": 2500,
            "desc_product": "Sabun yang dapat mencerahkan kulit",
            "stok": 15,
            "image": "images/i0Kad6dptBxqK4Dsri3evHWcn97BPlivOUauTxBJ.jpg",
            "created_at": "2023-07-25 20:59:04",
            "update_at": "2023-08-25 06:50:00"
        }
    ]
}</pre>
            </div>
        </div>
        <!-- END TABLE HOVER -->
    </div>
</div>