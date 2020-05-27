@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="container-01"> 
            <h1>games</h1>
            @if($games) 
                @foreach ($games as $game)
                <div class="card">
                    <div class="card-body">
                        <a href="/games/{{$game->id}}">{{ $game->name }}</a>
                        <div class="btn-holder">
                            <a href="/games/{{$game->id}}/edit" class="btn btn-default btn-game">Edit game</a>
                            {{Form::open(['method'  => 'game', 'action' => ['gamesController@destroy', $game->id]])}}
                                {{Form::hidden('_method', 'DELETE')}}
                                {{ Form::submit('Delete',array('class'=>'btn btn-danger','style'=>'float: right; position: inline-block;' )) }}
                            {{ Form::close() }}
                        </div>
                    </div> 
                </div>
                @endforeach
            @endif
            <a href="/games/create" class="btn btn-primary">Create game</a>
        </div>
    </div>
@endsection