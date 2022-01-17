@extends('layouts.app')

@section('content')
    
<h1>QUI CI SONO le news/h1>

@forelse ($travelpackages as $travelpackage)
    <div class="container">
        <div class="row">
            <div class="col-5">
                <div class="card">
                <h3>{{$travelpackage->package_name}}</h3>
                <p>Destination: {{$travelpackage->travel_destination}}</p>
                <p>Description: {{$travelpackage->description}}</p>
                <p>Duration: {{$travelpackage->duration}}</p>
                <p>Price {{$travelpackage->price}}</p>
            </div>
            </div>
        </div>
    </div>
@empty
    
@endforelse
@endsection