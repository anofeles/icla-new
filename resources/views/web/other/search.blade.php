<form action="{{route('home.post.search',['menuid'=>$menuid,'locale'=>$locale])}}" method="post" name="searchform"
      id="searchform" style="margin:0px; padding:0px; ">
    @csrf
    <table border="0" cellpadding="0" cellspacing="0">
        <tr style="height:25px">
            <td align="left" height="25px"><input name="search" type="text"
                                                  onclick="this.value=''"
                                                  style="margin:4px; height:18px; width:130px; font-size:11px"
                                                  value="Search..." size="20"/></td>
            <td><input name="tx_indexedsearch[submit_button]" type="submit"
                       id="search_button" style="border:0; width:19px;" value=" "/>
            </td>
        </tr>
    </table>
</form>
