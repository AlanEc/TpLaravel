@extends("layout")

@section("content")
    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
      <h1 class="display-4">Gestion restaurants</h1>
      <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
    </div>

    <a href="{{ route('create_restaurant') }}" class="mb-3 btn btn-outline-primary">Ajouter un restaurant</a>
    
    @if (count($restaurants))
    <table class="table table-striped">
        <thead class="thead-dark">
            <tr>
            <th scope="col">#</th>
            <th scope="col">Nom</th>
            <th scope="col">Description</th>
            <th scope="col">Rating</th>
            <th scope="col">Nb plats</th>
            <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($restaurants as $restaurant)
            <tr>
            <th scope="row">{{$restaurant->id}}</th>
            <td><a href="{{ route('show_restaurant',  $restaurant->id)}}">{{$restaurant->name}}</a></td>
            <td>{{$restaurant->description}}</td>
            <td>{{$restaurant->rating}}/5</td>
            <td>{{$restaurant->dishes->count()}}</td>
            <td>
                <div class="d-flex justify-content-between align-items-center">
                    <!-- <div class="btn-group"> -->
                        <a class="btn btn-outline-primary mr-2" href="{{ route('manage_restaurant_dishes', $restaurant->id) }}" role="button">Gestion plats</a>
                        <a class="btn btn-outline-primary mr-2" href="{{ route('edit_restaurant', $restaurant->id) }}" role="button">Modifier</a>
                        <form action="{{ route('delete_restaurant', $restaurant->id) }}" method="post">
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
    Aucun restaurant actuellement
    @endif

@endsection