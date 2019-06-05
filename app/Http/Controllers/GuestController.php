<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\App;


class GuestController extends Controller
{
    public function index()
    {
        return view('welcome.profile.show');
    }
    public function update(Request $request)
    {
        // return $request;
        $user = User::findOrFail($request->id);
        $user->name  = $request->name;
        $user->email = $request->email;
        if($user->save())
        {
            return back()->with('success','Datos actualizados correctamente');
        } else
        {
            return back()->with('error','Algo salió mal');
        }



    }

    public function update_password(Request $request)
    {
        $user = User::findOrFail($request->id);
        $password = password_verify($request->password, $user->password);
    

        if(!$password)
        {
            return back()->with('error','La contraseña actual es invalida');
        }
        $new_password  = $request->new_password === $request->confirmation;

        if($new_password == false)
        {
            return back()->with('error','La nueva contraseña no coincide con la confirmación');
        }

        if ($user && $password)
        {
            $user->password = app('hash')->make($request->new_password);
            $user->save();

            return back()->with('success','Contraseña actualizada correctamente');
            
        }
    }

}
