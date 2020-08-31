@extends('layouts.app')
@section('language')
    <li>
        <a href="{{route('faq', 'uz') }}"><img src="/assets/images/menu/icon/3.jpg" alt="JB's Language Icon">Uz</a>
    </li>
    <li>
        <a href="{{ route('faq', 'en')}}"><img src="/assets/images/menu/icon/1.jpg" alt="JB's Language Icon">En</a>
    </li>
    <li>
        <a href="{{route('faq', 'ru') }}"><img src="/assets/images/menu/icon/2.jpg" alt="JB's Language Icon">Ru</a>
    </li>
@endsection

@section('lang-mobile')
    <a href="{{route('faq', 'uz')}}"><img src="/assets/images/menu/icon/3.jpg" alt="JB's Language Icon">Uz</a>
    <a href="{{route('faq', 'en')}}"><img src="/assets/images/menu/icon/1.jpg" alt="JB's Language Icon">En</a>
    <a href="{{route('faq', 'ru')}}"><img src="/assets/images/menu/icon/2.jpg" alt="JB's Language Icon">Ru</a>
@endsection

@section('content')
        <!-- Begin Hiraola's Breadcrumb Area -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="breadcrumb-content">
                <h2>@lang("FAQ")</h2>
                <ul>
                    <li><a href="{{route('main' ,app()->getLocale())}}">@lang("Home")</a></li>
                    <li class="active">@lang("Frequently asked questions")</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Hiraola's Breadcrumb Area End Here -->


    <!-- Begin Hiraola's Frequently Area -->
    <div class="frequently-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="frequently-content">
                        <div class="frequently-desc">
                            <h3><strong>@lang("What security measures does UzbekMART take?  ")</strong></h3>
                            <p>@lang("UzbekMART gives high amount of importance to the Personal Information Security of its customers.")<br>
                                -@lang("UzbekMART is committed to the security of its buyers and suppliers. Security is the core element for our healthy growth, and to achieve this we use 256-bit encryption technology")<br>
                                @lang("-All your online transactions on UzbekMART are secure with the highest levels of transaction security currently available on the Internet.")<br>
                                @lang("-Apart from this, all your information is safe with us as we do not share this with any third party for commercial use").<br>
                            </p>
                        </div>
                    </div>
                    <!-- Begin Frequently Accordin -->
                    <div class="frequently-accordion">
                        <div id="accordion">
                            <div class="card actives">
                                <div class="card-header" id="headingOne">
                                    <h5 class="mb-0">
                                        <a href="javascript:void(0)" class="" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            @lang("How do I search for a product / service on UzbekMART?")
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                    <div class="card-body">
                                        @lang("You can search for a Product or Service on UzbekMART using the steps mentioned below"):<br>
                                        - @lang("Visit www.uzbekmart.com and search for the product/company name using search box"); <br>
                                        -@lang("From the search result page, you can also choose/enter the preferred city of product/supplier you wish to source products").
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingTwo">
                                    <h5 class="mb-0">
                                        <a href="javascript:void(0)" class="collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            @lang("How does a buyer provide feedback/rating to a seller listed on UzbekMART?")
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                    <div class="card-body">
                                        @lang("A buyer can provide his feedback to UzbekMART through responding on the feedback emails. Buyers can share seller feedback as well as their feedback about overall UzbekMART experience through these emails, by clicking on the corresponding mode of completion. ")
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingThree">
                                    <h5 class="mb-0">
                                        <a href="javascript:void(0)" class="collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                           @lang("What is Star Supplier package?")
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                    <div class="card-body">
                                        @lang("Star service is a premium listing service by UzbekMART which gives you priority listing in your chosen category-city combinations. With this service, experience increased leads, enquiries and the opportunity to get more business.")
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="card">
                                <div class="card-header" id="headingFour">
                                    <h5 class="mb-0">
                                        <a href="javascript:void(0)" class="collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                            @lang("How can I order? ")               
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                                    <div class="card-body">
                                        @lang("You can order easily using our online platform. When you find a product you need, you can add it to cart, login and go through the ordering process. After the order is ready, you will receive order summary to your email. Order summary will also be stored to your account.")<br> 
                                        @lang("You can also easily make reorders afterwards by clicking the 'reorder' button on any of your previously made orders. After clicking the 'reorder' button the cart will open and you can change quantities or products. ")
                                    </div>
                                </div>
                            </div> --}}
                            {{-- <div class="card">
                                <div class="card-header" id="headingFive">
                                    <h5 class="mb-0">
                                        <a href="javascript:void(0)" class="collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                            Mahsulot o'lchami haqidagi ma'lumotni qayerdan topsam bo'ladi?
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
                                    <div class="card-body">
                                        Mahsulot o'lchamlari turli markalar va uslublar orasida farq qiladi. Mahsulot hajmi to'g'risidagi ma'lumotni quyida ko'rsatilgan rasmda ko'rsatilgandek mahsulotning har bir batafsil sahifasining pastki qismida topish mumkin. Agar boshqacha ko'rsatilmagan bo'lsa, o'lchamlari dyuymga teng va buyum tekis yotgan holda olinadi.
                                    </div>
                                </div>
                            </div> --}}
                            <div class="card">
                                <div class="card-header" id="headingSix">
                                    <h5 class="mb-0">
                                        <a href="javascript:void(0)" class="collapsed" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                            @lang("How do I activate my account? ")
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordion">
                                    <div class="card-body">
                                        @lang("The instructions to activate your account will be sent to your email once you have submitted the registration form. If you did not receive this email, your email service provider’s mailing software may be blocking it. You can try checking your junk / spam folder or contact us at info@uzbekmart.com ")
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingSeven">
                                    <h5 class="mb-0">
                                        <a href="javascript:void(0)" class="collapsed" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                            @lang("What are the payment methods available?")
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordion">
                                    <div class="card-body">
                                        @lang("At the moment, we only accept Uzcards, Humo and Paypal payments.")                                        
                                    </div>
                                </div>
                            </div>
    
                        </div>
                    </div>
                    <!--Frequently Accordin End Here -->
                </div>
            </div>
        </div>
    </div>
@endsection