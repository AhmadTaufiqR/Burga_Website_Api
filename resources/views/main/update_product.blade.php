<h3 class="page-title"><br>Update Product</h3>
<h4 class="page-title">API update product yang sudah ada didatabse, dan update. dan untuk update bisa optional, bisa edit semua, atau bisa salah satu saja seperti stok atau price saja. Pada update ini menggunakan parameter <code>id</code>. Endpoint <code>https://api.burga.web.id/api/product/update/{id}</code>. Method yang digunakan adalah <code>POST</code></h4>
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
                            <td>name_product</td>
                            <td><code>string</code></td>
                            <td><code>Body</code></td>
                            <td><code>Optional</code></td>
                            <td>name_product bisa berisi text dan number</td>
                        </tr>
                        <tr>
                            <td>price_product</td>
                            <td><code>integer</code></td>
                            <td><code>Body</code></td>
                            <td><code>Optional</code></td>
                            <td>Harus berisi angka saja</td>
                        </tr>
                        <tr>
                            <td>desc_product</td>
                            <td><code>string</code></td>
                            <td><code>Body</code></td>
                            <td><code>Optional</code></td>
                            <td>Dapat berupa angka dan text</td>
                        </tr>
                        <tr>
                            <td>stok</td>
                            <td><code>integer</code></td>
                            <td><code>Body</code></td>
                            <td><code>Optional</code></td>
                            <td>Diisi dengan menggunakan angka</td>
                        </tr>
                        <tr>
                            <td>image</td>
                            <td><code>string</code></td>
                            <td><code>Body</code></td>
                            <td><code>Optional</code></td>
                            <td>hanya akan mendapatkan path, dan untuk mengakses/melihat gambar pada link berikut <code>https://api.burga.web.id/storage/PATH DARI DATABASE</code></td>
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
    "message": "Product updated successfully",
    "data_product": {
        "id": 1,
        "code_barcode": "99507",
        "name_product": "Nabati",
        "price_product": 20000,
        "desc_product": "Ini adalah product wafer enak",
        "stok": 6,
        "image": "images/k2zoUxBsQg0JJZobN2skbGYWggFLv6epuxdFTp8x.jpg",
        "deleted_at": null,
        "created_at": "2023-07-16T23:11:15.000000Z",
        "updated_at": "2023-07-22T07:11:51.000000Z"
    }
}</pre>
            </div>
        </div>
        <!-- END TABLE HOVER -->
    </div>
</div>