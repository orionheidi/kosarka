@extends('layouts.master')

@section('title')


@section('content')

<div class="blog-post">
    
    {{-- <h2 class="blog-post-title"> {{ $player->first-name }}</h2>
    <h2 class="blog-post-title"> {{ $player->last-name }}</h2> --}}
    <p>{{ $player->email }}</p>
    <p>{{ $player->address }}</p>
    <p>{{ $player->city }}</p>
    <p><a href="{{route('teams-show',['id'=>$player->team->id])}}">{{ $player->team->name}}</a></p>
 
@endsection