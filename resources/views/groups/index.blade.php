@foreach($groups as $group)

    <h1>
        {{ $group->name }}
    </h1>

    
    <img src="{{ $group->pic }}" alt="">

@endforeach