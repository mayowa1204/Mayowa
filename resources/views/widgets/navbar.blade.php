<nav class="nav nav-expand-lg navbar-dark bg-dark">
    <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; LOGO</span>
<form class="form-inline my-2 my-lg-0 ml-auto" type="get" action="{{route('search')}}">
        <input class="form-control mr-sm-2" name= "result"type="search" placeholder="Search" aria-label="Search">
        <button class="btn-search btn-outline-success my-2 my-sm-0 btn-dark" type="submit">Search</button>
    </form>


<div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <a href="{{route('explore')}}">Explore </a>
    <a href="{{route('likes')}}">Favorites</a>
    <a href="{{route('dislikes')}}">Disliked</a>
    <a href="{{route('logout')}}">Logout</a>
    <a href="{{route('songs.create')}}">Upload New Song</a>
    <a href="{{route('uploads')}}">Uploads</a>
  </div>


</nav>

  <script>
  function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
  }
  
  function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
  }
  </script>










{{-- <div class="container">
    <nav id="sidebar sidebar-inverse sidebar-fixed-left">
        <div class="sidebar-header">
            <h3><a href="">Music</a></h3>
        </div>
        <ul class="list">
            <li class="active">
                <a href="">Explore</a>
            </li>
            <li class="active">
                <a href="">Songs</a>
            </li>
            <li class="active">
            <a href="{{route('group.index')}}">Trending</a>
            </li>
            <li class="active">
                <a href="">Liked</a>
            </li>

        </ul>
    </nav>
</div>

 --}}

