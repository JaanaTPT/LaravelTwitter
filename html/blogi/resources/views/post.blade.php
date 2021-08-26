
@extends('layout')

@section('title','Post')

@section('content')

        <div class="card mt-3">
            <div class="card-body">
                {{ $post->content }}
            </div>
            <div class="card-body" style="font-style: italic">
                {{$post->user->name}}
            </div>
            <div class="card-footer text-muted">
                {{$post->created_at->diffForHumans()}}
            </div>
        </div>
        @foreach($post->comments as $comment)
        <div class="alert alert-dark mt-2" >
          <p>{{$comment->content}}</p>
            <p style="font-style: italic">{{$comment->user->name}}</p>
        </div>
        @endforeach

@endsection




