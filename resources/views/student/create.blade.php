@extends('layout')
@section('title','Rick Crud create')
@section('content')
    <div class="card">
        <div class="card-header">Create Student Form</div>
        <div class="card-body">
            <form action="">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" class="form-control">
                <label for="address">Address</label>
                <input type="text" id="address"  name="address" class="form-control">
                <label for="age">Age</label>
                <input type="text" id="age" name="age" class="form-control">
                <input type="submit" value="submit" class="btn btn-success form-control">
            </form>
        </div>
    </div>
@endsection