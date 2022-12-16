@extends('layouts.main')
@section('content')
<div>
<form action="{{ route('piece.store') }}" method="POST">
    @csrf
    <div class="mb-3">
      <label for="name" class="form-label">Name</label>
      <input type="text" name="name"  class="form-control" id="name">
    </div>
    <div class="mb-3">
        <label for="bounty" class="form-label">Bounty</label>
        <textarea name="bounty" class="form-control" id="bounty"></textarea>
    </div>
    <div class="mb-3">
        <label for="nickname" class="form-label">Nickname</label>
        <input type="text" name="nickname" class="form-control" id="nickname">
      </div>
      <button type="submit" class="btn btn-primary">Create</button>
    </form>
</div>
@endsection