 <div class="card" style="width: 18rem;">
    <img src="{{$song['pic']}}" class="card-img-top" alt="card-image-cap">
    <div class="card-body">
      <h4 class="card-text">{{$song['title']}}: {{$song['artistname']}}. </h4>

      <div class="row">
        <a href="{{$song['song']}}"   target = "_blank" class="btn btn-primary">Listen</a> 
        <form action=" {{route('delete.destroy', $song->id)}} " method="Post" class= "delete-form">
          @csrf
          @method('delete')
            <input type="submit" value="Delete" class="btn btn-dark">
          </form> 
          </div>
    </div>
</div>