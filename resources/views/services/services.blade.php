@extends('layouts.app')
@section('language')
    <li>
        <a href="{{route('services', 'uz') }}"><img src="/assets/images/menu/icon/3.jpg" alt="JB's Language Icon">Uz</a>
    </li>
    <li>
        <a href="{{ route('services', 'en')}}"><img src="/assets/images/menu/icon/1.jpg" alt="JB's Language Icon">En</a>
    </li>
    <li>
        <a href="{{route('services', 'ru') }}"><img src="/assets/images/menu/icon/2.jpg" alt="JB's Language Icon">Ru</a>
    </li>
@endsection

@section('lang-mobile')
    <a href="{{route('services', 'uz')}}"><img src="/assets/images/menu/icon/3.jpg" alt="JB's Language Icon">Uz</a>
    <a href="{{route('services', 'en')}}"><img src="/assets/images/menu/icon/1.jpg" alt="JB's Language Icon">En</a>
    <a href="{{route('services', 'ru')}}"><img src="/assets/images/menu/icon/2.jpg" alt="JB's Language Icon">Ru</a>
@endsection

@section('content')
    <!-- Begin Hiraola's Breadcrumb Area -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="breadcrumb-content">
                <h2>@lang("Services")</h2>
                <ul>
                    <li><a href="{{route('main' ,app()->getLocale())}}">@lang("Home")</a></li>
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

                            {{-- <div class="category-module hiraola-sidebar_categories">
                                <div class="category-module_heading">
                                    <h5>Turkumlar</h5>
                                </div>
                                <div class="module-body">
                                    <ul class="module-list_item">
                                        <li>
                                            <a href="javascript:void(0)">Eksport (18)</a>
                                            <a href="javascript:void(0)">Import (18)</a>
                                            <a href="javascript:void(0)">Yetkazib berish (18)</a>
                                            <a href="javascript:void(0)">Transport (18)</a>
                                        </li>
                                    </ul>
                                </div>
                            </div> --}}

                            {{-- <div class="hiraola-sidebar_categories">
                                <div class="hiraola-categories_title">
                                    <h5>Korxona nomi</h5>
                                </div>
                                <ul class="sidebar-checkbox_list">
                                    <li>
                                        <a href="javascript:void(0)">Customs clearance</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">JSC «Yo’lRefTrans»</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">Customs Clearance (declaration)</a>
                                    </li>
                                </ul>
                            </div> --}}
                        </div>
                    </div>
                    <div class="col-lg-12 order-1 order-lg-1">
                        <div class="shop-toolbar">
                            <div class="product-view-mode">
                                <a class="grid-3" data-target="gridview-3" data-toggle="tooltip" data-placement="top" title="Grid View"><i class="fa fa-th"></i></a>
                                <a class="active list" data-target="listview" data-toggle="tooltip" data-placement="top" title="List View"><i class="fa fa-th-list"></i></a>
                            </div>
                            {{-- <div class="product-item-selection_area">
                                <div class="product-short">
                                    <label class="select-label">@lang("Sort By"):</label>
                                    <select class="nice-select">
                                        <option value="1">@lang("Relevance")</option>
                                        <option value="2">@lang("Name, A to Z")</option>
                                        <option value="3">@lang("Name, Z to A")</option>
                                    </select>
                                </div>
                            </div> --}}
                        </div>
                        <div class="shop-product-wrap grid listview row">
                            @foreach ($services as $service)
                                <div class="col-lg-4">
                                    <div class="slide-item">
                                        <div class="single_product">
                                            <div class="product-img">
                                                <a href="{{route('service-show', [app()->getLocale(), $service->id])}}">
                                                    <img class="primary-img" src="/storage/{{$service->image}}" alt=" {{$service->name}} ">
                                                </a>
                                            </div>
                                            <div class="hiraola-product_content">
                                                <div class="product-desc_info">
                                                    <h6 align="center">@lang("Company"): <a class="product-name" href="{{route('comp-show', ['language'=>app()->getLocale(), 'id'=>$service->company->id])}}"> {{$service->company->name}} </a></h6>
                                                    <h6 align="center">@lang("Service"): <a class="product-name" href="{{route('service-show', [app()->getLocale(), $service->id])}}"> {{$service->name}} </a></h6>
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
                                                <a href="{{route('service-show', [app()->getLocale(), $service->id])}}">
                                                    <img class="primary-img" src="/storage/{{$service->image}}" alt="{{$service->name}}">
                                                </a>
                                            </div>
                                            <div class="hiraola-product_content">
                                                <div class="product-desc_info">
                                                    <h6>@lang("Company"):  <a class="product-name" href="{{route('comp-show', ['language'=>app()->getLocale(), 'id'=>$service->company->id])}}">{{$service->company->name}}</a></h6>
                                                    <h6>@lang("Service"): <a class="product-name" href="{{route('service-show', [app()->getLocale(), $service->id])}}"> {{$service->name}} </a></h6>
                                                    <div class="product-short_desc">
                                                        <p> {!!$service->desc!!} </p>
                                                    </div>
                                                </div>
                                                <div class="add-actions">
                                                    <ul>
                                                        <li><a class="hiraola-add_cart" href="{{route('service-show', [app()->getLocale(), $service->id])}}" data-toggle="tooltip" data-placement="top" title="Batafsil Information">@lang("More")</a></li>
                                                        
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