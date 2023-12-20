<h3 class="page-title"><br>Add Product</h3>
<h4 class="page-title">API Add ini digunakan untuk menambah list produck kedalam database. Endpoint
    <code>https://api.burga.web.id/api/product/store</code>. Method yang digunakan adalah <code>POST</code></h4>
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
                            <td>code_barcode</td>
                            <td><code>string</code></td>
                            <td><code>Body</code></td>
                            <td><code>Required</code></td>
                            <td>Didapatakan dari scan barcode di setiap product</td>
                        </tr>
                        <tr>
                            <td>name_product</td>
                            <td><code>string</code></td>
                            <td><code>Body</code></td>
                            <td><code>Required</code></td>
                            <td>name_product bisa berisi text dan number</td>
                        </tr>
                        <tr>
                            <td>price_product</td>
                            <td><code>integer</code></td>
                            <td><code>Body</code></td>
                            <td><code>Required</code></td>
                            <td>Harus berisi angka saja</td>
                        </tr>
                        <tr>
                            <td>desc_product</td>
                            <td><code>string</code></td>
                            <td><code>Body</code></td>
                            <td><code>Required</code></td>
                            <td>Dapat berupa angka dan text</td>
                        </tr>
                        <tr>
                            <td>stok</td>
                            <td><code>integer</code></td>
                            <td><code>Body</code></td>
                            <td><code>Required</code></td>
                            <td>Diisi dengan menggunakan angka</td>
                        </tr>
                        <tr>
                            <td>image</td>
                            <td><code>string</code></td>
                            <td><code>Body</code></td>
                            <td><code>Required</code></td>
                            <td>hanya akan mendapatkan path, dan untuk mengakses gambar pada link berikut
                                <code>https://api.burga.web.id/storage/PATH DARI DATABASE</code></td>
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
    "message": "Product created successfully"
}</pre>
            </div>
        </div>
        <!-- END TABLE HOVER -->
    </div>
</div>
