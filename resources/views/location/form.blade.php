@extends('layouts.dashboard')

@section('content')
    <div class="card">
        <div class="card-header">
            
        </div>
        <div class="card-body">
            <form action="{{ route('location.post') }}" method="post">
                <div class="form-group">
                    <label for=""></label>
                    <input type="text" name="" id="" class="form-control">
                </div>
                <div class="form-group">
                    <label for=""></label>
                    <input type="text" name="" id="" class="form-control">
                </div>
                <div class="form-group">
                    <label for=""></label>
                    <input type="text" name="" id="" class="form-control">
                </div>
                <div class="form-group">
                    <label for=""></label>
                    <input type="text" name="" id="" class="form-control">
                </div>
                <div class="form-group">
                    <label for=""></label>
                    <input type="text" name="" id="" class="form-control">
                </div>
            </form>
        </div>
    </div>
@endsection
