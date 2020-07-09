@extends('layouts.app')

@section('content')
    <div class="container"> 
        <h1>coaches</h1>
            @if($coaches) 
                @foreach ($coaches as $coach)
                <div class="card">
                    <div class="card-body">
                        <a href="/coaches/{{$coach->id}}">{{ $coach->name }}</a>
                        <div class="row col-md-4 d-flex float-right">
                            <a href="/coaches/{{$coach->id}}/edit" class="btn btn-default btn-coach mr-2">Edit coach</a>
                            {{Form::open(['method'  => 'coach', 'action' => ['coachesController@destroy', $coach->id]])}}
                                {{Form::hidden('_method', 'DELETE')}}
                                {{ Form::submit('Delete',array('class'=>'btn btn-danger','style'=>'float: right; position: inline-block;' )) }}
                            {{ Form::close() }}
                        </div>
                    </div> 
                </div>
                @endforeach
            @endif
        <a href="/coaches/create" class="btn btn-primary mt-2">Create coach</a>
    </div>
@endsection