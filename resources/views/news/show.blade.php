@extends('layouts.app')

@section('content')

<h1>QUI CI SONO le news</h1>

<div class="container">
    <div class="row"> 
            <div class="col-4">
               <div class="card">
                  
                    <h3>{{$post->title}}</h3>
                    <p>Author: {{$post->body}}</p>
                    <p>{{$post->date_post}}</p>
                </div>
            </div>
            @empty
                <h1>niente da vedere qui</h1>
        </div>
    </div>


@endsection