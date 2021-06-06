<?php


namespace App\Http\Controllers\Fromt;


use App\Http\Controllers\Controller;

use App\Http\Controllers\Fromt\Trite\form;
use App\Models\Post;
use App\Repositories\LocaleRepositori;
use App\Repositories\MenuRepositori;
use App\Repositories\PostRepositori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Mail;
use phpDocumentor\Reflection\DocBlock\Tags\TagWithType;

class Webcontroller extends Controller
{
    use form;

    protected $LocaleRepositori, $MenuRepositori, $PostRepositori;

    function __construct
    (
        LocaleRepositori $LocaleRepositori,
        MenuRepositori $MenuRepositori,
        PostRepositori $PostRepositori
    )
    {
        $this->LocaleRepositori = $LocaleRepositori;
        $this->MenuRepositori = $MenuRepositori;
        $this->PostRepositori = $PostRepositori;
        view()->share('language', $this->LocaleRepositori->orderBy('sort' ,'ASC')->get());
    }

    public function index($locale = 'en', $menuid  = 0)
    {
        App::setLocale($locale);
        if($locale == 'en'){
            $post = $this->PostRepositori->whereHas('translations', function ($query) use ($locale) {
                $query
                    ->where('locale', $locale);
            })->where('mtav','=',1)->orderBy('id')->first();
        }
        else{
            $post = $this->PostRepositori->whereHas('translations', function ($query) use ($locale) {
                $query
                    ->where('locale', $locale);
            })->where('mtav','=',1)->orderBy('id')->first();
        }

        $menuMtav = $this->MenuRepositori->whereHas('translations', function ($query) use ($locale) {
            $query
                ->where('locale', $locale);
        })->where('active', '=', 1)->whereNull('menu_id')->orderBy('sort' ,'ASC')->get();
        $menuDam = $this->MenuRepositori->whereHas('translations', function ($query) use ($locale) {
            $query
                ->where('locale', $locale);
        })->where('active', '=', 1)->whereNotNull('menu_id')->get();

        return view('web.page.index', compact('locale', 'menuid', 'post', 'menuMtav', 'menuDam'));
    }

    public function page($menuid = 0,$locale = 'ka'){
        App::setLocale($locale);
        $post = \DB::table('posts')
            ->join('menu_to_any','posts.uuid','=','menu_to_any.row_uuid')
            ->join('menus','menu_to_any.menu_uuid','=','menus.uuid')
            ->join('post_translations','posts.id','=','post_translations.post_id')
            ->where('post_translations.locale', $locale)
            ->where('posts.active', '=', 1)
            ->where('menus.id', '=', $menuid)
            ->get();
        $menuMtav = $this->MenuRepositori->whereHas('translations', function ($query) use ($locale) {
            $query
                ->where('locale', $locale);
        })->where('active', '=', 1)->whereNull('menu_id')->orderBy('sort' ,'ASC')->get();
        $menuDam = $this->MenuRepositori->whereHas('translations', function ($query) use ($locale) {
            $query
                ->where('locale', $locale);
        })->where('active', '=', 1)->whereNotNull('menu_id')->get();
//        dd($post);
        return view('web.page.post',compact('locale', 'post', 'menuMtav', 'menuDam','menuid'));
    }

    public function pagefull($menuid = 0, $postid = 0,$locale = 'ka'){
        App::setLocale($locale);
        $post = $this->PostRepositori->whereHas('translations', function ($query) use ($locale) {
            $query
                ->where('locale', $locale);
        })->where('id','=',$postid)->orderBy('id')->first();
        $menuMtav = $this->MenuRepositori->whereHas('translations', function ($query) use ($locale) {
            $query
                ->where('locale', $locale);
        })->where('active', '=', 1)->whereNull('menu_id')->orderBy('sort' ,'ASC')->get();
        $menuDam = $this->MenuRepositori->whereHas('translations', function ($query) use ($locale) {
            $query
                ->where('locale', $locale);
        })->where('active', '=', 1)->whereNotNull('menu_id')->get();
//        dd($post);
        return view('web.page.full', compact('locale', 'post','menuMtav', 'menuDam','menuid'));
    }

    public function pagesearch($menuid = 0, $locale = 'ka', Request $request){
        App::setLocale($locale);
        $postsearch = \DB::table('posts')
            ->join('post_translations','posts.id','=','post_translations.post_id')
            ->orWhere('post_translations.title','like', '%'.$request->search.'%')
            ->orWhere('post_translations.desc', 'like', '%'.$request->search.'%')
            ->orWhere('post_translations.text', 'like', '%'.$request->search.'%')
            ->where('posts.active', '=', 1)
            ->get();
        $menuMtav = $this->MenuRepositori->whereHas('translations', function ($query) use ($locale) {
            $query
                ->where('locale', $locale);
        })->where('active', '=', 1)->whereNull('menu_id')->orderBy('sort' ,'ASC')->get();
        $menuDam = $this->MenuRepositori->whereHas('translations', function ($query) use ($locale) {
            $query
                ->where('locale', $locale);
        })->where('active', '=', 1)->whereNotNull('menu_id')->get();
        return view('web.page.search',compact('locale', 'postsearch', 'menuMtav', 'menuDam','menuid'));
    }

}
