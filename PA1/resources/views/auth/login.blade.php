<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link href="assetsz/css/mdb.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">

  <link  href="assetsz/css/login.scss" rel="stylesheet">

  <link rel="icon" type="image/png" sizes="16x16" href="assets/favicon-16x16.png">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">

  <style>
  * {
    font-family: 'poppins', sans-serif;
  }
  /* Reset gaya default link */
a {
  text-decoration: none;
  color: inherit;
}

/* Tampilan dasar tombol */
.button {
  display: inline-block;
  padding: 4px 14px;
  background-color: #198ae6;
  color: white;
  border: none;
  text-align: center;
  cursor: pointer;
}

/* Efek hover pada tombol */
.button:hover {
  background-color: #198ae6;
}

/* Efek aktif pada tombol */
.button:active {
  background-color: #198ae6;
}
  </style>
</head>
<body>
  <section class="vh-100" style="background-color: #fafafa;">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
          <h3 class="fw-bold text-center">Login</h3>
          <p class="mb-5 text-center">Login Hanya untuk admin</p>
          {{-- <h5 class="fw-bold mb-4">Sign In Your Account</h5> --}}
          <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="mb-4">
              <span class="fw-bold">Username</span>
              <input type="text" class="form-control form-control-lg" placeholder="Enter your username"  type="name" name="name" :value="old('name')" required autofocus/>
            </div>
            <div class="mb-4">
              <span class="fw-bold">Password</span>
              <input type="password" class="form-control form-control-lg " placeholder="Enter your password" name="password"  :value="__('Password')" />
            </div>

            <!-- Checkbox -->
            {{-- <div class="form-check d-flex justify-content-start mb-4">
              <input class="form-check-input" type="checkbox" value="" id="form1Example3" />
              <label class="form-check-label" for="form1Example3"> Remember password </label>
            </div> --}}
            <div class="wikwik">

              <a href="/" class="button">Back</a>
              <button class="button">submit</button>
            </div>

          </form>
        </div>
      </div>
    </div>
  </section>
  
<script src="assetsz/js/mdb.min.js"></script> 
</body>
</html>