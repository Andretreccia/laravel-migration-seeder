@extends('layouts.app')

@section('content')

                        <h3>{{$travelpackage->package_name}}</h3>
                        <p>Destination: {{$travelpackage->travel_destination}}</p>
                        <p>Description: {{$travelpackage->description}}</p>
                        <p>Duration: {{$travelpackage->duration}}</p>
                        <p>Price {{$travelpackage->price}}</p>

@endsection