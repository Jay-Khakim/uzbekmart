@extends('layouts.app')
@section('language')
    {{-- <li>
        <a href="{{route('search', 'uz') }}"><img src="/assets/images/menu/icon/3.jpg" alt="JB's Language Icon">Uz</a>
    </li>
    <li>
        <a href="{{ route('search', 'en')}}"><img src="/assets/images/menu/icon/1.jpg" alt="JB's Language Icon">En</a>
    </li>
    <li>
        <a href="{{route('search', 'ru') }}"><img src="/assets/images/menu/icon/2.jpg" alt="JB's Language Icon">Ru</a>
    </li> --}}
@endsection

@section('lang-mobile')
    {{-- <a href="{{route('search', 'uz')}}"><img src="/assets/images/menu/icon/3.jpg" alt="JB's Language Icon">Uz</a>
    <a href="{{route('search', 'en')}}"><img src="/assets/images/menu/icon/1.jpg" alt="JB's Language Icon">En</a>
    <a href="{{route('search', 'ru')}}"><img src="/assets/images/menu/icon/2.jpg" alt="JB's Language Icon">Ru</a> --}}
@endsection

@section('content')
    <!-- Begin Hiraola's Breadcrumb Area -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="breadcrumb-content">
                <h2> '{{$_GET['query']}}'</h2>
                <ul>
                    <li><a href="{{route("main", app()->getLocale())}}">@lang("Home")</a></li>
                    <li class="active">@lang("Search")</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Hiraola's Breadcrumb Area End Here -->
    

    <!-- Begin Hiraola's Content Wrapper Area -->
    <div class="hiraola-content_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 order-2 order-lg-2 mt-4">
                    <div class="hiraola-sidebar-catagories_area">

                        <div class="category-module hiraola-sidebar_categories">
                            <div class="category-module_heading">
                                <h5>@lang("Sections")</h5>
                            </div>
                            <div class="module-body">
                                <ul class="module-list_item">
                                    <li>
                                        <a href="javascript:void(0)">@lang("Companies") <span class="badge badge-pill badge-info"> {{count($companies)}} </span></a>
                                        <a href="javascript:void(0)">@lang("Products") <span class="badge badge-pill badge-info">{{count($products)}}</span></a>
                                        <a href="javascript:void(0)">@lang("Blog") <span class="badge badge-pill badge-info">{{count($blogs)}}</span></a>
                                        <a href="javascript:void(0)">@lang("Services") <span class="badge badge-pill badge-info">{{count($services)}}</span></a>
                                        <a href="javascript:void(0)">@lang("Investments") <span class="badge badge-pill badge-info">{{count($investments)}}</span></a>
                                        <a href="javascript:void(0)">@lang("Buy/Requests") <span class="badge badge-pill badge-info">{{count($buyrequests)}}</span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                    <div class="sidebar-banner_area">
                        <div class="banner-item img-hover_effect">
                            <a href="javascript:void(0)">
                                <img src="/assets/images/banner/1_1.jpg" alt="Hiraola's Shop Banner Image">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 order-1 order-lg-1">
                    <div class="shop-product-wrap grid listview row">
                        <h3>@lang("Search results"):  {{count($companies)+count($buyrequests)+count($products)+count($services)+count($investments)+count($blogs)}}</h3>
                        @if (count($companies)>0)
                        {{-- <br>
                        <h4>@lang('Companies')</h4> --}}
                            @foreach ($companies as $company)
                                
                                <div class="col-lg-4">
                                    <div class="slide-item">
                                        <div class="single_product">
                                            <div class="product-img">
                                                <a href="{{route('comp-show', ['language'=>app()->getLocale(), 'id'=>$company->id])}}">
                                                    <img class="primary-img" src="/storage/{{$company->image}}" alt="{{$company->name}}">
                                                </a>
                                            </div>
                                            <div class="hiraola-product_content">
                                                <div class="product-desc_info">
                                                    <h6 align="center"><a class="product-name" href="{{route('comp-show', ['language'=>app()->getLocale(), 'id'=>$company->id])}}">{{$company->name}}</a></h6>
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
                                                <a href="{{route('comp-show', ['language'=>app()->getLocale(), 'id'=>$company->id])}}">
                                                    <img class="primary-img" src="/storage/{{$company->image}}" alt="{{$company->name}}">
                                                </a>
                                            </div>
                                            <div class="hiraola-product_content">
                                                <div class="product-desc_info">
                                                    <h6><a class="product-name" href="{{route('comp-show', ['language'=>app()->getLocale(), 'id'=>$company->id])}}">{{$company->name}}</a></h6>
                                                    <div class="product-short_desc">
                                                        <p>
                                                            @php
                                                                if(strlen($company->desc)> 150){
                                                                    echo substr($company->desc, 0, 150)."...";
                                                                }else {
                                                                    echo $company->desc;
                                                                } 
                                                            @endphp
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="add-actions">
                                                    <ul>
                                                        <li><a class="hiraola-add_cart" href="{{route('comp-show', ['language'=>app()->getLocale(), 'id'=>$company->id])}}" data-toggle="tooltip" data-placement="top" title="Batafsil Information">@lang("More")</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif 

                        @if (count($products)>0)
                            @foreach ($products as $product)
                                <div class="col-lg-4">
                                    <div class="slide-item">
                                        <div class="single_product">
                                            <div class="product-img">
                                                <a href="{{route('product-show', ['language'=>app()->getLocale(), 'id'=>$product->company->id, 'pid'=>$product->id])}}">
                                                    <img class="primary-img" src="/storage/{{$product->image}}" alt="{{$product->name}}">
                                                </a>
                                                {{-- <span class="sticker-2">New</span> --}}
                                            </div>
                                            <div class="hiraola-product_content">
                                                <div class="product-desc_info">
                                                    <h6 align="center"><a class="product-name" href="{{route('product-show', ['language'=>app()->getLocale(), 'id'=>$product->company->id, 'pid'=>$product->id])}}">{{$product->name}}</a></h6>
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
                                                <a href="{{route('product-show', ['language'=>app()->getLocale(), 'id'=>$product->company->id, 'pid'=>$product->id])}}">
                                                    <img class="primary-img" src="/storage/{{$product->image}}" alt="Hiraola's Product Image">
                                                </a>
                                            </div>
                                            <div class="hiraola-product_content">
                                                <div class="product-desc_info">
                                                    <h6><a class="product-name" href="{{route('product-show', ['language'=>app()->getLocale(), 'id'=>$product->company->id, 'pid'=>$product->id])}}">{{$product->name}}</a></h6>
                                                    <div class="product-short_desc">
                                                        <p>
                                                            @php
                                                            if(strlen($product->desc)> 150){
                                                                echo substr($product->desc, 0, 150)."...";
                                                            }else {
                                                                echo $product->desc;
                                                            } 
                                                        @endphp
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="add-actions">
                                                    <ul>
                                                        <li><a class="hiraola-add_cart" href="{{route('product-show', ['language'=>app()->getLocale(), 'id'=>$product->company->id, 'pid'=>$product->id])}}" data-toggle="tooltip" data-placement="top" title="Batafsil Information">@lang("More")</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            
                        @endif


                        @if (count($services)>0)
                            @foreach ($services as $service)
                                <div class="col-lg-4">
                                    <div class="slide-item">
                                        <div class="single_product">
                                            <div class="product-img">
                                                <a href="{{route('service-show', [app()->getLocale(), $service->id])}}">
                                                    <img class="primary-img" src="/storage/{{$service->image}}" alt="{{$service->service}}">
                                                </a>
                                                {{-- <span class="sticker-2">New</span> --}}
                                            </div>
                                            <div class="hiraola-product_content">
                                                <div class="product-desc_info">
                                                    <h6 align="center"><a class="product-name" href="{{route('service-show', [app()->getLocale(), $service->id])}}">{{$service->service}}</a></h6>
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
                                                    <img class="primary-img" src="/storage/{{$service->image}}" alt="{{$service->service}}">
                                                </a>
                                            </div>
                                            <div class="hiraola-product_content">
                                                <div class="product-desc_info">
                                                    <h6><a class="product-name" href="{{route('service-show', [app()->getLocale(), $service->id])}}">{{$service->service}}</a></h6>
                                                    <div class="product-short_desc">
                                                        <p>
                                                            @php
                                                            if(strlen($service->desc)> 150){
                                                                echo substr($service->desc, 0, 150)."...";
                                                            }else {
                                                                echo $service->desc;
                                                            } 
                                                        @endphp
                                                        </p>
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
                        @endif

                        @if (count($blogs)>0)
                            @foreach ($blogs as $blog)
                                <div class="col-lg-4">
                                    <div class="slide-item">
                                        <div class="single_product">
                                            <div class="product-img">
                                                <a href="{{route('single-blog', ['language'=>app()->getLocale(), 'id'=>$blog->id])}}">
                                                    <img class="primary-img" src="/storage/{{$blog->image}}" alt="{{$blog->title}}">
                                                </a>
                                                {{-- <span class="sticker-2">New</span> --}}
                                            </div>
                                            <div class="hiraola-product_content">
                                                <div class="product-desc_info">
                                                    <h6 align="center"><a class="product-name" href="{{route('single-blog', ['language'=>app()->getLocale(), 'id'=>$blog->id])}}">{{$blog->title}}</a></h6>
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
                                                <a href="{{route('single-blog', ['language'=>app()->getLocale(), 'id'=>$blog->id])}}">
                                                    <img class="primary-img" src="/storage/{{$blog->image}}" alt="{{$blog->title}}">
                                                </a>
                                            </div>
                                            <div class="hiraola-product_content">
                                                <div class="product-desc_info">
                                                    <h6><a class="product-name" href="{{route('single-blog', ['language'=>app()->getLocale(), 'id'=>$blog->id])}}">{{$blog->title}}</a></h6>
                                                    <div class="product-short_desc">
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
                                                </div>
                                                <div class="add-actions">
                                                    <ul>
                                                        <li><a class="hiraola-add_cart" href="{{route('single-blog', ['language'=>app()->getLocale(), 'id'=>$blog->id])}}" data-toggle="tooltip" data-placement="top" title="Batafsil Information">@lang("More")</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif

                        @if (count($investments)>0)
                            @foreach ($investments as $invest)
                                <div class="col-lg-4">
                                    <div class="list-slide_item">
                                        <div class="single_product">
                                            <div class="product-img">
                                                <a href="javascript:void(0)">
                                                    <img class="primary-img" src="/assets/images/i/01.jpg" alt="{{$invest->title}}">
                                                </a>
                                            </div>
                                            <div class="hiraola-product_content">
                                                <div class="product-desc_info">
                                                    <h4><a class="product-name" href="javascript:void(0)">“{{$invest->title}}"</a></h4>
                                                    
                                                    <div class="product-short_desc">
                                                        {{-- <p>{{$invest->amount}}</p> --}}
                                                        <b>@lang("Address"): </b>{{$invest->address}}<br>
                                                        <b>@lang("Project name"):</b> {{$invest->title}} <br>
                                                        <b>@lang("Category"):</b> {{$invest->category->name}}<br>
                                                        <b>@lang("Avarage power")</b>: {{$invest->avaragepower}}<br>
                                                        <b>@lang("Amount ($ mln)")</b>: {{$invest->amount}} <br>
                                                        <b>@lang("IRR (fin), for 10 years (%)")</b>: {{$invest->iir}} <br>
                                                        <b>@lang("NPV (fin), for 10 years (%)")</b>: {{$invest->npv}} <br>
                                                        <b>@lang("Payback (mounths)")</b>: {{$invest->payback}} <br>
                                                        <b>@lang("Work places")</b>: {{$invest->workplaces}} <br>
                                                        <b>@lang("Phone")</b>: +998 71 145 45 02 <br>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif    

                        @if (count($buyrequests)>0)
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
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hiraola's Content Wrapper Area End Here -->
@endsection