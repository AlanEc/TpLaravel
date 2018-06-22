@extends("layout")

@section("content")

<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
    <h1 class="display-4">Création restaurant</h1>
    <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
</div>

<!-- Formulaire simple qui enverra une requête POST -->
<form action="{{ route('store_restaurant') }}" method="post">
  {{ csrf_field() }}
  <div class="form-group">
    <label for="inputNameRestaurant">Nom</label>
    <input type="text" class="form-control" id="inputNameRestaurant" name="name" placeholder="Nom">
  </div>
  <div class="form-group">
    <label for="inputDescriptionRestaurant">Description</label>
    <input type="text" class="form-control" id="inputDescriptionRestaurant" name="description" placeholder="Description">
  </div>
  <div class="form-group">
    <label for="inputAddressRestaurant">Adresse</label>
    <input type="text" class="form-control" id="inputAddressRestaurant" name="address" placeholder="Adresse">
  </div>
  <div class="form-group">
    <label for="inputPhoneNumberRestaurant">Phone Nuumber</label>
    <input type="text" class="form-control" id="inputPhoneNumberRestaurant" name="phone_number" placeholder="Phone Number">
  </div>
  <div class="form-group">
    <label for="inputImageRestaurant">Image</label>
    <input type="text" class="form-control" id="inputImageRestaurant" name="image" placeholder="URL">
  </div>
  <button type="submit" class="btn btn-primary">Enregistrer</button>
  <a href="{{ route('manage_restaurant') }}" class="mt-3 btn btn-outline-primary">Annuler</a>
</form>

@endsection