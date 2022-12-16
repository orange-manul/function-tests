@extends('layouts.main')
@section('content')

<div> Language {{ $language->id}}. {{ $language->name}}</div>
<div>Rule {{ $language->rule}}</div>
<div> <a href="{{ route('language.edit', $language->id) }}" class="btn btn-success mb-3">Edit</a>
<form action="{{ route('language.delete', $language->id) }}" method="post">
    @csrf
    @method('delete')
    <input type="submit" value="Delete" class="btn btn-danger mb-3">
</form>
<div> <a href="{{ route('language.index') }}"class="btn btn-info mb-3">Back</a></div>
@endsection