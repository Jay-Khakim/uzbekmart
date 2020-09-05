@extends('layouts.app')
@section('css')
    <style type="text/css">
        @charset "utf-8";
h2 { color: #cc0000; margin: 0 0 10px 0; }

.adv-t-block-1 { float:left; color:#626f7a;}
    .adv-t-block-1 h3 {font-size:18px; font-weight:normal;margin:0 0 6px 0 !important; padding:0;}

.adv-zone-img {
    box-shadow: 0 1px 7px 0 rgba(210,210,210,0.7);
    -webkit-box-shadow: 0 1px 7px 0 rgba(210,210,210,0.7);
    -moz-box-shadow: 0 1px 7px 0 rgba(210,210,210,0.7);
    -khtml-box-shadow: 0 1px 7px 0 rgba(210,210,210,0.7);
}

.adv-rzd{border-top:1px solid #eaeaea;margin:0;padding-bottom:10px;clear:both}

.table-adv{width:100%; margin:20px 0 30px 0; }
    .table-adv h3{font-size:20px; font-weight:normal; margin: 20px 0 10px 0; padding:0; }
    .table-adv h4{font-size:14px; font-weight:bold; margin: 0 0 10px 0; padding:0; color:#666;}
    .table-adv td { padding: 14px 10px;  }
    .table-adv .f-col{text-align:center; width:180px; padding-left:0;}
    
    .table-adv .fleft{float:left;}
    .table-adv .value-mar-1{margin:7px 0 0 10px;}
    .table-adv .value-mar-2{margin:7px 0 0 0;}
    .table-adv .source{font-style:italic; font-size:13px; color:#999;}
    .table-adv .bord-b {border-bottom:1px solid #eee; }

    .table-adv .big-1{font-size:20px; font-weight:normal; margin-bottom:2px;}
    .table-adv .big-2{font-size:18px; font-weight:normal; margin-bottom:2px;}
    
    .table-adv .small-1{font-size:13px; color:#999}
    
    .table-adv p {margin:0;}
    .table-adv .t-contact {font-size:15px;line-height:1.4em; }
    
    .table-adv .tc-grey-1{color:#999}
    .table-adv .tc-green-3{color:#41a078}

    .table-adv ul.req { margin: 10px 0 10px 20px; }
    .table-adv ul.req li { list-style:disc; margin: 6px 0 6px 0}
    
.ico-adv-sprite {background-image: url(assets/images/i/sprite.png); background-repeat:no-repeat; top:0; left:0; position:relative; display:inline-block;}
    .ico-stat { background-position: -70px 0; width:70px; height:70px; background-size: auto 140px;}
    .ico-bri { background-position: 0 0; width:70px; height:70px; background-size: auto 140px}
    .ico-smile { background-position: -420px 0; width:70px; height:70px; background-size: auto 140px}
    .ico-comp { background-position: -280px 0; width:70px; height:70px; background-size: auto 140px}
    .ico-mobile { background-position: -350px 0; width:70px; height:70px; background-size: auto 140px}
    .ico-glass { background-position: -490px 0; width:70px; height:70px; background-size: auto 140px}
    .ico-contact { background-position: -140px 0; width:70px; height:70px; background-size: auto 140px}
    .ico-sections { background-position: -560px 0; width:70px; height:70px; background-size: auto 140px}

    .ico-world { background-position: -150px 0; width:50px; height:50px; background-size: auto 100px}   
    .ico-man { background-position: 0 -50px; width:50px; height:50px; background-size: auto 100px}
    .ico-woman { background-position: -50px -50px; width:50px; height:50px; background-size: auto 100px}
    
    .ico-facebook { background-position: -100px -50px; width:50px; height:50px; background-size: auto 100px}
    .ico-twitter { background-position: -150px -50px; width:50px; height:50px; background-size: auto 100px}

.price-note {font-size:15px; background:#ffffb2; padding:14px 10px; }

.price-tab { width:100%;  }
    .price-tab td, .price-tab th { vertical-align:middle; background-color:#FFF; padding: 8px 9px; line-height: 1.4em;}
    .price-tab th { font-size:14px; background-color: #a1a5aa; text-align:left; color:#fff; font-weight:normal;}
    .price-tab .zona { width: 220px; color:#5a626c; font-weight:normal; }
    .price-tab .zona strong { font-size:15px; font-weight:600; color:#000; }
    .price-tab .zona span { display:block; color: #999; font-size:13px; }
    .price-tab .zsize { width:130px; background:#f9f9fa;}
        .price-tab .odd .zsize {background:#f0f1f2;}
    .price-tab .zdur { width: 86px; }
    .price-tab .zcount { width: 108px; }
    .price-tab .zprice{background:#fefaef;}
        .price-tab .odd .zprice {background:#f5f2e7;}
    .price-tab .zcomm{font-size:12px; color:#999}
    .price-tab .odd td { background: #f5f6f6; }
    .price-tab small {font-size:11px; color:#999;}
    
.section-tab { width:100%;}
    .section-tab td, .section-tab th { vertical-align:middle;  padding: 5px 9px; }
    .section-tab th { font-size:18px; background-color:#096; text-align:left; color:#fff; font-weight:normal;}
    </style>
@endsection
@section('language')
    <li>
        <a href="{{route('advertise', 'uz') }}"><img src="/assets/images/menu/icon/3.jpg" alt="JB's Language Icon">Uz</a>
    </li>
    <li>
        <a href="{{ route('advertise', 'en')}}"><img src="/assets/images/menu/icon/1.jpg" alt="JB's Language Icon">En</a>
    </li>
    <li>
        <a href="{{route('advertise', 'ru') }}"><img src="/assets/images/menu/icon/2.jpg" alt="JB's Language Icon">Ru</a>
    </li>
@endsection

@section('lang-mobile')
    <a href="{{route('advertise', 'uz')}}"><img src="/assets/images/menu/icon/3.jpg" alt="JB's Language Icon">Uz</a>
    <a href="{{route('advertise', 'en')}}"><img src="/assets/images/menu/icon/1.jpg" alt="JB's Language Icon">En</a>
    <a href="{{route('advertise', 'ru')}}"><img src="/assets/images/menu/icon/2.jpg" alt="JB's Language Icon">Ru</a>
@endsection

@section('content')
            <!-- Begin Hiraola's Breadcrumb Area -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="breadcrumb-content">
                <h2>@lang("Advertising on the site")</h2>
                <ul>
                    <li><a href="{{route('main' ,app()->getLocale())}}">@lang("Home")</a></li>
                    <li class="active">@lang("Advertising on the site")</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Hiraola's Breadcrumb Area End Here -->

    <div class="container"><br>
        <table class="table-adv" border="0">

        <tr><br>
            <h3 align="center">@lang("Social media advertising")</h3>

                <table class="price-tab">
                    <tr align="center">
                        <th></th>
                        <th>@lang("Views")</th>
                        <th>@lang("Visits")</th>
                        <th>@lang("Audience")</th>
                    </tr>
                    <tr class="odd">
                        <td class="zona">@lang("Through web site")</td>
                        <td class="">6527</td>
                        <td class="zcount">4827</td>
                        <td class="zprice">3050</td>
                    </tr>
                    <tr class="">
                        <td class="zona">@lang("Social Media")</td>
                        <td class="">28000+</td>
                        <td class="zcount">3156</td>
                        <td class="zprice">2400</td>
                    </tr>
                </table>

            
        </tr>
    </table><br>
    </div>

<div class="adv-rzd"></div>

<div class="container">

    <table class="table-adv" border="0">

        <tr><br>
            <h3 align="center">@lang("Social media advertising")</h3>

                <table class="price-tab">
                    <tr>
                        <th>@lang("Name Social Media")</th>
                        <th style="width:36%">@lang("Description")</th>
                        <th>@lang("Sizes"),&nbsp;@lang("formats")</th>
                        <th>@lang("Price without VAT")</th>
                    </tr>
                    <tr class="odd">
                        <td class="zona"><strong>@lang("Package")<br>@lang("Post in social media")</strong></td>
                        <td class="">@lang("Posting information on social networks without posting on the website (Telegram, Instagram Lenta and Facebook)").</td>
                        <td class="zcount">@lang("1 post in each social channel")</td>
                        <td class="zprice">1 000 000 @lang("sum")</td>
                    </tr>
                    <tr class="">
                        <td class="zona"><strong>@lang("Post in Telegram")</strong></td>
                        <td class="">@lang("Placing a post in Telegram groups (24,000 people).")</td>
                        <td class="zcount">1 @lang("post")</td>
                        <td class="zprice">1 500 000 @lang("sum")</td>
                    </tr>
                </table>

            
        </tr>
    </table>
    <p>@lang("The ad post is placed on the most active time of day and is never deleted").</p>
</div>

<div class="adv-rzd"></div>
    
<div class="container">
    <table class="table-adv" border="0">
    <tr>
        
            <h3 align="center">@lang("Advertising zones")</h3>
            <table class="price-tab">
                        <tr>
                            <th>@lang("Places / Zones")</th>
                            <th style="width:36%">@lang("Sizes")</th>
                            <th>@lang("Timing")</th>
                            <th>@lang("Price without VAT")</th>
                        </tr>
                        <tr class="odd">
                          <td class="zona"><strong>@lang("Place") № 1</strong></td>
                          <td class="">1110x520</td>
                          <td class="zcount">@lang("Month")</td>
                          <td class="zprice"> @lang("100 USD")</td>
                          
                        </tr>
                        <tr class="">
                          <td class="zona"><strong>@lang("Place") № 2</strong></td>
                          <td class="">310x520</td>
                          <td class="zcount">@lang("Month")</td>
                          <td class="zprice"> @lang("70 USD")</td>
                          
                        </tr>
                        <tr class="odd">
                          <td class="zona"><strong>@lang("Place") № 3</strong></td>
                          <td class="zsize">575x200</td>
                          <td class="zcount">@lang("Month")</td>
                          <td class="zprice">@lang("50 USD")</td>
                         
                        </tr>
                        <tr class="odd">
                          <td class="zona"><strong>@lang("Top companies")</strong></td>
                          <td class="zsize"></td>
                          <td class="zcount">@lang("Month")</td>
                          <td class="zprice">@lang("20 USD")</td>
                          
                        </tr>
                        <tr class="odd">
                          <td class="zona"><strong>@lang("Banner within a category")</strong></td>
                          <td class="zsize">575x200</td>
                          <td class="zcount">@lang("Month")</td>
                          <td class="zprice">@lang("20 USD")</td>
                          
                        </tr>
                        </table>

        </td>
    </tr>
    </table>
    <p>@lang("There is a 10% discount when paying 6 months in advance, 20% when paying for a year in advance").<br>
        @lang("Payment for advertising can be made by transfer").<br>
        @lang("To advertise, please contact to the manager at +998 97 404 69 64 (Maruf Pardaev)")
</p>
</div><br>

    <div class="container">
        <h5 align="center">@lang("Location of banner spots / zoness").</h5>
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <img  src="/assets/images/banner/reklamaga-2.jpg">
            </div>
            <div class="col-md-2"></div>
            
            
        </div>
    </div>
    <div class="adv-rzd"></div>
    
    
<div class="container">
<table class="table-adv" border="0">
    <tr>
        <td class="f-col">
            <span class="ico-adv-sprite ico-contact"></span>
            <h3>@lang("Contacts")</h3>
        </td>
        <td>
            <div class="article">
            <p>(+998) 95-1454502 – @lang("Sales department").</p>
            <p><a href="https://telegram.me/uzbekmart_admin">(+998) 97 404 69 64</a> – @lang("Manager (Maruf Pardaev)").</p>
            <p><a href="mailto:info@uzbekmart.com">info@uzbekmart.com</a> – @lang("E-mail").</p>
            <p>@lang("Working hours: 09:00 to 18:00 (Monday to Friday)").</p>
            <br>
            <p>@lang("Company") <a href="http://www.uzbekmart.com">Uzbekmart Group</a></p>
            </div>
        </td>
    </tr>
    </table>
</div>
@endsection