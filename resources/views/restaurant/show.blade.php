@extends("layout")

@section("content")

    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
      <h1 class="display-4">Détail restaurant</h1>
      <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
    </div>

    <div class="card mb-3">
      <!-- <img class="card-img-top" src="{{$restaurant->image}}"> -->
      <div class="card-body">
        <h4>{{$restaurant->name}}</h4>
        <p class="card-text">{{$restaurant->description}}</p>
        <p class="card-text">Note : {{$restaurant->rating}}/5</p>
        <p class="card-text"><small class="text-muted">Adresse : {{$restaurant->address}}</small></p>
        <p class="card-text"><small class="text-muted">Téléphone : {{$restaurant->phone_number}}</small></p>
      </div>
    </div>

    <h4>Plat(s) du restaurant</h4>
    @if (count($dishes))
    <div class="card-columns">
    @foreach($dishes as $dish)

        <div class="card">
        <!-- <img class="card-img-top" src="{{$dish->image}}"> -->
            <div class="card-body">
                <h4>{{$dish->name}}</h4>
                <p class="card-text">{{$dish->description}}</p>
                <p class="card-text"><small class="text-muted">Prix : {{$dish->price}} €</small></p>
                <a href="{{ route('show_dish', $dish->id) }}" class="btn btn-outline-primary">Détails</a>
            </div>
        </div>

    @endforeach
    </div>
    @else
    Aucun plat pour ce restaurant
    @endif

    <a href="{{ route('restaurant') }}" class="mt-3 btn btn-outline-primary">Retour</a>

@endsection