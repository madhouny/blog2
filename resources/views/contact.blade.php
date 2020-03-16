@extends('layouts.main')
@section('content')
    <div class="row">
        <div class="col-md-6" >
            <h3>Contact Request</h3>
            <form action="{{route('Request')}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="email">Email</label>
                    <input class="form-control" type="text" name="email">
                </div>

                <div class="form-group">
                    <label for="name">Name</label>
                    <input class="form-control" type="text" name="name">
                </div>

                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea class="form-control" name="message" aria-label="With textarea"></textarea>
                </div>

                <button type="submit" class="btn btn-primary">Envoyer</button>
            </form>
        </div>
    </div>


    @endsection
