@extends('layouts.app')

@section('content')


<div class="container">
    <h1>Create Game</h1>

        <div class="form-input-area">
            {!! Form::open(['action' => 'GamesController@store', 'method' => 'POST']) !!}

                    {{Form::label('name', 'Name')}}
                    {{Form::text('name', '', ['class' => 'form-input form-control', 'placeholder' => 'Name'])}}

                    {{Form::label('rating', 'Rating')}}
                    {{Form::text('rating', '', ['class' => 'form-input form-control', 'placeholder' => 'Rating'])}}


                    {{Form::label('system', 'System')}}
                    {{Form::text('system', '', ['class' => 'form-input form-control', 'placeholder' => 'System'])}}

                {{Form::submit('Submit', ['class' => 'btn btn-primary mt-2'])}}
            {!! Form::close() !!}
        </div>
    </div>
</div>

@endsection