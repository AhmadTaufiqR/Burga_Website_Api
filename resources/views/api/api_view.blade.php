<!doctype html>
<html lang="en">

<head>
	<title>API Documentation</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/vendor/linearicons/style.css">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="assets/css/main.css">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="assets/css/demo.css">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/styles/default.min.css">
	<script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/highlight.min.js"></script>
</head>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<!-- NAVBAR -->
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="brand">
				{{-- <a href="home"><img src="assets/img/logo-dark.png" alt="Klorofil Logo" class="img-responsive logo"></a> --}}
				<a href="home"><img src="assets/img/logo-dark.png" alt="Klorofil Logo" class="img-responsive logo"></a>
			</div>
			<div class="container-fluid">
				<div class="navbar-btn">
					<button type="button" class="btn-toggle-fullwidth"><i class="lnr lnr-arrow-left-circle"></i></button>
				</div>
			</div>
		</nav>
		<!-- END NAVBAR -->
		<!-- LEFT SIDEBAR -->
		<div id="sidebar-nav" class="sidebar">
			<div class="sidebar-scroll">
				<nav>
					<ul class="nav">
						<li><a href="#" class="active"><i class="lnr lnr-book"></i> <span>API Documentation</span></a></li>
						<li><a href="logout" class=""><i class="lnr lnr-power-switch"></i> <span>Logout</span></a></li>
					</ul>
				</nav>
			</div>
		</div>
		<!-- END LEFT SIDEBAR -->
		<!-- MAIN -->
		<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<h3 class="page-title">Introduction</h3>
					<h4 class="page-title">API burga adalah sebuah backend yang digunakan untuk mendapatkan data dari database, dan API ini bisa digunakan hanya oleh tim developer burga .Corp saja. Dan untuk token bisa didapatkan pada halaman <a href="home"><code>home</code></a>. Dan API ini hanya bisa digunakan untuk akses internal perusahaan</h4>
					<h3 class="page-title"><br>Login Siswa</h3>
					<h4 class="page-title">API login untuk siswa ini digunakan ketika user ingin melakukan login dan masuk kehalaman tampilan siswa dan bisa melakukan pembayaran, dll. Endpoint <code>https://api.taufiq-ridhoi.my.id/api/login-siswa</code>. Method <code>POST</code></h4>
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
    "user": {
        "id": 12,
        "name": "siswa",
        "email": "siswa@gmail.com",
        "email_verified_at": null,
        "level": "user",
        "created_at": "2023-07-13T07:26:52.000000Z",
        "updated_at": "2023-07-13T07:26:52.000000Z"
    }
}</pre>
								</div>
							</div>

							
							<!-- END TABLE HOVER -->
						</div>
					</div>
					<h3 class="page-title"><br>Login Kasir</h3>
					<h4 class="page-title">API login untuk siswa ini digunakan ketika kasir ingin melakukan login dan masuk kehalaman tampilan kasir yang bisa mengelola barang, dll. Endpoint <code>https://api.taufiq-ridhoi.my.id/api/login-kasir</code>. Method yang digunakan adalah <code>POST</code></h4>
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
												<td>Bisa menggunakan email atau atau name <br> Default value<br>email: <code>kasir@gmail.com</code> <br>name: <code>kasir</code></td>
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
    "user": {
        "id": 11,
        "name": "kasir",
        "email": "kasir@gmail.com",
        "email_verified_at": null,
        "level": "kasir",
        "created_at": "2023-07-13T07:26:22.000000Z",
        "updated_at": "2023-07-13T07:26:22.000000Z"
    }
}</pre>
								</div>
							</div>



							
							<!-- END TABLE HOVER -->
						</div>
					</div>
				</div>
			</div>
			<!-- END MAIN CONTENT -->
		</div>
		<!-- END MAIN -->
		<div class="clearfix"></div>
		<footer>
			<div class="container-fluid">
				<p class="copyright">&copy; 2017 <a href="https://www.themeineed.com" target="_blank">Theme I Need</a>. All Rights Reserved.</p>
			</div>
		</footer>
	</div>
	<!-- END WRAPPER -->
	<!-- Javascript -->
	<script>
	$(document).ready(function() {
	  $('pre code').each(function(i, block) {
		hljs.highlightBlock(block);
	  });
	});
	</script>
	<script src="assets/vendor/jquery/jquery.min.js"></script>
	<script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	<script src="assets/scripts/klorofil-common.js"></script>
</body>

</html>
