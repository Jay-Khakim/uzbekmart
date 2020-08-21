@extends('layouts.app')
@section('language')
    <li>
        <a href="{{ url( 'uz') }}"><img src="/assets/images/menu/icon/3.jpg" alt="JB's Language Icon">Uz</a>
    </li>
    <li>
        <a href="{{ url('en') }}"><img src="/assets/images/menu/icon/1.jpg" alt="JB's Language Icon">En</a>
    </li>
    <li>
        <a href="{{ url('ru') }}"><img src="/assets/images/menu/icon/2.jpg" alt="JB's Language Icon">Ru</a>
    </li>
@endsection

@section('content')
    {{-- @include('inc.left-side-category') --}}
    <div class="slider-with-category_menu">
        <div class="container-fluid">
            <div class="row">
                <div id="slider01" class="col grid-half order-md-2 order-lg-1">
                    <div class="category-menu">
                        <div class="category-heading">
                            {{-- {{__("Categories")}} --}}
                            <h2 class="categories-toggle"><span>@lang('Categories')</span></h2>
                        </div>
                        <div id="cate-toggle" class="category-menu-list">
                            <ul>
                                @foreach ($category as $cat)
                                    <li class="right-menu"><a href="category/c1.html"><img class="img-fluid"  src="/storage/{{$cat->image}}" alt="" class="mr-3"><span class="ml-1">{{$cat->name}} </span></a>
                                        <ul class="cat-mega-menu cat-mega-menu-3">
                                            <li class="right-menu cat-mega-title">
                                                <a href="#">Kiyim kechak</a>
                                                <ul>
                                                    <li><a href="#21">Ayollar kiyimlari</a></li>
                                                    <li><a href="#21">Erkaklar kiyimlari</a></li>
                                                    <li><a href="#21">Bolalar kiyimlari</a></li>
                                                    <li><a href="#21">Boshqa kiyimlar</a></li>
                                                </ul>
                                            </li>
                                            <li class="right-menu cat-mega-title">
                                                <a href="#">Matolar</a>
                                                <ul>
                                                    <li><a href="#21">Kiyimlar uchun</a></li>
                                                    <li><a href="#21">Uy buyumlari uchun</a></li>
                                                    <li><a href="#21">Dizayn ishlari uchun</a></li>
                                                    <li><a href="#21">Dekoratsiya ishlari uchun</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                    <div class="col grid-full order-md-1 order-lg-2">
                    <div class="hiraola-slider_area">
                        <div class="main-slider">
                            <!-- Begin Single Slide Area -->
                            <div class="single-slide animation-style-01 bg-1">
                                <div class="container">
                                    <div class="slider-content">
                                        <!-- <h5>Янги платформа</h5> -->
                                        <h2>{{__("The first online showroom")}} </h2>
                                        <h3>{{__("onlayn shourum ")}}</h3>
                                        <h4>{{__("If you want to become one of us, please contact with us")}}</h4>
                                        <div class="hiraola-btn-ps_right slide-btn ">
                                            <a class="hiraola-btn" href="contact.html">{{__("Contact now")}}</a>
                                        </div>
                                    </div>
                                    <div class="slider-progress"></div>
                                </div>
                            </div>
                            <!-- Single Slide Area End Here -->
                            <!-- Begin Single Slide Area -->
                            <div class="single-slide animation-style-02 bg-2">
                                <div class="container">

                                    <div class="slider-progress"></div>
                                </div>
                            </div>
                            <div class="single-slide animation-style-02 bg-3">
                                <div class="container">

                                    <div class="slider-progress"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="slider02" class="row">
                    <div class="category_company col-12 d-md-none my-4">
                        {{-- <div class="category_item px-2">
                            <a href="/en/categories" class="item_link">
                                <div class="mx-auto">
                                <span class="fa fa-list"></span>
                                </div>
                                <div class="category_title mx-auto">
                                <span>All categories</span>
                                </div>
                            </a>
                        </div>  --}}
                        @foreach ($category as $cat)
                            
                            <div class="category_item px-2">
                                <a href="category/c1.html" class="item_link">
                                    <div class="mx-auto">
                                        <img src="/storage/{{$cat->image}}" alt="">
                                    </div>
                                    <div class="category_title mx-auto">
                                        <span> {{$cat->name_en}} </span>
                                    </div>
                                </a>
                            </div>

                        @endforeach

                    </div>
                </div>
                <div id="banner1" class="col grid-half grid-md_half order-md-2 order-lg-3">
                    <div class="banner-item img-hover_effect">
                        <a href="http://exportuz.com/">
                            <img class="img-full" src="assets/images/banner/1_1.jpg" alt="Hiraola's Banner">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
                
    




    {{-- Local Companies Area --}}
    <div class="hiraola-product_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="hiraola-section_title">
                        <h4>{{__("Local companies")}}</h4>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="hiraola-product_slider">
                        <!-- Begin Hiraola's Slide Item Area -->
                        @foreach ($localcomp as $local)
                            <div class="slide-item">
                                <div class="single_product">
                                    <div class="product-img">
                                        <a href="company/local/l68.html">
                                            <img class="primary-img" src="/storage/{{$local->image}} " alt=" {{$local->name}} ">
                                        </a>
                                        <span class="sticker-2">New</span>
                                    </div>
                                    <div class="hiraola-product_content">
                                        <div class="product-desc_info">
                                            <h5><span class="badge badge-primary"> #{{$local->category->name}} </span></h5>
                                            <h6 align="center"><a class="product-name" href="company/local/l68.html"> {{$local->name}}<pre></pre></a></h6>
                                        </div>
                                    </div>
                                </div>   
                            </div>
                        @endforeach
                        
                    </div>
                </div>
            </div> <br>
                <div  class="hiraola-btn-ps_center  text-center" id="btn21">
                        <a class="hiraola-btn" href="com-local/com-local.html">{{__("More")}}</a>
                </div>
        </div>
    </div>
    {{-- End of Local Companies Area --}}

    {{--Foreign  Companies area  --}}
    <!-- Begin Hiraola's Product Area -->
    <div class="hiraola-product_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="hiraola-section_title">
                        <h4>{{__("Foreign companies")}}</h4>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="hiraola-product_slider">
                        <!-- Begin Hiraola's Slide Item Area -->
                        @foreach ($foreigncomp as $foreign)
                            
                            <div class="slide-item">
                                <div class="single_product">
                                    <div class="product-img">
                                        <a href="company/foreign/f15.html">
                                            <img class="primary-img" src="/storage/{{$foreign->image}} " alt=" {{$foreign->name_en}} ">
                                        </a>
                                        <span class="sticker-2">New</span>
                                    </div>
                                    <div class="hiraola-product_content">
                                        <div class="product-desc_info">
                                            <h5><span class="badge  badge-primary">#{{$foreign->category->name_en}}</span></h5>
                                            <h6 align="center"><a class="product-name" href="company/foreign/f15.html"> @php
                                              if(strlen($foreign->name_en)> 15){
                                                  echo substr($foreign->name_en, 0, 15)."...";
                                              }else {
                                                  echo $foreign->name_en;
                                              }  
                                            @endphp  </a></h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                       
                    </div>
                </div>
            </div><br>
                <div  class="hiraola-btn-ps_center  text-center" id="btn21">
                        <a class="hiraola-btn" href="com-foreign/com-foreign.html">{{__("More")}}</a>
                </div>
        </div>
    </div><br><br>
    <!-- Hiraola's Product Area End Here -->
    {{-- End of Foreign Companies area  --}}

    {{-- Registration form area --}}
    <div class="container">
        <div class="row" id="banner11">
            <div class="col-lg-12" align="center">
                <div class="slider-content">
                <h3>{{__("Register your company in the first online showroom in Uzbekistan and improve your business")}} </h3>
                    <div  class="hiraola-btn-ps_center  text-center pt-4"  id="btn21">
                        <a class="hiraola-btn" 
                            @if(app()->getLocale() === 'en')
                                href="https://docs.google.com/forms/d/e/1FAIpQLSc7sTFRqxgyR_1MKlXPxHzOndlaBgLPYqt8iWWzzQaYmgmHgQ/viewform"
                            @else
                                href="https://docs.google.com/forms/d/e/1FAIpQLSd_RjwstS1_qq6QK32SxJ7ZCJzwj2jFSUD6CIGmiEvzDc5_5w/viewform?usp=sf_link"
                            @endif>
                            {{__("Register")}}</a>
                            {{-- 'https://docs.google.com/forms/d/e/1FAIpQLSc7sTFRqxgyR_1MKlXPxHzOndlaBgLPYqt8iWWzzQaYmgmHgQ/viewform' : 'https://docs.google.com/forms/d/e/1FAIpQLSd_RjwstS1_qq6QK32SxJ7ZCJzwj2jFSUD6CIGmiEvzDc5_5w/viewform?usp=sf_link' --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- End of registration area --}}

    {{-- Statistics area --}}
    @include('inc.statistics')
    {{-- End of Statistics area --}}
    
    
    {{-- Partners area --}}
    @include('inc.partners')
    {{-- End of Partners area --}}

    {{-- Little Description area --}}
    <div class="hiraola-shipping_area">
        <div class="container">
            <div class="shipping-nav">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="shipping-item">
                            <div class="shipping-icon">
                                <img src="/assets/images/shipping-icon/1.png" alt="Hiraola's Shipping Icon">
                            </div>
                            <div class="shipping-content">
                                <h6>{{__("Under Uzbekistan Export Association")}}</h6>
                                <p>{{__("Everything is controlled")}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="shipping-item">
                            <div class="shipping-icon">
                                <img src="/assets/images/shipping-icon/2.png" alt="Hiraola's Shipping Icon">
                            </div>
                            <div class="shipping-content">
                                <h6>{{__("Available Paymet methods")}}</h6>
                                <p>Uzcard, Humo, Master/Visa card</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="shipping-item">
                            <div class="shipping-icon">
                                <img src="assets/images/shipping-icon/3.png" alt="Hiraola's Shipping Icon">
                            </div>
                            <div class="shipping-content">
                                <h6>100% {{__("Confidential")}}</h6>
                                <p>{{__("Secured by Association")}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="shipping-item">
                            <div class="shipping-icon">
                                <img src="/assets/images/shipping-icon/4.png" alt="Hiraola's Shipping Icon">
                            </div>
                            <div class="shipping-content">
                                <h6>{{__("Experienced")}}</h6>
                                <p>{{__("2 years experience")}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hiraola's Shipping Area End Here -->
    {{--End of Little Description area --}}

@endsection