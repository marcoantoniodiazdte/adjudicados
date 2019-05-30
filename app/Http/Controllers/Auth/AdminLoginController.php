<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class AdminLoginController extends Controller
{
    use AuthenticatesUsers;


    protected $redirectTo = '/admin/dashboard';


    public function __construct()
    {
        $this->middleware('guest:admin');
    }



    public function showLoginForm()
    {
        return view('crm.auth.admin_login');
    }


    protected function guard()
    {
        return Auth::guard('admin');
    }




}
