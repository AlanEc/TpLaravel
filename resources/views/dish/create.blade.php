@extends("layout")

@section("content")

<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
    <h1 class="display-4">Création plat</h1>
    <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
</div>

<!-- Formulaire simple qui enverra une requête POST -->
<form action="{{ route('store_dish') }}" method="post">
  {{ csrf_field() }}
  <div class="form-group">
    <label for="inputNameDish">Nom</label>
    <input type="text" class="form-control" id="inputNameDish" name="name" placeholder="Nom">
  </div>
  <div class="form-group">
    <label for="inputDescriptionDish">Description</label>
    <input type="text" class="form-control" id="inputDescriptionDish" name="description" placeholder="Description">
  </div>
  <div class="form-group">
    <label for="inputPriceDish">Price</label>
    <input type="text" class="form-control" id="inputPriceDish" name="price" placeholder="Prix">
  </div>
  <div class="form-group">
    <label for="inputImageDish">Image</label>
    <input type="text" class="form-control" id="inputImageDish" name="image" placeholder="URL">
  </div>
  <div class="form-group">
    <label for="inputIdRestaurant">Restaurant</label>
    <select name="id" class="form-control" id="inputIdRestaurant">
      @foreach($restaurants as $restaurant)
      <option value="{{$restaurant->id}}">{{$restaurant->name}}</option>
      @endforeach
    </select>
  </div>
  <button type="submit" class="btn btn-primary">Enregistrer</button>
</form>

@endsection