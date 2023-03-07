@extends('systemapp.admin.layout')
@section('titlename')
Add SubCategory
@endsection 
@section('dashboard')
<main id="main" class="main">
<div class="pagetitle">
  <h1>Add SubCategory</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.html">Home</a></li>
      <li class="breadcrumb-item">Add SubCategory</li>

    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section">
  <div class="row">
    <div class="col-lg-10 ms-0">

      <div class="card">

<div class="card-body">
<!-- success falsh data message -->
@if(Session("success"))
<div class="alert alert-success mt-4">
<span class="text-dark"><strong>Hey!</strong> {{ session('success') }} </span>
</div>
@endif

@if($errors->any())

<div class="alert alert-danger mt-4">
<ul>
@foreach($errors->all() as $error)
<li>{{$error}}</li>
@endforeach
<ul>
</div>
@endif

<h5 class="card-title">Add SubCategory</h5>

          <!-- General Form Elements -->
          <form method="post">
            @csrf
            <div class="row mb-3">
              <label for="inputText" class="col-sm-4 col-form-label">Enter SubCtegoryName</label>
              <div class="col-sm-8">
                <input type="text" name="Subcategoryname" class="form-control">
              </div>
            </div>
       
            <div class="row mb-3">
              <label class="col-sm-4 col-form-label">Add SubCategory</label>
              <div class="col-sm-8">
                <button type="submit" class="btn btn-primary">Add SubCategory</button>
              </div>
            </div>

          </form><!-- End General Form Elements -->

        </div>
      </div>

    </div>

 
  </div>
</section>

</main><!-- End #main -->
@endsection