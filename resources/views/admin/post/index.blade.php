@extends('layouts.admin')

@section('content')

<div>
    <div> <a href="{{ route('admin.post.create')}}" class="btn btn-info mb-3 ">Add post</a>
        <div>
        @foreach ($posts as $post)
            <div><a href="{{ route('admin.post.show', $post->id)}}"> {{ $post->id }}. {{ $post->title }}</a></div>
        @endforeach
        <div>
        {{ $posts ->withQueryString()->Links() }}
        </div>
    </div>  
    </div>
</div>
@endsection

