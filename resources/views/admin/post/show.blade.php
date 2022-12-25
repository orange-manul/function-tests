@extends('layouts.admin')
@section('content')
        <div>{{ $post->id}}. {{ $post->title }}</div>
        <div>{{ $post->description }}</div>
        <div> 
                <a class="btn btn-success mb-3 mt-3" href="{{ route('admin.post.edit', $post->id ) }}">Edit</a>
        </div>
        <div>
            <form action="{{ route('admin.post.delete', $post->id) }}" method="POST">
                @csrf
                @method('delete')
                <input type="submit" value="Delete" class="btn btn-danger">
                </form>
        </div>
        <div><a class="btn btn-info mt-3" href="{{route('admin.post.index')}}">Back</a></div>
@endsection
