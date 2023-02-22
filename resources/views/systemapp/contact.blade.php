@extends('systemapp.layout')
@section('title_name')
Contact us page
@endsection
@section('content')
<section id="content">
    <div class="container-fluid p-5">
        <h1 align="center"> Laravel SYSTEM Applications</h1>
        
    <!--contact us page-->
    <div class="row">
        <div class="col-md-4 mt-5">
            <address>
            <p><b>Address</b>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga, commodi! Maxime deserunt doloremque molestiae fuga quos quibusdam asperiores sed blanditiis voluptatum, quas hic sequi quaerat cum a amet necessitatibus quis.</p>
            </address>
            </div>
            <div class="col-md-8 mt-5">
    <h1 align="center">Contact us Form</h1>
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
    <input type="text" name="name" placeholder="Name *" class="form-control">
</div>

<div class="form-group col-md-8 mx-auto mt-2">
    <input type="text" name="email" placeholder="Email *" class="form-control">
</div>

<div class="form-group col-md-8 mx-auto mt-2">
    <input type="text" name="phone" placeholder="phone *" class="form-control">
</div>

<div class="form-group col-md-8 mx-auto mt-2">
    <input type="text" name="subject" placeholder="Subject *" class="form-control">
</div>

<div class="form-group col-md-8 mx-auto mt-2">
    <textarea type="text" name="message" placeholder="Message *" class="form-control">
    </textarea>
</div>

<div class="form-group col-md-8 mx-auto mt-2">

    <input type="submit" name="sub" class="btn btn-primary btn-lg" value="send">

    <input type="reset" name="reset" class="btn btn-danger btn-lg" value="Reset">
</div>

</form>
            </div>
            </div>
    </div>
</div>
    </section>
    @endsection