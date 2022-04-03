<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ContactController extends Controller
{


    public	function contact(Request $request)
    {
        if ($request->session()->get('LoggedUser')=="") {
            return redirect('/auth/login');
        }
    	else{
            $contact = Contact::all();
        return view('auth.contact', compact('contact'));
        }
    }

    public	function create(Request $request)
    {
        if ($request->session()->get('LoggedUser')=="") {
            return redirect('/auth/login');
        }
    	else{
            return view('auth.create_contact');
        }
    }

    public	function store(Request $request)
    {

        $contact= new Contact;
        $contact->name = $request->input('name');
        $contact->phone = $request->input('phone');
        $contact->location = $request->input('location');
        $contact->designation = $request->input('designation');
        $contact->company_name = $request->input('company_name');


        if($request->hasfile('user_img'))
        {
            $file = $request->file('user_img');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/contacts/', $filename);
            $contact->user_img = $filename;

    }
    $contact->save();
        return redirect('/contact');

    }

    public	function edit($id, Request $request)
    {
        if ($request->session()->get('LoggedUser')=="") {
            return redirect('/auth/login');
        }
    	else{
            $contact= Contact::find($id);
        return view('auth.edit_contact',compact('contact'));
        }
    }

    public function update(Request $request, $id)
    {
        $contact = Contact::find($id);
        $contact->name = $request->input('name');
        $contact->phone = $request->input('phone');
        $contact->location = $request->input('location');
        $contact->designation = $request->input('designation');
        $contact->company_name = $request->input('company_name');


        if($request->hasfile('user_img'))
        {
            $destination = 'uploads/contacts/'.$contact->user_img;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $file = $request->file('user_img');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/contacts/', $filename);
            $contact->user_img = $filename;

        }
    $contact->update();
        return redirect('/contact');
    }

    public function delete($id)
    {
        $contact = contact::find($id);
        $destination = 'uploads/contacts/'.$contact->user_img;
        if(File::exists($destination))
        {
            File::delete($destination);
        }
        $contact->delete();
        return redirect('/contact');
    }







}

