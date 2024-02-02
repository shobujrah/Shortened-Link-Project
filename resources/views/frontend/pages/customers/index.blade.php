@extends('master')


@section('content')




<div class="container">


<div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-ride="ture" >
      <img src="{{url('images/2.png')}}" class="d-block w-100" style="width: 1100px; height: 400px"  alt="">
      <div class="carousel-caption d-none d-md-block">
        <p style="text-align: left;">Make your url short !!</p>
      </div>
    </div>
    <div class="carousel-item" data-bs-ride="ture" >
      <img src="{{url('images/last.jpg')}}" class="d-block w-100" style="width: 1100px; height: 400px"  alt="">
      <div class="carousel-caption d-none d-md-block">
         <p style="text-align: left;">Make your url short !!</p>
      </div>
    </div>
    <div class="carousel-item" data-bs-ride="ture" >
      <img src="{{url('images/one.png')}}" class="d-block w-100" style="width: 1100px; height: 400px"  alt="">
      <div class="carousel-caption d-none d-md-block">
       <p style="text-align: left;">Make your url short !!</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>




<!doctype html >
<html lang="en">
  <head >
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Create Shortend Link</title>
  </head>
  <body >
    <!-- <h1>Create Shortend Linkk </h1> -->
    <br> </br>
    <div class="container">
        <h1> Create Your Url Shortend Link</h1>

        @if(session()->has('msg'))
        <p class="alert alert-success"> {{session()->get('msg')}}</p>
        @endif

        <div class="card">
            <div class="card-header">
                <form action="{{route('store.shortlink')}}" method="post">
                    @csrf
                    <div class="input-group">
                         <input type="text" required name="shortlink" class="form-control" placeholder="Enter url">
                         <div class="input-group-addon">
                            <button class="btn btn-success">Create Shortend Link</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <br> </br>




  </body>

</html>



</div>


@endsection


