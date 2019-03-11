@extends('layouts.master')

@section('title',$team->title)


@section('content')

<div class="blog-post">

    <h2 class="blog-post-title"> {{ $team->name }}</h2>
    <p class="blog-post-meta"> {{ $team->created_at }}</p>
    <p>{{ $team->email }}</p>
    <p>{{ $team->address }}</p>
    <p>{{ $team->city }}</p>
    <h5>Players:</h5>
    @foreach($team->players as $player)
    <p><a href="{{route('players-show',['id'=>$player->id])}}">{{ $player->email}}</a></p>
    <p>{{ $player->address}}</p>
    <p>{{ $player->city}}</p>
    @endforeach
    <h5>News:</h5>
    @if(count($team->news))
    <ul>
    @foreach($team->news as $new)
    <p><a href="{{route('show-news',['id'=>$new->id])}}">{{ $new->title}}</a></p>
    <p>{{ $new->content}}</p>
    <p>{{ $new->user->name}}</p>
    @endforeach
    </ul>
    @endif
    <h5>Comments:</h5>
    @foreach($team->comments as $comment)
    @if($comment->user)
    <strong>{{$comment->user->name}} says: </strong>
    @endif
    <p>{{ $comment->content}}</p>
    <p>{{ $comment->created_at}}</p>
    @endforeach

    
<div class="container">
    <form method="POST" action="{{ route('comments-store',['id' => $team->id]) }}">
    @csrf
    <div class="form-group row">
        <label for="textarea" class="col-4 col-form-label">Comment</label>
    <div class="col-8">
        <textarea id="textarea" name="content" cols="20" rows="5" class="form-control {{ $errors->has('content') ? 'is-invalid' : '' }} " >{{ old('content') }} </textarea>
    @include('partials.invalid-feedback',['field' => 'content'])
    </div>
    </div>
    <div class="form-group row">
    <div class="offset-4 col-8">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
    </form>
</div>


@endsection