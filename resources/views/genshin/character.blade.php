@extends('layouts.main')
@section('content')
    <div> <a href="{{ route('genshin.genshincreate') }}" class="btn btn-dark">Create</a>
<div>
    @foreach ($genshins as $character)
        <div><a href="{{ route('genshin.show', $character->id )}}">{{$character->id}}. {{ $character->name }}</a></div>
    @endforeach
</div>
@endsection