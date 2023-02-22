@extends('systemapp.layout')
@section('title_name')
Home Page
@endsection

@section('content')
<section id="content">
        <div class="container-fluid  p-5">
            <h1>Laravel CRUD Applications</h1>
            <!-- About us Page -->
            <div class="mt-5">
            <h1 align="center">About Us</h1>
            <hr class="border border-2 border-dark w-25 mx-auto"><br>
            <p align="justify"> <img src="{{asset('systemapp/assets/images/av.jpg')}}" class="img-fluid" style="width: 15%; border-radius: 52%; height: 200px; float: left; padding: 10px;"> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maxime, eum minus dolor reiciendis repudiandae totam architecto veniam fugiat odio adipisci, dolore, atque deserunt rem optio vel aliquid. Magni, ratione corporis.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maxime, eum minus dolor reiciendis repudiandae totam architecto veniam fugiat odio adipisci, dolore, atque deserunt rem optio vel aliquid. Magni, ratione corporis.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maxime, eum minus dolor reiciendis repudiandae totam architecto veniam fugiat odio adipisci, dolore, atque deserunt rem optio vel aliquid. Magni, ratione corporis.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maxime, eum minus dolor reiciendis repudiandae totam architecto veniam fugiat odio adipisci, dolore, atque deserunt rem optio vel aliquid. Magni, ratione corporis.</p>
         </div>
        </div>
    </section>
@endsection