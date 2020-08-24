@extends('layouts.app')
@section('language')
    <li>
        <a href="{{route('services-for-investors', 'uz') }}"><img src="/assets/images/menu/icon/3.jpg" alt="JB's Language Icon">Uz</a>
    </li>
    <li>
        <a href="{{ route('services-for-investors', 'en')}}"><img src="/assets/images/menu/icon/1.jpg" alt="JB's Language Icon">En</a>
    </li>
    <li>
        <a href="{{route('services-for-investors', 'ru') }}"><img src="/assets/images/menu/icon/2.jpg" alt="JB's Language Icon">Ru</a>
    </li>
@endsection

@section('lang-mobile')
    <a href="{{route('services-for-investors', 'uz')}}"><img src="/assets/images/menu/icon/3.jpg" alt="JB's Language Icon">Uz</a>
    <a href="{{route('services-for-investors', 'en')}}"><img src="/assets/images/menu/icon/1.jpg" alt="JB's Language Icon">En</a>
    <a href="{{route('services-for-investors', 'ru')}}"><img src="/assets/images/menu/icon/2.jpg" alt="JB's Language Icon">Ru</a>
@endsection

@section('content')
    <!-- Begin Hiraola's Breadcrumb Area -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="breadcrumb-content">
                <h2>@lang("Complex services for investors")</h2>
                <ul>
                    <li><a href="{{route('main' ,app()->getLocale())}}">@lang("Home")</a></li>
                    <li class="active">@lang("For investors")</li>
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

                            <div class="category-module hiraola-sidebar_categories">
                                <div class="category-module_heading">
                                    <h5>@lang("Services")</h5>
                                </div>
                                <div class="module-body">
                                    <ul class="module-list_item">
                                        <li>
                                            <a href="{{route('services-for-investors', app()->getLocale())}}">@lang("For investors")</a>
                                            <a href="service2.html">@lang("Check for company")</a>
                                            <a href="service.html">@lang("Other services")</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="hiraola-sidebar_categories">
                                <div class="hiraola-categories_title">
                                    <h5>@lang("Type of services for investors")</h5>
                                </div>
                                <ul class="sidebar-checkbox_list">
                                    <li>
                                        <a href="javascript:void(0)">@lang("Juristical")</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">@lang("Tax")</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">@lang("Organizing")</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">@lang("Finding partners")</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="sidebar-banner_area">
                            <div class="banner-item img-hover_effect">
                                <a href="javascript:void(0)">
                                    <img src="/assets/images/banner/1_1.jpg" alt="exportuz.com">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9 order-1 order-lg-1">
                        <div class="shop-toolbar">
                            <div class="product-view-mode">
                                <a class="grid-3" data-target="gridview-3" data-toggle="tooltip" data-placement="top" title="Grid View"><i class="fa fa-th"></i></a>
                                <a class="active list" data-target="listview" data-toggle="tooltip" data-placement="top" title="List View"><i class="fa fa-th-list"></i></a>
                            </div>
                            <div class="product-item-selection_area">
                                <div class="product-short">
                                    <label class="select-label">@lang("Sort By"):</label>
                                    <select class="nice-select">
                                        <option value="1">@lang("Relevance")</option>
                                        <option value="2">@lang("Name, A to Z")</option>
                                        <option value="3">@lang("Name, Z to A")</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="shop-product-wrap grid listview row">
                            <div class="col-lg-4">
                                <div class="slide-item">
                                    <div class="single_product">
                                        <div class="product-img">
                                            <a href="javascript:void(0)">
                                                <img class="primary-img" src="/assets/images/service/s11.jpg" alt="Hiraola's Product Image">
                                            </a>
                                        </div>
                                        <div class="hiraola-product_content">
                                            <div class="product-desc_info">
                                                <h6 align="center"><a class="product-name" href="javascript:void(0)">@lang("Juristical services")</a></h6>
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
                                            <a href="javascript:void(0)">
                                                <img class="primary-img" src="/assets/images/service/s11.jpg" alt="Hiraola's Product Image">
                                            </a>
                                        </div>
                                        <div class="hiraola-product_content">
                                            <div class="product-desc_info">
                                                <h6><a class="product-name" href="javascript:void(0)">@lang("Juristical services")</a></h6>
                                                <div class="product-short_desc">
                                                    <div class="sp-essential_stuff">
                                                        <ul>
                                                            <li><b>@lang("Address") </b>@lang("8A, Korakamish street, Olmazor region, Tahskent city, Uzbekistan")</li>
                                                            <li><b>@lang("Phone"): </b><span>+998 95 145 45 02 </span></li>
                                                            <li><b>@lang("Name of personnel:") </b><span>@lang("Abdurakhmonov Bakhodir")</span></li>
                                                            <li><b>@lang("E-mail:") </b><a href="bakhodirabdurakhmanov1@gmail.com">bakhodirabdurakhmanov1@gmail.com</a></li>
                                                        </ul><br>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="add-actions">
                                                <ul>
                                                    <li><a class="hiraola-add_cart" href="callto://+998951454502" data-toggle="tooltip" data-placement="top" title="Bog'lanish Information">@lang("Contact")</a></li>
                                                    
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="slide-item">
                                    <div class="single_product">
                                        <div class="product-img">
                                            <a href="javascript:void(0)">
                                                <img class="primary-img" src="/assets/images/service/s12.jpg" alt="Hiraola's Product Image">
                                            </a>
                                            <!-- <span class="sticker-2">New</span> -->
                                        </div>
                                        <div class="hiraola-product_content">
                                            <div class="product-desc_info">
                                                <h6 align="center"><a class="product-name" href="javascript:void(0)">@lang("Tax services")</a></h6>
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
                                            <a href="javascript:void(0)">
                                                <img class="primary-img" src="/assets/images/service/s12.jpg" alt="Hiraola's Product Image">
                                            </a>
                                        </div>
                                        <div class="hiraola-product_content">
                                            <h6><a class="product-name" href="javascript:void(0)">@lang("Tax services")</a></h6>
                                            <div class="product-desc_info">
                                                    <div class="sp-essential_stuff">
                                                        <ul>
                                                            <li><b>@lang("Address") </b>@lang("8A, Korakamish street, Olmazor region, Tahskent city, Uzbekistan")</li>
                                                            <li><b>@lang("Phone"): </b><span>+998 95 145 45 02 </span></li>
                                                            <li><b>@lang("Name of personnel:") </b><span>@lang("Abdurakhmonov Bakhodir")</span></li>
                                                            <li><b>@lang("E-mail:") </b><a href="bakhodirabdurakhmanov1@gmail.com">bakhodirabdurakhmanov1@gmail.com</a></li>
                                                        </ul><br>
                                                    </div>
                                            </div>
                                            <div class="add-actions">
                                                <ul>
                                                    <li><a class="hiraola-add_cart" href="callto://+998951454502" data-toggle="tooltip" data-placement="top" title="Bog'lanish Information">@lang("Contact")</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="slide-item">
                                    <div class="single_product">
                                        <div class="product-img">
                                            <a href="javascript:void(0)">
                                                <img class="primary-img" src="/assets/images/service/s13.jpg" alt="Hiraola's Product Image">
                                            </a>
                                            <span class="sticker-2">New</span>
                                        </div>
                                        <div class="hiraola-product_content">
                                            <div class="product-desc_info">
                                                <h6 align="center"><a class="product-name" href="javascript:void(0)"> @lang("Organizing services")</a></h6>
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
                                            <a href="javascript:void(0)">
                                                <img class="primary-img" src="/assets/images/service/s13.jpg" alt="Hiraola's Product Image">
                                            </a>
                                        </div>
                                        <div class="hiraola-product_content">
                                            <div class="product-desc_info">
                                                <h6><a class="product-name" href="javascript:void(0)">@lang("Organizing services")</a></h6>
                                                <div class="product-short_desc">
                                                    <div class="sp-essential_stuff">
                                                        <ul>
                                                            <li><b>@lang("Address") </b>@lang("8A, Korakamish street, Olmazor region, Tahskent city, Uzbekistan")</li>
                                                            <li><b>@lang("Phone"): </b><span>+998 95 145 45 02 </span></li>
                                                            <li><b>@lang("Name of personnel:") </b><span>@lang("Abdurakhmonov Bakhodir")</span></li>
                                                            <li><b>@lang("E-mail:") </b><a href="bakhodirabdurakhmanov1@gmail.com">bakhodirabdurakhmanov1@gmail.com</a></li>
                                                        </ul><br>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="add-actions">
                                                <ul>
                                                    <li><a class="hiraola-add_cart" href="callto://+998951454502" data-toggle="tooltip" data-placement="top" title="Bog'lanish Information">@lang("Contact")</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="slide-item">
                                    <div class="single_product">
                                        <div class="product-img">
                                            <a href="javascript:void(0)">
                                                <img class="primary-img" src="/assets/images/service/s14.jpg" alt="Hiraola's Product Image">
                                            </a>
                                            <span class="sticker-2">New</span>
                                        </div>
                                        <div class="hiraola-product_content">
                                            <div class="product-desc_info">
                                                <h6 align="center"><a class="product-name" href="javascript:void(0)">@lang("Finding partners services")</a></h6>
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
                                            <a href="javascript:void(0)">
                                                <img class="primary-img" src="/assets/images/service/s14.jpg" alt="Hiraola's Product Image">
                                            </a>
                                        </div>
                                        <div class="hiraola-product_content">
                                            <div class="product-desc_info">
                                                <h6><a class="product-name" href="javascript:void(0)">@lang("Finding partners services")</a></h6>
                                                <div class="product-short_desc">
                                                    <div class="sp-essential_stuff">
                                                        <ul>
                                                            <li><b>@lang("Address") </b>@lang("8A, Korakamish street, Olmazor region, Tahskent city, Uzbekistan")</li>
                                                            <li><b>@lang("Phone"): </b><span>+998 95 145 45 02 </span></li>
                                                            <li><b>@lang("Name of personnel:") </b><span>@lang("Abdurakhmonov Bakhodir")</span></li>
                                                            <li><b>@lang("E-mail:") </b><a href="bakhodirabdurakhmanov1@gmail.com">bakhodirabdurakhmanov1@gmail.com</a></li>
                                                        </ul><br>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="add-actions">
                                                <ul>
                                                    <li><a class="hiraola-add_cart" href="callto://+998951454502" data-toggle="tooltip" data-placement="top" title="Bog'lanish Information">@lang("Contact")</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hiraola's Content Wrapper Area End Here -->
@endsection