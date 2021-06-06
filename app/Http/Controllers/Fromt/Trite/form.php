<?php


namespace App\Http\Controllers\Fromt\Trite;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Mail;

trait form
{
    public function special($locale = 'ka', $menuid = 0, Request $request)
    {
        App::setLocale($locale);
        view()->share('locale',$locale);
        $menuMtav = $this->MenuRepositori->whereHas('translations', function ($query) use ($locale) {
            $query
                ->where('locale', $locale);
        })->where('active', '=', 1)->whereNull('menu_id')->orderBy('sort' ,'ASC')->get();
        $menuDam = $this->MenuRepositori->whereHas('translations', function ($query) use ($locale) {
            $query
                ->where('locale', $locale);
        })->where('active', '=', 1)->whereNotNull('menu_id')->get();

        if ($request->method() == 'POST') {

            $validData = $request->validate([
                'fullname' => 'required',
                'address' => 'required',
                'affilation' => 'required',
                'currentposition' => 'required',
                'email' => 'required',
                'presentation' => 'required',
                'planguage' => 'required',
                'member' => 'required',
//                'specify' => 'required',
                'words' => 'required'
            ]);
            $validfile = $request->validate([
                'individual' => 'required'
            ]);
            $data = $validData;
            $files = $validfile['individual'];
//dd($data);
           Mail::send('emails.myTestMail', compact('data'), function ($message) use ($data, $files) {
                $message->from('icla-congress2022@tsu.ge');
                $message->to('icla-congress2022@tsu.ge')->subject('Special Session Proposal');

                if (isset($files) && !empty($files->getClientOriginalName())) {
                    $message->attach($files->getRealPath(), array(
                            'as' => $files->getClientOriginalName(), // If you want you can chnage original name to custom name
                            'mime' => $files->getMimeType())
                    );
                }
            });
            view()->share('success',1);
        }

        return view('web.page.forms.special', compact('menuMtav', 'menuDam', 'locale', 'menuid'));
    }

    public function individual($locale = 'ka', $menuid = 0, Request $request)
    {
        App::setLocale($locale);
        view()->share('locale',$locale);
        $menuMtav = $this->MenuRepositori->whereHas('translations', function ($query) use ($locale) {
            $query
                ->where('locale', $locale);
        })->where('active', '=', 1)->whereNull('menu_id')->orderBy('sort' ,'ASC')->get();
        $menuDam = $this->MenuRepositori->whereHas('translations', function ($query) use ($locale) {
            $query
                ->where('locale', $locale);
        })->where('active', '=', 1)->whereNotNull('menu_id')->get();

        if ($request->method() == 'POST') {
            $validData = $request->validate([
                'fullname' => 'required',
                'address' => 'required',
                'affilation' => 'required',
                'currentposition' => 'required',
                'email' => 'required',
                'presentation' => 'required',
                'member' => 'required',
//                'specify' => 'required',
                'words' => 'required',
                'leng' => 'required'
            ]);
            $validfile = $request->validate([
                'individual' => 'required'
            ]);
            $data = $request->input();
            $files = $validfile['individual'];

            Mail::send('emails.myTestMail', compact('data'), function ($message) use ($data, $files) {
                $message->from('icla-congress2022@tsu.ge');
                $message->to('icla-congress2022@tsu.ge')->subject('Individual Proposal');

                if (isset($files) && !empty($files->getClientOriginalName())) {
                    $message->attach($files->getRealPath(), array(
                            'as' => $files->getClientOriginalName(), // If you want you can chnage original name to custom name
                            'mime' => $files->getMimeType())
                    );
                }
            });
            view()->share('success',1);
        }

        return view('web.page.forms.individual', compact('menuMtav', 'menuDam', 'locale', 'menuid'));
    }

    public function group($locale = 'ka', $menuid = 0, Request $request)
    {
        App::setLocale($locale);
        view()->share('locale',$locale);
        $menuMtav = $this->MenuRepositori->whereHas('translations', function ($query) use ($locale) {
            $query
                ->where('locale', $locale);
        })->where('active', '=', 1)->whereNull('menu_id')->orderBy('sort' ,'ASC')->get();
        $menuDam = $this->MenuRepositori->whereHas('translations', function ($query) use ($locale) {
            $query
                ->where('locale', $locale);
        })->where('active', '=', 1)->whereNotNull('menu_id')->get();

        if ($request->method() == 'POST') {
            $validData = $request->validate([
                'fullname' => 'required',
                'address' => 'required',
                'affilation' => 'required',
                'currentposition' => 'required',
                'email' => 'required',
                'group' => 'required',
                'organization' => 'required',
                'inviting' => 'required',
                'approximately' => 'required',
                'working' => 'required',
                'member' => 'required',
//                'specify' => 'required',
                'open' => 'required'
            ]);
            $validfile = $request->validate([
                'individual' => 'required'
            ]);
            $data = $request->input();
            $files = $validfile['individual'];

            Mail::send('emails.myTestMail', compact('data'), function ($message) use ($data, $files) {
                $message->from('icla-congress2022@tsu.ge');
                $message->to('icla-congress2022@tsu.ge')->subject('Group Proposal');

                if (isset($files) && !empty($files->getClientOriginalName())) {
                    $message->attach($files->getRealPath(), array(
                            'as' => $files->getClientOriginalName(), // If you want you can chnage original name to custom name
                            'mime' => $files->getMimeType())
                    );
                }
            });
            view()->share('success',1);
        }

        return view('web.page.forms.group', compact('menuMtav', 'menuDam', 'locale', 'menuid'));
    }

}
