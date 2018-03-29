@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><a href="/admin">{{{ isset(Auth::user()->bedrijfsnaam) ? Auth::user()->bedrijfsnaam : Auth::user()->email }}}'s Dashboard</a></div>
                    <div class="card-body">
                      <a class="btn btn-primary" href="producten/create">Product Aanmaken</a>
                      <br><br>
                        <table id="alleProducten">
                          <h2>Beschikbare Producten</h2>
                        <tr>
                          <th>Product Categorie</th>
                          <th>Product Naam</th>
                          <th>Product Beschrijving</th>
                          <th>Product Prijs</th>
                          <th>Status</th>
                          <th>Product Aanpassen</th>
                          <th>Product Verwijderen</th>
                        </tr>
                        @foreach($welProduct as $welProduct)
                        <tr>
                          <td>{{$welProduct->categorie}}</td>
                          <td>{{$welProduct->product_naam}}</td>
                          <td>{{$welProduct->beschrijving}}</td>
                          <td>{{$welProduct->prijs}}</td>
                          <td>{{$welProduct->status}}</td>
                          <td><a href="{{action('CRUDController@edit', $welProduct->id)}}" class="btn btn-warning">Edit</a></td>

                          <td>
                            <form action="{{action('CRUDController@destroy', $welProduct->id)}}" method="post">
                              {{csrf_field()}}
                              <input name="_method" type="hidden" value="DELETE">
                              <button class="btn btn-danger" type="submit">Delete</button>
                            </form>
                          </td>

                          </tr>
                        @endforeach
                        </table>


                        <table id="alleProducten">
                          <h2>Niet Producten</h2>
                        <tr>
                          <th>Product Categorie</th>
                          <th>Product Naam</th>
                          <th>Product Beschrijving</th>
                          <th>Product Prijs</th>
                          <th>Status</th>
                          <th>Product Aanpassen</th>
                          <th>Product Verwijderen</th>
                        </tr>
                        @foreach($nietProduct as $nietProduct)
                        <tr>
                          <td>{{$nietProduct->categorie}}</td>
                          <td>{{$nietProduct->product_naam}}</td>
                          <td>{{$nietProduct->beschrijving}}</td>
                          <td>{{$nietProduct->prijs}}</td>
                          <td>{{$nietProduct->status}}</td>
                          <td><a href="{{action('CRUDController@edit', $nietProduct->id)}}" class="btn btn-warning">Edit</a></td>

                          <td>
                            <form action="{{action('CRUDController@destroy', $nietProduct->id)}}" method="post">
                              {{csrf_field()}}
                              <input name="_method" type="hidden" value="DELETE">
                              <button class="btn btn-danger" type="submit">Delete</button>
                            </form>
                          </td>

                          </tr>
                        @endforeach
                        </table>


                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
