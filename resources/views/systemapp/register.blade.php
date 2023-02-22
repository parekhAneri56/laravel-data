@extends('systemapp.layout')
@section('title_name')
Register Page here
@endsection
@section('content')
<section id="content">
    <div class="container-fluid p-5">
        <h1 align="center">Laravel SYSTEM Applications</h1>
             
    <!--Registration page-->
    <div class="row">
        <div class="col-md-4 mt-5">
        <div class="bg-light shadow mt-2 p-3 text-dark">Why Join with Us</div>
        <ul>
            <li>24x7 support services</li>
            <li>Online customer support services</li>
            <li>Return Policy</li>
            <li>COD facility</li>
        </ul>       
    </div>
     <div class="col-md-8 mt-5">
        
    <h1 align="center">Register Form</h1>
    <hr class="border border-2 border-dark w-25 mx-auto">
<div class="form-group col-md-8 mx-auto mt-2">
    <!--success flash data message -->
    @if(Session("success"))
    <div class="alert alert-success">
        <span class="text-dark"><strong>Hey!</strong>{{Session('success')}}</span>
        </div>
    @endif
@if($errors->any())

<div class="alert alert-danger">
<ul>
    @foreach($errors->all() as $error)
    <li>{{$error}}</li>
    @endforeach
</ul>
</div>
@endif
</div>
<form method="post">
@csrf
<div class="form-group col-md-8 mx-auto mt-2">
    <input type="text" name="customer_name" placeholder="Name *" class="form-control">
</div>

<div class="form-group col-md-8 mx-auto mt-2">
    <input type="text" name="email" placeholder="Email *" class="form-control">
</div>

<div class="form-group col-md-8 mx-auto mt-2">
    <input type="text" name="mobile" placeholder="phone *" class="form-control">
</div>

<div class="form-group col-md-8 mx-auto mt-2">
    <input type="text" name="pass" placeholder="Password *" class="form-control">
</div>


<div class="form-group col-md-8 mx-auto mt-2">
    <input type="text" name="cpass" placeholder="Confrim Password *" class="form-control">
</div>


<div class="form-group col-md-8 mx-auto mt-2">
    <input type="text" name="DOB" placeholder="DOB *" class="form-control">
</div>

<div class="form-group mt-2 col-md-8 mx-auto">
            <textarea name="address" placeholder="Address *" required class="form-control">
            </textarea>
          </div>

<div class="form-group col-md-8 mx-auto mt-2">

    <input type="submit" name="Reg" class="btn btn-info btn-lg" value="Register">
    <input type="reset" name="reset" class="btn btn-danger btn-lg" value="Reset">
</div>
<div class="form-group mt-2 col-md-8 mx-auto">
            <b>Already have an account ?<a href=""> Login here?</a></b>  
</div>           
</form>
            </div>
            </div>
    </div>
</div>
    </section>
    @endsection