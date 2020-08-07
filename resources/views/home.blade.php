@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="jumbotron col-md-12">
            <div class="card-header">{{ $user->name }}'s Dashboard</div>
            <div class="card-body">
                <a href="/posts/create" class="btn btn-primary">Create Post</a>
                @if (Auth::user()->role === "coach") 
                    <a href="/games/create" class="btn btn-primary">Create Game</a>
                @endif
                
                <div class="games-container">   
                    <h6>Games Available on the Platform</h6>
                    @if($games)
                        @foreach ($games as $game) 
                            <div class="card-body">
                                <a href="/games/{{$game->id}}">{{$game->name}}</a>
                            </div>
                        @endforeach
                    @endif
                </div>

                <h2>Posts</h2>
                <div class="post-container">
                    @if($posts)
                        @foreach ($posts as $post) 
                            <div class="card-body">
                                <a href="/posts/{{$post->id}}">{{$post->name}}</a>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
