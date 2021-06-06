<div id="navigation">
    <div class="tx-srlanguagemenu-pi1">
        @foreach($language as $languageitem)
            <div class="NO"><a
                    href="{{route('home.leng',['locale'=>$languageitem->url])}}">
                    <img src="{{asset('images/head/'.$languageitem->title)}}" width="20" height="13"/>
                </a>
            </div>
        @endforeach
    </div>
    {{--    <div class="sidenav">--}}
    {{--        @foreach($menuMtav as $menuMtavitem)--}}
    {{--            <a href="#">{{$menuMtavitem->title}}</a>--}}
    {{--            <button class="dropdown-btn--}}
    {{--@if(isset($menuid) && $menuid == $menuMtavitem->id) active @endif--}}
    {{--">{{$menuMtavitem->title}}--}}
    {{--                <i class="fa fa-caret-down"></i>--}}
    {{--            </button>--}}
    {{--            <div class="dropdown-container">--}}
    {{--                @foreach($menuDam as $menuDamitem)--}}
    {{--                    @if($menuDamitem->menu_id == $menuMtavitem->id)--}}
    {{--                        <a href="{{route('home.menu',['menuid'=>$menuDamitem->menu_id,'locale'=>$locale])}}">{{$menuDamitem->title}}</a>--}}
    {{--                    @endif--}}
    {{--                @endforeach--}}
    {{--            </div>--}}
    {{--        @endforeach--}}
    {{--    </div>--}}
    <ul id="level1">
        @foreach($menuMtav as $menuMtavitem)
            @foreach($menuDam as $menuDamite1)
                @php
                    if(isset($menuid) && $menuid == $menuDamite1->id){
$damid = $menuDamite1->menu_id;
}
                @endphp
            @endforeach
            <li
                @if(isset($menuid) && $menuid == $menuMtavitem->id) class="act" @endif
            >
                <a style="background-color: #ccc; border-bottom-color: #000"
                   href="{{route('home.menu',['menuid'=>$menuMtavitem->id,'locale'=>$locale])}}">
                    {{$menuMtavitem->title}}
                </a>
                <ul id="level1">
                    @foreach($menuDam as $menuDamitem)
                        @if($menuDamitem->menu_id == $menuMtavitem->id)

                            <li class="dam{{$menuMtavitem->id}}"
                                @if((isset($menuid) && $menuid == $menuDamitem->menu_id) || (isset($damid) && $damid == $menuDamitem->menu_id))
                                style="display: block"
                                @else
                                style="display: none"
                                @endif
                            ><a style="background-color: #ccc; border-bottom-color: #000"
                                href="{{route('home.menu',['menuid'=>$menuDamitem->id,'locale'=>$locale])}}">{{$menuDamitem->title}}</a>
                            </li>
                        @endif
                    @endforeach
                </ul>
            </li>
        @endforeach
    </ul>
    <div style=" min-height: 100px; margin-top: 10px;padding-left: 10px">
        <a href="https://eeu.edu.ge/" target="_blanck">
            <img src="{{asset('images/head/bnaer/EEU_logo.png')}}" width="80"  style="float: left">
            <span style="font-size: 12px">East European University</span>
        </a>
        <br>
        <hr>
        <a href="https://www.tsu.ge/en" target="_blanck">
            <img src="{{asset('images/head/bnaer/logo TSU.png')}}" width="50"  style="float: left;padding-right: 10px">
            <span style="font-size: 12px">Ivane Javakhishvili Tbilisi State University</span>
        </a>
        <hr>

    </div>
</div>
