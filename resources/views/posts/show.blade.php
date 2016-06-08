@extends('layouts.app')

@section('title', 'Posts')

@section('content')

@if(isset($posts) && isset($category))

    <h1>{{$category->name}}</h1>

    <br />

    @foreach($posts as $post)
    
    <div class="row">

        <div class="col-lg-4">

            <img height="150" src="{{$post->image_path != '/categories_posts/public/posts_image/' ? $post->image_path : '/categories_posts/public/posts_image/placeholder.jpg'}}" alt="">
            
        </div>

        <div class="col-lg-4">

                <textarea rows="4" cols="50">
                    {{$post->content}}
                </textarea>

        </div>


    </div>

    <br />

    @endforeach

    @endif


<div class="row">
    <div class="col-md-2 col-md-offset-5">{!! $posts->render() !!}</div>
</div>

    @endsection