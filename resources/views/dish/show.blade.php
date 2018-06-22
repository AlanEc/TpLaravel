@extends("layout")

@section("content")

    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
      <h1 class="display-4">Détail plat</h1>
      <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
    </div>

    <div class="card mb-3">
      <!-- <img class="card-img-top" src="{{$dish->image}}"> -->
      <div class="card-body">
        <h4>{{$dish->name}}</h4>
        <p class="card-text">{{$dish->description}}</p>
        <p class="card-text">Prix : {{$dish->price}} €</p>
      </div>
    </div>

    <h4>Restaurant lié</h4>
    <div class="card">
      <!-- <img class="card-img-top" src="{{$dish->image}}"> -->
      <div class="card-body">
          <h4>{{$restaurant->name}}</h4>
          <p class="card-text">{{$restaurant->description}}</p>
          <p class="card-text"><small class="text-muted">Note : {{$restaurant->rating}}/5</small></p>
          <a href="{{ route('show_restaurant', $restaurant->id) }}" class="btn btn-outline-primary">Détails</a>
      </div>
    </div>

    <a href="{{ route('dish') }}" class="mt-3 btn btn-outline-primary">Retour</a>
@endsection