{{-- Created by PhpStorm.--}}
{{-- User: Peter--}}
{{-- Date: 8/9/2018--}}
{{-- Time: 10:59 AM--}}

@extends('layouts.app')

@section('content')
    <section class="row">
        <div class="col-md-6">
            <div class="container">
                <div>Name: {{ $user->name }}</div>
                <div>Email: {{ $user->email }}</div>

                <h2>My Posts</h2>
                @foreach($user->posts as $post)
                    <div><h3>{{ $post->title }}</h3></div>
                    <div>{{ $post->body }}</div>
                    <div><strong>Published on:</strong> {{ $post->created_at }}</div>
                    <hr>
                @endforeach
            </div>
        </div>
    </section>
@endsection