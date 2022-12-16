@extends('layouts.main')
@section('content')
<form action="{{ route('language.store') }}" method="POST">
    @csrf
    <div class="mb-3">
      <label for="name" class="form-label">Name</label>
      <input type="text" name="name"  class="form-control" id="name">
    </div>
    <div class="mb-3">
        <label for="rule" class="form-label">Rule</label>
        <textarea name="rule" class="form-control" id="rule"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Create</button>
</form>
@endsection