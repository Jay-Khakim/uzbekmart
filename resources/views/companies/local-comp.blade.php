@extends('layouts.app')

@section('language')
    <li>
        <a href="{{route('local-comp', 'uz') }}"><img src="/assets/images/menu/icon/3.jpg" alt="JB's Language Icon">Uz</a>
    </li>
    <li>
        <a href="{{ route('local-comp', 'en')}}"><img src="/assets/images/menu/icon/1.jpg" alt="JB's Language Icon">En</a>
    </li>
    <li>
        <a href="{{route('local-comp', 'ru') }}"><img src="/assets/images/menu/icon/2.jpg" alt="JB's Language Icon">Ru</a>
    </li>
@endsection

@section('lang-mobile')
    <a href="{{route('local-comp', 'uz')}}"><img src="/assets/images/menu/icon/3.jpg" alt="JB's Language Icon">Uz</a>
    <a href="{{route('local-comp', 'en')}}"><img src="/assets/images/menu/icon/1.jpg" alt="JB's Language Icon">En</a>
    <a href="{{route('local-comp', 'ru')}}"><img src="/assets/images/menu/icon/2.jpg" alt="JB's Language Icon">Ru</a>
@endsection
@section('content')

{{-- Header section --}}
    <div class="breadcrumb-area">
        <div class="container">
            <div class="breadcrumb-content">
                <h2>@lang("Local companies")</h2>
                <ul>
                    <li><a href="{{route("main", app()->getLocale())}}">@lang("Home")</a></li>
                    <li>@lang("Companies")</a></li>
                    <li class="active">@lang("Local companies")</li>
                </ul>
            </div>
        </div>
    </div>
{{-- End of  Header section --}}

<!-- Begin Hiraola's Content Wrapper Area -->
        <div class="hiraola-content_wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 order-2 order-lg-2">
                        <div class="hiraola-sidebar-catagories_area">
                            
                            <div class="category-module hiraola-sidebar_categories">
                                <div class="category-module_heading">
                                    <h5>@lang("Categories")</h5>
                                </div>
                                <div class="module-body">
                                    <ul class="module-list_item">
                                        @foreach ($categories as $cat)
                                        <li>
                                            <a href="{{route('category-show', ['language'=>app()->getLocale(), 'id'=>$cat->id])}}">
                                                {{$cat->name}} 
                                            <span class="badge badge-pill badge-info">{{count(\App\Models\Company::where('category_id', $cat->id)->get())}}</span></a>
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="sidebar-banner_area">
                            <div class="banner-item img-hover_effect">
                                <a href="http://exportuz.com">
                                    <img src="/../assets/images/banner/1_1.jpg" alt="Hiraola's Shop Banner Image">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="shop-toolbar">
                            <div class="product-view-mode">
                                <a class=" grid-3" data-target="gridview-3" data-toggle="tooltip" data-placement="top" title="Grid View"><i class="fa fa-th"></i></a>
                                {{-- <a class="list" data-target="listview" data-toggle="tooltip" data-placement="top" title="List View"><i class="fa fa-th-list"></i></a> --}}
                            </div>
                            <span>@lang('Totally'): 
                                {{$localcomp->total()}}
                                @if (count($localcomp)>1)
                                    @lang('companies')
                                @else 
                                    @lang('company')
                                @endif

                            </span>
                        </div>
                        <div class="shop-product-wrap grid gridview-4 row">

                            {{-- Single company field --}}
                            @foreach ($localcomp as $local)
                                {{-- {{dd($local->id)}} --}}
                                {{-- {{dd(app()->getLocale())}} --}}
                                <div class="col-lg-4">
                                    <div class="slide-item">
                                        <div class="single_product">
                                            <div class="product-img">
                                                <a href="{{route('comp-show', ['language'=>app()->getLocale(), 'id'=>$local->id])}}">
                                                    <img class="primary-img" src="/storage/{{$local->image}}" alt="{{$local->name}}">
                                                </a>

                                                <span class="sticker-2">New</span>
                                            </div>
                                            <br>
                                            <div class="hiraola-product_content">
                                                <div class="product-desc_info">
                                                    <h5><span class="badge  badge-primary"> #{{$local->category->name}} </span></h5>
                                                    <h6 align="center"><a class="product-name" href="{{route('comp-show', [app()->getLocale(), $local->id])}}"> {{$local->name}} </a></h6>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="list-slide_item">
                                        <div class="single_product">
                                            <div class="product-img">
                                                <a href="{{route('comp-show', [app()->getLocale(), $local->id])}}">
                                                    <img class="primary-img" src=" {{$local->image}}" alt="{{$local->name}} ">
                                                </a>
                                            </div>
                                            <div class="hiraola-product_content">
                                                <div class="product-desc_info">
                                                    <h6><a class="product-name" href="{{route('comp-show', [app()->getLocale(), $local->id])}}"> {{$local->name}} </a></h6>
                                                    
                                                    <div class="product-short_desc">
                                                        <p>{{$local->desc}}</p>
                                                    </div>
                                                </div>
                                                <div class="add-actions">
                                                    <ul>
                                                        <li><a class="hiraola-add_cart" href="{{route('comp-show', [app()->getLocale(), $local->id])}}" data-toggle="tooltip" data-placement="top" title="More info">@lang("More")</a></li>
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
                    {{$localcomp->links()}}

                    </div>
                </div>
            </div>
        </div>
        <!-- Hiraola's Content Wrapper Area End Here -->
@endsection

@section('custom_js')
    <script>
        $(document).ready(function () {
            $('.product_sorting_btn').click(function () {
                let orderBy = $(this).data('order')
                $('.sorting_text').text($(this).find('span').text())
                $.ajax({
                    url: "{{route('local-comp' ,app()->getLocale())}}",
                    type: "GET",
                    data: {
                        orderBy: orderBy
                    },
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: (data) => {
                        let positionParameters = location.pathname.indexOf('?');
                        let url = location.pathname.substring(positionParameters,location.pathname.length);
                        let newURL = url + '?'; // http://127.0.0.1:8001/phones?
                        // console.log(newURL);
                        newURL += 'orderBy=' + orderBy; // http://127.0.0.1:8001/phones?orderBy=name-z-a
                        history.pushState({}, '', newURL);
                        $('.product_grid').html(data)
                        $('.product_grid').isotope('destroy')
                        $('.product_grid').imagesLoaded( function() {
                            let grid = $('.product_grid').isotope({
                                itemSelector: '.product',
                                layoutMode: 'fitRows',
                                fitRows:
                                    {
                                        gutter: 30
                                    }
                            });
                        });
                    }
                });
            })
        })
    </script>
@endsection