<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="container mt-5 bg-white p-5">         
    
<div class="row">
<div class="col-md-12">
    
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


<h1 class="text-center mt-3">Add Your Employee</h1>
    <hr class="border border-2 w-50 mx-auto">
    <br>
    <form method="post">
@csrf
<div class="form-group mt-3">
 <label>Name:</label>  
   <input name="Name" placeholder="Enter Employee Name" class="form-control">
</div>

<div class="form-group mt-3">
<label>Mobile:</label>  
    <input name="mobile" placeholder="Enter Employee Number" class="form-control">
</div>

<div class="form-group mt-3">
<label>Employee Post:</label>  
    <input name="post" placeholder="Enter Employee post" class="form-control">
</div>


<div class="form-group mt-3">
<label>Employee Salary:</label>  
    <input name="Salary" placeholder="Enter Employee Salary" class="form-control">
</div>

<div class="form-group mt-3">
<label>Employee Details</label>
          <textarea  name="details" placeholder="Enter Employee Details" class="form-control"></textarea> 
        </div>

        <div class="form-group mt-3">
          <input type="submit" name="addemployee" value="Addemployee" class="btn btn-sm btn-primary bg-primary"> 
          
          <input type="reset" name="res" value="Reset" class="btn btn-sm btn-danger bg-danger"> 
        </div>
</form>
</div>
</div>
</div>
</div>
</div>
</x-app-layout>