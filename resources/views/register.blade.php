<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login | Aplikasi</title>

<!-- Google Font: Source Sans Pro -->
@include('layouts.lib.ext-css')
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="card card-primary">
    <div class="card-header text-center">
      <a href="#" class="h1 text-bold">Sehat Terus</a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Lengkapi Data di bawah ini untuk mendaftar</p>

      @if ($errors->any())
        <div class="alert alert-danger">
          <ul class="mb-0">
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
      @endif

      <form action="{{ route('register.post') }}" method="post">
        @csrf
        <div class="input-group mb-3">
          <input type="text" name="nama" class="form-control" value="{{ old('nama') }}" placeholder="Nama" required autofocus>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="email" name="email" class="form-control" value="{{ old('email') }}" placeholder="Email" required autofocus>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="text" name="no_hp" class="form-control" value="{{ old('no_hp') }}" placeholder="Nomor Handphone" required autofocus>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-phone"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <textarea type="text" name="alamat" class="form-control" value="{{ old('alamat') }}" placeholder="Alamat" required autofocus></textarea>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-home"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="password" class="form-control" placeholder="Password" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <button type="submit" class="btn btn-primary btn-block">Register</button>
          </div>
          <div class="col-12">
            <hr>            
          </div>
          <div class="col-12 d-flex justify-content-center">
          <p>Sudah punya akun? <a href="/login">Masuk</a></p>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- jQuery -->
@include('layouts.lib.ext-js')
</body>
</html>