@extends('layouts.app')

@section('content')

<h1>QUI CI SONO le news</h1>

<div class="container">
    <div class="row">
            @forelse ($posts as $post)
            <div class="col-4">
               <div class="card">
                   <a href="{{route('post', ['post' => $post->id])}}">CLICCAMI</a>
                    <h3>{{$post->title}}</h3>
                    <p>Author: {{$post->body}}</p>
                    <p>{{$post->date_post}}</p>
                </div>
            </div>
            @empty
                <h1>niente da vedere qui</h1>
            @endforelse
        </div>
    </div>


@endsection