@extends('layouts.app')
@section('language')
    <li>
        <a href="{{route('about-us', 'uz') }}"><img src="/assets/images/menu/icon/3.jpg" alt="JB's Language Icon">Uz</a>
    </li>
    <li>
        <a href="{{ route('about-us', 'en')}}"><img src="/assets/images/menu/icon/1.jpg" alt="JB's Language Icon">En</a>
    </li>
    <li>
        <a href="{{route('about-us', 'ru') }}"><img src="/assets/images/menu/icon/2.jpg" alt="JB's Language Icon">Ru</a>
    </li>
@endsection

@section('lang-mobile')
    <a href="{{route('about-us', 'uz')}}"><img src="/assets/images/menu/icon/3.jpg" alt="JB's Language Icon">Uz</a>
    <a href="{{route('about-us', 'en')}}"><img src="/assets/images/menu/icon/1.jpg" alt="JB's Language Icon">En</a>
    <a href="{{route('about-us', 'ru')}}"><img src="/assets/images/menu/icon/2.jpg" alt="JB's Language Icon">Ru</a>
@endsection

@section('content')
<div class="breadcrumb-area">
    <div class="container">
        <div class="breadcrumb-content">
            <h2>@lang("About Us")</h2>
            <ul>
                <li><a href="{{route('main' ,app()->getLocale())}}">@lang("Home")</a></li>
                <li class="active">@lang("About Us")</li>
            </ul>
        </div>
    </div>
</div>

  <!-- Begin Hiraola's About Us Area -->
        <div class="about-us-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-7 d-flex align-items-center">
                        <div class="overview-content">
                            <h2 align="center">@lang("Welcome To <span>Uzbekmart.com</span>")</h2>
                            <p class="short_desc">@lang("UzbekMart online showroom is a project launched to provide Uzbekistan's export products to foreign partners and promote large-scale export of Uzbekistan's national products abroad. The project was launched by the Association of exporters of Uzbekistan, which aims to provide national products with education in various areas of our country. The main goal of the project is to create an e-Commerce system on the territory of the Republic of Uzbekistan, as well as to replenish funds for the formation of the digital economy system and increase the export potential of the Republic of Uzbekistan.")</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-5">
                        <div class="overview-img text-center img-hover_effect">
                            <a href="#">
                                <img class="img-full" src="../../assets/images/about-us/1.jpg" alt="Hiraola's About Us Image">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hiraola's About Us Area End Here -->

        {{-- Statistics area --}}
        @include('inc.statistics')
        {{-- End of Statistics area --}}

        {{-- <!-- Begin Hiraola's Project Countdown Area -->
        <div class="project-count-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-count text-center">
                            <div class="count-icon">
                                <span class="ion-ios-briefcase-outline"></span>
                            </div>
                            <div class="count-title">
                                <h2 class="count">2169</h2>
                                <span>Companies</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-count text-center">
                            <div class="count-icon">
                                <span class="ion-ios-lightbulb-outline"></span>
                            </div>
                            <div class="count-title">
                                <h2 class="count">869</h2>
                                <span>Products</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-count text-center">
                            <div class="count-icon">
                                <span class="ion-ios-wineglass-outline"></span>
                            </div>
                            <div class="count-title">
                                <h2 class="count">689</h2>
                                <span>Partners</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-count text-center">
                            <div class="count-icon">
                                <span class="ion-happy-outline"></span>
                            </div>
                            <div class="count-title">
                                <h2 class="count">2169</h2>
                                <span>Happy Customer</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br><br>
        <!-- Hiraola's Project Countdown Area End Here --> --}}
@endsection