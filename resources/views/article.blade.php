

@extends('layouts.main')

@section('content')

    <section>
        <ul>
            @foreach ( $posts as $post )

                <li>

                    <a  href="{{route('show_articles', $post->post_name)}}">{{$post->title}}</a><br>
                    <hr>

                </li>

            @endforeach
        </ul>


    </section>


@endsection

