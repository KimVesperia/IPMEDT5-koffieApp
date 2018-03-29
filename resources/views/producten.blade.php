@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><a href="/user">{{{ isset(Auth::user()->bedrijfsnaam) ? Auth::user()->bedrijfsnaam : Auth::user()->email }}}'s Dashboard</a></div>

                <div class="card-body">

                  <table id="alleProducten">
                  <tr>
                    <th>Warme Dranken</th>
                    <th>Beschrijving</th>
                    <th>Prijs</th>
                    <th>Bestel</th>
                  </tr>
                  @foreach($productsWarm as $productsWarm)
                  <tr>
                    <td>{{$productsWarm->product_naam}} </td>
                    <td>{{$productsWarm->beschrijving}}</td>
                    <td>{{$productsWarm->prijs}}</td>
                    <td><a href="{{action('CRUDController@edit', $productsWarm->id)}}" class="btn btn-warning">Plaats bestelling</a></td>
                  </tr>
                  @endforeach
                  </table>
                  <br>
                  <table id="alleProducten">
                  <tr>
                    <th>Koude Dranken</th>
                    <th>Beschrijving</th>
                    <th>Prijs</th>
                    <th>Bestel</th>
                  </tr>
                  @foreach($productsKoud as $productsKoud)
                  <tr>
                    <td>{{$productsKoud->product_naam}} </td>
                    <td>{{$productsKoud->beschrijving}}</td>
                    <td>{{$productsKoud->prijs}}</td>
                    <td><a href="{{action('CRUDController@edit', $productsKoud->id)}}" class="btn btn-warning">Plaats bestelling</a></td>
                  </tr>
                  @endforeach
                  </table>
                  <br>

                  <table id="alleProducten">
                  <tr>
                    <th>Eten</th>
                    <th>Beschrijving</th>
                    <th>Prijs</th>
                    <th>Bestel</th>
                  </tr>
                  @foreach($productsEten as $productsEten)
                  <tr><div class="displayProducten">
                    <td>{{$productsEten->product_naam}}</td>
                    <td>{{$productsEten->beschrijving}}</td>
                    <td>{{$productsEten->prijs}}</td>
                    <td><a href="{{action('CRUDController@edit', $productsEten->id)}}" class="btn btn-warning">Plaats bestelling</a></td>
                  </div></tr>
                  @endforeach
                  </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
