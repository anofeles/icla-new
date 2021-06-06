<?php

namespace App\Http\Controllers\Manager;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Manager\Trite\MenuTrite;
use App\Http\Controllers\Manager\Trite\PostTrite;
use App\Repositories\MenuRepositori;
use App\Repositories\MenuToAnyReoisitirue;
use App\Repositories\PostRepositori;
use App\Repositories\LocaleRepositori;
use Illuminate\Support\Facades\App;


class HomeController extends Controller
{

    use PostTrite,MenuTrite;
    protected $MenuRepositori,$PostRepositori,$LocaleRepositori,$MenuToAnyReoisitirue;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(
        MenuRepositori $MenuRepositori,
        PostRepositori $PostRepositori,
        LocaleRepositori $LocaleRepositori,
        MenuToAnyReoisitirue $MenuToAnyReoisitirue
    )
    {
        $this->MenuRepositori = $MenuRepositori;
        $this->PostRepositori = $PostRepositori;
        $this->LocaleRepositori = $LocaleRepositori;
        $this->MenuToAnyReoisitirue = $MenuToAnyReoisitirue;
        view()->share('local',$local = $this->LocaleRepositori->all());
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index($locale = 'ka')
    {
        App::setLocale($locale);
        $post = $this->PostRepositori->limit(5);
        return view('admin.home',compact('locale','post'));
    }
}
