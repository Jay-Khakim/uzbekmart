@extends('layouts.app')
@section('language')
    <li>
        <a href="{{route('buy-request', 'uz') }}"><img src="/assets/images/menu/icon/3.jpg" alt="JB's Language Icon">Uz</a>
    </li>
    <li>
        <a href="{{ route('buy-request', 'en')}}"><img src="/assets/images/menu/icon/1.jpg" alt="JB's Language Icon">En</a>
    </li>
    <li>
        <a href="{{route('buy-request', 'ru') }}"><img src="/assets/images/menu/icon/2.jpg" alt="JB's Language Icon">Ru</a>
    </li>
@endsection

@section('lang-mobile')
    <a href="{{route('buy-request', 'uz')}}"><img src="/assets/images/menu/icon/3.jpg" alt="JB's Language Icon">Uz</a>
    <a href="{{route('buy-request', 'en')}}"><img src="/assets/images/menu/icon/1.jpg" alt="JB's Language Icon">En</a>
    <a href="{{route('buy-request', 'ru')}}"><img src="/assets/images/menu/icon/2.jpg" alt="JB's Language Icon">Ru</a>
@endsection

@section('content')
        <!-- Begin Hiraola's Breadcrumb Area -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="breadcrumb-content">
                <h2>@lang("Buy or Request")</h2>
                <ul>
                    <li><a href="{{route("main", app()->getLocale())}}">@lang("Home")</a></li>
                    <li class="active">@lang("Services")</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Hiraola's Breadcrumb Area End Here -->

    <!-- Begin Hiraola's Content Wrapper Area -->
        <div class="hiraola-content_wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 order-2 order-lg-2">
                        <div class="hiraola-sidebar-catagories_area">
                            <div id="btn25" class="">
                                <a href="https://docs.google.com/forms/d/e/1FAIpQLSfNDOUnLsMH1jT_rATjzuc4XfwmQrN2pwuTebSm6YKCjwVnZw/viewform?usp=sf_link" id="btn25" class="btn btn-primary"><h5 style="color: white;">@lang("Request")</h5></a>
                            </div>
                            <div class="category-module hiraola-sidebar_categories">
                                <div class="category-module_heading">
                                    <h5>@lang("Categories")</h5>
                                </div>
                                <div class="module-body">
                                    <ul class="module-list_item">
                                        <li>
                                            @foreach ($categories as $category)
                                                <a href="javascript:void(0)">{{$category->name}} @foreach ($buyrequests as $buy)
                                                    @php
                                                        $a = 0;
                                                        if ($buy->category_id === $category->id) {
                                                            $a = $a+1;
                                                        }
                                                        echo " (".$a.")";
                                                    @endphp
                                                    @endforeach
                                                </a>
                                            @endforeach
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="sidebar-banner_area">
                            <div class="banner-item img-hover_effect">
                                <a href="javascript:void(0)">
                                    <img src="assets/images/banner/1_1.jpg" alt="Hiraola's Shop Banner Image">
                                </a>
                            </div>
                        </div> -->
                    </div>
                    <div class="col-lg-9 order-1 order-lg-1">
                        <div class="shop-toolbar">
                            <div class="product-view-mode">
                                {{-- <a class="grid-3" data-target="gridview-3" data-toggle="tooltip" data-placement="top" title="Grid View"><i class="fa fa-th"></i></a> --}}
                                <a class="active list" data-target="listview" data-toggle="tooltip" data-placement="top" title="List View"><i class="fa fa-th-list"></i></a>
                            </div>
                            <div class="product-item-selection_area">
                                <div class="product-short">
                                    <label class="select-label">@lang("Select"):</label>
                                    <select class="nice-select">
                                        <option value="1">@lang("Relevance")</option>
                                        <option value="2">@lang("Name, A to Z")</option>
                                        <option value="3">@lang("Name, Z to A")</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="shop-product-wrap grid listview row">
                            @foreach ($buyrequests as $buy)
                                <div class="col-lg-4">
                                    <div class="slide-item">
                                        <div class="single_product">
                                            <div class="product-img">
                                                <a href="{{route("single-request", ['language'=>app()->getLocale(), 'id'=>$buy->id])}}">
                                                    <img class="primary-img" src="/storage/{{$buy->image}}" alt="{{$buy->name}}">
                                                </a>
                                            </div>
                                            <div class="hiraola-product_content">
                                                <div class="product-desc_info">
                                                    <h6 align="center"><a class="product-name" href="{{route("single-request", ['language'=>app()->getLocale(), 'id'=>$buy->id])}}"> {{$buy->name}} </a></h6>
                                                    <div class="additional-add_action">
                                                        <ul>
                                                            <li class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><a href="javascript:void(0)" data-toggle="tooltip" data-placement="top" title="Quick View"><i
                                                                class="ion-eye"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="list-slide_item">
                                        <div class="single_product">
                                            <div class="product-img">
                                                <a href="{{route("single-request", ['language'=>app()->getLocale(), 'id'=>$buy->id])}}">
                                                    <img class="primary-img" src="/storage/{{$buy->image}}" alt="{{$buy->name}}">
                                                </a>
                                            </div>
                                            <div class="hiraola-product_content">
                                                <div class="product-desc_info">
                                                    <h6><a class="product-name" href="{{route("single-request", ['language'=>app()->getLocale(), 'id'=>$buy->id])}}"> {{$buy->name}} </a></h6>
                                                    <div class="rating-box">
                                                        <ul>
                                                            <li><i class="fa fa-star-of-david"></i></li>
                                                            <li><i class="fa fa-star-of-david"></i></li>
                                                            <li><i class="fa fa-star-of-david"></i></li>
                                                            <li><i class="fa fa-star-of-david"></i></li>
                                                            <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                        </ul>
                                                    </div>
                                                    <div class="product-short_desc">
                                                        <p> {!!$buy->wants!!} </p>
                                                    </div>
                                                </div>
                                                <div class="add-actions">
                                                    <ul>
                                                        <li><a class="hiraola-add_cart" href="{{route("single-request", ['language'=>app()->getLocale(), 'id'=>$buy->id])}}" data-toggle="tooltip" data-placement="top" title="Batafsil Information">@lang("More")</a></li>
                                                        
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hiraola's Content Wrapper Area End Here -->
@endsection