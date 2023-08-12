<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>API Burga</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  
</head>
<body>
  <div class="p-5 d-flex justify-content-center">
    <div class="card" style="width: 30rem">
      <div class="card-body">
        @if(session('success'))
        <div class="px-5 mt-4">
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            Berhasil Login
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        </div>
        @endif
        @if($errors->any())
        <div class="alert alert-danger">
          <ul>
            @foreach ($errors->all() as $item)
            <li>{{ $item }}</li>
            @endforeach
          </ul>
        </div>
        @endif
        <form action="register-user" method="POST">
          @csrf
          <div class="mb-3">
            <h3>Register</h3>
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" value="{{ Session::get('email') }}" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
          </div>
          <div class="mb-3">
            <label class="form-label">Nama</label>
            <input type="text" value="{{ Session::get('name') }}" class="form-control" name="name">
          </div>
          <div class="mb-3">
            <label class="form-label">Alamat</label>
            <input type="text" value="{{ Session::get('alamat') }}" class="form-control" name="alamat">
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" name="password">
          </div>
          <button type="submit" name="submit" class="mt-3 btn btn-primary w-100">Submit</button>
        </form>
        <div class="pt-3">
          <a href="login">Login?</a>
        </div>
      </div>
    </div>
  </div>
</body>
</html>