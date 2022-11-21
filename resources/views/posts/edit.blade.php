@extends('layouts.app')


@section('content') 

<h1>Edit Post</h1>
{!! Form::model($post, (['action' => ['App\Http\Controllers\PostsController@update', $post->id],'method' =>'PATCH'])) !!}
    @csrf

    {!! Form::label('title', 'Title') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}

   



    

    {!! Form::submit('Update Post', ['class'=>'btn btn-info']) !!}

    {!! Form::close() !!}

    {!! Form::open(['action' => ['App\Http\Controllers\PostsController@destroy', $post->id],'method' =>'DELETE']) !!}
@csrf
    {!! Form::submit('Delete', ['class'=>'btn btn-danger']) !!}


    {!! Form::close() !!}
@endsection