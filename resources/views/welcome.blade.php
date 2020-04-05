@extends('layouts.main')

@section('content')
    <h1>My Blog</h1>
    <h2 class="subheader">Title of articles</h2>
    <ul>
        @foreach ( $posts as $post )

            <li>

            <a  href="{{route('show_articles', $post->post_name)}}">{{$post->title}}</a><br>
            <hr>

            </li>

        @endforeach
    </ul>

    @endsection
