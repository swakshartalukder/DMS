<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;
use App\Models\Buyer;
use App\Http\Controllers\Session;

class MainController extends Controller
{


	public	function home(Request $request)
    {
        if ($request->session()->get('LoggedUser')=="") {
            return redirect('/auth/login');
        }
    	else{
            return view('home');
        }
    }

    public	function bhome(Request $request)
    {
        if ($request->session()->get('LoggedUser1')=="") {
            return redirect('/auth/blogin');
        }
    	else{
            return view('bhome');
        }
    }

    public	function daily()
    {
    	return view('auth.daily');
    }

    public	function report()
    {
    	return view('auth.report');
    }

    public	function calc()
    {
    	return view('auth.calc');
    }

	public  function login()
    {
    	return view('auth.login');
    }

    public  function blogin()
    {
    	return view('auth.blogin');
    }

    public  function buyer()
    {
    	return view('buyer');
    }

    public function bsignup()
    {
    	return view('auth.bsignup');
    }

	public function signup()
    {
    	return view('auth.signup');
    }

	function save(Request $request){

        //Validate requests
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:admins',
            'password'=>'required|min:5|max:12'
        ]);

         //Insert data into database
         $admin = new Admin;
         $admin->name = $request->name;
         $admin->email = $request->email;
         $admin->password = Hash::make($request->password);
         $save = $admin->save();

         if($save){
            return back()->with('success','New User has been successfuly added to database');
            //return redirect('home');
         }else{
             return back()->with('fail','Something went wrong, try again later');
         }
    }

    function check(Request $request){
        $request->validate([
             'email'=>'required|email',
             'password'=>'required|min:5|max:12'
        ]);

        $userInfo = Admin::where('email','=', $request->email)->first();
        if(!$userInfo || !Hash::check($request->password, $userInfo->password))
        {
            return redirect('auth.login');
        }
        else{
            $request->session()->put('LoggedUser',$userInfo);
            return redirect('home');
        }
    }

    function bsave(Request $request){

        //Validate requests
        $request->validate([
            'bname'=>'required',
            'bemail'=>'required|email|unique:buyers',
            'bpassword'=>'required|min:5|max:12'
        ]);

         //Insert data into database
         $buyer = new Buyer;
         $buyer->bname = $request->bname;
         $buyer->bemail = $request->bemail;
         $buyer->bpassword = Hash::make($request->bpassword);
         $save = $buyer->save();

         if($save){
            return back()->with('success','New User has been successfuly added to database');
            //return redirect('home');
         }else{
             return back()->with('fail','Something went wrong, try again later');
         }
    }

    function bcheck(Request $request){
        //Validate requests
        $request->validate([
             'bemail'=>'required|email',
             'bpassword'=>'required|min:5|max:12'
        ]);

        $userInfo = Buyer::where('bemail','=', $request->bemail)->first();

        if(!$userInfo){
            return back()->with('fail','We do not recognize your email address');
        }else{
            //check password
            if(Hash::check($request->bpassword, $userInfo->bpassword)){
                $request->session()->put('LoggedUser1', $userInfo->id);
                return redirect('bhome');

            }else{
                return back()->with('fail','Incorrect password');
            }
        }
    }

    function logout(){
        if(session()->has('LoggedUser')){
            session()->pull('LoggedUser');
            return redirect('/auth/login');
        }
    }

    function blogout(){
        if(session()->has('LoggedUser1')){
            session()->pull('LoggedUser1');
            return redirect('/auth/blogin');
        }
    }



}
