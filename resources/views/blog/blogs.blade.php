@extends('layouts.app')
@section('language')
    <li>
        <a href="{{route('blogs', 'uz') }}"><img src="/assets/images/menu/icon/3.jpg" alt="JB's Language Icon">Uz</a>
    </li>
    <li>
        <a href="{{ route('blogs', 'en')}}"><img src="/assets/images/menu/icon/1.jpg" alt="JB's Language Icon">En</a>
    </li>
    <li>
        <a href="{{route('blogs', 'ru') }}"><img src="/assets/images/menu/icon/2.jpg" alt="JB's Language Icon">Ru</a>
    </li>
@endsection

@section('lang-mobile')
    <a href="{{route('blogs', 'uz')}}"><img src="/assets/images/menu/icon/3.jpg" alt="JB's Language Icon">Uz</a>
    <a href="{{route('blogs', 'en')}}"><img src="/assets/images/menu/icon/1.jpg" alt="JB's Language Icon">En</a>
    <a href="{{route('blogs', 'ru')}}"><img src="/assets/images/menu/icon/2.jpg" alt="JB's Language Icon">Ru</a>
@endsection

@section('content')
    <!-- Begin Hiraola's Breadcrumb Area -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="breadcrumb-content">
                <h2>@lang("Blog") </h2>
                <ul>
                    <li><a href="{{route("main", app()->getLocale())}}">@lang("Home")</a></li>
                    <li class="active">@lang("Blog")</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Hiraola's Breadcrumb Area End Here -->

      <!-- Begin Hiraola's Blog Column Three Area -->
        <div class="hiraola-blog_area hiraola-blog_area-2 grid-view_area blog-column-three_area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row blog-item_wrap">

                            @foreach ($blogs as $blog)

                                <div class="col-lg-4">
                                    <div class="blog-item">
                                        <div class="blog-img img-hover_effect">
                                            <a href="{{route('single-blog', ['language'=>app()->getLocale(), 'id'=>$blog->id])}}">
                                                <img src="/storage/{{$blog->image}}" alt="Hiraola's Blog Image">
                                            </a>
                                            <div class="blog-meta-2">
                                                <div class="blog-time_schedule">
                                                    <span class="day"> {{$blog->created_at->format('Y-m-d')}} </span>
                                                    {{-- <span class="month">Iyul</span> --}}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="blog-content">
                                            <div class="blog-heading">
                                                <h5>
                                                    <a href="{{route('single-blog', ['language'=>app()->getLocale(), 'id'=>$blog->id])}}">{{$blog->title}}</a>
                                                </h5>
                                            </div>
                                            <div class="blog-short_desc">
                                                <p>
                                                    @php
                                                        if(strlen($blog->body)> 150){
                                                            echo substr($blog->body, 0, 150)."...";
                                                        }else {
                                                            echo $blog->body;
                                                        }  
                                                    @endphp
                                                </p>
                                            </div>
                                            <div class="hiraola-read-more_area">
                                                <a href="{{route('single-blog', ['language'=>app()->getLocale(), 'id'=>$blog->id])}}" class="hiraola-read_more">@lang("More")</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        {{-- <div class="row">
                            <div class="col-lg-12">
                                <div class="hiraola-paginatoin-area">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-6">
                                            <ul class="hiraola-pagination-box">
                                                <li class="active"><a href="javascript:void(0)">1</a></li>
                                                <li><a href="javascript:void(0)">2</a></li>
                                                <li><a href="javascript:void(0)">3</a></li>
                                                <li><a class="Next" href="javascript:void(0)"><i class="ion-ios-arrow-right"></i></a>
                                                </li>
                                                <li><a class="Next" href="javascript:void(0)">>|</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6">
                                            <div class="product-select-box">
                                                <div class="product-short">
                                                    <p>Ko'rsatish</p>
                                                    <select class="myniceselect nice-select">
                                                        <option value="5">5</option>
                                                        <option value="10">10</option>
                                                        <option value="15">15</option>
                                                        <option value="20">20</option>
                                                        <option value="25">25</option>
                                                    </select>
                                                    <span>Har sahifada</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
        <!-- Hiraola's Blog Column Three Area End Here -->
@endsection