<?php

namespace App\Http\Controllers\AdminControllers;

use App\Models\About;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;

class AdminSettingController extends Controller
{
    public function edit()
    {
        $allabout = About::find(1);

        return view('admin_dashboard.about.edit', compact('allabout'));
    }

    public function update(Request $request)
    {

        $about_id = 1;

        $file1 = $request->file('about_image');

        $updater = [
            'about_text' => $request->about_text,
            'about_first' => $request->about_first,
            'about_second' => $request->about_second,
            'about_third' => $request->about_third,
            'about_fourth' => $request->about_fourth,
        ];

        $filesToUpload = [];

        
        if ($file1 != null) {
            $filesToUpload += ['about_image' => 'storage/setting/' . $file1->hashName()];
        }

        
        About::findOrFail($about_id)->update($updater += $filesToUpload);



        if (request()->has('about_image')) {

            $about_image = request()->file('about_image');
            $path = $about_image->store('setting', 'public');
            $validated['about_image'] = $path;
        }


     
        //sweetalert
        Alert::success('success', 'About updated successfully');
        return redirect()->route('admin.setting.edit')->with('success', 'Setting has been Updated.');
    }
}
