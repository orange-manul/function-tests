@extends('layouts.main')
@section('content')
<div>
<form action="{{ route('language.update', $language->id) }}" method="POST">
    @csrf
    @method('patch')
    <div class="mb-3">
      <label for="name" class="form-label">Name</label>
      <input type="text" name="name"  class="form-control" id="name" value="{{ $language->name }}">
    </div>
    <div class="mb-3">
        <label for="rule" class="form-label">Rule</label>
        <textarea name="rule" class="form-control" id="rule">{{ $language->rule }}</textarea>
    </div>
    <button type="submit" class="btn btn-primary">Edit</button>
</form>
</div>
@endsection