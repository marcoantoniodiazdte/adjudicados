<?php


namespace App\Http\View\Composers;
use App\Permission;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;


class ModulesComposer
{

    protected $modules = [];

    public function __construct()
    {


        //  $this->modules =  Auth::user()->inmobiliaria()->with('modules')->get()->pluck('modules')->collapse();


        $this->modules = Auth::user()->
            roles()->with('permissions.module')
           ->get()
           ->pluck('permissions')
           ->collapse()
           ->pluck('module')
           ->unique('id');


    }


    public function compose(View $view)
    {
        $view->with('modulos', $this->modules);
    }


}