@extends('layouts.app')

@section('content')
    <h1>Create</h1>
    {!! Form::open(['action' => 'PostsController@store', 'method' => 'POST']) !!}

    {!! Form::close() !!}
@endsection