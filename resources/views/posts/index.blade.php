@extends('layouts.app')

@section('content')

    <style>
        .container {
            width: 100%;
            height: 100%;
            position: relative;
        }

        .container-01 {
            width: 40%;
            height: 100%;
            min-height: 800px;
            min-width: 400px;
        }


    </style>

    <div class="container">
        <div class="container-01"> 
            <h1>Posts</h1>
            @if($posts) 
                @foreach ($posts as $post)
                <div class="card">
                    <div class="card-body">
                        <a href="/posts/{{$post->id}}">{{ $post->name }}</a>
                    </div> 
                </div>
                @endforeach
            @endif
            <a href="/posts/create" class="btn btn-primary">Create Post</a>
        </div>
    </div>
@endsection