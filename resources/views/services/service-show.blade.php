@extends('layouts.app')
@section('language')
     <li>
        <a href="{{route('service-show', ['language' => 'uz', 'id' => $service_id])}}"><img src="/assets/images/menu/icon/3.jpg" alt="JB's Language Icon">Uz</a>
    </li>
    <li>
        <a href="{{ route('service-show', ['language' => 'en', 'id' => $service_id])}}"><img src="/assets/images/menu/icon/1.jpg" alt="JB's Language Icon">En</a>
    </li>
    <li>
        <a href="{{route('service-show', ['language' => 'ru', 'id' => $service_id]) }}"><img src="/assets/images/menu/icon/2.jpg" alt="JB's Language Icon">Ru</a>
    </li>
@endsection

@section('lang-mobile')
    <a href="{{route('service-show', ['language' => 'uz', 'id' => $service_id])}}"><img src="/assets/images/menu/icon/3.jpg" alt="JB's Language Icon">Uz</a>
    <a href="{{route('service-show', ['language' => 'ru', 'id' => $service_id]) }}"><img src="/assets/images/menu/icon/2.jpg" alt="JB's Language Icon">Ru</a>
    <a href="{{route('service-show', ['language' => 'en', 'id' => $service_id])}}"><img src="/assets/images/menu/icon/1.jpg" alt="JB's Language Icon">En</a>
@endsection

@section('content')
    <!-- Begin Hiraola's Breadcrumb Area -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="breadcrumb-content">
                <h2>{{$service->name}}</h2>
                <ul>
                    <li><a href="{{route('main' ,app()->getLocale())}}">@lang("Home")</a></li>
                    <li class="active">@lang("Services")</li>
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
                                <img  src="/storage/{{$service->image}}" data-zoom-image="/storage/{{$service->image}}" alt="{{$service->name}}" />
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-7">
                        <div class="sp-content">
                            <div class="sp-heading">
                                <h5><a href="#"> {{$service->name}} </a></h5>
                            </div>
                            <span class="reference">@lang("Service type"): <strong>{{$service->service}}</strong></span>
                            <br>
                            <br>
                            <span class="reference">@lang("Company"): <a href="{{route('comp-show', ['language'=>app()->getLocale(), 'id'=>$service->company->id])}}"> <strong> {{$service->company->name}}</strong></a></span>
                            <div class="sp-essential_stuff">
                                <ul>
                                    <li><b>@lang("Phone"): </b><span>{{$service->phone}}</span></li>
                                    <br>
                                    <br>
                                    <li><b>@lang("Website"): </b><a href="{{$service->web}}">{{$service->web}}</a></li>
                                    <br>
                                    <br>
                                    <li><b>@lang("Email"): </b><a href="javascript:void(0)">{{$service->email}}</a></li>
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
                                                <strong>@lang("About Service")</strong>
                                                <span> {{$service->desc}} </span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><br><br>
        <!-- Hiraola's Single Product Tab Area End Here -->
@endsection