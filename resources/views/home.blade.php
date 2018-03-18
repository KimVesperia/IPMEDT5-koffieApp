@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
              <div class="card-header"><a href="/user">{{{ isset(Auth::user()->bedrijfsnaam) ? Auth::user()->bedrijfsnaam : Auth::user()->email }}}'s Dashboard</a></div>

                <div class="card-body">

                    <a class="btn btn-primary" href="user/producten">Producten</a>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
