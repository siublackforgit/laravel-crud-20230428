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
                 <tr>
                    <td>{{$item->name}}</td>
                    <td>{{$item->address}}</td>
                    <td>{{$item->age}}</td>
                    <td>
                        <form action="{{url('student/'.$item->id."/edit")}}" method="GET">
                            <input type="submit" value="Edit" class="btn btn-success">
                        </form>
                    </td>
                    <td>
                        <form action="{{url('student/'.$item->id)}}" method="POST">
                            @csrf
                            @method("Delete");
                            <input type="submit" value="Delete" class="btn btn-success">
                        </form>
                    </td>                   
                 </tr>
                    
                @endforeach
            </table>
        </div>
    </div>
@endsection