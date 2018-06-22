@extends("layout")

@section("content")

<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
    <h1 class="display-4">Edition restaurant</h1>
    <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
</div>


<!-- Formulaire simple qui enverra une requête POST -->
<form action="{{ route('update_restaurant', $restaurant->id) }}" method="PUT">
  {{ csrf_field() }}
  <div class="form-group">
    <label for="inputIdRestaurant">Id</label>
    <input type="text" class="form-control" id="inputIdRestaurant" name="id" value="{{ $restaurant->id }}" disabled>
  </div>
  <div class="form-group">
    <label for="inputNameRestaurant">Nom</label>
    <input type="text" class="form-control" id="inputNameRestaurant" name="name" value="{{ $restaurant->name }}">
  </div>
  <div class="form-group">
    <label for="inputDescriptionRestaurant">Description</label>
    <input type="text" class="form-control" id="inputDescriptionRestaurant" name="description" value="{{ $restaurant->description }}">
  </div>
  <div class="form-group">
    <label for="inputAddressRestaurant">Adresse</label>
    <input type="text" class="form-control" id="inputAddressRestaurant" name="address" value="{{ $restaurant->address }}">
  </div>
  <div class="form-group">
    <label for="inputPhoneNumberRestaurant">Phone Number</label>
    <input type="text" class="form-control" id="inputPhoneNumberRestaurant" name="phone_number" value="{{ $restaurant->phone_number }}">
  </div>
  <div class="form-group">
    <label for="inputImageRestaurant">Image</label>
    <input type="text" class="form-control" id="inputImageRestaurant" name="image" value="{{ $restaurant->image }}">
  </div>
  <button type="submit" class="btn btn-primary">Mettre à jour</button>
</form>

<a href="{{ route('manage_restaurant') }}" class="mt-3 btn btn-outline-primary">Annuler</a>

@endsection