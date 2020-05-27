@extends('layouts.app')

@section('content')
    {{$post->name}}

    <a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit Post</a>
@endsection