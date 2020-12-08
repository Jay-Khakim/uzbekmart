@extends('layouts.app')
@section('language')
    <li>
        <a href="{{route('single-request', ['language' => 'uz', 'id' => $buyrequest->id])}}"><img src="/assets/images/menu/icon/3.jpg" alt="JB's Language Icon">Uz</a>
    </li>
    <li>
        <a href="{{ route('single-request', ['language' => 'en', 'id' => $buyrequest->id])}}"><img src="/assets/images/menu/icon/1.jpg" alt="JB's Language Icon">En</a>
    </li>
    <li>
        <a href="{{route('single-request', ['language' => 'ru', 'id' => $buyrequest->id]) }}"><img src="/assets/images/menu/icon/2.jpg" alt="JB's Language Icon">Ru</a>
    </li>
@endsection

@section('lang-mobile')
    <a href="{{route('single-request', ['language' => 'uz', 'id' => $buyrequest->id])}}"><img src="/assets/images/menu/icon/3.jpg" alt="JB's Language Icon">Uz</a>
    <a href="{{route('single-request', ['language' => 'ru', 'id' => $buyrequest->id]) }}"><img src="/assets/images/menu/icon/2.jpg" alt="JB's Language Icon">Ru</a>
    <a href="{{route('single-request', ['language' => 'en', 'id' => $buyrequest->id])}}"><img src="/assets/images/menu/icon/1.jpg" alt="JB's Language Icon">En</a>
@endsection

@section('content')
        <!-- Begin Hiraola's Breadcrumb Area -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="breadcrumb-content">
                <h2>@lang("Buy or Request")</h2>
                <ul>
                    <li><a href="{{route("main", app()->getLocale())}}">@lang("Home")</a></li>
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
                                <img class="zoompro" src="/storage/{{$buyrequest->image}}" alt=" {{$buyrequest->name}} " />
                            </div>
                            {{-- <div id="gallery" class="sp-img_slider">
                                <a class="active" data-image="../assets/images/buy/1.jpg" data-zoom-image="../assets/images/buy/1.jpg">
                                    <img src="../assets/images/buy/1.jpg" alt="Hiraola's Product Image">
                                </a>
                                <a data-image="../assets/images/buy/2.jpg" data-zoom-image="../assets/images/buy/2.jpg">
                                    <img src="../assets/images/buy/2.jpg" alt="Hiraola's Product Image">
                                </a>
                                <a data-image="../assets/images/buy/3.jpg" data-zoom-image="../assets/images/buy/3.jpg">
                                    <img src="../assets/images/buy/3.jpg" alt="Hiraola's Product Image">
                                </a>
                                
                            </div> --}}
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-7">
                        <div class="sp-content">
                            <div class="sp-heading">
                                <h5><a href="#">{{$buyrequest->name}}</a></h5>
                            </div>
                            {{-- <span class="reference">Buyurtma berilgan: <img src="../assets/images/menu/icon/3.jpg">{{$buyrequest->address}}</span> <br> --}}
                            <span class="reference">@lang("Published at"):  {{$buyrequest->created_at}} </span> 
                            
                            
                            <div class="sp-essential_stuff mt-4">
                                <ul>
                                    <li>@lang("Customer"): {{$buyrequest->company}} </li>
                                    <li>@lang("Address"): {{$buyrequest->address}}</li>
                                    <li>@lang("Phone"): +{{$buyrequest->phone}}</li>
                                    <li>@lang("How much"):<span>{{$buyrequest->amount}}</span></a></li>
                                    {{-- <li>Mahsulot nomi: <a href="javascript:void(0)">Yuz himoyalavochi niqob</a></li> --}}
                                    <li>@lang("Category"): <a href="javascript:void(0)">{{$buyrequest->category->name}}</a></li>
                                    <li>@lang("More"):  {!!$buyrequest->wants!!}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <br>
                <br>
            </div>
        </div>
    </div>
    <!-- Hiraola's Single Product Area End Here -->
@endsection