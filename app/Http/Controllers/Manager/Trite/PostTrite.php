<?php


namespace App\Http\Controllers\Manager\Trite;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Ramsey\Uuid\Uuid;
use Storage;
use Str;

trait PostTrite
{
    public function postindex($locale = 'ka')
    {
        App::setLocale($locale);
        $post = $this->PostRepositori->whereHas('translations', function ($query) use ($locale) {
            $query
                ->where('locale', $locale);
        })->get();
        return view('admin.page.post', compact('post', 'locale'));
    }

    public function addpost($locale = 'ka', Request $request)
    {
        App::setLocale($locale);
        $aboutMenu = $this->MenuRepositori->whereHas('translations', function ($query) use ($locale) {
            $query
                ->where('locale', $locale);
        })->where('active', 1)->get();
        if ($request->method() == 'POST') {
            $validData = $request->validate([
                'title' => 'required|max:255',
                'sort' => 'required|numeric',
                'desc' => 'required',
                'img' => 'image|mimes:jpeg,png,jpg,gif,svg|max:5012'
            ],
                [
                    'title.required' => 'გთხოვთ შეავსოთ',
                    'title.max' => 'მაქსიმალური სირძე 255',
                    'sort.required' => 'გთხოვთ შეავსოთ',
                    'desc.required' => 'გთხოვთ შეავსოთ',
                    'sort.numeric' => 'შეიყვანეთ ციფრები',
                    'img.image' => 'ატვირთეთ (jpeg,png,jpg,gif,svg)',
                    'img.max' => '5მბ მქსიმალური ზომა',
                ]);
                if(isset($validData['img']) && !empty($validData['img'])) {
                    $imageName = time() . '.' . $validData['img']->extension();
                    $validData['img']->move(public_path('images/post'), $imageName);
                }
            $menuuuid = $this->MenuRepositori->findOrFail($request->menu_id);

            $data = [
                'uuid' => Uuid::uuid6(),
                'type' => $request->type,
                'active' => $request->active == 'on' ? 1 : 0,
                'mtav' => $request->mtav == 'on' ? 1 : 0,
                'arqive' => 0,
                'sort' => $validData['sort'],
                $locale => [
                    'title' => $validData['title'],
                    'desc' => $validData['desc'],
                    'text' => isset($request->text) && !empty($request->text) ? $request->text : null,
                    'img' => isset($imageName) && !empty($imageName) ? $imageName : null,
                ]
            ];
            $add_menu = $this->PostRepositori->create($data);
            $menutoany = [
                'menu_uuid'=>$menuuuid->uuid,
                'row_uuid'=>$add_menu->uuid
            ];
            $this->MenuToAnyReoisitirue->create($menutoany);
        }

        return view('admin.page.post.add', compact('aboutMenu', 'locale'));
    }

    public function editpost($postid = 0, $locale = 'ka', Request $request)
    {
        App::setLocale($locale);
        $aboutMenu = $this->MenuRepositori->whereHas('translations', function ($query) use ($locale) {
            $query
                ->where('locale', $locale);
        })->where('active', 1)->get();
        $postEdit = $this->PostRepositori->findOrFail($postid);
        $menutoany = $this->MenuToAnyReoisitirue->where('row_uuid','=',$postEdit->uuid)->first();
        $menuedit = $this->MenuRepositori->where('uuid','=',isset($menutoany->menu_uuid) ? $menutoany->menu_uuid : null)->first();
        if ($request->method() == 'POST') {
            $validData = $request->validate([
                'title' => 'required|max:255',
                'sort' => 'required|numeric',
                'desc' => 'required',
                'img' => 'image|mimes:jpeg,png,jpg,gif,svg|max:5012'
            ],
                [
                    'title.required' => 'გთხოვთ შეავსოთ',
                    'title.max' => 'მაქსიმალური სირძე 255',
                    'sort.required' => 'გთხოვთ შეავსოთ',
                    'desc.required' => 'გთხოვთ შეავსოთ',
                    'sort.numeric' => 'შეიყვანეთ ციფრები',
                    'img.image' => 'ატვირთეთ (jpeg,png,jpg,gif,svg)',
                    'img.max' => '5მბ მქსიმალური ზომა',
                ]);
            if(isset($validData['img']) && !empty($validData['img'])) {
                $imageName = time() . '.' . $validData['img']->extension();
                $validData['img']->move(public_path('images/post'), $imageName);
            }
            $menuuuid = $this->MenuRepositori->findOrFail($request->menu_id);

            $data = [
                'uuid' => Uuid::uuid6(),
                'type' => $request->type,
                'active' => $request->active == 'on' ? 1 : 0,
                'mtav' => $request->mtav == 'on' ? 1 : 0,
                'arqive' => 0,
                'sort' => $validData['sort'],
                $locale => [
                    'title' => $validData['title'],
                    'desc' => $validData['desc'],
                    'text' => isset($request->text) && !empty($request->text) ? $request->text : null,
                    'img' => isset($imageName) && !empty($imageName) ? $imageName : $postEdit->img,
                ]
            ];
            $add_menu = $this->PostRepositori->updateOrCreate($postid > 0 ? ['id' => $postid] : ['id' => null],$data);
            $menutoany = [
                'menu_uuid'=>$menuuuid->uuid,
                'row_uuid'=>$add_menu->uuid
            ];
            $this->MenuToAnyReoisitirue->updateOrCreate(isset($menutoany->id) && $menutoany->id > 0 ? ['id' => $menutoany->id] : ['id' => null],$menutoany);
            return back();
        }
        return view('admin.page.post.edit', compact('aboutMenu', 'locale','postEdit','menuedit'));
    }

    public function deletepost($postid = 0, $locale = 'ka')
    {
        $delete_postid = $this->PostRepositori->findOrFail($postid);
        $this->MenuToAnyReoisitirue->where('row_uuid','=',$delete_postid->uuid)->delete();
        $delete_post = $this->PostRepositori->where('id','=',$delete_postid->id)->delete();
        if($delete_post){
            return redirect(route('admin.post',['locale'=>$locale]));
        }
    }
}
