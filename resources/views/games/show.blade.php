@extends('layouts.app')

@section('content')
    {{$game->name}}
    {{$game->system}}
    {{$game->rating}}
    <a class="btn btn-default" href="/games/{{$game->id}}/edit">Edit Game</a>
@endsection