<?php
namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class SettingController extends Controller
{



    public	function setting()
    {
    	return view('auth.setting');
    }
    public	function profile()
    {
    	$profile = Profile::all();
        return view('auth.profile', compact('profile'));
    }

    public	function create()
    {
    	return view('auth.create_profile');
    }



    
    public	function store(Request $request)
    {
    	    	
        $profile= new Profile;
        $profile->fname = $request->input('fname');
        $profile->lname = $request->input('lname');
        $profile->company = $request->input('company');
        $profile->email = $request->input('email');
        

        if($request->hasfile('profile_img'))
        {
            $file = $request->file('profile_img');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/profiles/', $filename);
            $profile->profile_img = $filename;

    }
    $profile->save();
    return redirect('profile')->with('status','Profile Added Successfully');
    }


    public	function edit($id)
    {
    	$profile= Profile::find($id);
        return view('auth.edit_profile',compact('profile'));
    }


    public function update(Request $request, $id)
    {
        $profile = Profile::find($id);
        $profile->fname = $request->input('fname');
        $profile->lname = $request->input('lname');
        $profile->company = $request->input('company');
        $profile->email = $request->input('email');



        if($request->hasfile('profile_img'))
        {
            $destination = 'uploads/profiles/'.$profile->profile_img;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $file = $request->file('profile_img');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/profiles/', $filename);
            $profile->profile_img = $filename;

        }
    $profile->update();
        return redirect('profile')->with('status','Profile Updated Successfully');

    }



}
