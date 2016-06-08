@extends('layouts.app')

@section('title', 'Create Post')

@section('content')

    <h1>Create Post</h1>

    @if(session('post_created'))

        <p class="bg-success">{{session('post_created')}}</p>

        @endif

    <br />

        {!! Form::open(['method'=>'POST', 'action' => 'PostController@store', 'files' => true]) !!}

            <input type="hidden" name="user_id" value="{{Cookie::get('user')->id}}">

            <div class="form-group">
                {!! Form::label('cetegory_id', 'Category:') !!}
                {!! Form::select('category_id', $category, 1, ['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('content', 'Content:') !!}
                {!! Form::textarea('content', null, ['class'=>'form-control', 'placeholder' => 'content...']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('image_path', 'Image:') !!}
                {!! Form::file('image_path', ['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::submit('Create Post', ['class' => 'btn btn-primary']) !!}
            </div>

            {!! Form::close() !!}

    @endsection