@extends('layout')
@section('title','registration')
@section('content')
    <div class="card">
        <div class="card-header">Register here</div>
        <div class="card-body">
            <form action="{{route('registration.post')}}" method="POST">
                @csrf
                <label for="">Input Your Name</label>
                <input type="text" name='name' class="form-control">
                <label for="">Input Your Email</label>
                <input type="text" name="email" class="form-control">
                <label for="">Input your Password</label>
                <input type="text" name="password" class="form-control">
                <input type="submit" value="Save" class="form-control btn btn-success">
            </form>
        </div>
    </div>
@endsection