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
                        <tr>
                          <th>Product Categorie</th>
                          <th>Product Naam</th>
                          <th>Product Beschrijving</th>
                          <th>Product Prijs</th>
                          <th>Product Aanpassen</th>
                          <th>Product Verwijderen</th>
                        </tr>
                        @foreach($newProduct as $newProduct)
                        <tr>
                          <td>{{$newProduct['categorie']}}</td>
                          <td>{{$newProduct['product_naam']}}</td>
                          <td>{{$newProduct['beschrijving']}}</td>
                          <td>{{$newProduct['prijs']}}</td>
                          <td><a href="{{action('CRUDController@edit', $newProduct['id'])}}" class="btn btn-warning">Edit</a></td>

                          <td>
                            <form action="{{action('CRUDController@destroy', $newProduct['id'])}}" method="post">
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
