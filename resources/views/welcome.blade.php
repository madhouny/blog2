@extends('layouts.main')

@section('content')
    <h1>Home</h1>
    <ul>
        @foreach ( $posts as $post )

            <li>

            <a class="btn btn-primary" href="{{route('show_articles', $post->post_name)}}">{{$post->title}}</a><br>
            <hr>

            </li>

        @endforeach
    </ul>

    @endsection
