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

<h1 class="text-center mt-3">Add Your Blogs</h1>
    <hr class="border border-2 w-50 mx-auto">
    <br>
    <form method="post" enctype="multipart/form-data">
@csrf

        <div class="form-group mt-3">
          <label>Select  Blog Category</label>  
          <select name="category_name"  placeholder="select Blog Category" class="form-control">
          <option value="">-select Blog Category-</option>
          <!-- array as values -->
          @foreach($category as $category1)
          <option value="{{ $category1->id }}">{{ $category1->category_name }}</option>        
          @endforeach
        </select> 
        </div>

        <div class="form-group mt-3">
        <label>Blog Image:</label> 
          <input type="file" name="blogimage" placeholder="Enter Blog image" class="form-control"> 
        </div>

        <div class="form-group mt-3">
        <label>Blog Writer Name:</label>  
          <input type="text" name="Writer_name" placeholder="Enter Writer name" class="form-control"> 
        </div>

        <div class="form-group mt-3">
        <label>Blog Title:</label>  
        <input name="title" placeholder="Enter Blog Title" class="form-control">
        </div>

        <div class="form-group mt-3">
        <label>Blog description :</label>
          <textarea  name="description" placeholder="Enter Blog description" class="form-control"></textarea> 
        </div>

        
        <div class="form-group mt-3">
          <input type="submit" name="addBlog" value="AddBlog" class="btn btn-sm btn-primary bg-primary"> 
          
          <input type="reset" name="res" value="Reset" class="btn btn-sm btn-danger bg-danger"> 
        </div>
</form>
</div>
</div>
</div>
</div>
</div>
</x-app-layout>