<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<!-- Mirrored from icla2016.univie.ac.at/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 21 Dec 2020 10:12:37 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8"/><!-- /Added by HTTrack -->
<head>
    @include('web.other.head')
</head>
<body>

{{--<script type="text/javascript" language="JavaScript1.2">--}}
{{--    if (uni_js_fontSize) uni_js_fontSize.efaInit();--}}
{{--</script>--}}
<div id="container">
<div id="google_translate_element"></div>
    <div id="kopfzeile_banner">
        <div id="kopfzeile_text">
            <a href="{{route('home')}}">
                <img src="{{asset('images/head/ICLA-head_001.png')}}" width="1003" border="0" alt=""/></a>
        </div>
    </div>

    <div id="kopfzeile_grau">
        <div id="kopzeile_titel">&nbsp;</div>
        <div id="sprachwahl_container">

            <!--

                BEGIN: Content of extension "sr_language_menu", plugin "tx_srlanguagemenu_pi1"

            -->
        {{--            <div class="tx-srlanguagemenu-pi1">--}}
        {{--                @foreach($language as $languageitem)--}}
        {{--                    @if(!isset($locale) && $languageitem->url == 'ka')--}}
        {{--                        <div class="NO"><a--}}
        {{--                                href="{{route('home.leng',['locale'=>$languageitem->url])}}">{{$languageitem->title}}</a>--}}
        {{--                        </div>--}}
        {{--                    @elseif(isset($locale) && $languageitem->url != 'ka')--}}
        {{--                        <div class="NO"><a--}}
        {{--                                href="{{route('home.leng',['locale'=>$languageitem->url])}}">{{$languageitem->title}}</a>--}}
        {{--                        </div>--}}
        {{--                    @elseif(isset($locale) && $languageitem->url != 'en')--}}
        {{--                        <div class="NO"><a--}}
        {{--                                href="{{route('home.leng',['locale'=>$languageitem->url])}}">{{$languageitem->title}}</a>--}}
        {{--                        </div>--}}
        {{--                    @endif--}}
        {{--                @endforeach--}}
        {{--            </div>--}}

        <!-- END: Content of extension "sr_language_menu", plugin "tx_srlanguagemenu_pi1" -->

        </div>
    </div>

    <div id="content">
        <div id="spalte_links">
            @include('web.other.left')
        </div>

        <div id="spalte_mitte" style="width:803px;">
            <div id="spalte_mitte_content"><!--TYPO3SEARCH_begin-->
                <!--  CONTENT ELEMENT, uid:573688/text [begin] -->
                @yield('section')
                <div id="c583272" class="csc-default"><h1></h1>
                    <!--  Image block: [begin] -->
                    <div class="csc-textpic csc-textpic-center csc-textpic-above csc-textpic-equalheight">
                        <div class="csc-textpic-imagewrap csc-textpic-single-image" style="width:551px;">
{{--                            <a target="_blank" href="https://www.mes.gov.ge/index.php?lang=geo">--}}
{{--                                <img src="{{asset('images/baner/mes.gov.ge-logo-eng.png')}}" width="120" border="0"--}}
{{--                                     alt=""/>--}}
{{--                            </a>--}}
                        </div>
                    </div>
                    <div class="csc-textpic-clear"><!-- --></div>
                    <!--  Image block: [end] -->
                </div>
                <!--  CONTENT ELEMENT, uid:583272/image [end] -->
                <!--TYPO3SEARCH_end-->
            </div>
        </div>
{{--        <div id="spalte_rechts">--}}
{{--            <div id="funktionsbox">--}}
{{--                <div id="suche">--}}
{{--                    <!----}}

{{--                        BEGIN: Content of extension "macina_searchbox", plugin "tx_macinasearchbox_pi1"--}}

{{--                    -->--}}
{{--                    <div class="tx-macinasearchbox-pi1">--}}
{{--                        <div id="suche">--}}
{{--                            @include('web.other.search')--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <!-- END: Content of extension "macina_searchbox", plugin "tx_macinasearchbox_pi1" -->--}}

{{--                    <hr style="color:#cccccc;height:1px;"/>--}}
{{--                    <div id="schriftgroesse">--}}
{{--                        @include('web.other.right')--}}
{{--                    </div>--}}
{{--                    --}}{{--                    <hr style="color:#cccccc;height:1px;"/>--}}
{{--                </div>--}}

{{--                <div id="quicklinks"></div>--}}
{{--            </div>--}}
{{--            <div style=" min-height: 100px; margin-top: 10px;">--}}
{{--                <h4>Important Dates:</h4>--}}
{{--                <span style="font-size: 10px">Group session submission due:</span><br>--}}
{{--                <span style="font-size: 10px;"><b>31 August, 2021.</b></span>--}}
{{--                <hr>--}}
{{--                <span style="font-size: 10px">Acceptance of group sessions</span><br>--}}
{{--                <span style="font-size: 10px">announced by Chairs: </span><br>--}}
{{--                <span style="font-size: 10px;"><b>November 30, 2021.</b></span>--}}
{{--                <hr>--}}
{{--                <span style="font-size: 10px">Individual abstract</span><br>--}}
{{--                <span style="font-size: 10px">submission due:</span><br>--}}
{{--                <span style="font-size: 10px;"><b>31 December, 2021</b></span>--}}
{{--                <hr>--}}
{{--                <span style="font-size: 10px">Special session</span><br>--}}
{{--                <span style="font-size: 10px">submission due:</span><br>--}}
{{--                <span style="font-size: 10px;"><b>31 December, 2021</b></span>--}}
{{--                <hr>--}}
{{--                <span style="font-size: 10px">Acceptance announced</span><br>--}}
{{--                <span style="font-size: 10px">of individual papers</span><br>--}}
{{--                <span style="font-size: 10px;"><b>20 February, 2022</b></span>--}}
{{--                <hr>--}}
{{--                <span style="font-size: 10px">Registration deadline</span><br>--}}
{{--                <span style="font-size: 10px;"><b>June 1, 2022</b></span>--}}
{{--                <hr>--}}
{{--            </div>--}}
{{--            <div id="spalte_rechts_content"><!--TYPO3SEARCH_begin--><!--TYPO3SEARCH_end--></div>--}}
{{--        </div>--}}
{{--        <div class="clear"></div>--}}
    </div>

    <div id="fusszeile">
        @include('web.other.footer')
    </div>

</div>

@include('web.other.script')

</body>

<!-- Mirrored from icla2016.univie.ac.at/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 21 Dec 2020 10:12:38 GMT -->
</html>
