<?php


namespace App\Http\Controllers\Manager\Trite;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Ramsey\Uuid\Uuid;

trait MenuTrite
{
    public function menuindex($locale = 'ka')
    {
        App::setLocale($locale);
        $menu = $this->MenuRepositori->whereHas('translations', function ($query) use ($locale) {
            $query
                ->where('locale', $locale);
        })->get();
        return view('admin.page.menu', compact('menu', 'locale'));
    }

    public function addmenu($locale = 'ka', Request $request)
    {
        App::setLocale($locale);
        $aboutMenu = $this->MenuRepositori->whereNull('menu_id')->whereHas('translations', function ($query) use ($locale) {
            $query
                ->where('locale', $locale);
        })->where('active', 1)->get();
        if ($request->method() == 'POST') {
            $validatedData = $request->validate([
                'title' => 'required|max:255',
                'sort' => 'required|numeric',
            ],
                [
                    'title.required' => 'გთხოვთ შეავსოთ',
                    'title.max' => 'მაქსიმალური სირძე 255',
                    'sort.required' => 'გთხოვთ შეავსოთ',
                    'sort.numeric' => 'შეიყვანეთ ციფრები',
                ]);
                $data = [
                    'uuid' => Uuid::uuid6(),
                    'type' => $request->type,
                    'active' => $request->active == 'on' ? 1 : 0,
                    'arqive' => 0,
                    'sort' => $validatedData['sort'],
                    'menu_id' => $request->menu_id > 0 ? $request->menu_id : null ,
                    $locale => ['title' => $validatedData['title']]
                ];

            $add_menu = $this->MenuRepositori->create($data);
        }
        return view('admin.page.menu.add', compact('aboutMenu', 'locale'));
    }

    public function editmenu($postid = 0, $locale = 'ka', Request $request)
    {
        App::setLocale($locale);
        $aboutMenu = $this->MenuRepositori->whereNull('menu_id')->whereHas('translations', function ($query) use ($locale) {
            $query
                ->where('locale', $locale);
        })->where('active', 1)->get();
        if (intval($postid) > 0) {
            $menuedit = $this->MenuRepositori->findOrFail($postid);
            if ($request->method() == 'POST') {
                $validatedData = $request->validate([
                    'title' => 'required|max:255',
                    'sort' => 'required|numeric',
                ],
                    [
                        'title.required' => 'გთხოვთ შეავსოთ',
                        'title.max' => 'მაქსიმალური სირძე 255',
                        'sort.required' => 'გთხოვთ შეავსოთ',
                        'sort.numeric' => 'შეიყვანეთ ციფრები',
                    ]);
                $data = [
                    'uuid' => Uuid::uuid6(),
                    'type' => $request->type,
                    'active' => $request->active == 'on' ? 1 : 0,
                    'arqive' => 0,
                    'sort' => $validatedData['sort'],
                    'menu_id' => $request->menu_id > 0 ? $request->menu_id : null ,
                    $locale => ['title' => $validatedData['title']]
                ];
                $edit_menu = $this->MenuRepositori->updateOrCreate($postid > 0 ? ['id' => $postid] : ['id' => null],$data);
                if(isset($edit_menu->id)){
                    return redirect(route('admin.menu',['locale'=>$locale]));
                }
            }
            return view('admin.page.menu.edit', compact('postid', 'locale', 'menuedit', 'aboutMenu'));
        } else {
            return view('admin.page.menu.add', compact('aboutMenu', 'locale'));
        }

    }

    public function deletemenu($postid = 0, $locale = 'ka'){
        $delete_menuid = $this->MenuRepositori->findOrFail($postid);
        $this->MenuToAnyReoisitirue->where('menu_uuid','=',$delete_menuid->uuid)->delete();
//        dd($delete_menuid->id);
        $delete_menu = $this->MenuRepositori->where('id','=',$delete_menuid->id)->delete();;
        if($delete_menu){
            return redirect(route('admin.menu',['locale'=>$locale]));
        }
    }
}
