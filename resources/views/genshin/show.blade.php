@extends('layouts.main')
@section('content')

<div> {{ $character->id }}. <b>Имя персонажа:</b> {{ $character->name }}</div>
    <div> <b>Откуда родом:</b> {{ $character->whence }}</div>
    <div>  {{ $character->stars }} <b>звездочный</b></div>
    <div> <b>Вид оружия:</b> {{ $character->weapon }}</div>
    <div> <b>Полезность</b> {{ $character->useful }}</div>
    <div><a href="{{ route('genshin.edit', $character->id) }}"class="btn btn-info mb-3">Edit</a></div>
<div>
        <form action="{{ route('genshin.delete', $character->id) }}" method="POST">
        @csrf
        @method('delete')
        <input type="submit" value="Delete" class="btn btn-danger mb-3">
        </form>
</div>  
<div>
        <a href="{{ route('genshin.character')}}"class="btn btn-warning mb-3">Back</a>
</div>
    @endsection