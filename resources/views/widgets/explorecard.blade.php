<div class="card" style="width: 18rem;">
    <img src="{{$song['pic']}}" class="card-img-top" alt="card-image-cap">
    <div class="card-body">
      <h4 class="card-text">{{$song['title']}}: {{$song['artistname']}}. </h4>
      {{-- <h5 class="card-text">{{$song['artistname']}}.</h5> --}}
      <form> <a href="{{$song['song']}}"   target = "_blank" class="btn btn-primary">Listen</a>
          <a  href="{{ route('like', $song->id) }}" class="btn btn-light">Like
          </a>
          <a  href="{{ route('dislike', $song->id) }}"  class="btn btn-dark">Dislike
          </a>
        </form>
    
    </div>
</div>

    