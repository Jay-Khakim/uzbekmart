@extends('layouts.app')
@section('language')
    <li>
        <a href="{{route('investments', 'uz') }}"><img src="/assets/images/menu/icon/3.jpg" alt="JB's Language Icon">Uz</a>
    </li>
    <li>
        <a href="{{ route('investments', 'en')}}"><img src="/assets/images/menu/icon/1.jpg" alt="JB's Language Icon">En</a>
    </li>
    <li>
        <a href="{{route('investments', 'ru') }}"><img src="/assets/images/menu/icon/2.jpg" alt="JB's Language Icon">Ru</a>
    </li>
@endsection

@section('lang-mobile')
    <a href="{{route('investments', 'uz')}}"><img src="/assets/images/menu/icon/3.jpg" alt="JB's Language Icon">Uz</a>
    <a href="{{route('investments', 'en')}}"><img src="/assets/images/menu/icon/1.jpg" alt="JB's Language Icon">En</a>
    <a href="{{route('investments', 'ru')}}"><img src="/assets/images/menu/icon/2.jpg" alt="JB's Language Icon">Ru</a>
@endsection

@section('content')
    <!-- Begin Hiraola's Breadcrumb Area -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="breadcrumb-content">
                <h2>@lang("Investment projects")</h2>
                <ul>
                    <li><a href="{{route('main' ,app()->getLocale())}}">@lang("Home")</a></li>
                    <li class="active">@lang("Investment projects")</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Hiraola's Breadcrumb Area End Here -->


    <!-- Begin Hiraola's Content Wrapper Area -->
        <div class="hiraola-content_wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 order-2 order-lg-1">
                        <div class="hiraola-sidebar-catagories_area">
                            <div class="hiraola-sidebar_categories">
                                <div class="hiraola-categories_title">
                                    <h5 align="center">@lang("Amount of investments: ")</h5>
                                    <h5 align="center">$
                                        @php
                                            $sum = 0;
                                            foreach($investments as $invest){
                                                $sum = $sum + $invest->amount;
                                            }
                                            echo $sum;
                                        @endphp 
                                    </h5>
                                </div>
                                {{-- <div class="price-filter">
                                    <div id="slider-range"></div>
                                    <div class="price-slider-amount">
                                        <div class="label-input">
                                            <label>@lang("price") : </label>
                                            <input type="text" id="amount" name="price" placeholder="Add Your Price" />
                                        </div>
                                        <button type="button">Filter</button>
                                    </div>
                                </div> --}}
                            </div>
                            
                            <div class="category-module hiraola-sidebar_categories">
                                <div class="category-module_heading">
                                    <h5>@lang("Categories")</h5>
                                </div>
                                <div class="module-body">
                                    <ul class="module-list_item">
                                        <li>
                                            @foreach ($categories as $category)
                                                <a href="javascript:void(0)">{{$category->name}} (@foreach ($investments as $invest)
                                                    @php
                                                        $a = 0;
                                                        if ($invest->category_id === $category->id) {
                                                            $a = $a+1;
                                                        }
                                                        echo $a;
                                                    @endphp
                                                    @endforeach)
                                                </a>
                                            @endforeach
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <div class="col-lg-9 order-1 order-lg-2">
                        <div class="shop-toolbar">
                            <div class="product-view-mode">
                                {{-- <a class="active grid-3" data-target="gridview-3" data-toggle="tooltip" data-placement="top" title="Grid View"><i class="fa fa-th"></i></a> --}}
                                <a class=" active list" data-target="listview" data-toggle="tooltip" data-placement="top" title="List View"><i class="fa fa-th-list"></i></a>
                            </div>
                             <div class="product-item-selection_area">
                                <div class="product-short">
                                    <label class="select-label">@lang("Regions"):</label><br>
                                    <select class="nice-select">
                                        <option value="selected">@lang("Select")</option>
                                        <option value="Tashkent city">@lang("Tashkent city")</option>
                                        <option value="Tashkent region">@lang("Tashkent region")</option>
                                        <option value="Andijan region">@lang("Andijan region")</option>
                                        <option value="Bukhara region">@lang("Bukhara region")</option>
                                        <option value="Fergana regiron">@lang("Fergana regiron")</option>
                                        <option value="Jizzakh region">@lang("Jizzakh region")</option>
                                        <option value="Khorezm region">@lang("Khorezm region")</option>
                                        <option value="Namangan region">@lang("Namangan region")</option>
                                        <option value="Navoiy region">@lang("Navoiy region")</option>
                                        <option value="Kashkadarya region">@lang("Kashkadarya region")</option>
                                        <option value="Karakalpakstan Republic">@lang("Karakalpakstan Republic")</option>
                                        <option value="Samarkhand region">@lang("Samarkhand region")</option>
                                        <option value="Sirdarya region">@lang("Sirdarya region") </option>
                                        <option value="Surkhandarya region">@lang("Surkhandarya region")</option>
                                    </select>
                                </div>
                            </div>
                            <div id="sort1" class="product-item-selection_area">
                                <div class="product-short">
                                    <label class="select-label">@lang("Categories"):</label><br>
                                    <select class="nice-select">
                                        <option value="selected">@lang("Select")</option>
                                        @foreach ($categories as $cat)
                                            <option value=" {{$cat->name_en}} ">{{$cat->name}}</option>     
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <h4 align="center"><input type="button" name="sort" id="btn22" class="btn btn-primary" value="@lang('Search')"></h4>
                            
                        </div>
                        <div class="shop-product-wrap grid listview row">
                            
                            @foreach ($investments as $invest)
                                <div class="col-lg-4">
                                    {{-- <div class="slide-item">
                                        <div class="single_product">
                                            <div class="product-img">
                                                <a href="company/local/l32.html">
                                                    <img class="primary-img" src="/assets/images/i/01.jpg" alt="{{$invest->title}}">
                                                </a>
                                                <span class="sticker-2">New</span>
                                            </div>
                                            <div class="hiraola-product_content">
                                                <div class="product-desc_info">
                                                    <h6 align="center"><a class="product-name" href="company/local/l32.html">“ {{$invest->title}} "</a></h6>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div> --}}
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
                        {{-- <div class="row">
                            <div class="col-lg-12">
                                <div class="hiraola-paginatoin-area">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-6">
                                            <ul class="hiraola-pagination-box">
                                                <li class="active"><a href="javascript:void(0)">1</a></li>
                                                <li><a href="javascript:void(0)">2</a></li>
                                                <li><a href="javascript:void(0)">3</a></li>
                                                <li><a class="Next" href="javascript:void(0)"><i
                                                        class="ion-ios-arrow-right"></i></a></li>
                                                <li><a class="Next" href="javascript:void(0)">>|</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6">
                                            <div class="product-select-box">
                                                <div class="product-short">
                                                    <p>Showing 1 to 12 of 18 (2 Pages)</p>
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