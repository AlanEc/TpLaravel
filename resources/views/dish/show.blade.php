@extends("layout")


@section("content")
  <!-- <div class="card-columns"> -->
    <div class="card">
    
      <!-- <img class="card-img-top" src="{{$offer->image}}"> -->
      <div class="card-body">
        <h4>{{$dish->title}}</h4>
        <p class="card-text">{{$dish->description}}</p>
        <!-- <p class="card-text"><small class="text-muted">{{$offer->username}}</small></p>
        <p class="card-text"><small class="text-muted">Adresse : {{$offer->address}}</small></p>
        <p class="card-text"><small class="text-muted">Tél. : {{$offer->phone_number}}</small></p>
        <p class="card-text"><small class="text-muted">Auteur : {{$offer->author}}</small></p>
        <p class="card-text"><small class="text-muted">Date de création : {{$offer->created_at}}</small></p> -->
        <!-- <a href="/offers/{{$offer->id}}" class="btn btn-outline-primary">En savoir plus</a> -->
      </div>
    </div>
    <a href="{{ route('home') }}" class="mt-3 btn btn-outline-primary">Retour</a>
  <!-- </div> -->

@endsection