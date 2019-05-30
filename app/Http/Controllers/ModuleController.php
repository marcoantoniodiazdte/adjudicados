<?php

namespace App\Http\Controllers;

use App\Module;
use Illuminate\Http\Request;

class ModuleController extends Controller
{
    public function __construct()
    {
        $this->middleware('role:superadmin');
        $this->middleware('auth:admin');
    }

    public function index()
    {
        $modules = Module::all();
        return view('modules.list',compact('modules'));
    }

    public function create()
    {

    }


    public function store(Request $request)
    {

    }


    public function show(Module $module)
    {

    }


    public function edit(Module $module)
    {

    }


    public function update(Request $request, Module $module)
    {

    }


    public function destroy(Module $module)
    {

    }


}
