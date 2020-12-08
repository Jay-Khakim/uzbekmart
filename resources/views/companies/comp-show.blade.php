@extends('layouts.app')

@section('language')
    <li>
        <a href="{{route('comp-show', ['language' => 'uz', 'id' => $company->id])}}"><img src="/assets/images/menu/icon/3.jpg" alt="JB's Language Icon">Uz</a>
    </li>
    <li>
        <a href="{{ route('comp-show', ['language' => 'en', 'id' => $company->id])}}"><img src="/assets/images/menu/icon/1.jpg" alt="JB's Language Icon">En</a>
    </li>
    <li>
        <a href="{{route('comp-show', ['language' => 'ru', 'id' => $company->id]) }}"><img src="/assets/images/menu/icon/2.jpg" alt="JB's Language Icon">Ru</a>
    </li>
@endsection
@section('lang-mobile')
    <a href="{{route('comp-show', ['language' => 'uz', 'id' => $company->id])}}"><img src="/assets/images/menu/icon/3.jpg" alt="JB's Language Icon">Uz</a>
    <a href="{{route('comp-show', ['language' => 'ru', 'id' => $company->id]) }}"><img src="/assets/images/menu/icon/2.jpg" alt="JB's Language Icon">Ru</a>
    <a href="{{route('comp-show', ['language' => 'en', 'id' => $company->id])}}"><img src="/assets/images/menu/icon/1.jpg" alt="JB's Language Icon">En</a>
@endsection

@section('content')
    <!-- Begin Hiraola's Breadcrumb Area -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="breadcrumb-content">
                <h2>{{$company->name}}</h2>
                <ul>
                    <li><a href="{{route('main' ,app()->getLocale())}}">@lang("Home")</a></li>
                    <li class="active">
                            @if($company->companytype === 'local')
                                @lang("Local company")
                            @else 
                                @lang("Foreign company")
                            @endif
                        
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Hiraola's Breadcrumb Area End Here -->

    <!-- Begin Hiraola's Single Product Area -->
    <div class="sp-area">
        <div class="container">
            <div class="sp-nav">
                <div class="row">
                    <div class="col-lg-5 col-md-5">
                        <div class="sp-img_area">
                            <div class="zoompro-border">
                                <img  src="/storage/{{$company->image}}" alt=" {{$company->name}} " />
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-7">
                        <div class="sp-content">
                            <div class="sp-heading">
                                <h5><a href="{{route('comp-show', ['language'=>app()->getLocale(), 'id'=>$company->id])}}">{{$company->name}}</a></h5>
                            </div>
                            <span class="reference">
                                @if($company->companytype === 'local')
                                    @lang("Local company")
                                @else 
                                    @lang("Foreign company")
                                @endif
                            </span>
                            <hr>
                            <div class="sp-essential_stuff">
                                <ul>
                                    <h5><span class="badge  badge-primary">#{{$company->category->name}}</span></h5>
                                    <br>
                                    <li><b>@lang("Phone"): </b> <span>&nbsp;&nbsp;{{$company->phone}}</span></li>
                                    <br>
                                    <li><b>@lang("Website"): </b><span>&nbsp;&nbsp;
                                        @if($company->web)
                                            <a href="{{$company->web}}">{{$company->web}}</a>
                                        @else 
                                            @lang("Not exist yet")
                                        @endif
                                    </span>
                                    </li>
                                    <br>
                                    <li><b>@lang("Email"): </b><a href="javascript:void(0)">{{$company->email}}</a></li>
                                    <br>
                                    <li><b>@lang("Address")</b>:  {{$company->address}}</li>
                                    <br>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hiraola's Single Product Area End Here -->

    <!-- Begin Hiraola's Single Product Tab Area -->
    <div class="hiraola-product-tab_area-2 sp-product-tab_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="sp-product-tab_nav ">
                        <div class="product-tab">
                            <ul class="nav product-menu">
                                <li><a class="active" data-toggle="tab" href="#description"><span>@lang("Description")</span></a></li>
                            </ul>
                        </div>
                        <div class="tab-content hiraola-tab_content">
                            <div id="description" class="tab-pane active show" role="tabpanel">
                                <div class="product-description">
                                    <ul>
                                        <li>
                                            <strong>{{$company->name}}</strong>
                                            <span>{!!$company->desc!!}</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hiraola's Single Product Tab Area End Here -->

    <!-- Begin Hiraola's Product Area Two -->
    <div class="hiraola-product_area hiraola-product_area-2 section-space_add">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="hiraola-section_title">
                        <h4>@lang("Company Products")</h4>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="hiraola-product_slider-3">
                        @if(count($products)>0)
                            @foreach ($products as $product)
                                <!-- Begin Hiraola's Slide Item Area -->
                                <div class="slide-item">
                                    <div class="single_product">
                                        <div class="product-img">
                                            <a href="{{route('product-show', ['language'=>app()->getLocale(), 'id'=>$company->id, 'pid'=>$product->id])}}">
                                                <img class="primary-img" src="/storage/{{$product->image}} " alt="{{$product->name}}">
                                            </a>
                                            {{-- <span class="sticker-2">{{$product->name}}</span> --}}
                                        </div>
                                        <div class="hiraola-product_content">
                                            <div class="product-desc_info">
                                                <br>
                                                <h6 align="center"><a class="product-name" href="{{route('product-show', ['language'=>app()->getLocale(), 'id'=>$company->id, 'pid'=>$product->id])}}">{{$product->name}}</a></h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Hiraola's Slide Item Area End Here -->

                            @endforeach
                        @else
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;@lang("Not found")
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hiraola's Product Area Two End Here -->

@endsection