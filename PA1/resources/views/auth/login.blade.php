

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link href="assets/css/mdb.min.css" rel="stylesheet">
  <link href="assets/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">

  <link rel="icon" type="image/png" sizes="16x16" href="assets/favicon-16x16.png">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">

  <style>
  * {
    font-family: 'poppins', sans-serif;
  }
  </style>
</head>
<body>
  <section class="vh-100" style="background-color: #fafafa;">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
          <h3 class="fw-bold text-center">Sign in</h3>
          <p class="mb-5 text-center">Sign in for admin</p>
          <?php if(isset($alert)) : ?>
            <div class="alert alert-danger" role="alert"><strong class="fw-bold">Password atau username tidak sesuai.</strong> coba masukkan lagi!</div>
          <?php endif; ?>
          <h5 class="fw-bold mb-4">Sign In Your Account</h5>
          <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="mb-4">
              <span class="fw-bold">Username</span>
              <input type="text" class="form-control form-control-lg" placeholder="Enter your username"  type="email" name="email" :value="old('email')" required autofocus/>
            </div>
            <div class="mb-4">
              <span class="fw-bold">Password</span>
              <input type="password" class="form-control form-control-lg " placeholder="Enter your password" name="password"  :value="__('Password')" />
            </div>
            <!-- Checkbox -->
            <div class="form-check d-flex justify-content-start mb-4">
              <input class="form-check-input" type="checkbox" value="" id="form1Example3" />
              <label class="form-check-label" for="form1Example3"> Remember password </label>
            </div>
            <x-button class="ml-3">
                    {{ __('Log in') }}
                </x-button>
          </form>
        </div>
      </div>
    </div>
  </section>
  
<script src="assets/js/mdb.min.js"></script> 
</body>
</html>