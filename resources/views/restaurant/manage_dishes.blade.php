@extends("layout")

@section("content")
    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
      <h1 class="display-4">Gestion des plats du restaurant <br>{{ $restaurant->name }}</h1>
      <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
    </div>

    <!-- <a href="{{ route('create_dish') }}" class="mb-3 btn btn-outline-primary">Ajouter un plat au restaurant</a> -->
    
    @if (count($dishes))
    <table class="table table-striped">
        <thead class="thead-dark">
            <tr>
            <th scope="col">#</th>
            <th scope="col">Nom</th>
            <th scope="col">Description</th>
            <th scope="col">Price</th>
            <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($dishes as $dish)
            <tr>
            <th scope="row">{{$dish->id}}</th>
            <td>{{$dish->name}}</td>
            <td>{{$dish->description}}</td>
            <td>{{$dish->price}} €</td>
            <td>
                <div class="d-flex justify-content-between align-items-center">
                    <!-- <div class="btn-group"> -->
                        <a class="btn btn-outline-primary mr-2" href="{{ route('edit_dish', $dish->id) }}" role="button">Modifier</a>
                        <form action="{{ route('delete_dish', $dish->id) }}" method="post">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            
                            <!-- <button type="button" class="btn btn-outline-primary">Modifier</button> -->
                            <button type="submit" class="btn btn-outline-danger">Supprimer</button>
                        </form>
                    <!-- </div> -->
                </div>
            </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    @else
    Aucun plat pour ce restaurant
    @endif

@endsection