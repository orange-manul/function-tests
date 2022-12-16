@extends('layouts.main')
@section('content')
<form action="{{ route('genshin.update', $character->id) }}" method="post">
    @csrf
    @method('patch')
    <div class="mb-3">
      <label for="title" class="form-label">Name</label>
      <input type="text" name="name"  class="form-control" id="name" value="{{ $character->name}}">
    </div>
    <div class="mb-3">
        <label for="whence" class="form-label">Whence</label>
        <textarea name="whence" class="form-control" id="whence">{{ $character->whence}}</textarea>
    </div>
    <div class="mb-3">
        <label for="stars" class="form-label">Stars</label>
        <input type="text" name="stars" class="form-control" id="stars" value="{{ $character->stars}}">
      </div>
    <div class="mb-3">
        <label for="weapon" class="form-label">Weapon</label>
        <input type="text" name="weapon" class="form-control" id="weapon" value="{{ $character->weapon}}">
      </div>
    <div class="mb-3">
        <label for="useful" class="form-label">Useful</label>
        <input type="text" name="useful" class="form-control" id="useful" value="{{ $character->useful}}">
      </div>
      <button type="submit" class="btn btn-primary">Update</button>
    </form>
