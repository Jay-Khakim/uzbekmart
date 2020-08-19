@extends('layouts.app')

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
                                    <li class="right-menu"><a href="category/c1.html"><img class="img-fluid"  src="/storage/{{$cat->image}}" alt="" class="mr-3"><span class="ml-1">{{$cat->name_en}} </span></a>
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
                                            <img class="primary-img" src="/storage/{{$local->image}} " alt=" {{$local->name_en}} ">
                                        </a>
                                        <span class="sticker-2">New</span>
                                    </div>
                                    <div class="hiraola-product_content">
                                        <div class="product-desc_info">
                                            <h5><span class="badge  badge-primary"> #{{$local->category->name_en}} </span></h5>
                                            <h6 align="center"><a class="product-name" href="company/local/l68.html"> {{$local->name}}<pre></pre></a></h6>
                                        </div>
                                    </div>
                                </div>   
                            </div>
                        @endforeach
                        <!-- Hiraola's Slide Item Area End Here -->
                        <!-- Begin Hiraola's Slide Item Area -->
                        {{-- <div class="slide-item">
                            <div class="single_product">
                                <div class="product-img">
                                    <a href="company/local/l69.html">
                                        <img class="primary-img" src="assets/images/company/local/069.jpg" alt="Hiraola's Product Image">
                                    </a>
                                    <span class="sticker-2">New</span>
                                </div>
                                <div class="hiraola-product_content">
                                    <div class="product-desc_info">
                                        <h5><span class="badge  badge-primary">#Oziq-ovqat</span></h5>
                                        <h6 align="center"><a class="product-name" href="company/local/l69.html"> "TOXIR VA MALIKA" XK</a></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Hiraola's Slide Item Area End Here -->
                        <!-- Begin Hiraola's Slide Item Area -->
                        <div class="slide-item">
                            <div class="single_product">
                                <div class="product-img">
                                    <a href="company/local/l70.html">
                                        <img class="primary-img" src="assets/images/company/local/070.jpg" alt="Hiraola's Product Image">
                                    </a>
                                    <span class="sticker-2">New</span>
                                </div>
                                <div class="hiraola-product_content">
                                    <div class="product-desc_info">
                                        <h5><span class="badge  badge-primary">#Oziq-ovqat</span></h5>
                                        <h6 align="center"><a class="product-name" href="company/local/l70.html"> "VODIY OLTIN KUZ"MCHJ</a></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Hiraola's Slide Item Area End Here -->
                        <!-- Begin Hiraola's Slide Item Area -->
                        <div class="slide-item">
                            <div class="single_product">
                                <div class="product-img">
                                    <a href="company/local/l32.html">
                                        <img class="primary-img" src="assets/images/company/local/032.jpg" alt="Hiraola's Product Image">
                                    </a>
                                    <span class="sticker-2">New</span>
                                </div>
                                <div class="hiraola-product_content">
                                    <div class="product-desc_info">
                                        <h5><span class="badge  badge-primary">#Qurilish</span></h5>
                                        <h6 align="center"><a class="product-name" href="company/local/l32.html"> “UNICHEM” MCHJ<pre></pre></a></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Hiraola's Slide Item Area End Here -->
                        <!-- Begin Hiraola's Slide Item Area -->
                        <div class="slide-item">
                            <div class="single_product">
                                <div class="product-img">
                                    <a href="company/local/l31.html">
                                        <img class="primary-img" src="assets/images/company/local/031.jpg" alt="Hiraola's Product Image">
                                    </a>
                                    
                                </div>
                                <div class="hiraola-product_content">
                                    <div class="product-desc_info">
                                        <h5><span class="badge  badge-primary">#Oziq-ovqat</span></h5>
                                        <h6 align="center"><a class="product-name" href="company/local/l31.html">«LIVADIYA-BUKHARA» LLC</a></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Hiraola's Slide Item Area End Here -->
                        <!-- Begin Hiraola's Slide Item Area -->
                        <div class="slide-item">
                            <div class="single_product">
                                <div class="product-img">
                                    <a href="company/local/l27.html">
                                        <img class="primary-img" src="assets/images/company/local/027.jpg" alt="Hiraola's Product Image">
                                    </a>
                                    
                                </div>
                                <div class="hiraola-product_content">
                                    <div class="product-desc_info">
                                        <h5><span class="badge  badge-primary">#Oziq-ovqat</span></h5>
                                        <h6 align="center"><a class="product-name" href="company/local/l27.html">“GDF  Export” LLC</a></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Hiraola's Slide Item Area End Here -->
                        <!-- Begin Hiraola's Slide Item Area -->
                        <div class="slide-item">
                            <div class="single_product">
                                <div class="product-img">
                                    <a href="company/local/l28.html">
                                        <img class="primary-img" src="assets/images/company/local/028.jpg" alt="Hiraola's Product Image">
                                    </a>
                                    
                                </div>
                                <div class="hiraola-product_content">
                                    <div class="product-desc_info">
                                        <h5><span class="badge  badge-primary">#Qurilish</span></h5>
                                        <h6 align="center"><a class="product-name" href="company/local/l28.html">“VERTEX” LLC </a></h6>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Hiraola's Slide Item Area End Here -->
                        <!-- Begin Hiraola's Slide Item Area -->
                        <div class="slide-item">
                            <div class="single_product">
                                <div class="product-img">
                                    <a href="company/local/l29.html">
                                        <img class="primary-img" src="assets/images/company/local/029.jpg" alt="Hiraola's Product Image">
                                    </a>
                                    
                                </div>
                                <div class="hiraola-product_content">
                                    <div class="product-desc_info">
                                        <h5><span class="badge  badge-primary">#Oziq-ovqat</span></h5>
                                        <h6 align="center"><a class="product-name" href="company/local/l29.html">“Garden House” LLC </a></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Hiraola's Slide Item Area End Here -->
                        <!-- Begin Hiraola's Slide Item Area -->
                        <div class="slide-item">
                            <div class="single_product">
                                <div class="product-img">
                                    <a href="company/local/l30.html">
                                        <img class="primary-img" src="assets/images/company/local/030.jpg" alt="Hiraola's Product Image">
                                    </a>
                                    
                                </div>
                                <div class="hiraola-product_content">
                                    <div class="product-desc_info">
                                        <h5><span class="badge  badge-primary">#Tekstil</span></h5>
                                        <h6 align="center"><a class="product-name" href="company/local/l30.html">“MARJAN INVEST..” LLC <br></a></h6>
                                        
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                        <!-- Hiraola's Slide Item Area End Here -->
                        
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
                        <!-- Hiraola's Slide Item Area End Here -->
                        <!-- Begin Hiraola's Slide Item Area -->
                        {{-- <div class="slide-item">
                            <div class="single_product">
                                <div class="product-img">
                                    <a href="company/foreign/f14.html">
                                        <img class="primary-img" src="assets/images/company/foreign/014.jpg" alt="Hiraola's Product Image">
                                    </a>
                                    <span class="sticker-2">New</span>
                                </div>
                                <div class="hiraola-product_content">
                                    <div class="product-desc_info">
                                        <h5><span class="badge  badge-primary">#Oziq-ovqat</span></h5>
                                        <h6 align="center"><a class="product-name" href="company/foreign/f14.html">Maani traders<pre></pre> </a></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Hiraola's Slide Item Area End Here -->
                        <!-- Begin Hiraola's Slide Item Area -->
                        <div class="slide-item">
                            <div class="single_product">
                                <div class="product-img">
                                    <a href="company/foreign/f12.html">
                                        <img class="primary-img" src="assets/images/company/foreign/012.jpg" alt="Hiraola's Product Image">
                                    </a>
                                    <span class="sticker-2">New</span>
                                </div>
                                <div class="hiraola-product_content">
                                    <div class="product-desc_info">
                                            <h5><span class="badge  badge-primary">#Qadoqlash</span></h5>
                                        <h6 align="center"><a class="product-name" href="company/foreign/f12.html">"Кубанская Картонажная.. </a></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Hiraola's Slide Item Area End Here -->
                        <!-- Begin Hiraola's Slide Item Area -->
                        <div class="slide-item">
                            <div class="single_product">
                                <div class="product-img">
                                    <a href="company/foreign/f13.html">
                                        <img class="primary-img" src="assets/images/company/foreign/013.jpg" alt="Hiraola's Product Image">
                                    </a>
                                    <span class="sticker-2">New</span>
                                </div>
                                <div class="hiraola-product_content">
                                    <div class="product-desc_info">
                                            <h5><span class="badge  badge-primary">#Oziq-ovqat</span></h5>
                                        <h6 align="center"><a class="product-name" href="company/foreign/f13.html">GIRANJE EXPORTS <pre></pre></a></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Hiraola's Slide Item Area End Here -->
                        <!-- Begin Hiraola's Slide Item Area -->
                        <div class="slide-item">
                            <div class="single_product">
                                <div class="product-img">
                                    <a href="company/foreign/f11.html">
                                        <img class="primary-img" src="assets/images/company/foreign/011.jpg" alt="Hiraola's Product Image">
                                    </a>
                                    
                                </div>
                                <div class="hiraola-product_content">
                                    <div class="product-desc_info">
                                        <h5><span class="badge  badge-primary">#Oziq-ovqat</span></h5>
                                        <h6 align="center"><a class="product-name" href="company/foreign/f11.html">Novgorodproduct LLC </a></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Hiraola's Slide Item Area End Here -->
                        <!-- Begin Hiraola's Slide Item Area -->
                        <div class="slide-item">
                            <div class="single_product">
                                <div class="product-img">
                                    <a href="company/foreign/f10.html">
                                        <img class="primary-img" src="assets/images/company/foreign/010.jpg" alt="Hiraola's Product Image">
                                    </a>
                                    
                                </div>
                                <div class="hiraola-product_content">
                                    <div class="product-desc_info">
                                        <h5><span class="badge  badge-primary">#Mexanika</span></h5>
                                        <h6 align="center"><a class="product-name" href="company/foreign/f10.html">АО «НХК ARIKON»</a></h6><br>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Hiraola's Slide Item Area End Here -->
                        <!-- Begin Hiraola's Slide Item Area -->
                        <div class="slide-item">
                            <div class="single_product">
                                <div class="product-img">
                                    <a href="company/foreign/f1.html">
                                        <img class="primary-img" src="assets/images/company/foreign/01.jpg" alt="Hiraola's Product Image">
                                    </a>
                                    <span class="sticker">Top</span>
                                </div>
                                <div class="hiraola-product_content">
                                    <div class="product-desc_info">
                                        <h5><span class="badge  badge-primary">#Oziq-ovqat</span></h5>
                                        <h6 align="center"><a class="product-name" href="company/foreign/f1.html">Confectionery factory «Волшебница»</a></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Hiraola's Slide Item Area End Here -->
                        <!-- Begin Hiraola's Slide Item Area -->
                        <div class="slide-item">
                            <div class="single_product">
                                <div class="product-img">
                                    <a href="company/foreign/f2.html">
                                        <img class="primary-img" src="assets/images/company/foreign/02.jpg" alt="Hiraola's Product Image">
                                    </a>
                                    <span class="sticker">Top</span>
                                </div>
                                <div class="hiraola-product_content">
                                    <div class="product-desc_info">
                                        <h5><span class="badge  badge-primary">#Oziq-ovqat</span></h5>
                                        <h6 align="center"><a class="product-name" href="company/foreign/f2.html">LLC "Кубанская Продуктовая Компания"</a></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Hiraola's Slide Item Area End Here -->
                        <!-- Begin Hiraola's Slide Item Area -->
                        <div class="slide-item">
                            <div class="single_product">
                                <div class="product-img">
                                    <a href="company/foreign/f3.html">
                                        <img class="primary-img" src="assets/images/company/foreign/03.jpg" alt="Hiraola's Product Image">
                                    </a>
                                    <span class="sticker-2">New</span>
                                </div>
                                <div class="hiraola-product_content">
                                    <div class="product-desc_info">
                                        <h5><span class="badge  badge-primary">#Oziq-ovqat</span></h5>
                                        <h6 align="center"><a class="product-name" href="company/foreign/f3.html">LLC "ЗДОРОВОЕ ПИТАНИЕ" <pre></pre></a></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Hiraola's Slide Item Area End Here -->
                        <!-- Begin Hiraola's Slide Item Area -->
                        <div class="slide-item">
                            <div class="single_product">
                                <div class="product-img">
                                    <a href="company/foreign/f4.html">
                                        <img class="primary-img" src="assets/images/company/foreign/04.jpg" alt="Hiraola's Product Image">
                                    </a>
                                    <span class="sticker">Top</span>
                                </div>
                                <div class="hiraola-product_content">
                                    <div class="product-desc_info">
                                        <h5><span class="badge  badge-primary">#Kimyoviy_moddalar</span></h5>
                                        <h6 align="center"><a class="product-name" href="company/foreign/f4.html">RENAS GIDA KIMYEVI MADDELER ...</a></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Hiraola's Slide Item Area End Here -->
                        <!-- Begin Hiraola's Slide Item Area -->
                        <div class="slide-item">
                            <div class="single_product">
                                <div class="product-img">
                                    <a href="company/foreign/f5.html">
                                        <img class="primary-img" src="assets/images/company/foreign/05.jpg" alt="Hiraola's Product Image">
                                    </a>
                                    <span class="sticker-2">New</span>
                                </div>
                                <div class="hiraola-product_content">
                                    <div class="product-desc_info">
                                        <h5><span class="badge  badge-primary">#Xom_ashyo</span></h5>
                                        <h6 align="center"><a class="product-name" href="company/foreign/f5.html">ASTARTA–KYIV <br> agri-industrial holding</a></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Hiraola's Slide Item Area End Here -->
                        <!-- Begin Hiraola's Slide Item Area -->
                        <div class="slide-item">
                            <div class="single_product">
                                <div class="product-img">
                                    <a href="company/foreign/f6.html">
                                        <img class="primary-img" src="assets/images/company/foreign/06.jpg" alt="Hiraola's Product Image">
                                    </a>
                                    <span class="sticker">Top</span>
                                </div>
                                <div class="hiraola-product_content">
                                    <div class="product-desc_info">
                                        <h5><span class="badge  badge-primary">#Xom_ashyo</span></h5>
                                        <h6 align="center"><a class="product-name" href="company/foreign/f6.html"> FGV IFFCO <br>- GIDA SAN. VE TIC. A.S.</a></h6>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                        <!-- Hiraola's Slide Item Area End Here -->
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
                        <a class="hiraola-btn" href="https://docs.google.com/forms/d/e/1FAIpQLSd_RjwstS1_qq6QK32SxJ7ZCJzwj2jFSUD6CIGmiEvzDc5_5w/viewform?usp=sf_link">{{__("Register")}}</a>
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
                                <img src="assets/images/shipping-icon/1.png" alt="Hiraola's Shipping Icon">
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
                                <img src="assets/images/shipping-icon/2.png" alt="Hiraola's Shipping Icon">
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
                                <img src="assets/images/shipping-icon/4.png" alt="Hiraola's Shipping Icon">
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