@extends('layouts.app')

@section('content')
    <div class="container"> 
        <h1>games</h1>
            @if($games) 
                @foreach ($games as $game)
                <div class="card">
                    <div class="card-body">
                        <a href="/games/{{$game->id}}">{{ $game->name }}</a>
                        <div class="row col-md-4 d-flex float-right">
                            <a href="/games/{{$game->id}}/edit" class="btn btn-default btn-game mr-2">Edit game</a>
                            {{Form::open(['method'  => 'game', 'action' => ['GamesController@destroy', $game->id]])}}
                                {{Form::hidden('_method', 'DELETE')}}
                                {{ Form::submit('Delete',array('class'=>'btn btn-danger','style'=>'float: right; position: inline-block;' )) }}
                            {{ Form::close() }}
                        </div>
                    </div> 
                </div>
                @endforeach
            @endif
        <a href="/games/create" class="btn btn-primary mt-2">Create game</a>
    </div>
@endsection