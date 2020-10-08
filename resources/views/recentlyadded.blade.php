@extends ('layout/master')
@section ('content')
@include('widgets/navbar')

<div class = "container-fluid">
    
    <div class = "row"> 
@foreach ($songs as $song)
<div class = "col-md-2">
@include('widgets/uploadscard', compact('song'))
</div> 
@endforeach
 </div>
</div>


@endsection
