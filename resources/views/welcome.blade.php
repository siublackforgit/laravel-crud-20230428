@extends('layout')
@section('content')
    <div class="container">
     Current User:
        @auth
        <span>{{auth()->user()->name}}</span>
        @else
        <span>No logined user</span>
        @endauth
    </div>    
@endsection

