@extends('layouts.app')

@section('language')
    <li>
        <a href="{{route('comp-show', ['language' => 'uz', 'id' => $company->id])}}"><img src="/assets/images/menu/icon/3.jpg" alt="JB's Language Icon">Uz</a>
    </li>
    <li>
        <a href="{{ route('comp-show', ['language' => 'en', 'id' => $company->id])}}"><img src="/assets/images/menu/icon/1.jpg" alt="JB's Language Icon">En</a>
    </li>
    <li>
        <a href="{{route('comp-show', ['language' => 'ru', 'id' => $company->id]) }}"><img src="/assets/images/menu/icon/2.jpg" alt="JB's Language Icon">Ru</a>
    </li>
@endsection

@section('content')
    
@endsection