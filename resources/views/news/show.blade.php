@extends('layouts.master')

@section('title',$new->title)


@section('content')

<div class="blog-post">

    <h2 class="blog-post-title"> {{ $new->title }}</h2>
    <p class="blog-post-meta"> {{ $new->created_at }}</p>
    <p>{{ $new->content }}</p>
    <p>User: </p>
    <p>{{ $new->user->name }}</p>

    <p>Teams:</p>
    @if(count($new->teams))
    <ul>
        @foreach($new->teams as $team)
        <p><a href="{{route('teams-show',['id'=>$team->id])}}">{{ $team->name}}</a></p>
        @endForeach 
    </ul>
    @endIf 

@endsection