@extends('layout')
@section("title",'Rick Crud Edit')
@section('content')
    <div class="card">
        <div class="card-header">Student Edit Form</div>
        <div class="card-body">
            <form action="{{url('student/'.$student->id)}}" method="POST">
                @csrf
                @method('PATCH')
                <label for="">Current name</label>
                <input type="text" value="{{$student->name}}" name="name" class="form-control">
                <label for="">Current Address</label>
                <input type="text" value="{{$student->address}}" name="address" class="form-control">
                <label for="">Age</label>
                <input type="text" value="{{$student->age}}" name="age" class="form-control">
                <input type="submit" value="Save" class="btn btn-success form-control" >
            </form>
        </div>
    </div>
@endsection