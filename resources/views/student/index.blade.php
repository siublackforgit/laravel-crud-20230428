@extends('layout')
@section("title","Rick Crud Index")
@section('content')
    <div class="card">
        <div class="card-header">Student Index</div>
        <div class="card-body">
            <table class="table">
                <tr>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Age</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                @foreach ($student as $item)
                    <tr>{{$item->name}}</tr>
                    <tr>{{$item->address}}</tr>
                    <tr>{{$item->age}}</tr>
                    
                @endforeach
            </table>
        </div>
    </div>
@endsection