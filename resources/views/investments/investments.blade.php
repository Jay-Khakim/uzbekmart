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
                            </div>
                            
                            <div class="category-module hiraola-sidebar_categories">
                                <div class="category-module_heading">
                                    <h5>@lang("Categories")</h5>
                                </div>
                                <div class="module-body">
                                    <ul class="module-list_item">
                                        <li>
                                            @foreach ($categories as $category)
                                                <a href="javascript:void(0)">{{$category->name}} (
                                                    {{count(\App\Models\Investment::where('category_id', $category->id)->get())}}
                                                )</a>
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
                            <span>@lang('Totally'): 
                                {{count($investments)}}
                                @if (count($investments)>1)
                                    @lang('investment projects')
                                @else 
                                    @lang('investment project')
                                @endif

                            </span>
                             {{-- <div class="product-item-selection_area">
                                <div class="product-short">
                                    <label class="select-label">@lang("Regions"):</label><br>
                                    <select class="nice-select" id='region_select'>
                                        <option class="option" value="selected">@lang("Select")</option>
                                        <option class="option" value="Tashkent city">@lang("Tashkent city")</option>
                                        <option class="option" value="Tashkent region">@lang("Tashkent region")</option>
                                        <option class="option" value="Andijan region">@lang("Andijan region")</option>
                                        <option class="option" value="Bukhara region">@lang("Bukhara region")</option>
                                        <option class="option" value="Fergana region">@lang("Fergana regiron")</option>
                                        <option class="option" value="Jizzakh region">@lang("Jizzakh region")</option>
                                        <option class="option" value="Khorezm region">@lang("Khorezm region")</option>
                                        <option class="option" value="Namangan region">@lang("Namangan region")</option>
                                        <option class="option" value="Navoiy region">@lang("Navoiy region")</option>
                                        <option class="option" value="Kashkadarya region">@lang("Kashkadarya region")</option>
                                        <option class="option" value="Karakalpakstan Republic">@lang("Karakalpakstan Republic")</option>
                                        <option class="option" value="Samarkhand region">@lang("Samarkhand region")</option>
                                        <option class="option" value="Sirdarya region">@lang("Sirdarya region") </option>
                                        <option class="option" value="Surkhandarya region">@lang("Surkhandarya region")</option>
                                    </select>
                                </div>
                            </div>
                            <div id="sort1" class="product-item-selection_area">
                                <div class="product-short">
                                    <label class="select-label">@lang("Categories"):</label><br>
                                    <select class="nice-select" id="catID">
                                        <option value="selected">@lang("Select")</option>
                                        @foreach ($categories as $cat)
                                            <option class="option" value=" {{$cat->id}} ">{{$cat->name}}</option>     
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <h4 align="center">
                                <button name="sort" id="findBtn" class="btn btn-primary">@lang('Search')</button>
                            </h4> --}}
                            
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
                                                        <b>@lang("Payback (months)")</b>: {{$invest->payback}} <br>
                                                        <b>@lang("Work places")</b>: {{$invest->workplaces}} <br>
                                                        <b>@lang("Phone")</b>: +998 71 145 45 02 <br>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        {{$investments->links()}}
                    </div>
                </div>
            </div>
        </div>
        <!-- Hiraola's Content Wrapper Area End Here -->
@endsection

@section('custom_js')
    <script>
        $(document).ready(function(){
            $("#findBtn").click(function(){
                var cat = $("#catID").val();
                var region = $('#region_select').val();
                $.ajax({
                type: 'get',
                dataType: 'html',
                url: '{{route("investments", app()->getLocale() ) }}',
                data: 'cat_id=' + cat + '&region=' + region,
                success:function(response){
                    console.log(response);
                    $("#productData").html(response);
                }
                });
            });
        });
    </script>
@endsection