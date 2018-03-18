@section('content')
@extends('layouts.app')
<div class="container">
  <div class="row justify-content-center">
      <div class="col-md-12">
          <div class="card">
              <div class="card-header"><a href="/admin">{{{ isset(Auth::user()->bedrijfsnaam) ? Auth::user()->bedrijfsnaam : Auth::user()->email }}}'s Dashboard</a></div>

              <div class="card-body">
                  @if (session('status'))
                      <div class="alert alert-success">
                          {{ session('status') }}
                      </div>
                  @endif

              </div>

              <div class="card-body">
  <form method="post" action="{{action('CRUDController@update', $id)}}">

    <div class="form-group row">
      {{csrf_field()}}
       <input name="_method" type="hidden" value="PATCH">
      <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Categorie</label>
      <div class="col-sm-10">
        <select name="categorie">
          <option value="{{$newProduct->categorie}}" selected hidden>{{$newProduct->categorie}}</option>
          <option value="Warme Dranken">Warme Dranken</option>
          <option value="Koude Dranken">Koude Dranken</option>
          <option value="Eten">Eten</option>
        </select>
      </div>
    </div>

    <div class="form-group row">

      <label for="smFormGroupInput" class="col-sm-2 col-form-label col-form-label-sm">Product Naam</label>
      <div class="col-sm-10">
          <textarea name="product_naam" onkeyup='capitalizeWord(this)' placeholder="Voer het product naam in..." rows="1" cols="30">{{$newProduct->product_naam}}</textarea>
      </div>
    </div>

    <div class="form-group row">

      <label for="smFormGroupInput" class="col-sm-2 col-form-label col-form-label-sm">Prijs</label>
      <div class="col-sm-10">
        <input type="number" step="any" name="prijs" placeholder="Prijs in e.g. (2.50)" value="{{$newProduct->prijs}}"></input>
      </div>
    </div>

    <div class="form-group row">

      <label for="smFormGroupInput" class="col-sm-2 col-form-label col-form-label-sm">Beschrijving</label>
      <div class="col-sm-10">
        <textarea type="text" name="beschrijving" onkeyup='capitalizeLetter(this)' placeholder="Voer het product beschrijving in..." rows="4" cols="40">{{$newProduct->beschrijving}}</textarea>
      </div>
    </div>

    <div class="form-group row">
      <div class="col-md-2"></div>
      <button type="submit" class="btn btn-primary">Update</button>
    </div>
  </form>
  </div>
  </div>
  </div>
</div>
@endsection
