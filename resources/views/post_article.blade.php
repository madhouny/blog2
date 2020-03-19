@extends('layouts.main')

@section('content')
    @include('includes.messageBlock')

    <section class="row new-post">
    <div class="col-md-6 col-md-offset-3 ">
        <header> <h2>Content of article </h2> </header>
        <p>{{$article->post_content}}</p>

        <div class="crud">
            <a href="">Edit</a>
            <a href="">Delete</a>
        </div>

        <form action="{{route('comment')}}" method="post">
            <div class="form-group">
                @csrf
               <textarea rows="5" aria-label="With textarea" cols="90" name="body" id="new-post"  placeholder="Add Comment"></textarea>
            </div>
            <button type="submit" class="btn-primary">Add Comment</button>
        </form>
    </div>
    </section>

    <section class="row posts">
        <div class="col-md-6 col-md-offset-3">
            <header><h3>What other people say .. </h3></header>
            @foreach($comments as $comment)

            <article class="post">
                <p>{{$comment->body}}</p>

                <div class="info">
                    Posted by {{$comment->user->name}} on {{$comment->created_at}}
                </div>

                <div class="interaction">
                    <a href="">Like</a>
                    <a href="">DisLike</a>
                    <a href="">Edit</a>
                    <a href="">Delete</a>
                </div>
            </article>
                @endforeach
        </div>
    </section>



@endsection
