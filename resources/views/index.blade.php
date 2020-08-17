@extends('layouts.app')

@section('content')
    {{-- @include('inc.left-side-category') --}}
    <div class="slider-with-category_menu">
            <div class="container-fluid">
                <div class="row">
                    <div id="slider01" class="col grid-half order-md-2 order-lg-1">
                        <div class="category-menu">
                            <div class="category-heading">
                                <h2 class="categories-toggle"><span>Turkumlar</span></h2>
                            </div>
                            <div id="cate-toggle" class="category-menu-list">
                                <ul>
                                    @foreach ($category as $cat)
                                        <li class="right-menu"><a href="category/c1.html"><img class="img-fluid" src="assets/images/menu/product-icon/p9.png" alt="" class="mr-3"><span class="ml-1">{{$cat->name_en}} </span></a>
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
                                    {{-- <li class="right-menu"><a href="category/c2.html"><img class="img-fluid" src="assets/images/menu/product-icon/p1.png" alt="" class="mr-3"><span class="ml-1">Oziq-ovqat </span></a>
                                        <ul class="cat-mega-menu">
                                            <li class="right-menu cat-mega-title">
                                                <a href="#">Mevalar</a>
                                                <ul>
                                                    <li><a href="shop-left-sidebar.html">Olma</a></li>
                                                    <li><a href="shop-left-sidebar.html">Banan</a></li>
                                                    <li><a href="shop-left-sidebar.html">Nok</a></li>
                                                    <li><a href="shop-left-sidebar.html">Uzum</a></li>
                                                </ul>
                                            </li>
                                            <li class="right-menu cat-mega-title">
                                                <a href="#">Quruq mevalar</a>
                                                <ul>
                                                    <li><a href="shop-left-sidebar.html">Magiz</a></li>
                                                    <li><a href="shop-left-sidebar.html">Turshak</a></li>
                                                    <li><a href="shop-left-sidebar.html">Bodom</a></li>
                                                    <li><a href="shop-left-sidebar.html">Pista</a></li>
                                                </ul>
                                            </li>
                                            <li class="right-menu cat-mega-title">
                                                <a href="#">Shirinliklar</a>
                                                <ul>
                                                    <li><a href="shop-left-sidebar.html">Shokolat</a></li>
                                                    <li><a href="shop-left-sidebar.html">Konfet</a></li>
                                                    <li><a href="shop-left-sidebar.html">Marmelat</a></li>
                                                    <li><a href="shop-left-sidebar.html">Pecheniya</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="right-menu"><a href="category/c3.html"><img class="img-fluid" src="assets/images/menu/product-icon/p2.png" alt="" class="mr-3"><span class="ml-1">Xom-ashyo </span></a>
                                    </li>
                                    <li class="right-menu"><a href="category/c4.html"><img class="img-fluid" src="assets/images/menu/product-icon/p3.png" alt="" class="mr-3"><span class="ml-1">Kimyoviy moddalar </span></a>
                                    </li>
                                    <li class="right-menu"><a href="category/c5.html"><img class="img-fluid" src="assets/images/menu/product-icon/p4.png" alt="" class="mr-3"><span class="ml-1">Elektronika </span></a></li>
                                    <li class="right-menu"><a href="category/c6.html"><img class="img-fluid" src="assets/images/menu/product-icon/p5.png" alt="" class="mr-3"><span class="ml-1">Mexanika </span></a></li>
                                    <li class="right-menu"><a href="category/c7.html"><img class="img-fluid" src="assets/images/menu/product-icon/p6.png" alt="" class="mr-3"><span class="ml-1">Qurilish</span></a></li>
                                    <li class="right-menu"><a href="category/c8.html"><img class="img-fluid" src="assets/images/menu/product-icon/p7.png" alt="" class="mr-3"><span class="ml-1">O'simliklar </span></a></li>
                                    <li class="right-menu"><a href="category/c9.html"><img class="img-fluid" src="assets/images/menu/product-icon/p8.png" alt="" class="mr-3"><span class="ml-1">Uy uchun </span></a></li>
                                    <li class="rx-child"><a href="category/c10.html"><img class="img-fluid" src="assets/images/menu/product-icon/p10.jpg" alt="" class="mr-3"><span class="ml-1">Tibbiyot </span></a></li>
                                    <li class="rx-child"><a href="category/c11.html"><img class="img-fluid" src="assets/images/menu/product-icon/p11.jpg" alt="" class="mr-3"><span class="ml-1">Qadoqlash </span></a></li>
                                    <li class="rx-parent">
                                        <a class="rx-default"><span class="fa fa-list pl-1" style="font-size: 20px;color:blue;padding-left:6px !important"></span><span class="ml-2"> Barchasi</span></a>
                                        <a class="rx-show"><span class="fa fa-window-close pl-1" style="font-size: 20px;color:red;padding-left:6px !important"></span><span class="ml-2">Yopish</a>
                                    </li>
                                </ul> --}}
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
                                            <h2>O'zbekistondagi birinchi </h2>
                                            <h3>onlayn shourum </h3>
                                            <h4>Agar bizlarga a'zo bo'lmoqchi bo'lsangiz, biz bilan bog'laning</h4>
                                            <div class="hiraola-btn-ps_right slide-btn ">
                                                <a class="hiraola-btn" href="contact.html">Bog'lanish</a>
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
                            <div class="category_item px-2">
                                <a href="category/c1.html" class="item_link">
                                    <div class="mx-auto">
                                        <img src="assets/images/menu/product-icon/p9.png" alt="">
                                    </div>
                                    <div class="category_title mx-auto">
                                    <span>To'qimachilik </span>
                                    </div>
                                </a>
                            </div>
                            <div class="category_item px-2">
                                <a href="category/c2.html" class="item_link">
                                    <div class="mx-auto">
                                        <img src="assets/images/menu/product-icon/p1.png" alt="">
                                    </div>
                                    <div class="category_title mx-auto">
                                    <span>Oziq-ovqat</span>
                                    </div>
                                </a>
                            </div>
                            <div class="category_item px-2">
                                <a href="category/c3.html" class="item_link">
                                    <div class="mx-auto">
                                        <img src="assets/images/menu/product-icon/p2.png" alt="">
                                    </div>
                                    <div class="category_title mx-auto">
                                    <span>Xom-ashyo</span>
                                    </div>
                                </a>
                            </div>
                            <div class="category_item px-2">
                                <a href="category/c4.html" class="item_link">
                                    <div class="mx-auto">
                                        <img src="assets/images/menu/product-icon/p3.png" alt="">
                                    </div>
                                    <div class="category_title mx-auto">
                                    <span>Kimyoviy moddalar </span>
                                    </div>
                                </a>
                            </div>
                            <div class="category_item px-2">
                                <a href="category/c5.html" class="item_link">
                                    <div class="mx-auto">
                                        <img src="assets/images/menu/product-icon/p4.png" alt="">
                                    </div>
                                    <div class="category_title mx-auto">
                                    <span>Elektronika </span>
                                    </div>
                                </a>
                            </div>
                            <div class="category_item px-2">
                                <a href="category/c6.html" class="item_link">
                                    <div class="mx-auto">
                                        <img src="assets/images/menu/product-icon/p5.png" alt="">
                                    </div>
                                    <div class="category_title mx-auto">
                                    <span>Mexanika</span>
                                    </div>
                                </a>
                            </div>
                            <div class="category_item px-2">
                                <a href="category/c7.html" class="item_link">
                                    <div class="mx-auto">
                                        <img src="assets/images/menu/product-icon/p6.png" alt="">
                                    </div>
                                    <div class="category_title mx-auto">
                                        <span>Qurilish</span>
                                    </div>
                                </a>
                            </div>
                            <div class="category_item px-2">
                                <a href="category/c8.html" class="item_link">
                                    <div class="mx-auto">
                                        <img src="assets/images/menu/product-icon/p7.png" alt="">
                                    </div>
                                    <div class="category_title mx-auto">
                                        <span>O'simliklar</span>
                                    </div>
                                </a>
                            </div>
                            <div class="category_item px-2">
                                <a href="category/c9.html" class="item_link">
                                    <div class="mx-auto">
                                        <img src="assets/images/menu/product-icon/p8.png" alt="">
                                    </div>
                                    <div class="category_title mx-auto">
                                        <span>Uy uchun</span>
                                    </div>
                                </a>
                            </div>
                            <div class="category_item px-2">
                                <a href="category/c10.html" class="item_link">
                                    <div class="mx-auto">
                                        <img src="assets/images/menu/product-icon/p10.jpg" alt="">
                                    </div>
                                    <div class="category_title mx-auto">
                                        <span>Tibbiyot</span>
                                    </div>
                                </a>
                            </div>
                            <div class="category_item px-2">
                                <a href="category/c11.html" class="item_link">
                                    <div class="mx-auto">
                                        <img src="assets/images/menu/product-icon/p11.jpg" alt="">
                                    </div>
                                    <div class="category_title mx-auto">
                                        <span>Qadoqlash</span>
                                    </div>
                                </a>
                            </div>
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
                        <h4>Mahalliy kompaniyalar</h4>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="hiraola-product_slider">
                        <!-- Begin Hiraola's Slide Item Area -->
                        <div class="slide-item">
                            <div class="single_product">
                                <div class="product-img">
                                    <a href="company/local/l68.html">
                                        <img class="primary-img" src="assets/images/company/local/068.jpg" alt="Hiraola's Product Image">
                                    </a>
                                    <span class="sticker-2">New</span>
                                </div>
                                <div class="hiraola-product_content">
                                    <div class="product-desc_info">
                                        <h5><span class="badge  badge-primary">#Tekstil</span></h5>
                                        <h6 align="center"><a class="product-name" href="company/local/l68.html"> «AYUP» MCHJ<pre></pre></a></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Hiraola's Slide Item Area End Here -->
                        <!-- Begin Hiraola's Slide Item Area -->
                        <div class="slide-item">
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
                        </div>
                        <!-- Hiraola's Slide Item Area End Here -->
                        
                    </div>
                </div>
            </div> <br>
                <div  class="hiraola-btn-ps_center  text-center" id="btn21">
                        <a class="hiraola-btn" href="com-local/com-local.html">Barchasi</a>
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
                        <h4>Xorijiy kompaniyalar</h4>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="hiraola-product_slider">
                        <!-- Begin Hiraola's Slide Item Area -->
                        <div class="slide-item">
                            <div class="single_product">
                                <div class="product-img">
                                    <a href="company/foreign/f15.html">
                                        <img class="primary-img" src="assets/images/company/foreign/015.jpg" alt="Hiraola's Product Image">
                                    </a>
                                    <span class="sticker-2">New</span>
                                </div>
                                <div class="hiraola-product_content">
                                    <div class="product-desc_info">
                                        <h5><span class="badge  badge-primary">#Mexanika</span></h5>
                                        <h6 align="center"><a class="product-name" href="company/foreign/f15.html">Nigeria Bonny Light Crude Oil CIF </a></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Hiraola's Slide Item Area End Here -->
                        <!-- Begin Hiraola's Slide Item Area -->
                        <div class="slide-item">
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
                        </div>
                        <!-- Hiraola's Slide Item Area End Here -->
                    </div>
                </div>
            </div><br>
                <div  class="hiraola-btn-ps_center  text-center" id="btn21">
                        <a class="hiraola-btn" href="com-foreign/com-foreign.html">Barchasi</a>
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
                <h3>O'zbekistondagi birinchi onlayn shourumidan ro'yxatdan o'ting va biznesingizni rivojlantiring </h3>
                <div  class="hiraola-btn-ps_center  text-center pt-4"  id="btn21">
                        <a class="hiraola-btn" href="https://docs.google.com/forms/d/e/1FAIpQLSd_RjwstS1_qq6QK32SxJ7ZCJzwj2jFSUD6CIGmiEvzDc5_5w/viewform?usp=sf_link">Ro'yxatdan o'tish</a>
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
                                <h6>O'zbekiston Eksportchilar uyushmasi </h6>
                                <p>Nazorat ostida</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="shipping-item">
                            <div class="shipping-icon">
                                <img src="assets/images/shipping-icon/2.png" alt="Hiraola's Shipping Icon">
                            </div>
                            <div class="shipping-content">
                                <h6>Mavjud to'lov usullari</h6>
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
                                <h6>100% Ishonchli</h6>
                                <p>Uyushma nazorati ostida</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="shipping-item">
                            <div class="shipping-icon">
                                <img src="assets/images/shipping-icon/4.png" alt="Hiraola's Shipping Icon">
                            </div>
                            <div class="shipping-content">
                                <h6>Mahoratli</h6>
                                <p>2 yillik tajriba</p>
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