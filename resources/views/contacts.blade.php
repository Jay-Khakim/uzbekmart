@extends('layouts.app')
@section('language')
    <li>
        <a href="{{route('contacts', 'uz') }}"><img src="/assets/images/menu/icon/3.jpg" alt="JB's Language Icon">Uz</a>
    </li>
    <li>
        <a href="{{ route('contacts', 'en')}}"><img src="/assets/images/menu/icon/1.jpg" alt="JB's Language Icon">En</a>
    </li>
    <li>
        <a href="{{route('contacts', 'ru') }}"><img src="/assets/images/menu/icon/2.jpg" alt="JB's Language Icon">Ru</a>
    </li>
@endsection

@section('lang-mobile')
    <a href="{{route('contacts', 'uz')}}"><img src="/assets/images/menu/icon/3.jpg" alt="JB's Language Icon">Uz</a>
    <a href="{{route('contacts', 'en')}}"><img src="/assets/images/menu/icon/1.jpg" alt="JB's Language Icon">En</a>
    <a href="{{route('contacts', 'ru')}}"><img src="/assets/images/menu/icon/2.jpg" alt="JB's Language Icon">Ru</a>
@endsection

@section('content')
    <!-- Begin Hiraola's Breadcrumb Area -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="breadcrumb-content">
                <h2>@lang("Contacts")</h2>
                <ul>
                    <li><a href="{{route("main", app()->getLocale())}}">@lang("Home")</a></li>
                    <li class="active">@lang("Contacts")</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Hiraola's Breadcrumb Area End Here -->

    <!-- Begin Contact Main Page Area -->
        <div class="contact-main-page">
            <div class="container">
                <iframe align="center" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d650.2518319499841!2d69.21856252920595!3d41.355331205372956!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38ae8d4e64adf79d%3A0x3a39127fd8ff297b!2sO%E2%80%99zbekiston%20Eksportchilar%20Uyushmasi!5e1!3m2!1suz!2s!4v1590062066869!5m2!1suz!2s" style="width: 100% ; height: 300px;" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 offset-lg-1 col-md-12 order-1 order-lg-2">
                        <div class="contact-page-side-content">
                            <h3 class="contact-page-title">@lang("Our contacts")</h3>
                            <p class="contact-page-message">@lang("Online showroom which was made by Uzbekistan Exporters Accosiation")</p>
                            <div class="single-contact-block">
                                <h4><i class="fa fa-fax"></i> @lang("Address")</h4>
                                <p>@lang("8A, Korakamish street, Olmazor region, Tahskent city, Uzbekistan")</p>
                            </div>
                            <div class="single-contact-block">
                                <h4><i class="fa fa-phone"></i> @lang("Phone")</h4>
                                <p> +99895 145 45 02</p>
                                
                            </div>
                            <div class="single-contact-block last-child">
                                <h4><i class="fa fa-envelope-o"></i> @lang("E-mail")</h4>
                                <p>info@uzbekmart.com</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 order-2 order-lg-1">
                        <div class="contact-form-content">
                            <h3 class="contact-page-title">@lang("Leave your message")</h3>
                            <div class="contact-form">
                                <form id="contact-form" action="http://hasthemes.com/file/mail.php" method="post">
                                    <div class="form-group">
                                        <label>@lang("Name") <span class="required">*</span></label>
                                        <input type="text" name="con_name" id="con_name" required>
                                    </div>
                                    <div class="form-group">
                                        <label>@lang("E-mail") <span class="required">*</span></label>
                                        <input type="email" name="con_email" id="con_email" required>
                                    </div>
                                    <div class="form-group">
                                        <label>@lang("Subject")</label>
                                        <input type="text" name="con_subject" id="con_subject">
                                    </div>
                                    <div class="form-group form-group-2">
                                        <label>@lang("Message")</label>
                                        <textarea name="con_message" id="con_message"></textarea>
                                    </div>
                                    <div class="form-group" align="center">
                                        <button type="submit" value="submit" id="submit" class="alsita-contact-form_btn" name="submit">@lang("Send")</button>
                                    </div>
                                </form>
                            </div>
                            <p class="form-messege"></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact Main Page Area End Here -->
@endsection
