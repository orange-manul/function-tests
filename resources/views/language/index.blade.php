@extends('layouts.main')
@section('content')
<div> <a href="{{ route('language.create') }}" class="btn btn-info">Create</a>
<div> 
    @foreach ($languages as $language)
       <div><a href="{{ route('language.show', $language->id)}}">{{ $language->id }}. {{$language->name}}</a></div> 
    @endforeach    
</div>    
@endsection