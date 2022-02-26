@extends('layouts.app')

@section('content') 
<div class="container">
<h1>Déposer une annonce</h1>
<hr>
<form method="POST" action="{{route('ad.store')}}">
    @csrf
  <div class="mb-3">
    <label for="title" class="form-label">Titre de l'annonce</label>
    <input type="text" class="form-control" id="title" aria-describedby="title" name="title">
  </div>
  <div class="form-group">
      <label for="description">Description de l'annonce</label>
      <textarea name="description" class="form-control" id="description" cols="30" rows="10"></textarea>
  </div>
  <div class="mb-3">
    <label for="localisation">Localisation</label>
    <input type="text" class="form-control" id="localisation" name="localisation">
  </div>
  <div class="mb-3">
    <label for="price">Prix</label>
    <input type="text" class="form-control" id="price" name="price">
  </div>
  <button type="submit" class="btn btn-primary">Soumettre l'annonce</button>
</form>
</div>
@endsection