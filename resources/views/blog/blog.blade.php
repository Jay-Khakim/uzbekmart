@extends('layouts.app')
@section('language')
    <li>
        <a href="{{route('single-blog', ['language' => 'uz', 'id' => $blog->id])}}"><img src="/assets/images/menu/icon/3.jpg" alt="JB's Language Icon">Uz</a>
    </li>
    <li>
        <a href="{{ route('single-blog', ['language' => 'en', 'id' => $blog->id])}}"><img src="/assets/images/menu/icon/1.jpg" alt="JB's Language Icon">En</a>
    </li>
    <li>
        <a href="{{route('single-blog', ['language' => 'ru', 'id' => $blog->id]) }}"><img src="/assets/images/menu/icon/2.jpg" alt="JB's Language Icon">Ru</a>
    </li>
@endsection

@section('lang-mobile')
    <a href="{{route('single-blog', ['language' => 'uz', 'id' => $blog->id])}}"><img src="/assets/images/menu/icon/3.jpg" alt="JB's Language Icon">Uz</a>
    <a href="{{route('single-blog', ['language' => 'ru', 'id' => $blog->id]) }}"><img src="/assets/images/menu/icon/2.jpg" alt="JB's Language Icon">Ru</a>
    <a href="{{route('single-blog', ['language' => 'en', 'id' => $blog->id])}}"><img src="/assets/images/menu/icon/1.jpg" alt="JB's Language Icon">En</a>
@endsection

@section('content')
    <!-- Begin Hiraola's Breadcrumb Area -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="breadcrumb-content">
                <h2>{{$blog->title}} </h2>
                <ul>
                    <li><a href="{{route("main", app()->getLocale())}}">@lang("Home")</a></li>
                    <li class="active">@lang("Blog")</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Hiraola's Breadcrumb Area End Here -->

      <!-- Begin Hiraola's Blog Details Right Sidebar Area -->
        <div class="hiraola-blog_area hiraola-blog_area-2 hiraola-blog-details hiraola-banner_area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 order-lg-2 order-2">
                        <div class="hiraola-blog-sidebar-wrapper">
                            <div class="hiraola-blog-sidebar">
                                <div class="hiraola-sidebar-search-form">
                                    <form action="javascript:void(0)">
                                        <input type="text" class="hiraola-search-field" placeholder="search here">
                                        <button type="submit" class="hiraola-search-btn"><i class="fa fa-search"></i></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9 order-lg-1 order-1">
                        <div class="blog-item">
                            <div class="blog-img img-hover_effect">
                                <a href="blog-details-left-sidebar.html">
                                    <img src="/storage/{{$blog->image}}" alt="{{$blog->title}}">
                                </a>
                                <div class="blog-meta-2">
                                    <div class="blog-time_schedule">
                                        <span class="day">{{$blog->created_at->format('Y-m-d')}}</span>
                                        {{-- <span class="month">Avgust</span> --}}
                                    </div>
                                </div>
                            </div>
                            <div class="blog-content">
                                <div class="blog-heading" align="center">
                                    <h5>
                                        <a href="javascrip:void(0)">{{$blog->title}} </a>
                                    </h5>
                                </div>
                                {{-- <div class="blog-short_desc">
                                    <p>O'zbekiston yaqin kelajakda quritilgan qalampir va limonlarni Xitoyga va uzumlarni Hindistonga eksport qilishga ruxsat olishni rejalashtirmoqda, deb xabar beradi Podrobno.uz muxbiri O'simliklar karantini bo'yicha davlat inspektsiyasi axborot xizmati rahbari Durdona Ochilovaga tayanib.
                                    </p>
                                </div> --}}
                            </div>
                            <div class="hiraola-blog-blockquote">
                                <blockquote>
                                    <p>{!!$blog->body!!}
                                    </p>
                                </blockquote>
                            </div>
                            {{-- <div class="blog-additional_information">
                                <p>Ochilova mamlakatda yiliga yetishtiriladigan 21 million tonna meva va sabzavotlarning atigi 15 foizi sanoat miqyosida qayta ishlanganligini, shundan 7-8 foizi eksport qilinishini aytdi. Bundan tashqari, mahsulotning 30 foizigacha etishtirish, noto'g'ri yig'ish, etkazib berish va saqlash tufayli yo'qoladi. Shu bilan birga, ixtisoslashtirilgan qayta ishlash korxonalari mavjud quvvatlarning atigi 50-60 foizidan foydalanadilar.<br><br>

Yaqin kunlarda O'zbekistonga meva va sabzavotlarni eksport qilishni tezlashtirish uchun mintaqadagi yagona Markaziy karantin laboratoriyasi ishga tushiriladi.<br><br>

Eksport qilinadigan mahsulotlarni laboratoriya tekshiruvini tezlashtirish uchun viloyat karantin inspektsiyalari tomonidan 10 ta qo'shimcha (ko'chma) laboratoriya va yana 5 ta laboratoriya foydalanishga topshiriladi.
                                </p>
                            </div> --}}
                            {{-- <div class="hiraola-tag-line">
                                <h4>Manba:</h4>
                                <a href="javascript:void(0)">Podrobno.uz</a>
                            </div> --}}
                            <div class="hiraola-social_link">
                                <ul>
                                    <li class="facebook">
                                        <a href="https://www.facebook.com/uzbekmart" data-toggle="tooltip" target="_blank" title="Facebook">
                                            <i class="fab fa-facebook"></i>
                                        </a>
                                    </li>
                                    {{-- <li class="twitter">
                                        <a href="https://twitter.com" data-toggle="tooltip" target="_blank" title="Twitter">
                                            <i class="fab fa-twitter-square"></i>
                                        </a>
                                    </li>
                                    <li class="google-plus">
                                        <a href="https://www.plus.google.com/discover" data-toggle="tooltip" target="_blank" title="Google Plus">
                                            <i class="fab fa-google-plus"></i>
                                        </a>
                                    </li> --}}
                                    <li class="instagram">
                                        <a href="https://www.instagram.com/uzbekmart/" data-toggle="tooltip" target="_blank" title="Instagram">
                                            <i class="fab fa-instagram"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div><br><br>
        <!-- Hiraola's Blog Details Right Sidebar Area End Here -->
@endsection