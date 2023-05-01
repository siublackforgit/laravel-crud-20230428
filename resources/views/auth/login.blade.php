@extends('layout')
@section("title",'Ricky'."'".'s login page')
@section('content')
     <div class="card">
        <div class="card-header">Login page</div>
        <div class="card-body">
            <div class="mt-5">
              <div class="col-12">
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
            </div>
            <form action="{{route('login.post')}}" method="POST">
                @csrf
                <label for="">Input your Email address</label>
                <input type="email" name="email" class="form-control">
                <label for="">Input your password</label>
                <input type="text" name="password" class="form-control">
                <input type="submit" value="submit" class="btn btn-success">
            </form>
        </div>
     </div>
@endsection