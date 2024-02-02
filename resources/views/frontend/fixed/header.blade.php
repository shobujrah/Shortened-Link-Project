<header class="navigation">

<div  class="container">


<div class="header-top ">
    <div class="container">
      <div class="row justify-content-between align-items-center">
        <div class="col-lg-2 col-md-4">
          <div class="header-top-socials text-center text-lg-left text-md-left">
            <!-- <a><i> </i></a> -->
            <a style="color: white;"><i>+88 01851517065</i></a>

          </div>
        </div>
        <div class="col-lg-10 col-md-8 text-center text-lg-right text-md-right">
          <div class="header-top-info mb-2 mb-md-0">


            @if (auth('client')->guest())
            <a href="{{route('home')}}"><span>Home</span></a>
            <a href="{{route('customer.registration')}}"><span>Registration</span></a>
            <a href="{{route('customer.login')}}"><span>Login</span></a>

            @endif


            @if (auth('client')->user())

            <a style="color: white;"> {{auth('client')->user()->name}} </a>

            <a href="{{route('my.shortlink',auth('client')->user()->id)}}"><span>Dashboard</span></a>
            <a href="{{route('customer.logout')}}"><span>Logout</span></a>

            @endif

        </div>
      </div>
    </div>
  </div>

</div>

</div>
</header>
