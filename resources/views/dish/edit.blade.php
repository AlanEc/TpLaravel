@extends("layout")

@section("content")

<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
    <h1 class="display-4">Edition plat</h1>
    <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
</div>


<!-- Formulaire simple qui enverra une requête POST -->
<form action="{{ route('update_dish', $dish->id) }}" method="PUT">
  {{ csrf_field() }}
  {{ method_field('PATCH') }}
  <div class="form-group">
    <label for="inputIdDish">Id</label>
    <input type="text" class="form-control" id="inputIdDish" name="id" value="{{ $dish->id }}" disabled>
  </div>
  <div class="form-group">
    <label for="inputNameDish">Nom</label>
    <input type="text" class="form-control" id="inputNameDish" name="name" value="{{ $dish->name }}">
  </div>
  <div class="form-group">
    <label for="inputDescriptionDish">Description</label>
    <input type="text" class="form-control" id="inputDescriptionDish" name="description" value="{{ $dish->description }}">
  </div>
  <div class="form-group">
    <label for="inputPriceDish">Prix</label>
    <input type="text" class="form-control" id="inputPriceDish" name="price" value="{{ $dish->price }}">
  </div>
  <div class="form-group">
    <label for="inputImageDish">Image</label>
    <input type="text" class="form-control" id="inputImageDish" name="image" value="{{ $dish->image }}">
  </div>
  <button type="submit" class="btn btn-primary">Mettre à jour</button>
</form>

<a href="{{ route('manage_dish') }}" class="mt-3 btn btn-outline-primary">Annuler</a>

@endsection