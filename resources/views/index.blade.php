@extends ('layout/master')
@section ('content')
    
<nav class="navbar navbar-expand-lg navbar-dark fixed-top">
    <div class="container">
        <h2 class ="logo">SING</h2>
    {{-- <a href="#" class="navbar-brand ">Logo</a> --}}
    <button class="navbar-toggler" type ="button" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">

        <span class ="navbar-toggler-icon">
    </button>


  
    <div class="collapse navbar-collapse" id="navbarContent">
        <ul class = "navbar-nav ml-auto">
            {{-- <li class="nav-item active"><a href = "#" class="nav-link">About Us</a></li>
            <li class="nav-item"><a href = "#" class="nav-link">Support</a></li> --}}
            <li class="nav-item active"><a href = "{{route('login')}}" class="nav-link">Login</a></li>
        </ul>
       </div>


    </div>
    
</nav>
<header>
<div class="container">
    <div class="banner-text">
    {{-- <div class ="text-area">
        <span>L</span>
        <span>O</span>
        <span>G</span>
        <span>O</span>
    </div> --}}
<h1>Join us</h1>
<h4> Upload your masterpiece<h4>
    <h4> Discover mind-blowing Music<h4>
<p class="banner-btn">
    <a href="{{route('register')}}" class ="active">Click to Register</a>
</p>


    </div>
</div>
</header>
      
@endsection 


    

