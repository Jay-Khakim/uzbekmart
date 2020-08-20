<!-- Begin Hiraola's Header Main Area -->
        <header class="header-main_area">
            <div class="header-top_area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="ht-left_area">
                                <div class="header-shipping_area">
                                    <ul>
                                        <li>
                                            <span>{{__("Call center")}}: </span>
                                            <a href="callto://+998951454502">+99895 145 45 02</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="ht-right_area">
                                <div class="ht-menu">
                                    <ul style="display: inline-block;">
                                        <li>
                                            <a href="{{ url('/uz') }}"><img src="assets/images/menu/icon/3.jpg" alt="JB's Language Icon">Uz</a>
                                        </li>
                                        <li>
                                            <a href="{{ url('/en') }}"><img src="assets/images/menu/icon/1.jpg" alt="JB's Language Icon">En</a>
                                        </li>
                                        <li>
                                            <a href="{{ url('/ru') }}"><img src="assets/images/menu/icon/2.jpg" alt="JB's Language Icon">Ru</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-middle_area d-none d-lg-block">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="header-logo">
                                <a href="index.html">
                                    <img src="assets/images/menu/logo/1.png" alt="Uzbekmart's Header Logo">
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-9">
                            <div class="hm-form_area">
                                <form action="#" class="hm-searchbox">
                                    <input type="text" placeholder="{{__("Enter your search key")}} ...">
                                    <button class="li-btn" type="submit"><i class="fa fa-search"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-bottom_area header-sticky stick">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-sm-4 d-lg-none d-block">
                            <div class="header-logo">
                                <a href="index.html">
                                    <img src="assets/images/menu/logo/2.png" alt="Hiraola's Header Logo">
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-9 d-none d-lg-block position">
                            <div class="main-menu_area">
                                <nav>
                                    <ul>
                                        <li><a href="index.html">{{__("Home")}}</a> </li>
                                        <li class="dropdown-holder"><a href="index.html">{{__("Companies")}}</a>
                                            <ul class="hm-dropdown">
                                                <li><a href="com-local/com-local.html">{{__("Local companies")}}</a></li>
                                                <li><a href="com-foreign/com-foreign.html">{{__("Foreign companies")}}</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="service.html">{{__("Services")}}</a>
                                            <ul class="hm-dropdown">
                                                <li><a href="service1.html">{{__("For investors")}}</a></li>
                                                <li><a href="service2.html">{{__("Check for company")}}</a></li>
                                                <li><a href="service.html">{{__("Other services")}}</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="project.html">{{__("Investment projects")}}</a></li>
                                        <li><a href="buy.html">{{__("Buy/Requests")}}</a></li>
                                        <li><a href="contact.html">{{__("Contacts")}}</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-8 col-sm-8">
                            <div id="search21" class="mobile-menu_btn offcanvas-inner_search pt-2 d-lg-none d-block" align="center">
                                        <form action="#" class="hm-searchbox">
                                                <input style="border-radius: 8px;" type="text" placeholder="{{__("Search")}}...">
                                                <button style=" padding: 3px;"  class="search_btn" type="submit"><i class="ion-ios-search-strong" style="color: white;"></i></button>
                                        </form>
                                </div>
                            <div class="header-right_area">
                                {{-- <ul>
                                    <li class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter1"><a href="javascript:void(0)" title="Message"><i class="ion-ios-email-outline"></i></a></li>
                                    <li class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter2"><a href="javascript:void(0)" title="Message"><i class="ion-ios-telephone-outline"></i></a></li>
                                    <li>
                                        <a href="#mobileMenu" class="mobile-menu_btn toolbar-btn color--white d-lg-none d-block">
                                            <i class="ion-navicon"></i>
                                        </a>
                                    </li>
                                </ul> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="mobile-menu_wrapper" id="mobileMenu">
                <div class="offcanvas-menu-inner">
                    <div class="container">
                        <a href="#" class="btn-close"><i class="ion-android-close"></i></a>
                        <nav class="offcanvas-navigation user-setting_area">
                            <ul class="mobile-menu" >
                                <li class="menu-item" id="nav">
                                    <h5 align="center" style="display: inline-block">
                                        <a id="nav" href="{{ url('/uz') }}"><img src="assets/images/menu/icon/3.jpg" alt="JB's Language Icon">Uz</a>
                                        <a id="nav" href="{{ url('/en') }}"><img src="assets/images/menu/icon/1.jpg" alt="JB's Language Icon">En</a>
                                        <a id="nav" href="{{ url('/ru') }}"><img src="assets/images/menu/icon/2.jpg" alt="JB's Language Icon">Ru</a>
                                    </h5>
                                </li> 
                            </ul>
                        </nav>
                        <div id="search22" class="offcanvas-inner_search">
                            <form action="#" class="hm-searchbox">
                                <input type="text" placeholder="{{__("Search")}}">
                                <button class="search_btn" type="submit"><i class="ion-ios-search-strong"></i></button>
                            </form>
                        </div>
                        <nav class="offcanvas-navigation">
                            <ul class="mobile-menu">
                                <li class="menu-item-has-children">
                                    <a href="index.html">
                                        <span class="mm-text">{{__("Home")}}</span>
                                    </a>
                                </li>
                                <li class="menu-item-has-children active"><a href="index.html"><span
                                        class="mm-text">{{__("Companies")}}</span></a>
                                    <ul class="sub-menu">
                                        <li>
                                            <a href="com-local/com-local.html">
                                                <span class="mm-text">{{__("Local companies")}}</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="com-foreign/com-foreign.html">
                                                <span class="mm-text">{{__("Foreign companies")}}</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children active">
                                    <a href="service.html">
                                        <span class="mm-text">{{__("Services")}}</span>
                                    </a>
                                    <ul class="sub-menu">
                                        <li>
                                            <a href="service1.html">
                                                <span class="mm-text">{{__("For investors")}}</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="service.html">
                                                <span class="mm-text">{{__("Other services")}}</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                
                                <li class="menu-item-has-children">
                                    <a href="project.html">
                                        <span class="mm-text">{{__("Investment projects")}}</span>
                                    </a>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="buy.html">
                                        <span class="mm-text">{{__("Buy/Requests")}}</span>
                                    </a>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="contact.html">
                                        <span class="mm-text">{{__("Contacts")}}</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </header>
        <!-- Hiraola's Header Main Area End Here -->