<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title> RWWA </title>
  @include('backend/include/head')
</head>

<body style="background: url({{ asset('assets/images/bg_login.png')}})">
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo">
                <img src="{{ asset('assets/images/logo.svg')}}" alt="logo"> RWWA
              </div> 
              <h4>Hello! let's get started</h4>
              <h6 class="fw-light">Sign in to continue.</h6>
              @if(session('error_email'))
                        <div class="alert alert-danger my-4">
                            {{ session('error_email') }}
                            </div>
                        @endif
                        
                        @if(session('error_password'))
                        <div class="alert alert-danger my-4">
                            {{ session('error_password') }}
                        </div>
                        @endif
              <form class="pt-3" method="post" action="/login">
                  @csrf
                <div class="form-group">
                  <input name="email" type="text" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Email">
                </div>
                <div class="form-group">
                  <input name="password" type="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="form-group">
                  <label for="exampleFormControlSelect2">Select Role</label>
                  <select class="form-control" id="exampleFormControlSelect2" name="role">
                    <option value="admin">Admin</option>
                    <option value="pengelola">Pengelola</option>
                    <option value="user">User</option>
                  </select>
                </div>
                <p>
                  Belum punya akun?
                  <a href="/register">silakan Sign up.</a>
              </p>
                <div class="mt-3">
                  <button class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" type="submit">SIGN IN</button>
                </div>
                <div class="my-2 d-flex justify-content-between align-items-center">
                  <div class="form-check">
                    <label class="form-check-label text-muted">
                      <input type="checkbox" class="form-check-input">
                      Keep me signed in
                    </label>
                  </div>
                  <a href="#" class="auth-link text-black">Forgot password?</a>
                </div>
                <div class="text-center mt-4 fw-light">
<<<<<<< HEAD
                  Don't have an account? <a href="/register" class="text-primary">Create</a>
                </div> 
=======
                  Don't have an account? <a href="register.html" class="text-primary">Create</a>
                </div>
>>>>>>> e2456f2e15597fe7471fddd44aeda0ec12198a30
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  @include('backend/include/foot')
  <!-- endinject -->
</body>

</html>
