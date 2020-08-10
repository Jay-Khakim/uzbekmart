@extends('layouts.app')
@section('content')
    <ul class="list-group"> 
        @foreach ($tags as $tag)
            <li class="list-group-item"> {{$tag->name}}</li>
            <li class="list-group-item"> {{$tag->slug}}</li>
        @endforeach

    </ul>
@endsection