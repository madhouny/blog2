@extends('layouts.main')

@section('content')

    <section>
        <p>{{$article->post_content}}</p>

        <div class="info">
            Posted by {{$article->post_name}} on {{$article->created_at}}
        </div>

    </section>


@endsection
