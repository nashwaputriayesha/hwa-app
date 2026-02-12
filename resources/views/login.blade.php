<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Login</title>

  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="{{ asset('assets/main.css') }}" rel="stylesheet">

  <style>
    body {
      background: #f8fafc;
    }

    .login-card {
      background: #fff;
      border-radius: 18px;
      padding: 40px;
      box-shadow: 0px 10px 30px rgba(0, 0, 0, 0.08);
    }

    .login-title {
      font-weight: 700;
      font-size: 28px;
      margin-bottom: 10px;
      color: #0f172a;
    }

    .login-subtitle {
      font-size: 14px;
      color: #64748b;
      margin-bottom: 25px;
    }

    .btn-login {
      background: #0ea5e9;
      border: none;
      padding: 12px;
      border-radius: 10px;
      font-weight: 600;
      transition: 0.3s;
    }

    .btn-login:hover {
      background: #0284c7;
    }

    .form-control {
      padding: 12px;
      border-radius: 10px;
    }
  </style>
</head>

<body>

  <div class="container d-flex justify-content-center align-items-center" style="min-height:100vh;">
    <div class="col-lg-4 col-md-6">

      <div class="login-card">

        <h2 class="login-title text-center">Login</h2>
        <p class="login-subtitle text-center">Silahkan login untuk masuk ke halaman utama</p>

        @if(session('error'))
          <div class="alert alert-danger text-center">
            {{ session('error') }}
          </div>
        @endif

        <form action="/login" method="POST">
          @csrf

          <div class="mb-3">
            <label class="form-label">Username</label>
            <input type="text" name="username" class="form-control" placeholder="Masukkan username" required>
          </div>

          <div class="mb-3">
            <label class="form-label">Password</label>
            <input type="password" name="password" class="form-control" placeholder="Masukkan password" required>
          </div>

          <button type="submit" class="btn btn-primary w-100 btn-login">
            Login
          </button>

          <div class="text-center mt-3">
            <a href="/" style="text-decoration:none;">← Kembali ke Home</a>
          </div>

        </form>

      </div>

    </div>
  </div>

</body>
</html>
