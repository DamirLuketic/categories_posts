@extends('layouts.app')

@section('title', 'Login')

@section('content')


    <h1>Login</h1>



    <div class="row">
        <div class="col-md-3">



            <br />

            {!! Form::open(['method'=>'POST', 'action' => 'UserController@login']) !!}

            <div class="form-group">
                {!! Form::label('name', 'Name:') !!}
                {!! Form::text('name', null, ['class'=>'form-control', 'placeholder' => 'name:']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('password', 'Password:') !!}
                {!! Form::password('password',['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::submit('Login', ['class' => 'btn btn-primary']) !!}
            </div>

            {!! Form::close() !!}


        </div>
    </div>

    @if(session('invalid_data'))

        <p class="bg-danger">{{session('invalid_data')}}</p>

    @endif

    @include('includes.errors')

@endsection