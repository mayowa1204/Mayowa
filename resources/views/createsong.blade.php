@extends ('layout/master')
@section ('content')
@include('widgets/navbar')
<div class = "container">
    <div class="row justify-content-center">
        <div class ="col-md-8">
        <div class="card">
            <div class="card-header">
                Add New Song
            </div>
            <div class="card-body">
            <form action="{{route('songs.store')}}" method="POST">
@csrf
Artistname:
    <input  type="text" name="artistname" class="form-control"/>

   <br/> <br/>
   Title:
   <input  type="text" name="title" class="form-control"/>
   <br/> <br/>
Pic:
   <input  type="text" name="pic" class="form-control"/>
   <br/> <br/>
   Song:
   <input  type="text"  name="song" class="form-control"/>
   <input type ="submit" value ="save"/>

</form>
            </div>

        </div>
        </div>
    </div> 
</div>

{{-- {{route('newsong.store')}} --}}