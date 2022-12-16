@extends('layouts.main')
@section('content')
<form action="{{ route('genshin.store') }}" method="POST">
    @csrf
    <div class="mb-3">
      <label for="title" class="form-label">Name</label>
      <input type="text" name="name"  class="form-control" id="name">
    </div>
    <div class="mb-3">
        <label for="whence" class="form-label">Whence</label>
        <textarea name="whence" class="form-control" id="whence"></textarea>
    </div>
    <div class="mb-3">
        <label for="stars" class="form-label">Stars</label>
        <input type="text" name="stars" class="form-control" id="stars">
      </div>
    <div class="mb-3">
        <label for="weapon" class="form-label">Weapon</label>
        <input type="text" name="weapon" class="form-control" id="weapon">
      </div>
    <div class="mb-3">
        <label for="useful" class="form-label">Useful</label>
        <input type="text" name="useful" class="form-control" id="useful">
      </div>
      <button type="submit" class="btn btn-primary">Create</button>
      </form>

@endsection