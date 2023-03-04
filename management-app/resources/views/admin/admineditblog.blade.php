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
<h1 class="text-center mt-3">Edit Blog</h1>
    <hr class="border border-2 w-50 mx-auto">
    <br>
    <form method="post" enctype="multipart/form-data">                                        
            @csrf

            <div class="form-group mt-3">
            <label for="inputText" class="col-sm-4 col-form-label text-success">-Edit Blog Category-</label>
          <select name="category_name"  placeholder="select Blog Category" class="form-control">
          <option value="">-select Blog Category-</option>
          <!-- array as values -->
          @foreach($category as $category1)
          <option value="{{ $category1->id }}">{{ $category1->category_name }}</option>        
          @endforeach
            </select> 
         </div>
           
            <div class="form-group mt-3">
            <label for="inputText" class="col-sm-4 col-form-label text-success">Edit Blog Image</label>
            <div class="col-sm-8">
            <img src="{{ asset('assets/uploads/blogs/'.$ed->blogimage)  }}" width="85px" height="75px">
            <input type="file" name="blogimage"  value="{{$ed->blogimage}}" class="form-control"> 
          </div>
          </div>

            <div class="row mb-3">
              <label for="inputText" class="col-sm-4 col-form-label text-success">Edit Blog Writer Name</label>
              <div class="col-sm-8">
                <input type="text" name="Writer_name" value="{{$ed->Writer_name}}" class="form-control">
              </div>
            </div>

            <div class="row mb-3">
              <label for="inputText" class="col-sm-4 col-form-label text-success">Edit Blog Title</label>
              <div class="col-sm-8">
                <input type="text" name="title" value="{{$ed->title}}" class="form-control">
              </div>
            </div>

            <div class="row mb-3">
              <label for="inputText" class="col-sm-4 col-form-label text-success">Edit Blog description</label>
              <div class="col-sm-8">
                <input type="text" name="description" value="{{$ed->description}}" class="form-control">
              </div>
            </div>


            <div class="row mb-3">
              <label class="col-sm-4 col-form-label text-success">Update Blog</label>
              <div class="col-sm-8">
                <button type="submit" class="btn btn-primary bg-primary">Update Blog</button>
              </div>
            </div>

          </form>
          </div>
</div>
</div>
</div>

    </div>
</x-app-layout>