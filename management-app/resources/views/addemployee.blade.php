<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="container mt-5 bg-white p-5">         
    <h3 class="text-center mt-3">Add Your Employee</h3>
    <hr class="border border-2 w-50 mx-auto">
<div class="row">
    <div class="col-md-4">
        <ul>
            <li><a href="#">Add Employee</a></li>
            <li><a href="#">Manage Employee</a></li>
        </ul>
    </div>
<div class="col-md-7">
    <form method="post">
@csrf
<div class="form-group mt-3">
    <input type="text" name="Name" placeholder="Enter Employee Name" class="form-control">
</div>

<div class="form-group mt-3">
    <input type="text" name="mobile" placeholder="Enter Employee Number" class="form-control">
</div>

<div class="form-group mt-3">
    <input type="text" name="post" placeholder="Enter Employee post" class="form-control">
</div>


<div class="form-group mt-3">
    <input type="text" name="Salary" placeholder="Enter Employee Salary" class="form-control">
</div>

<div class="form-group mt-3">
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
</x-app-layout>