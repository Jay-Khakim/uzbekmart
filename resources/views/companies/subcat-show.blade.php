@extends('layouts.app')
@section('language')
    <li>
        <a href="{{route('subcategory-show', ['language' => 'uz', 'cid' => $cat_id, 'sid'=> $subcat_id])}}"><img src="/assets/images/menu/icon/3.jpg" alt="JB's Language Icon">Uz</a>
    </li>
    <li>
        <a href="{{ route('subcategory-show', ['language' => 'en', 'cid' => $cat_id, 'sid'=> $subcat_id])}}"><img src="/assets/images/menu/icon/1.jpg" alt="JB's Language Icon">En</a>
    </li>
    <li>
        <a href="{{route('subcategory-show', ['language' => 'ru', 'cid' => $cat_id, 'sid'=> $subcat_id]) }}"><img src="/assets/images/menu/icon/2.jpg" alt="JB's Language Icon">Ru</a>
    </li>
@endsection

@section('lang-mobile')
    <a href="{{route('subcategory-show', ['language' => 'uz', 'cid' => $cat_id, 'sid'=> $subcat_id])}}"><img src="/assets/images/menu/icon/3.jpg" alt="JB's Language Icon">Uz</a>
    <a href="{{route('subcategory-show', ['language' => 'en', 'cid' => $cat_id, 'sid'=> $subcat_id])}}"><img src="/assets/images/menu/icon/1.jpg" alt="JB's Language Icon">En</a>
    <a href="{{route('subcategory-show', ['language' => 'ru', 'cid' => $cat_id, 'sid'=> $subcat_id])}}"><img src="/assets/images/menu/icon/2.jpg" alt="JB's Language Icon">Ru</a>
@endsection

@section('content')
    {{-- Header section --}}
    <div class="breadcrumb-area">
        <div class="container">
            <div class="breadcrumb-content">
                <h2># {{$category->name}} </h2>
                <h3># {{$subcategory->name}} </h3>
            </div>
        </div>
    </div>
{{-- End of  Header section --}}

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
                        {{count($one_subcategories)}}
                        @if (count($one_subcategories)>1)
                            @lang('companies')
                        @else 
                            @lang('company')
                        @endif

                    </span>
                </div>
                <div class="shop-product-wrap grid gridview-4 row">

                    {{-- Single company field --}}
                    @foreach ($one_subcategories as $one)
                        <div class="col-lg-4">
                            <div class="slide-item">
                                <div class="single_product">
                                    <div class="product-img">
                                        <a href="{{route('comp-show', ['language'=>app()->getLocale(), 'id'=>$one->id])}}">
                                            <img class="primary-img" src="/storage/{{$one->image}}" alt="{{$one->name}}">
                                        </a>

                                        @if (($dt->dayOfYear - $one->created_at->dayOfYear) < 7 )
                                            <span class="sticker-2">New</span>
                                        @endif
                                    </div>
                                    <br>
                                    <div class="hiraola-product_content">
                                        <div class="product-desc_info">
                                            <h5><span class="badge  badge-primary"> #{{$one->category->name}} </span></h5>
                                            <h6 align="center">
                                                <a class="product-name" href="{{route('comp-show', [app()->getLocale(), $one->id])}}">
                                                    @php
                                                    if(strlen($one->name)> 23){
                                                        echo substr($one->name, 0, 23)."...";
                                                    }else {
                                                        echo $one->name;
                                                    }  
                                                    @endphp 
                                                </a>
                                            </h6>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="list-slide_item">
                                <div class="single_product">
                                    <div class="product-img">
                                        <a href="{{route('comp-show', [app()->getLocale(), $one->id])}}">
                                            <img class="primary-img" src=" {{$one->image}}" alt="{{$one->name}} ">
                                        </a>
                                    </div>
                                    <div class="hiraola-product_content">
                                        <div class="product-desc_info">
                                            <h6><a class="product-name" href="{{route('comp-show', [app()->getLocale(), $one->id])}}"> {{$one->name}} </a></h6>
                                            
                                            <div class="product-short_desc">
                                                <p>{{$one->desc}}</p>
                                            </div>
                                        </div>
                                        <div class="add-actions">
                                            <ul>
                                                <li><a class="hiraola-add_cart" href="{{route('comp-show', [app()->getLocale(), $one->id])}}" data-toggle="tooltip" data-placement="top" title="More info">@lang("More")</a></li>
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
            {{$one_subcategories->links()}}
            </div>
        </div>
    </div>
</div>

@endsection