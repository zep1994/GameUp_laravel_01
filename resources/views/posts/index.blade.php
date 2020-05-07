@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="container-01"> 
            <h1>Posts</h1>
            @if($posts) 
                @foreach ($posts as $post)
                <div class="card">
                    <div class="card-body">
                        <a href="/posts/{{$post->id}}">{{ $post->name }}</a>
                        <div class="btn-holder">
                            <a href="/posts/{{$post->id}}/edit" class="btn btn-default btn-post">Edit Post</a>
                            {{Form::open(['method'  => 'POST', 'action' => ['PostsController@destroy', $post->id]])}}
                                {{Form::hidden('_method', 'DELETE')}}
                                {{ Form::submit('Delete',array('class'=>'btn btn-danger','style'=>'float: right; position: inline-block;' )) }}
                            {{ Form::close() }}
                        </div>
                    </div> 
                </div>
                @endforeach
            @endif
            <a href="/posts/create" class="btn btn-primary">Create Post</a>
        </div>
    </div>
@endsection