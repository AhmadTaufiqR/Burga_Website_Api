<h3 class="page-title"><br>Login Siswa</h3>
<h4 class="page-title">API login untuk siswa ini digunakan ketika user ingin melakukan login dan masuk kehalaman tampilan siswa dan bisa melakukan pembayaran, dll. Endpoint <code>https://api.burga.web.id/api/login-user</code>. Method <code>POST</code></h4>
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
                            <td>email or name</td>
                            <td><code>string</code></td>
                            <td><code>Body</code></td>
                            <td><code>Required</code></td>
                            <td>Bisa menggunakan email atau atau name <br> Default value<br>email: <code>user@gmail.com</code> <br>name: <code>user</code></td>
                        </tr>
                        <tr>
                            <td>password</td>
                            <td><code>string</code></td>
                            <td><code>Body</code></td>
                            <td><code>Required</code></td>
                            <td>Password sudah dilakukan encryp. <br>password: <code>12345678</code></td>
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
    "message": "success",
    "data_user": {
        "id": 11,
        "name": "user",
        "email": "user@gmail.com",
        "level": "user",
        "created_at": "2023-07-13 03:08:27",
        "update_at": "2023-08-26 13:39:23"
    }
}</pre>
            </div>
        </div>

        
        <!-- END TABLE HOVER -->
    </div>
</div>