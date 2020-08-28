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
            <div class="col-lg-12">
                <div class="shop-toolbar">
                    <div class="product-view-mode">
                        <a class=" grid-3" data-target="gridview-3" data-toggle="tooltip" data-placement="top" title="Grid View"><i class="fa fa-th"></i></a>
                        {{-- <a class="list" data-target="listview" data-toggle="tooltip" data-placement="top" title="List View"><i class="fa fa-th-list"></i></a> --}}
                    </div>
                    <div class="product-item-selection_area">
                        <div class="product-short">
                            <label class="select-label">@lang("Sort By"):</label>
                            <select class="nice-select">
                                <option value="1">@lang("Relevance")</option>
                                <option value="2">@lang("Name, A to Z")</option>
                                <option value="3">@lang("Name, Z to A")</option>
                                <option value="5">@lang("Model (A - Z)")</option>
                                <option value="5">@lang("Model (Z - A)")</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="shop-product-wrap grid gridview-5 row">

                    {{-- Single company field --}}
                    @foreach ($one_subcategories as $one)
                        <div class="col-lg-4">
                            <div class="slide-item">
                                <div class="single_product">
                                    <div class="product-img">
                                        <a href="{{route('comp-show', ['language'=>app()->getLocale(), 'id'=>$one->id])}}">
                                            <img class="primary-img" src="/storage/{{$one->image}}" alt="{{$one->name}}">
                                        </a>

                                        <span class="sticker-2">New</span>
                                    </div>
                                    <br>
                                    <div class="hiraola-product_content">
                                        <div class="product-desc_info">
                                            <h5><span class="badge  badge-primary"> #{{$one->category->name}} </span></h5>
                                            <h6 align="center"><a class="product-name" href="{{route('comp-show', [app()->getLocale(), $one->id])}}"> {{$one->name}} </a></h6>
                                            
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
            </div>
        </div>
    </div>
</div>

@endsection