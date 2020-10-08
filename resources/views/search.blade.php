@extends ('layout/master')
@section ('content')
@include('widgets/navbar')

<div class = "container-fluid">
    
    <div class = "row"> 
        @if(count($songs)==0)
        <h1>There are no songs matching your search!!!!!<h1>
         @else
@foreach ($songs as $song)
<div class = "col-md-2" >
@include('widgets/explorecard', compact('song'))
</div> 
@endforeach
@endif
 </div>
 
</div>
@endsection
