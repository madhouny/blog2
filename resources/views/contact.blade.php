@extends('layouts.main')
@section('content')
    @if(count ($errors) > 0)
        <div class="row">
            <div class="col-md-6">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    @endif

    <div class="row">
        <div class="col-md-6" >
            <h3>Contact Request</h3>
            <form action="{{route('Request')}}" method="post">
                @csrf
                <div class="form-group {{$errors->has('email') ? 'has-error': ''}} ">
                    <label for="email">Email</label>
                    <input class="form-control" type="text" name="email" value="{{Request::old('email')}}">
                </div>

                <div class="form-group {{$errors->has('name') ? 'has-error': ''}}">
                    <label for="name">Name</label>
                    <input class="form-control" type="text" name="name" value="{{Request::old('name')}}">
                </div>

                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea class="form-control" name="message" aria-label="With textarea" value="{{Request::old('email')}}"></textarea>
                </div>

                <button type="submit" class="btn btn-primary">Envoyer</button>
            </form>
        </div>
    </div>


    @endsection
