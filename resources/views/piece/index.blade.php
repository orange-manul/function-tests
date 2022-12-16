@extends('layouts.main')
@section('content')

<div><a href="{{ route('piece.create') }}"class="btn btn bg-primary mb-3">Create One Piece character</a></div>
<div>@foreach ($pieces as $piece)
        <div><a href="{{route('piece.show', $piece->id)}}">{{$piece->id}}. {{ $piece->name }}</a></div>
    @endforeach
    </div>
@endsection