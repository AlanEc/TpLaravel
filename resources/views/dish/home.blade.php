@extends("layout")

@section("content")

    @if (session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
      <h1 class="display-4">Liste plats</h1>
      <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
    </div>

    @if (count($dishes))
    <div class="card-columns">
    @foreach($dishes as $dish)

        <div class="card">
        <!-- <img class="card-image card-img-top" src="{{$dish->image}}"> -->
        <div class="card-body">
            <h4>{{$dish->title}}</h4>
            <p class="card-text">{{$dish->description}}</p>
            <p class="card-text"><small class="text-muted">Prix : {{$dish->price}} €</small></p>
            <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                    @auth
                    <a class="btn btn-sm btn-outline-primary" href="{{ route('show_dish', $dish->id) }}" role="button">Détails</a>
                    <a class="btn btn-sm btn-outline-primary" href="#" role="button">Commander</a>
                    @else
                    <a class="btn btn-sm btn-outline-primary" href="{{ route('show_dish', $dish->id) }}" role="button">Détail</a>
                    @endauth
                </div>
            </div>
        </div>
        </div>

    @endforeach
    </div>
    @else
    Aucune plat actuellement
    @endif

@endsection