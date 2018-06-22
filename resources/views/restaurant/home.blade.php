@extends("layout")

@section("content")

    @if (session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
      <h1 class="display-4">Liste restaurants</h1>
      <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
    </div>
    
    @if (count($restaurants))
    <div class="card-columns">
    @foreach($restaurants as $restaurant)

        <div class="card">
            <!-- <img class="card-img-top" src="{{$restaurant->image}}"> -->
            <div class="card-body">
                <h4>{{$restaurant->name}}</h4>
                <p class="card-text">{{$restaurant->description}}</p>
                <p class="card-text"><small class="text-muted">Note : {{$restaurant->rating}}/5</small></p>
                <p class="card-text"><small class="text-muted">Nb plats : {{$restaurant->dishes()->count()}}</small></p>
                <a href="{{ route('show_restaurant', $restaurant->id) }}" class="btn btn-outline-primary">Détails</a>
            </div>
        </div>

    @endforeach
    </div>
    @else
    Aucun restaurant actuellement
    @endif

@endsection