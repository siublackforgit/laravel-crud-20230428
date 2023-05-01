@extends('layout')
@section('title','registration')
@section('content')
    <div class="card">
        <div class="card-header">Register here</div>
        <div class="card-body">
            <div class="mt-5">
                @if($errors->any())
                    <div class="col-12">
                        @foreach($errors->all() as $error)
                            <div class="alert alert-danger">{{$error}}</div>
                        @endforeach
                    </div>
                @endif
                @if (session()->has('error'))
                    <div class="alert alert-danger">{{session('error')}}</div>
                
                @endif

                @if (session()->has('succeed'))
                    <div class="alert alert-danger">{{session('succeed')}}</div>
                
                    
                @endif
               
            </div>
    
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