<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ChangePasswordController extends Controller
{
    public function passwordChange()
    {
        return view('auth.passwordsetting');
    }
    public function passwordUpdate(Request $request)
    {

    }
}
