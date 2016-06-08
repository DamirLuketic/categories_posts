@extends('layouts.app')

@section('title', 'Register')

@section('content')

    <h1>Register</h1>

    <br />

    {!! Form::open(['method'=>'POST', 'action' => 'UserController@store']) !!}

    <div class="form-group">
        {!! Form::label('name', 'Name:') !!}
        {!! Form::text('name', null, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('password', 'Password:') !!}
        {!! Form::password('password', ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('repeat_password', 'Repeat Password::') !!}
        {!! Form::password('repeat_password', ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Register', ['class' => 'btn btn-primary pull-right']) !!}
    </div>

    {!! Form::close() !!}

    @include('includes.errors')

@endsection