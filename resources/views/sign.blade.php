@extends('layouts.main')
@section('content')
    <div class="row">
        <div class="col-md-6" >
            <h3>Sign Up</h3>
            <form action="{{route('signup')}}" method="post">
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
                    <label for="password">Password</label>
                    <input class="form-control" name="password">
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>

        <div class="col-md-6" >
            <h3>Sign In</h3>
            <form action="" method="post">
                @csrf
                <div class="form-group">
                    <label for="email">Email</label>
                    <input class="form-control" type="text" name="email">
                </div>


                <div class="form-group">
                    <label for="password">Password</label>
                    <input class="form-control" name="password">
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>


@endsection
