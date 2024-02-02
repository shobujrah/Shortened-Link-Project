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



<title>Bootstrap Simple Login Form</title>

<style>
.login-form {
    width: 340px;
    margin: 50px auto;
  	font-size: 15px;
}
.login-form form {
    margin-bottom: 15px;
    background: #f7f7f7;
    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    padding: 30px;
}
.login-form h2 {
    margin: 0 0 15px;
}
.form-control, .btn {
    min-height: 38px;
    border-radius: 2px;
}
.btn {
    font-size: 15px;
    font-weight: bold;
}
</style>

<body>
<div class="login-form">
    <form action="{{route('customer.dologin')}}" method="post">

    @if($errors->any())

    @foreach($errors->all() as $err)
    <p class="alert alert-danger">{{$err}}</p>
    @endforeach

    @endif
@csrf

        <h2 class="text-center">Log in</h2>
        <div class="form-group">
            <input name="email" type="text" class="form-control" placeholder="Email" required="required">
        </div>
        <div class="form-group">
            <input name="password" type="password" class="form-control" placeholder="Password" required="required">
        </div>
        <div class="clearfix">
            <label class="float-left form-check-label" ><input type="checkbox" required="required" > Remember me</label>

        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-success btn-lg btn-block">Log in</button>
        </div>
        <br> </br>
        <div class="text-center">If you don't have account. Go to  <a href="{{route('customer.registration')}}"> Registration</a></div>
    </form>

</div>
</body>

</div>

@endsection
