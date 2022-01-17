@extends('layouts.app')

@section('content')

<h1>QUI CI SONO I PACCHETTI VIAGGIO</h1>

<div class="container">
    <div class="row">
            @forelse ($travelpackages as $travelpackage)
            <div class="col-4">
                <a href="{{route('travel', ['travel' => $travelpackage->id])}}">
                    <div class="card">
                        <h3>{{$travelpackage->package_name}}</h3>
                        <p>Destination: {{$travelpackage->travel_destination}}</p>
                        <p>Description: {{$travelpackage->description}}</p>
                        <p>Duration: {{$travelpackage->duration}}</p>
                        <p>Price {{$travelpackage->price}}</p>
                    </div>
                </a>
            </div>
            @empty
                
            @endforelse
        </div>
    </div>


@endsection