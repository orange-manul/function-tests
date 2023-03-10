@extends('layouts.main')
@section('content')
@csrf
        <div>{{ $post->id}}. {{ $post->title }}</div>
        <div>{{ $post->description }}</div>
        <div> 
                <a href="{{ route('post.edit', $post->id ) }}">Edit</a>
        </div>
        <div>
                <form action="{{ route('post.delete', $post->id) }}" method="POST">
                @csrf
                @method('delete')
                <input type="submit" value="Delete" class="btn btn-danger">
                </form>
        </div>
        <div><a href="{{route('post.index')}}">Back</a></div>
@endsection
