@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ $user->name }}'s Dashboard</div>
                <div class="card-body">
                    <a href="/posts/create" class="btn btn-primary">Create Post</a>
                    <a href="/games/create" class="btn btn-primary">Create Game</a>
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
</div>
@endsection
