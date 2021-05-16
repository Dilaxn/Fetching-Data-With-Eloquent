@extends('layouts.app')

@section('content')
    <h1>Posts</h1>
    @if (count($posts)>0)
    <ul>
       @foreach ($posts as $post)
           <p><a href="http://localhost/lsapp/public/posts/{{$post->id}}">{{$post -> title}}</a></p>
       @endforeach
    </ul>
   @else 
   <p>No posts found</p>
    @endif
@endsection