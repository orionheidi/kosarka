@extends('layouts.master')
@section('title')
    Account verification
@endsection

@section('content')
    Congratulations, your account is verified!
    <br>
    <h3>Welcome {{ $user->name }}.<a href="{{ route('login')}}"> Click here for login.</a></h3>
@endsection