<?php

namespace App\Components;
use App\Company as Company_principal;
use Illuminate\Support\Facades\Auth;

class Company
{

    public function getInfo()
    {
        //return Company_principal::find(Auth::user()->company_id);
        return Auth::user()->company;
    }
}
