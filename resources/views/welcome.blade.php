@extends('layouts.main')

@section('content')
    <h1>Our Blog</h1>
    <h2 class="subheader">Such a Simple Blog Layout</h2>
    <ul>
        @foreach ( $posts as $post )

            <li>

            <a  href="{{route('show_articles', $post->post_name)}}">{{$post->title}}</a><br>
            <hr>

            </li>

        @endforeach
    </ul>

    @endsection
