<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;


class CompanyController extends Controller
{

    public	function company(Request $request)
    {
        if ($request->session()->get('LoggedUser')=="") {
            return redirect('/auth/login');
        }
    	else{
            $company = Company::all();
        return view('auth.company', compact('company'));
        }
    }

    public	function create(Request $request)
    {
        if ($request->session()->get('LoggedUser')=="") {
            return redirect('/auth/login');
        }
    	else{
            return view('auth.create_company');
        }

    }

    public	function store(Request $request)
    {

        $company= new Company;
        $company->name = $request->input('name');
        $company->phone = $request->input('phone');
        $company->location = $request->input('location');
        $company->email = $request->input('email');



        if($request->hasfile('company_img'))
        {
            $file = $request->file('company_img');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/companys/', $filename);
            $company->company_img = $filename;

    }
    $company->save();
        return redirect('/company');

    }

    public	function edit($id, Request $request)
    {
        if ($request->session()->get('LoggedUser')=="") {
            return redirect('/auth/login');
        }
    	else{
            $company= Company::find($id);
        return view('auth.edit_company',compact('company'));
        }
    }

    function detail1($id, Request $request)
    {
        if ($request->session()->get('LoggedUser')=="") {
            return redirect('/auth/login');
        }
    	else{
            $data =Company::find($id);
        return view('auth.detail1',['company'=>$data]);
        }
    }

    public function update(Request $request, $id)
    {
        $company = Company::find($id);
        $company->name = $request->input('name');
        $company->phone = $request->input('phone');
        $company->location = $request->input('location');
        $company->email = $request->input('email');



        if($request->hasfile('company_img'))
        {
            $destination = 'uploads/companys/'.$company->company_img;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $file = $request->file('company_img');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/companys/', $filename);
            $company->company_img = $filename;

        }
    $company->update();
        return redirect('company');

    }

    public function delete($id)
    {
        $company = Company::find($id);
        $destination = 'uploads/companys/'.$company->company_img;
        if(File::exists($destination))
        {
            File::delete($destination);
        }
        $company->delete();
        return redirect('company');
    }





}
