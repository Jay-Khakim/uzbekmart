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
                                    <h5><a href="#">{{$company->name}}</a></h5>
                                </div>
                                <span class="reference">
                                    @lang("Company type"):
                                    @if($company->companytype === 'local')
                                        @lang("Local company")
                                    @else 
                                        @lang("Foreign company")
                                    @endif
                                </span>
                                <hr>
                                {{-- <div class="rating-box">
                                    <ul>
                                        <li><i class="fa fa-star-of-david"></i></li>
                                        <li><i class="fa fa-star-of-david"></i></li>
                                        <li><i class="fa fa-star-of-david"></i></li>
                                        <li><i class="fa fa-star-of-david"></i></li>
                                        <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                    </ul>
                                </div> --}}
                                <div class="sp-essential_stuff">
                                    <ul>
                                        <li><b>@lang("Address")</b>:  {{$company->address}}</li>
                                        <br>
                                        <li><b>@lang("Phone"): </b> <span>&nbsp;&nbsp;{{$company->phone}}</span></li>
                                        <br>
                                        {{-- <li><b>@lang("Company ID"): </b><span>L1</span></li> --}}
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
                                    </ul>
                                </div>
                                {{-- <div class="hiraola-tag-line">
                                    <h6>Tags:</h6>
                                    <a href="javascript:void(0)">Local</a>,
                                    <a href="javascript:void(0)">Company</a>,
                                    <a href="javascript:void(0)">LLC</a>
                                </div> --}}
                                {{-- <div class="hiraola-social_link">
                                    <ul>
                                        <li class="facebook">
                                            <a href="https://www.facebook.com" data-toggle="tooltip" target="_blank" title="Facebook">
                                                <i class="fab fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li class="twitter">
                                            <a href="https://twitter.com" data-toggle="tooltip" target="_blank" title="Twitter">
                                                <i class="fab fa-twitter-square"></i>
                                            </a>
                                        </li>
                                        <li class="youtube">
                                            <a href="https://www.youtube.com" data-toggle="tooltip" target="_blank" title="Youtube">
                                                <i class="fab fa-youtube"></i>
                                            </a>
                                        </li>
                                        <li class="google-plus">
                                            <a href="https://www.plus.google.com/discover" data-toggle="tooltip" target="_blank" title="Google Plus">
                                                <i class="fab fa-google-plus"></i>
                                            </a>
                                        </li>
                                        <li class="instagram">
                                            <a href="https://rss.com" data-toggle="tooltip" target="_blank" title="Instagram">
                                                <i class="fab fa-instagram"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div> --}}
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
                    @if(count($products)>0)
                        @foreach ($products as $product)
                            <div class="col-lg-12">
                                <div class="hiraola-product_slider-3">


                                    <!-- Begin Hiraola's Slide Item Area -->
                                    <div class="slide-item">
                                        <div class="single_product">
                                            <div class="product-img">
                                                <a href="product/l20-1.html">
                                                    <img class="primary-img" src="/storage/ {{$product->image}} " alt="{{$product->name}}">
                                                </a>
                                                <span class="sticker-2">New</span>
                                            </div>
                                            <div class="hiraola-product_content">
                                                <div class="product-desc_info">
                                                    <h6 align="center"><a class="product-name" href="product/l20-1.html">{{$product->name}}</a></h6>
                                                    
                                                    <div class="additional-add_action">
                                                        <ul>
                                                            <li class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><a href="javascript:void(0)" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    {{-- <div class="rating-box">
                                                        <ul>
                                                            <li><i class="fa fa-star-of-david"></i></li>
                                                            <li><i class="fa fa-star-of-david"></i></li>
                                                            <li><i class="fa fa-star-of-david"></i></li>
                                                            <li><i class="fa fa-star-of-david"></i></li>
                                                            <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                        </ul>
                                                    </div> --}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Hiraola's Slide Item Area End Here -->
    
                                </div>
                            </div>
                        @endforeach
                    @else
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;@lang("Not found")
                    @endif
                
                </div>
            </div>
        </div>
        <!-- Hiraola's Product Area Two End Here -->


@endsection