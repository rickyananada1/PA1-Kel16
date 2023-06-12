<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="icon shortcut" type="image/jpg" href="assets/img/cross.png" />
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous" />
    <link rel="stylesheet" href="test.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
  </head>
  <style>
.form-container {
  font-family: "Poppins", sans-serif;
  position: relative;
  z-index: 1;
}
.form-container .form-horizontal {
  background-color: #fff;
  padding: 50px 30px 100px;
  border: 1px solid #e7e7e7;
}
.form-container .form-horizontal:before,
.form-container .form-horizontal:after {
  content: "";
  background-color: #fff;
  height: 100%;
  width: 100%;
  border: 1px solid #e7e7e7;
  transform: rotate(3deg);
  position: absolute;
  left: 0;
  top: 0;
  z-index: -1;
}
.form-container .form-horizontal:after {
  transform: rotate(-3deg);
}
.form-container .title {
  color: #777;
  background: linear-gradient(to right, #f5f5f5, transparent, transparent, transparent, #f5f5f5);
  font-size: 23px;
  font-weight: 600;
  text-align: center;
  text-transform: capitalize;
  padding: 2px;
  margin: 0 0 20px 0;
}
.form-horizontal .form-group {
  background-color: #eaeaea;
  font-size: 0;
  margin: 0 0 15px;
  border: 1px solid #d1d1d1;
  border-radius: 3px;
}
.form-horizontal .input-icon {
  color: #888;
  font-size: 18px;
  text-align: center;
  line-height: 40px;
  height: 40px;
  width: 40px;
  vertical-align: top;
  display: inline-block;
}
.form-horizontal .form-control {
  color: #555;
  background-color: transparent;
  font-size: 14px;
  letter-spacing: 1px;
  width: calc(100% - 55px);
  height: 40px;
  padding: 2px 10px 2px 0;
  box-shadow: none;
  border: none;
  border-radius: 0;
  display: inline-block;
  transition: all 0.3s;
}
.form-horizontal .form-control:focus {
  box-shadow: none;
  border: none;
}
.form-horizontal .form-control::placeholder {
  color: rgba(0, 0, 0, 0.7);
  font-size: 14px;
  text-transform: capitalize;
}
.form-horizontal .btn {
  color: #fff;
  background: linear-gradient(#1dd1a1, #10ac84);
  font-size: 16px;
  font-weight: 600;
  text-transform: capitalize;
  width: 100px;
  padding: 5px 18px;
  margin: 0 0 15px 0;
  border: none;
  border-radius: 30px;
  display: inline-block;
  transition: all 0.3s ease;
}
.form-horizontal .btn:hover,
.form-horizontal .btn:focus {
  color: #fff;
  letter-spacing: 2px;
}
.form-horizontal .forgot-pass {
  font-size: 12px;
  text-align: right;
  width: calc(100% - 105px);
  display: inline-block;
  vertical-align: top;
}
.form-horizontal .forgot-pass a,
.form-horizontal .register a {
  color: #999;
  transition: all 0.3s ease;
}
.form-horizontal .forgot-pass a:hover,
.form-horizontal .register a:hover {
  color: #555;
  text-decoration: underline;
}
.form-horizontal .register {
  font-size: 12px;
  text-align: center;
  padding-top: 8px;
  border-top: 1px solid #e7e7e7;
  display: block;
}

.form-bg {
  padding-top: 150px;
}

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
  </head>
  <style>
    .form-container {
  font-family: "Poppins", sans-serif;
  position: relative;
  z-index: 1;
}
.form-container .form-horizontal {
  background-color: #fff;
  padding: 50px 30px 100px;
  border: 1px solid #e7e7e7;
}
.form-container .form-horizontal:before,
.form-container .form-horizontal:after {
  content: "";
  background-color: #fff;
  height: 100%;
  width: 100%;
  border: 1px solid #e7e7e7;
  transform: rotate(3deg);
  position: absolute;
  left: 0;
  top: 0;
  z-index: -1;
}
.form-container .form-horizontal:after {
  transform: rotate(-3deg);
}
.form-container .title {
  color: #777;
  background: linear-gradient(to right, #f5f5f5, transparent, transparent, transparent, #f5f5f5);
  font-size: 23px;
  font-weight: 600;
  text-align: center;
  text-transform: capitalize;
  padding: 2px;
  margin: 0 0 20px 0;
}
.form-horizontal .form-group {
  background-color: #eaeaea;
  font-size: 0;
  margin: 0 0 15px;
  border: 1px solid #d1d1d1;
  border-radius: 3px;
}
.form-horizontal .input-icon {
  color: #888;
  font-size: 18px;
  text-align: center;
  line-height: 40px;
  height: 40px;
  width: 40px;
  vertical-align: top;
  display: inline-block;
}
.form-horizontal .form-control {
  color: #555;
  background-color: transparent;
  font-size: 14px;
  letter-spacing: 1px;
  width: calc(100% - 55px);
  height: 40px;
  padding: 2px 10px 2px 0;
  box-shadow: none;
  border: none;
  border-radius: 0;
  display: inline-block;
  transition: all 0.3s;
}
.form-horizontal .form-control:focus {
  box-shadow: none;
  border: none;
}
.form-horizontal .form-control::placeholder {
  color: rgba(0, 0, 0, 0.7);
  font-size: 14px;
  text-transform: capitalize;
}
.form-horizontal .btn {
  color: #fff;
  background: linear-gradient(#1dd1a1, #10ac84);
  font-size: 16px;
  font-weight: 600;
  text-transform: capitalize;
  width: 100px;
  padding: 5px 18px;
  margin: 0 0 15px 0;
  border: none;
  border-radius: 30px;
  display: inline-block;
  transition: all 0.3s ease;
}
.form-horizontal .btn:hover,
.form-horizontal .btn:focus {
  color: #fff;
  letter-spacing: 2px;
}
.form-horizontal .forgot-pass {
  font-size: 12px;
  text-align: right;
  width: calc(100% - 105px);
  display: inline-block;
  vertical-align: top;
}
.form-horizontal .forgot-pass a,
.form-horizontal .register a {
  color: #999;
  transition: all 0.3s ease;
}
.form-horizontal .forgot-pass a:hover,
.form-horizontal .register a:hover {
  color: #555;
  text-decoration: underline;
}
.form-horizontal .register {
  font-size: 12px;
  text-align: center;
  padding-top: 8px;
  border-top: 1px solid #e7e7e7;
  display: block;
}

.form-bg {
  padding-top: 150px;
}
</style>
  <body>
    <div class="form-bg">
      <div class="container">
        <div class="row">
          <div class="col-md-offset-4 col-md-4 col-sm-offset-3 col-sm-6">
            <div class="form-container">
              <form action="{{ route('login') }}" method="post" class="form-horizontal">
                @csrf
                <h3 class="title">Login ADMIN</h3>
                <div class="form-group">
                  <span class="input-icon"><i class="fa fa-user"></i></span>
                  <input class="form-control" type="text"name="name" :value="old('name')"  placeholder="Username" />
                </div>
                <div class="form-group">
                  <span class="input-icon"><i class="fa fa-lock"></i></span>
                  <input class="form-control" type="password"name="password"  :value="__('Password')" placeholder="Password" />
                </div>
              
                <a href="/" class="btn signin">Back</a>

                <button class="btn signin">Log in</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>