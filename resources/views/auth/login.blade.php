@extends('layouts.auth')
@section('title', 'Login - ')

@section('content')
    <form method="post">

        <div class="form-group">
            <label for="username"></label>
            <input type="text" name="username" id="username" class="form-control" placeholder="Username">
        </div>

        <div class="form-group">
            <label for="password"></label>
            <input type="password" name="password" id="password" class="form-control" placeholder="Password">
        </div>

        <div class="row">
            <div class="col-6">
                &nbsp;
            </div>
            <div class="col-6">
                <input type="submit" value="Login" class="form-control btn btn-primary">
            </div>
        </div>
    </form>
@endsection