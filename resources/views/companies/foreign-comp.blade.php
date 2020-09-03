@extends('layouts.app')

@section('language')
    <li>
        <a href="{{route('foreign-comp', 'uz') }}"><img src="/assets/images/menu/icon/3.jpg" alt="JB's Language Icon">Uz</a>
    </li>
    <li>
        <a href="{{ route('foreign-comp', 'en')}}"><img src="/assets/images/menu/icon/1.jpg" alt="JB's Language Icon">En</a>
    </li>
    <li>
        <a href="{{route('foreign-comp', 'ru') }}"><img src="/assets/images/menu/icon/2.jpg" alt="JB's Language Icon">Ru</a>
    </li>
@endsection

@section('lang-mobile')
    <a href="{{route('foreign-comp', 'uz')}}"><img src="/assets/images/menu/icon/3.jpg" alt="JB's Language Icon">Uz</a>
    <a href="{{route('foreign-comp', 'en')}}"><img src="/assets/images/menu/icon/1.jpg" alt="JB's Language Icon">En</a>
    <a href="{{route('foreign-comp', 'ru')}}"><img src="/assets/images/menu/icon/2.jpg" alt="JB's Language Icon">Ru</a>
@endsection

@section('content')

{{-- Header section --}}
    <div class="breadcrumb-area">
        <div class="container">
            <div class="breadcrumb-content">
                <h2>@lang("Foreign companies")</h2>
                <ul>
                    <li><a href="{{route("main", app()->getLocale())}}">@lang("Home")</a></li>
                    <li>@lang("Companies")</a></li>
                    <li class="active">@lang("Foreign companies")</li>
                </ul>
            </div>
        </div>
    </div>
{{-- End of  Header section --}}

<!-- Begin Hiraola's Content Wrapper Area -->
        <div class="hiraola-content_wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="shop-toolbar">
                            <div class="product-view-mode">
                                <a class=" grid-3" data-target="gridview-3" data-toggle="tooltip" data-placement="top" title="Grid View"><i class="fa fa-th"></i></a>
                                {{-- <a class="list" data-target="listview" data-toggle="tooltip" data-placement="top" title="List View"><i class="fa fa-th-list"></i></a> --}}
                            </div>
                            {{-- <div class="product-item-selection_area">
                                <div class="product-short">
                                    <label class="select-label">@lang("Sort By"):</label>
                                    <select class="nice-select">
                                        <option value="1">@lang("Relevance")</option>
                                        <option value="2">@lang("Name, A to Z")</option>
                                        <option value="3">@lang("Name, Z to A")</option>
                                        <option value="5">@lang("Latest")</option>
                                        <option value="5">@lang("Oldest")</option>
                                    </select>
                                </div>
                            </div> --}}
                        </div>
                        <div class="shop-product-wrap grid gridview-5 row">

                            {{-- Single company field --}}
                            @foreach ($foreigncomp as $foreign)
                                <div class="col-lg-4">
                                    <div class="slide-item">
                                        <div class="single_product">
                                            <div class="product-img">
                                                
                                                <a href="{{route('comp-show', ['language'=>app()->getLocale(), 'id'=>$foreign->id])}}">
                                                    <img class="primary-img" src="/storage/{{$foreign->image}}" alt="{{$foreign->name}}">
                                                </a>

                                                <span class="sticker-2">New</span>
                                            </div>
                                            <br>
                                            <div class="hiraola-product_content">
                                                <div class="product-desc_info">
                                                    <h5><span class="badge  badge-primary"> #{{$foreign->category->name}} </span></h5>
                                                    <h6 align="center"><a class="product-name" href="{{route('comp-show', [app()->getLocale(), $foreign->id])}}"> {{$foreign->name}} </a></h6>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="list-slide_item">
                                        <div class="single_product">
                                            <div class="product-img">
                                                <a href="{{route('comp-show', [app()->getLocale(), $foreign->id])}}">
                                                    <img class="primary-img" src=" {{$foreign->image}}" alt="{{$foreign->name}} ">
                                                </a>
                                            </div>
                                            <div class="hiraola-product_content">
                                                <div class="product-desc_info">
                                                    <h6><a class="product-name" href="{{route('comp-show', [app()->getLocale(), $foreign->id])}}"> {{$foreign->name}} </a></h6>
                                                    
                                                    <div class="product-short_desc">
                                                        <p>{{$foreign->desc}}</p>
                                                    </div>
                                                </div>
                                                <div class="add-actions">
                                                    <ul>
                                                        <li><a class="hiraola-add_cart" href="../company/local/l31.html" data-toggle="tooltip" data-placement="top" title="More info">@lang("More")</a></li>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            
                            {{-- Single company field --}}

                            
                        </div>
                        {{$foreigncomp->links()}}
                        {{-- <div class="row">
                            <div class="col-lg-12">
                                <div class="hiraola-paginatoin-area">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-6">
                                            <ul class="hiraola-pagination-box">
                                                <li class="active"><a href="javascript:void(0)">1</a></li>
                                                <li><a href="com-local2.html">2</a></li>
                                                <li><a href="com-local3.html">3</a></li>
                                                <li><a class="Next" href="javascript:void(0)"><i
                                                        class="ion-ios-arrow-right"></i></a></li>
                                                <li><a class="Next" href="com-local2.html">>|</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6">
                                            <div class="product-select-box">
                                                <div class="product-short">
                                                    <p>Showing 1 to 12 of 25 (3 Pages)</p>
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
        <!-- Hiraola's Content Wrapper Area End Here -->
@endsection