@extends('layouts.main')

@section('content')
    <h1>Home</h1>
    <ul>
        @foreach ( $posts as $post )

            <li>

                <a class="btn btn-primary" href="{{route('articles.index', $post->post_name)}}">{{$post->title}}</a><br>
                <hr>

            </li>

        @endforeach
    </ul>

@endsection

