@extends("welcome")
@section('title_name')
Home Page
@endsection
@section('content')
<!-- Page Header Start -->
<div class="container-fluid page-header d-flex flex-column align-items-center justify-content-center pt-0 pt-lg-5 mb-5">
        <h1 class="display-4 text-white mb-3 mt-0 mt-lg-5">Register</h1>
        <div class="d-inline-flex text-white">
            <p class="m-0"><a class="text-white" href="">Home</a></p>
            <p class="m-0 px-2">/</p>
            <p class="m-0">Register</p>
        </div>
    </div>
    <!-- Page Header Start -->
    <form method="post">
    @csrf
<div class="col-12">
  <label for="yourUsername" class="form-label">Username</label>
  <div class="input-group has-validation">
    <input type="text" name="username" class="form-control" id="yourUsername" required>
    <div class="invalid-feedback">Please enter your username.</div>
  </div>
</div>

<div class="col-12">
  <label for="yourPassword" class="form-label">Password</label>
  <input type="password" name="password" class="form-control" id="yourPassword" required>
  <div class="invalid-feedback">Please enter your password!</div>
</div>

<div class="col-12">
  <div class="form-check">
    <input class="form-check-input" type="checkbox" name="remember" value="true" id="rememberMe">
    <label class="form-check-label" for="rememberMe">Remember me</label>
  </div>
</div>
<div class="col-12">
  <button class="btn btn-primary w-100" type="submit">Login</button>
</div>
<div class="col-12">
  <p class="small mb-0">Don't have account? <a href="{{URL('/register-us/')}}">Create an account</a></p>
</div>
</form>
@endsection