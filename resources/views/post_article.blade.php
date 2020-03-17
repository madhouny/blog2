@extends('layouts.main')

@section('content')

    <section class="row new-post">
    <div class="col-md-6 col-md-offset-3 ">
        <header> <h2>Content of article </h2> </header>
        <p>{{$article->post_content}}</p>

        <div class="crud">
            <a href="">Edit</a>
            <a href="">Delete</a>
        </div>

        <form action="">
            <div class="form-group">
               <textarea rows="5" aria-label="With textarea" cols="90" name="new-post" id="new-post"  placeholder="Add Comment"></textarea>

            </div>

            <button type="submit" class="btn-primary">Add Comment</button>
        </form>
    </div>
    </section>

    <section class="row posts">
        <div class="col-md-6 col-md-offset-3">
            <header><h3>What other people say .. </h3></header>
            <article class="post">
                <p></p>

                <div class="info">
                    Posted by
                </div>

                <div class="interaction">
                    <a href="">Like</a>
                    <a href="">DisLike</a>
                    <a href="">Edit</a>
                    <a href="">Delete</a>
                </div>
            </article>

            <article class="post">
                <p></p>

                <div class="info">
                    Posted by
                </div>

                <div class="interaction">
                    <a href="">Like</a>
                    <a href="">DisLike</a>
                    <a href="">Edit</a>
                    <a href="">Delete</a>
                </div>
            </article>
        </div>
    </section>



@endsection
