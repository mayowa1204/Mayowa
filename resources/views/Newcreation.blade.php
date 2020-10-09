@extends ('layout/master')
@section ('content')
@include('widgets/navbar')

<div class="Uploadscard">
    <h1 class="card-header">Congratulations!!</h1>
    <div class="card-body">
      <h5 class="card-title">{{$song['title']}} by {{$song['artistname']}} </h5>
      <p class="card-text">Has been uploaded. Please go to <a href="{{Route('uploads')}}">Uploads</a> or <a href ="{{route('explore')}}">Explore</a> to View.</p>
      <a href="{{$song['song']}}" target = "_blank" class="btn btn-primary">Listen to your MasterPiece</a>
    </div>
  </div>

