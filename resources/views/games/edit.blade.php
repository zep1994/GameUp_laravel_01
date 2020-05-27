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

    .form-input {
        width: 300px;
        
    }

</style>

<div class="container">
    <div class="container-01">
        <h1>Create Game</h1>

        <div class="form-input-area">
            {!! Form::open(['action' => 'GamesController@update', 'method' => 'POST']) !!}
                <div class="form-group">t
                    {{Form::label('name', 'Name')}}
                    {{Form::text('name', $game->name, ['class' => 'form-input form-control', 'placeholder' => 'Name'])}}
                </div>

                <div class="form-group">
                    {{Form::label('rating', 'Rating')}}
                    {{Form::text('rating', $game->rating, ['class' => 'form-input form-control', 'placeholder' => 'Rating'])}}
                </div>

                <div class="form-group">
                    {{Form::label('system', 'System')}}
                    {{Form::text('system', $game->system, ['class' => 'form-input form-control', 'placeholder' => 'System'])}}
                </div>
                {{Form::hidden('_method','PUT')}}
                {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
            {!! Form::close() !!}
        </div>
    </div>
</div>

@endsection