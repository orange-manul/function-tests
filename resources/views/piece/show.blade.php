@extends('layouts.main')
@section('content')

<div>Name: {{ $piece->id}}. {{ $piece->name }}</div>
<div>Head bounty:{{ $piece->bounty }}</div>
<div>Nickname:{{ $piece->nickname }}</div>

<div><a href="{{ route('piece.edit', $piece->id) }}" class="btn btn-danger mb-3">Update</a></div>

<div>
<form action="{{ route('piece.delete', $piece->id) }}" method="post">
    @csrf
    @method('delete')
    <input type="submit" value="Delete" class="btn btn-danger mb-3">
</form>
</div>
<div><a href="{{ route('piece.index') }}" class="btn btn-dark mb-3">Back</a></div>
@endsection
