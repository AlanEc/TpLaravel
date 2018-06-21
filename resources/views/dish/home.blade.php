@extends("layout")

@section("content")

    @if (count($dishes))
    <div class="card-columns">
    @foreach($dishes as $dish)

        <div class="card">
        <!-- <img class="card-img-top" src="{{$dish->image}}"> -->
        <div class="card-body">
            <h4>{{$dish->title}}</h4>
            <p class="card-text">{{$dish->description}}</p>
            <p class="card-text"><small class="text-muted">{{$dish->price}}</small></p>
        </div>
        </div>

    @endforeach
    </div>
    @else
    Aucune offre actuellement
    @endif

@endsection