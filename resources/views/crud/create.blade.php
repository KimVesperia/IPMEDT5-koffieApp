@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><a href="/admin">{{{ isset(Auth::user()->bedrijfsnaam) ? Auth::user()->bedrijfsnaam : Auth::user()->email }}}'s Dashboard</a></div>
                    <div class="card-body">
  <form method="post" action="{{url('admin/producten')}}">
    <form>
        <div class="form-group row">
          {{csrf_field()}}
          <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Categorie</label>
          <div class="col-sm-10">
            <select name="categorie">
              <option value="Warme Dranken">Warme Dranken</option>
              <option value="Koude Dranken">Koude Dranken</option>
              <option value="Eten">Eten</option>
            </select>
          </div>
        </div>
        <div class="form-group row">
          <label for="smFormGroupInput" class="col-sm-2 col-form-label col-form-label-sm">Product Naam</label>
          <div class="col-sm-10">
            <textarea name="product_naam" onkeyup='capitalizeWord(this)' placeholder="Voer het product naam in..." rows="1" cols="30"></textarea>
          </div>
        </div>
        <div class="form-group row">
          <label for="smFormGroupInput" class="col-sm-2 col-form-label col-form-label-sm">Prijs</label>
          <div class="col-sm-10">
            <input type="number" step="any" placeholder="Voer prijs in e.g. 2.50" name="prijs"></input>
          </div>
        </div>
        <div class="form-group row">
          <label for="smFormGroupInput" class="col-sm-2 col-form-label col-form-label-sm">Beschrijving</label>
          <div class="col-sm-10">
            <textarea type="text" name="beschrijving" placeholder="Voer het product beschrijving in..." onkeyup='capitalizeLetter(this)' rows="4" cols="40"></textarea>
          </div>
        </div>
        <div class="form-group row">
          <div class="col-md-2"></div>
          <label for="ProductAanmaken" class="btn btn-primary">Product Aanmaken</label>
          <input type="submit" id="ProductAanmaken" class="btn btn-primary" style="display: none;">
        </div>
      </form>
    </div>
</div>
</div>
</div>
</div>

@endsection
