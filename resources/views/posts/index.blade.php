@extends('layouts.app')

@section('content')
    <h1>Posts</h1>
    @if (count($posts)>0)
    <ul>
       @foreach ($posts as $post)
           <p>{{$post -> title}}</p>
       @endforeach
    </ul>
   @else 
   <p>No posts found</p>
    @endif
@endsection