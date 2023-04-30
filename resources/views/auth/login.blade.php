@extends('layout')
@section("title",'Ricky'."'".'s login page')
@section('content')
     <div class="card">
        <div class="card-header">Login page</div>
        <div class="card-body">
            <form action="">
                <label for="">Input your Name </label>
                <input type="text" name='name' class="form-control" >
                <label for="">Input your Email address</label>
                <input type="text" name="email" class="form-control">
                <label for="">Input your password</label>
                <input type="text" name="password" class="form-control">
                <input type="submit" value="submit" class="btn btn-success">
            </form>
        </div>
     </div>
@endsection