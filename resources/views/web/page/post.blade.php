@extends('web.layouts.welcome')
@section('section')
    @foreach($post as $postitem)
    {{--<div id="c573688" class="csc-default"><h1></h1>--}}
    {{--    <!--  Text: [begin] -->--}}
    {{--    <p class="align-center"><b--}}
    {{--            style="font-size: 12px; color: rgb(99, 102, 107);">July&nbsp;21<sup>st</sup>&nbsp;– 27<sup>th</sup>&nbsp;2016</b>--}}
    {{--    </p>--}}
    {{--    <p class="align-center"><b style="font-size: 12px; color: rgb(99, 102, 107);">University of--}}
    {{--            Vienna</b></p>--}}
    {{--    <p class="align-center">&nbsp;</p>--}}
    {{--    <!--  Text: [end] -->--}}
    {{--</div>--}}
    <!--  CONTENT ELEMENT, uid:573688/text [end] -->

    <!--  CONTENT ELEMENT, uid:608086/text [begin] -->
    <div id="c608086" class="csc-default"><h1></h1>
        <!--  Text: [begin] -->
        <p class="align-center"><span style="font-size: 16px;">
                <a style="text-decoration: none;"  @if(!empty($postitem->text)) href="{{route('home.post',['menuid'=>$menuid,'postid'=>$postitem->post_id,'locale'=>$locale])}}" @endif class="internal-link"><b>{{$postitem->title}}</b></a></span>
        </p>
        <p class="align-center">&nbsp;</p>
        <!--  Text: [end] -->
    </div>
    <!--  CONTENT ELEMENT, uid:608086/text [end] -->

    <!--  CONTENT ELEMENT, uid:573684/textpic [begin] -->
    <div id="c573684" class="csc-default"><h1></h1>
        <!--  Image block: [begin] -->
        <div class="csc-textpic csc-textpic-intext-left csc-textpic-equalheight">
            @if(isset($postitem->img) && !empty($postitem->img) )
            <div class="csc-textpic-imagewrap csc-textpic-single-image"><img
                    src="{{asset('images/post/'.$postitem->img)}}" width="248"
                    height="351" border="0" alt=""/></div>
            @endif
            <div class="csc-textpic-text">
                <!--  Text: [begin] -->

            @if(empty($postitem->text) && $postitem->text != null)
                {!! $postitem->text !!}
            @else
                {!! $postitem->desc !!}
            @endif
            <!--  Text: [end] -->
            </div>
        </div>
        <div class="csc-textpic-clear"><!-- --></div>
        <!--  Image block: [end] -->
    </div>
    @endforeach
@endsection
