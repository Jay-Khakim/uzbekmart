@extends('layouts.app')
@section('language')
     <li>
        <a href="{{route('check-company', 'uz') }}"><img src="/assets/images/menu/icon/3.jpg" alt="JB's Language Icon">Uz</a>
    </li>
    <li>
        <a href="{{ route('check-company', 'en')}}"><img src="/assets/images/menu/icon/1.jpg" alt="JB's Language Icon">En</a>
    </li>
    <li>
        <a href="{{route('check-company', 'ru') }}"><img src="/assets/images/menu/icon/2.jpg" alt="JB's Language Icon">Ru</a>
    </li>
@endsection

@section('lang-mobile')
    <a href="{{route('check-company', 'uz')}}"><img src="/assets/images/menu/icon/3.jpg" alt="JB's Language Icon">Uz</a>
    <a href="{{route('check-company', 'en')}}"><img src="/assets/images/menu/icon/1.jpg" alt="JB's Language Icon">En</a>
    <a href="{{route('check-company', 'ru')}}"><img src="/assets/images/menu/icon/2.jpg" alt="JB's Language Icon">Ru</a>
@endsection

@section('content')
    <!-- Begin Hiraola's Content Wrapper Area -->
        <div class="hiraola-content_wrapper" style="margin-bottom: 100px;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div style="border: 2px double #1288B0; background-color: white; padding: 10px;">
                          <table border="0" cellspacing="2" cellpadding="2" style="margin: 0px auto; width: 50%;">
                            <tbody>
                                <tr><td style="text-align: left; font-weight: bold;">@lang("Enter <br/> STIR code")</td>
                                    <td style="padding-right: 10px;">
                                        <input type="text" id="OKPO" name="OKPO" style="float: right; width: 170px;" /> 
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td style="padding-right: 15px; display: inline; float: right;"><span>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                                        <button style="border: medium none; padding: 0px; margin: 0px; width: 170px; float: right; background: none 0% 0% repeat scroll transparent;" onclick="refresh();return false;">
                                            <img width="170" id="cimage" src="http://registr.stat.uz/ext/c/index.php?PHPSESSID=ijmq4pkkah40nsuk4f7uuj9u51" />
                                        </button> 
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td style="font-size: 11px; text-align: right;">@lang("To change the picture refresh the site")
                                    </td>
                                </tr>

                              <tr>
                                    <td style="font-weight: bold;"> @lang("Write code <br/> in the picture")
                                    </td>
                                    <td style="padding-right: 10px;">
                                        <input type="text" id="keystring" name="keystring" style="float: right; width: 170px;" /> 
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <br>
                                    <td style=" text-align: right;"> 
                                        <button name="per" class="btn  btn-primary"  style="width: 180px;">
                                            @lang("Search")
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hiraola's Content Wrapper Area End Here -->
@endsection